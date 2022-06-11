<div class="flex justify-center" {{ $attributes }}>
    <!-- Modal -->
    <div
        x-show="show"
        x-cloak
        x-on:keydown.escape.prevent.stop="show = false"
        role="dialog"
        aria-modal="true"
        x-id="['modal-title']"
        :aria-labelledby="$id('modal-title')"
        class="fixed inset-0 z-10 overflow-y-auto"
    >
        <!-- Overlay -->
        <div x-show="show" x-transition.opacity class="fixed inset-0 bg-gray-100 bg-opacity-50"></div>

        <!-- Panel -->
        <div
            x-show="show" x-transition
            x-on:click="show = false"
            class="relative flex items-center justify-center min-h-screen p-4"
        >
            <div
                x-on:click.stop
                x-trap.noscroll.inert="show"
                class="relative w-full max-w-md p-3 overflow-y-auto bg-white rounded-lg shadow-lg"
            >
                <div class="text-right">
                    <button type="button" x-on:click="show = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="px-9 pb-9">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
