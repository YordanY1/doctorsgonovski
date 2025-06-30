<div>
    @if ($show)
        <div class="fixed bottom-6 inset-x-4 md:inset-x-0 md:bottom-10 z-50">
            <div
                class="bg-white shadow-lg rounded-xl p-6 max-w-3xl mx-auto flex flex-col md:flex-row items-center gap-4 border border-orange-200">
                <p class="text-gray-700 text-sm md:text-base flex-1">
                    Използваме бисквитки, за да подобрим вашето потребителско изживяване.
                    С използването на сайта, Вие се съгласявате с нашата <a wire:navigate href="/terms-of-use"
                        class="text-orange-500 underline">Политика за бисквитки</a>.
                </p>
                <div class="flex gap-2">
                    <button wire:click="accept"
                        class="bg-orange-500 hover:bg-orange-600 text-white text-sm px-4 py-2 rounded-lg transition">
                        Приемам
                    </button>
                    <button wire:click="decline"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm px-4 py-2 rounded-lg transition">
                        Отказвам
                    </button>
                </div>
            </div>
        </div>
    @endif

</div>
