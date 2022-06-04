<div x-data="{ open: false, currentStreak: $persist(0), maxStreak: $persist(0)}" x-on:showstats.window="open = true" class="flex justify-center">
    <!-- Modal -->
    <div
        x-show="open"
        x-cloak
        x-on:keydown.escape.prevent.stop="open = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-10 overflow-y-auto"
    >
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-gray-100 bg-opacity-50"></div>

        <!-- Panel -->
        <div
            x-show="open" x-transition
            x-on:click="open = false"
            class="relative flex items-center justify-center min-h-screen p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="open"
                class="relative w-full max-w-md p-3 overflow-y-auto bg-white rounded-lg shadow-lg"
            >
                <div class="text-right">
                    <button type="button" x-on:click="open = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="px-9 pb-9">
                    <!-- Title -->
                    <h2 class="text-lg font-bold text-center uppercase" :id="$id('modal-title')">Statistics</h2>
                    <!-- Content -->
                    <div class="flex justify-center py-4">
                        <div class="grid justify-center w-1/2 grid-cols-4 gap-x-8 justify-items-center">
                            <p class="text-3xl">3</p>
                            <p class="text-3xl">100</p>
                            <p class="text-3xl">3</p>
                            <p class="text-3xl">3</p>

                            <p class="text-xs text-center">Played</p>
                            <p class="text-xs text-center">Win %</p>
                            <p class="text-xs text-center">Current Streak</p>
                            <p class="text-xs text-center">Max Streak</p>
                        </div>
                    </div>
                    <h2 class="text-lg font-bold text-center uppercase" :id="$id('modal-title')">Guess Distribution</h2>
                    <div class="space-y-2">
                        <x-graph-bar guess="1" numGuesses="0" percentage="0" />
                        <x-graph-bar guess="2" numGuesses="1" percentage="33" />
                        <x-graph-bar guess="3" numGuesses="0" percentage="0" />
                        <x-graph-bar guess="4" numGuesses="2" percentage="67" />
                        <x-graph-bar guess="5" numGuesses="0" percentage="0" />
                        <x-graph-bar guess="6" numGuesses="0" percentage="0" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
