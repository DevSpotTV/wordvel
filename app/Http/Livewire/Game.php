<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class Game extends Component
{
    public array $guesses = [];

    protected string $answer = 'world';
    protected $listeners = ['submitGuess'];

    public function submitGuess(array $guess): void
    {
        if (count($this->guesses) >= 6 ) return;

        $answer = str_split($this->answer);
        $this->guesses[] = collect($guess)->transform(function($letter, $index) use(&$answer) {
            if ($letter == $answer[$index]){
                $answer[$index] = null;
                return [
                    'letter' => $letter,
                    'status' => 'correct'
                ];
            }
            return $letter;
        })->transform(function($letter) use(&$answer) {
            if (is_array($letter)) return $letter;

            if (in_array($letter, $answer)){
                $answer[array_search($letter, $answer)] = null;
                return [
                    'letter' => $letter,
                    'status' => 'present'
                ];
            }

            return [
                'letter' => $letter,
                'status' => 'absent'
            ];
        })->toArray();
    }

    public function render(): view
    {
        return view('livewire.game');
    }
}
