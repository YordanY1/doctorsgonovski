@props([
    'src' => 'null',
])

<div class="relative w-full h-[60vh] md:h-[90vh] overflow-hidden">
    <video
        class="absolute top-0 left-0 w-full h-full object-cover"
        autoplay
        muted
        loop
        playsinline
    >
        <source src="{{ asset($src) }}" type="video/mp4" />
        Вашият браузър не поддържа видео.
    </video>

    {{-- Тъмен overlay --}}
    <div class="absolute inset-0 bg-black/50 z-10"></div>

    {{-- Съдържание върху видеото --}}
    <div class="relative z-20 flex items-center justify-center h-full text-center text-white px-4">
        {{ $slot }}
    </div>
</div>
