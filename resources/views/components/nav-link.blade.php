@props(['route', 'label', 'block' => false])

@php
    $isActive = Route::currentRouteName() === $route;
    $base = $block
        ? 'block w-full text-left'
        : 'inline-block';

    $classes = $isActive
        ? 'text-orange-500 font-semibold'
        : 'text-gray-700 hover:text-orange-500';

    $underline = $block ? '' : 'relative group';
@endphp

<a href="{{ route($route) }}" class="{{ $base }} px-3 py-2 {{ $classes }} {{ $underline }}">
    {{ $label }}
    @unless($block)
        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-orange-500 transition-all duration-300 group-hover:w-full"></span>
    @endunless
</a>
