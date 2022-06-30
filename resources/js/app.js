import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import persist from '@alpinejs/persist';

window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.plugin(persist);

Alpine.data('currentGuess', () => ({
    guess: [],

    inputKey($key) {
        if ($key === 'Backspace') {
            this.guess.pop();
            return;
        }

        if ($key === 'Enter') {
            Livewire.emit('submitGuess', this.guess);
            return;
        }

        const validLetters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $key = $key.toLowerCase();
        if (validLetters.includes($key) && this.guess.length < 5) {
            this.guess.push($key);
        }
    },
}))

Alpine.data('stats', () => ({
    show: false,
    wordvelStats: $persist({
        currentStreak: 9,
        maxStreak: 0,
        inOne: 10,
        inTwo: 4,
        inThree: 1,
        inFour: 0,
        inFive: 19,
        inSix: 100,
        winPercentage: 0,
        gamesPlayed: 0,
        gamesWon: 134,
        averageGuesses: 0
    }),
}))

Alpine.store('darkMode', {
    init() {
        this.on = window.matchMedia('(prefers-color-scheme: dark)').matches
    },

    on: false,

    toggle() {
        this.on = ! this.on
    }
})
Alpine.start();
