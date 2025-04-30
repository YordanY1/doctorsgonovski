@props([
    'name',
    'title',
    'img',
    'phone',
    'whatsapp',
    'link',
    'education',
    'qualifications' => [],
    'specializations' => [],
    'biographyPoints' => [],
    'biographyText' => null,
])

<div class="bg-white rounded-xl shadow-md overflow-hidden md:flex">
    {{-- Image --}}
    <div class="md:w-1/3 relative">
        <img src="{{ asset('images/' . $img) }}" alt="{{ $name }}" class="w-full h-full object-cover">

        <div class="absolute top-4 right-4 flex space-x-2">
            <a href="tel:{{ $phone }}"
                class="bg-white p-2 rounded-full text-orange-500 shadow hover:bg-orange-100 transition">
                <i class="fas fa-phone"></i>
            </a>
            <a href="https://wa.me/{{ $whatsapp }}"
                class="bg-white p-2 rounded-full text-green-500 shadow hover:bg-green-100 transition">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    {{-- Content --}}
    <div class="md:w-2/3 p-6 space-y-5">
        <h2 class="text-2xl font-bold text-gray-800">{{ $name }}</h2>
        <p class="text-orange-500 font-medium">{{ $title }}</p>

        {{-- Education --}}
        @if ($education)
            <div>
                <h3 class="font-semibold text-gray-700 mb-1">Образование</h3>
                <p class="text-gray-600">{{ $education }}</p>
            </div>
        @endif

        {{-- Qualifications --}}
        @if (!empty($qualifications))
            <div>
                <h3 class="font-semibold text-gray-700 mb-1">Квалификации</h3>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    @foreach ($qualifications as $q)
                        <li>{{ $q }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Specializations --}}
        @if (!empty($specializations))
            <div>
                <h3 class="font-semibold text-gray-700 mb-1">Специализации</h3>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    @foreach ($specializations as $s)
                        <li>{{ $s }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Biography Points --}}
        @if (!empty($biographyPoints))
            <div>
                <h3 class="font-semibold text-gray-700 mb-1">Биография</h3>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    @foreach ($biographyPoints as $b)
                        <li>{{ $b }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Biography Paragraph --}}
        @if ($biographyText)
            <div>
                <p class="text-gray-600">{{ $biographyText }}</p>
            </div>
        @endif

        {{-- Call-to-action --}}
        <a href="{{ $link }}" target="_blank">
            <button
                class="mt-4 bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold shadow transition">
                Запази час
            </button>
        </a>
    </div>
</div>
