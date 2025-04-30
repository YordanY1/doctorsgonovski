<nav x-data="{ open: false }" class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo_heart-1.png') }}" alt="Logo" class="h-10 w-auto">
                <span class="text-orange-500 font-bold text-xl">Doctors Gonovski</span>
            </a>

            {{-- Desktop nav --}}
            <div class="hidden lg:flex space-x-6 items-center text-lg">
                <x-nav-link route="home" label="Начало" />
                <x-nav-link route="about" label="За нас" />
                <x-nav-link route="doctors" label="Доктори" />
                <x-nav-link route="blog" label="Блог" />
                <x-nav-link route="contact" label="Контакти" />
            </div>

            {{-- Mobile menu toggle --}}
            <button @click="open = !open" class="lg:hidden text-gray-700 focus:outline-none" aria-label="Toggle menu">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div x-show="open" x-transition class="lg:hidden px-4 pb-4 space-y-2">
        <x-nav-link route="home" label="Начало" block />
        <x-nav-link route="about" label="За нас" block />
        <x-nav-link route="doctors" label="Доктори" />
        <x-nav-link route="blog" label="Блог" block />
        <x-nav-link route="contact" label="Контакти" block />
    </div>
</nav>
