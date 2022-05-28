<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GameState;
use App\Models\LetterStatus;
use Illuminate\Contracts\View\View;

class Game extends Component
{
    public array $guesses = [];
    public array $keyStatuses = [];
    public ?string $state = null;

    protected string $answer = 'world';
    protected $listeners = ['submitGuess'];

    public function submitGuess(array $guess): void
    {
        if (count($this->guesses) >= 6 ) return;

        $answer = str_split($this->answer);

        if($guess === $answer) $this->state = GameState::WON->value;

        $this->guesses[] = collect($guess)->transform(function($letter, $index) use(&$answer) {
            if ($letter == $answer[$index]){
                $answer[$index] = null;

                $this->keyStatuses[$letter] = LetterStatus::CORRECT->value;

                return [
                    'letter' => $letter,
                    'status' => LetterStatus::CORRECT->value,
                ];
            }
            return $letter;
        })->transform(function($letter) use(&$answer) {
            if (is_array($letter)) return $letter;

            if (in_array($letter, $answer)){
                $answer[array_search($letter, $answer)] = null;

                if (!array_key_exists($letter, $this->keyStatuses) || $this->keyStatuses[$letter] != LetterStatus::CORRECT->value) $this->keyStatuses[$letter] = LetterStatus::PRESENT->value;

                return [
                    'letter' => $letter,
                    'status' => LetterStatus::PRESENT->value,
                ];
            }

            if (!array_key_exists($letter, $this->keyStatuses)) $this->keyStatuses[$letter] = LetterStatus::ABSENT->value;

            return [
                'letter' => $letter,
                'status' => LetterStatus::ABSENT->value,
            ];
        })->toArray();

        if ($this->lostGame()) $this->state = GameState::LOST->value;
    }

    public function render(): view
    {
        return view('livewire.game', ['answer' => $this->answer]);
    }

    private function lostGame(){
        return count($this->guesses) == 6 && $this->state != GameState::WON->value;
    }
}
