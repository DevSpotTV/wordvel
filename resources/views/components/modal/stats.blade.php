<x-modal x-data="{ show: false, wordvelStats: $persist({currentStreak: 0, maxStreak: 0, guessesOne: 0, winPercentage: 0, gamesPlayed: 0, gamesWon: 0, averageGuesses: 0})}" x-on:showstats.window="show = true" wire:key='stats-modal'>
    <h2 class="text-lg font-bold text-center uppercase" :id="$id('modal-title')" wire:key='stats-title'>Statistics</h2>

    <div class="flex justify-center py-4">
        <div class="grid justify-center w-1/2 grid-cols-4 gap-x-8 justify-items-center">
            <p class="text-3xl" x-text="wordvelStats.gamesPlayed"></p>
            <p class="text-3xl" x-text="wordvelStats.winPercentage"></p>
            <p class="text-3xl" x-text="wordvelStats.currentStreak"></p>
            <p class="text-3xl" x-text="wordvelStats.maxStreak"></p>

            <p class="text-xs text-center">Played</p>
            <p class="text-xs text-center">Win %</p>
            <p class="text-xs text-center">Current Streak</p>
            <p class="text-xs text-center">Max Streak</p>
        </div>
    </div>
    <h2 class="text-lg font-bold text-center uppercase" :id="$id('modal-title')">Guess Distribution</h2>
    <div class="space-y-2">
        <x-graph-bar guess="1" xyz="GuessesOne" />
        <x-graph-bar guess="2" />
        <x-graph-bar guess="3" />
        <x-graph-bar guess="4" />
        <x-graph-bar guess="5" />
        <x-graph-bar guess="6" />
    </div>
</x-modal>
