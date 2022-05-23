@props(
    'guess'
)
<div class="flex flex-row space-x-2 bg-red-500">
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300">$guess[0]['letter']</div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300">$guess[1]['letter']</div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300">$guess[2]['letter']</div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300">$guess[3]['letter']</div>
    <div class="flex items-center justify-center w-12 h-12 text-4xl font-semibold uppercase border border-gray-300">$guess[4]['letter']</div>
</div>
