@props(['name', 'title', 'img', 'phone', 'whatsapp', 'link'])

<div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col h-full">
    {{-- Image --}}
    <div class="relative">
        <img src="{{ asset($img) }}" alt="{{ $name }}"
            class="w-full h-72 sm:h-80 md:h-60 object-cover object-top" />

        {{-- Icons --}}
        <div class="absolute top-3 right-3 flex space-x-2">
            <a href="tel:{{ $phone }}"
                class="bg-white p-2 rounded-full text-orange-500 shadow hover:bg-orange-50 transition">
                <i class="fas fa-phone"></i>
            </a>
            <a href="https://wa.me/{{ $whatsapp }}"
                class="bg-white p-2 rounded-full text-green-500 shadow hover:bg-green-50 transition">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    {{-- Content --}}
    <div class="flex flex-col justify-between flex-1 p-4 text-center">
        <div>
            <p class="text-lg font-semibold text-gray-800 leading-tight">{{ $name }}</p>
            <span class="text-sm text-gray-500 mb-4 block">{{ $title }}</span>
        </div>
        <div class="mt-4">
            <a href="{{ $link }}" target="_blank">
                <button
                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md text-sm font-medium transition w-full">
                    Запази Час
                </button>
            </a>
        </div>
    </div>
</div>
