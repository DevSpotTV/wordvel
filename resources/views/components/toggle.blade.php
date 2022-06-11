@props([
    'name',
    'label'
])
<div
    {{ $attributes }}
    class="flex items-center justify-between"
    x-id="['toggle-label']"
>
    <input type="hidden" :name="$name" :value="value">

    <!-- Label -->
    <label
        @click="$refs.toggle.click(); $refs.toggle.focus()"
        :id="$id('toggle-label')"
        class="text-gray-900 transition-colors"
    >
        {{ $label }}
    </label>

    <!-- Button -->
    <button
        x-ref="toggle"
        @click="value = ! value"
        type="button"
        role="switch"
        :aria-checked="value"
        :aria-labelledby="$id('toggle-label')"
        :class="value ? 'bg-gray-900 border-2 border-white' : 'bg-white border-2 border-gray-900'"
        class="relative inline-flex px-0 py-1 ml-4 scale-75 rounded-full w-14"
    >
        <span
            :class="value ? 'bg-white translate-x-6' : 'bg-gray-900 translate-x-1'"
            class="w-6 h-6 transition rounded-full"
            aria-hidden="true"
        ></span>
    </button>
</div>
