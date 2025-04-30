<div class="py-20">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-orange-500 mb-10">
            Свържете се с нас
        </h1>

        <form wire:submit.prevent="send" class="bg-white p-8 rounded-2xl shadow-lg space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" wire:model.defer="fullName" placeholder="Вашето име"
                    class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500">
                @error('fullName')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <input type="email" wire:model.defer="emailAddress" placeholder="Вашият имейл"
                    class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500">
                @error('emailAddress')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <input type="text" wire:model.defer="subject" placeholder="Относно..."
                class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500">
            @error('subject')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <textarea wire:model.defer="message" rows="5" placeholder="Вашето съобщение..."
                class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500"></textarea>
            @error('message')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <button type="submit"
                class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-lg transition hover:scale-105">
                Изпрати съобщение
            </button>

            @if ($success)
                <div class="mt-6 text-green-600 font-semibold animate-pulse">
                    Благодарим Ви! Съобщението е изпратено успешно.
                </div>
            @endif
        </form>
    </div>

    <div class="max-w-6xl mx-auto mt-16 px-6">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11835.037029215568!2d24.7987875!3d42.1340368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd193468a68b9%3A0x83655cded4bb9e6e!2sDOCTORS%20Gonovski!5e0!3m2!1sbg!2sbg!4v1691823121289!5m2!1sbg!2sbg"
            width="100%" height="450" class="rounded-2xl shadow-md" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
