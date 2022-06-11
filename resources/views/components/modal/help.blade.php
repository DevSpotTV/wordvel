<x-modal x-data="{ show: false}" x-on:showhelp.window="show = true" wire:key='help-modal'>
    <h2 class="pb-3 text-lg font-bold text-center uppercase" :id="$id('modal-title')" wire:key='help-title'>How To Play</h2>

    <p class="pb-2 text-xs">Welcome to <strong>Wordvel</strong>, this game is a clone of the popular word guessing game Wordle. Just like Wordle, you have 6 guesses to figure out the word of the day.</p>
    <p class="pb-2 text-xs">Each guess must contain 5 letters and be a valid word. Use your device's keyboard or the provided on screen keyboard to type your guess then press Enter.</p>
    <p class="pb-2 text-xs">Just like in Wordle, <strong>Wordvel</strong> will highlight each letter in your guess depending on if it matches the word of the day. Just as shown below.</p>
    <hr class="my-2" />
    <strong class="pb-2">Examples</strong>
    <div class="flex flex-row my-2 space-x-2">
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400 correct">h</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">e</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">l</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">l</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">o</div>
    </div>
    <p class="pb-2 text-xs">The green highlight shows the letter <strong>H</strong> is in the correct place.</p>

    <div class="flex flex-row my-2 space-x-2">
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">w</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">o</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400 present">r</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">l</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">d</div>
    </div>
    <p class="pb-2 text-xs">Yellow means the letter <strong>R</strong> is in the word but not in that spot.</p>

    <div class="flex flex-row my-2 space-x-2">
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">c</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">o</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400 ">d</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400 absent">e</div>
        <div class="flex items-center justify-center w-10 h-10 text-2xl font-semibold uppercase border border-gray-400">r</div>
    </div>
    <p class="pb-2 text-xs">And gray means the letter <strong>E</strong> is not in the word at all.</p>

    <hr class="my-2" />
    <strong class="pb-2 text-xs text-center">A new word is avalible to solve everyday.</strong>
</x-modal>
