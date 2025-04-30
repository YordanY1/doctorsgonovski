<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
        {{-- Left text --}}
        <div class="space-y-6">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Защо да изберете <span class="text-orange-500">Doctors Gonovski</span>?
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Предлагаме професионални прегледи, свързани с <strong>кардиологични</strong> и
                    <strong>ортопедични</strong> проблеми.
                    Ние вярваме, че вашето здраве е най-важният приоритет – както за вас, така и за нас.
                </p>
            </div>

            <a wire:navigate href="{{ route('about') }}"
                class="inline-flex items-center gap-3 bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full text-lg font-semibold shadow-md transition-all duration-300 hover:scale-105">
                <i class="fas fa-info-circle text-xl"></i>
                Научете повече за нас
            </a>

        </div>

        {{-- Right doctor cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <x-doctor-card name="Д-р Иванка Кулевска-Гоновска" title="Кардиолог" img="images/doctors/gonovskaa.jpg"
                phone="+359899152547" whatsapp="+359899152547"
                link="https://superdoc.bg/lekar/d-r-ivanka-kulevska-gonovska-9946" />

            <x-doctor-card name="Д-р Кристиян Гоновски" title="Ортопед" img="images/doctors/gonovski.jpg"
                phone="+359899152547" whatsapp="+359899152547"
                link="https://superdoc.bg/lekar/d-r-kristian-gonovski-9873" />
        </div>
    </div>
</section>
