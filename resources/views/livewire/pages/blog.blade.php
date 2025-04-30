<div>
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-center text-orange-500 mb-12">Нашият Блог</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse ($posts as $post)
                    <div
                        class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
                        <a wire:navigate href="/blog/{{ $post->slug }}">
                            <img src="{{ asset('storage/' . $post->image) }}"
                                class="w-full h-64 object-cover hover:scale-105 transition duration-300" />
                        </a>
                        <div class="p-5 space-y-2">
                            <h3 class="text-xl font-bold text-gray-800 hover:text-orange-500 transition">
                                <a wire:navigate href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                            </h3>

                            <span
                                class="inline-block bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full mt-2">
                                {{ $post->excerpt }}
                            </span>


                            <div class="space-y-1">
                                <a wire:navigate href="/blog/{{ $post->slug }}"
                                    class="block text-orange-500 font-medium hover:underline">
                                    Прочети повече →
                                </a>

                                @if ($post->external_url)
                                    <a href="{{ $post->external_url }}" target="_blank"
                                        class="block text-blue-600 font-medium hover:underline">
                                        Виж повече във Facebook →
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
                @empty
                    <p class="text-center text-gray-500 col-span-3">Няма публикувани статии в момента.</p>
                @endforelse
            </div>
        </div>
    </section>
</div>
