@props([
    'guess',
    'numGuesses',
    'percentage'
])
<div class="flex space-x-1">
    <div class="w-2">{{  $guess }}</div>
    <div class="px-3 py-1 text-xs font-bold text-right text-white align-middle bg-gray-500" @if($percentage > 7) style="width: {{ $percentage }}%;"  @endif>{{ $numGuesses }}</div>
</div>
