@props([
    'value',
    'width' => 'w-10',
    'keyStatuses',
])

<button
    x-data
    x-on:click="$dispatch('keyclick', '{{ $value }}')"
    type="button"
    @class([
            $width,
            'px-2',
            'py-4',
            'uppercase',
            $keyStatuses[$value] ?? 'bg-gray-300',
            'rounded-md',
            'text-center',
            'content-center',
        ])
>
@if ($slot->isNotEmpty())
    {{ $slot }}
@else
    {{ $value }}
@endif
</button>
