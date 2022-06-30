@props([
    'label',
])
<div class="flex space-x-1">
    <div class="w-2">{{  $label }}</div>
    <div class="px-3 py-1 text-xs font-bold text-right text-white align-middle bg-gray-500" {{ $attributes }}></div>
</div>
