<x-modal x-data="{ show: false}" x-on:showsettings.window="show = true" wire:key='settings-modal'>
    <h2 class="pb-3 text-lg font-bold text-center uppercase" :id="$id('modal-title')" wire:key='help-title'>Settings</h2>

    <div class="flex flex-col py-3 border-b border-gray-300">
        <x-toggle name="hardMode" label="Hard Mode" x-data="{ value: @entangle('hardMode') }" />
        <p class="text-xs text-gray-500">Any revealed hints must be used in subsequent guesses.</p>
    </div>

    <div class="flex flex-col py-3 border-b border-gray-300">
        <x-toggle name="darkTheme" label="Dark Theme" x-data="{ value: false }" />
    </div>

    <div class="flex flex-col py-3 border-b border-gray-300">
        <div class="flex justify-between">
            <p class="text-gray-900 transition-colors">Wordvel Source</p>
            <a class="text-gray-500 underline" href="https://github.com/DevSpotTV/wordvel">Github</a>
        </div>
    </div>

    <div class="flex flex-col py-3 border-b border-gray-300">
        <div class="flex justify-between">
            <p class="text-gray-900 transition-colors">Building Wordvel</p>
            <a class="text-gray-500 underline" href="https://www.youtube.com/playlist?list=PLmozPw_80KYWy3Hxz05BAJPU0_e4Sj6OA">Youtube</a>
        </div>
    </div>
</x-modal>
