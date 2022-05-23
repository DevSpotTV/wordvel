import Alpine from 'alpinejs';
window.Alpine = Alpine;
document.addEventListener('alpine:init', () => {
    Alpine.data('currentGuess', () => ({
        guess: [],

        inputKey($key) {
            if ($key === 'Backspace') {
                this.guess.pop();
                return;
            }

            if ($key === 'Enter') {
                Livewire.emit('submitGuess', this.guess)
                return;
            }

            const validLetters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
            $key = $key.toLowerCase();
            if (validLetters.includes($key) && this.guess.length < 5) {
                this.guess.push($key);
            }
        },
    }))
})
Alpine.start();
