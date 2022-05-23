<div
    x-data="currentGuess"
    x-on:keyup.window.stop="inputKey($event.key)"
    class="flex flex-row space-x-2"
>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300" x-text="guess[0]"></div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300" x-text="guess[1]"></div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300" x-text="guess[2]"></div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300" x-text="guess[3]"></div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300" x-text="guess[4]"></div>
</div>
