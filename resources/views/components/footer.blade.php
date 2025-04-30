<footer class="bg-gradient-to-r from-orange-600 via-orange-700 to-orange-800 text-white py-16 mt-16">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">

        <div class="space-y-3">
            <h3 class="text-xl font-bold tracking-wide">Контакти</h3>
            <p>
                <a href="https://www.google.com/maps/search/?api=1&query=бул.+Шипка+23,+Пловдив" target="_blank"
                    class="hover:underline">
                    бул. „Шипка“ 23, Пловдив
                </a>
            </p>
            <p>Д-р Кристиян Гоновски: <a href="tel:+359899152547" class="hover:underline">+359 899 15 2547</a></p>
            <p>Д-р Иванка Кулевска-Гоновска: <a href="tel:+359897707804" class="hover:underline">+359 897 70 7804</a></p>
            <p>Имейл: <a href="mailto:g.kristijan@yahoo.com" class="hover:underline">g.kristijan@yahoo.com</a></p>
        </div>

        <div class="space-y-3">
            <h3 class="text-xl font-bold tracking-wide">Социални мрежи</h3>
            <div class="flex space-x-5 text-2xl">
                <a href="https://www.facebook.com/profile.php?id=61551589160117" target="_blank"
                    class="hover:text-orange-300 transition">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>

        <div class="flex items-center justify-center md:justify-end">
            <span class="text-2xl font-bold italic tracking-wide">Doctors Gonovski</span>
        </div>

    </div>

    <div class="mt-12 pt-6 border-t border-white/10 text-center text-sm text-orange-100">
        &copy; {{ date('Y') }} Всички права запазени.
        <a href="https://superdoc.bg/lekar/d-r-kristian-gonovski-9873" target="_blank"
            class="underline hover:text-white">
            Doctor Gonovski
        </a>
        <br/>
        <a wire:navigate href="/terms-of-use" class="hover:underline text-sm">
            Условия за ползване
        </a>
    </div>
</footer>
