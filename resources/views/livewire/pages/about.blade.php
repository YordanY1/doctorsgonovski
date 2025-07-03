<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight">
            Добре дошли в <span class="text-orange-500">медицински кабинет Doctors Gonovski</span>
        </h1>
        <p class="mt-6 text-xl text-gray-600 leading-relaxed">
            Вашето <span class="font-semibold text-orange-500">здраве</span> и <span
                class="font-semibold text-orange-500">благополучие</span>
            са наш приоритет. <br class="hidden md:inline" />
            Гордеем се с нашите <span class="font-medium">водещи специалисти</span>, които предлагат
            <span class="font-medium">индивидуален подход</span> и задълбочени медицински прегледи
            за всеки пациент.
        </p>
    </div>


    {{-- Carousel --}}
    <div class="max-w-5xl mx-auto mt-12 px-4">
        <div class="swiper mySwiper rounded-lg overflow-hidden shadow-md">
            <div class="swiper-wrapper">
                @foreach (['24.jpg', '10.jpg', '26.jpg', '21.jpg', '14.jpg', '17.jpg', '22.jpg', '25.jpg', '4.jpg', 'about_4.jpg', 'about_5.jpg', 'about_6.jpg', 'about_7.jpg'] as $img)
                    <div class="swiper-slide">
                        <div class="w-full h-[350px] sm:h-[700px] md:h-[500px] lg:h-[900px] bg-center bg-cover bg-no-repeat rounded-md shadow"
                            style="background-image: url('{{ asset('images/about/' . $img) }}');">
                        </div>


                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>

</section>
