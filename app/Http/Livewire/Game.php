<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GameState;
use App\Models\LetterStatus;
use Illuminate\Contracts\View\View;

class Game extends Component
{
    public bool $hardMode = false;
    public array $guesses = [];
    public array $keyStatuses = [];
    public ?string $state = null;

    protected string $answer = 'world';
    protected $listeners = ['submitGuess'];

    public function submitGuess(array $guess): void
    {
        if (count($this->guesses) >= 6 ) return;

        $answer = str_split($this->answer);

        if($guess === $answer) $this->state = GameState::WON;

        $this->guesses[] = collect($guess)->transform(function($letter, $index) use(&$answer) {
            if ($letter == $answer[$index]){
                $answer[$index] = null;

                $this->keyStatuses[$letter] = LetterStatus::CORRECT;

                return [
                    'letter' => $letter,
                    'status' => LetterStatus::CORRECT,
                ];
            }
            return $letter;
        })->transform(function($letter) use(&$answer) {
            if (is_array($letter)) return $letter;

            if (in_array($letter, $answer)){
                $answer[array_search($letter, $answer)] = null;

                if (!array_key_exists($letter, $this->keyStatuses) || $this->keyStatuses[$letter] != LetterStatus::CORRECT) $this->keyStatuses[$letter] = LetterStatus::PRESENT;

                return [
                    'letter' => $letter,
                    'status' => LetterStatus::PRESENT,
                ];
            }

            if (!array_key_exists($letter, $this->keyStatuses)) $this->keyStatuses[$letter] = LetterStatus::ABSENT;

            return [
                'letter' => $letter,
                'status' => LetterStatus::ABSENT,
            ];
        })->toArray();

        if ($this->lostGame()) $this->state = GameState::LOST;
    }

    public function render(): view
    {
        return view('livewire.game', ['answer' => $this->answer]);
    }

    private function lostGame(){
        return count($this->guesses) == 6 && $this->state != GameState::WON;
    }
}
