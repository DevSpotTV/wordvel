<div class="h-screen">
    <header class="flex items-center justify-between w-full p-2 border-b border-gray-300">
        <div>
            <button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        <div>
            <h1 class="text-4xl font-extrabold">Wordvel</h1>
        </div>
        <div>
            <button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </button>
            <button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </header>

    <div class="flex flex-col items-center justify-center h-full space-y-2">
        <div @class([
            'p-1',
            'my-4',
            'text-white',
            'uppercase',
            'bg-gray-500',
            'rounded-sm',
            'hidden' => is_null($state),
        ])>
            @if($state == \App\Models\GameState::LOST->value)
            {{ $answer }}
            @elseif($state == \App\Models\GameState::WON->value)
                genius
            @else
                Make A Guess
            @endif
        </div>

        @foreach($guesses as $guess)
            <x-row.past :guess=" $guess" />
        @endforeach

        @if(count($guesses) < 6)
            @if(is_null($state))
                <x-row.present />
            @else
                <x-row.future />
            @endif
        @endif

        @for ($i = count($guesses) + 2; $i <= 6; $i++)
            <x-row.future />
        @endfor

        @include('includes.keyboard', ['keyStatuses' => $keyStatuses])
    </div>
</div>
