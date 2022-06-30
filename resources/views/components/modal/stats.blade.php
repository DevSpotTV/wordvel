<x-modal x-data="stats" x-on:showstats.window="this.show = true" wire:key='stats-modal'>
    <h2 class="text-lg font-bold text-center uppercase" :id="$id('modal-title')" wire:key='stats-title'>Statistics</h2>

    <div class="flex justify-center py-4">
        <div class="grid justify-center w-1/2 grid-cols-4 gap-x-8 justify-items-center">
            <p class="text-3xl" x-text="this.wordvelStats.gamesPlayed"></p>
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
        <x-graph-bar label="1" x-text="wordvelStats.inOne" style="" />
        <x-graph-bar label="2" x-text="wordvelStats.inTwo" />
        <x-graph-bar label="3" x-text="wordvelStats.inThree" />
        <x-graph-bar label="4" x-text="wordvelStats.inFour" />
        <x-graph-bar label="5" x-text="wordvelStats.inFive" />
        <x-graph-bar label="6" x-text="wordvelStats.inSix" />
    </div>
</x-modal>
