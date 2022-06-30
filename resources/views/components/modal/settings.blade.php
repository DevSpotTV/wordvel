<x-modal x-data="{ show: false}" x-on:showsettings.window="show = true" wire:key='settings-modal'>
    <h2 class="pb-3 text-lg font-bold text-center uppercase" :id="$id('modal-title')" wire:key='help-title'>Settings</h2>

    <div class="flex flex-col py-3 border-b border-gray-300">
        <x-toggle name="hardMode" label="Hard Mode" x-data="{ value: @entangle('hardMode') }" />
        <p class="text-xs text-gray-500">Any revealed hints must be used in subsequent guesses.</p>
    </div>

    <div class="flex flex-col py-3 border-b border-gray-300">
        <div
            x-data
            name=""
            label="Dark Theme"
            class="flex items-center justify-between"
            x-id="['toggle-label']"
        >
            <input type="hidden" name="darkTheme" :value="$store.darkMode.on">

            <!-- Label -->
            <label
                @click="$refs.toggle.click(); $refs.toggle.focus()"
                :id="$id('toggle-label')"
                class="text-gray-900 transition-colors"
            >
                Dark Mode
            </label>

            <!-- Button -->
            <button
                x-ref="toggle"
                @click="$store.darkMode.toggle()"
                type="button"
                role="switch"
                :aria-checked="$store.darkMode.on"
                :aria-labelledby="$id('toggle-label')"
                :class="$store.darkMode.on ? 'bg-gray-900 border-2 border-white' : 'bg-white border-2 border-gray-900'"
                class="relative inline-flex px-0 py-1 ml-4 scale-75 rounded-full w-14"
            >
                <span
                    :class="$store.darkMode.on ? 'bg-white translate-x-6' : 'bg-gray-900 translate-x-1'"
                    class="w-6 h-6 transition rounded-full"
                    aria-hidden="true"
                ></span>
            </button>
        </div>
    </div>

    <div class="flex flex-col py-3 border-b border-gray-300 dark:">
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
