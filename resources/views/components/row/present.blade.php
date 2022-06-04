<div
    x-data="currentGuess"
    x-on:keyup.window.stop="inputKey($event.key)"
    x-on:keyclick.window.stop="inputKey($event.detail)"
    class="flex flex-row space-x-2"
>
    <div class="flex items-center justify-center text-4xl font-semibold uppercase border border-gray-400 w-14 h-14" x-text="guess[0]"></div>
    <div class="flex items-center justify-center text-4xl font-semibold uppercase border border-gray-400 w-14 h-14" x-text="guess[1]"></div>
    <div class="flex items-center justify-center text-4xl font-semibold uppercase border border-gray-400 w-14 h-14" x-text="guess[2]"></div>
    <div class="flex items-center justify-center text-4xl font-semibold uppercase border border-gray-400 w-14 h-14" x-text="guess[3]"></div>
    <div class="flex items-center justify-center text-4xl font-semibold uppercase border border-gray-400 w-14 h-14" x-text="guess[4]"></div>
</div>
