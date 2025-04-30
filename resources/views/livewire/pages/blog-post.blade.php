<div>
    <div class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                class="w-full h-[400px] object-cover rounded-xl shadow" />

            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-relaxed">
                {{ $post->title }}
            </h1>

            <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
                {!! $post->content !!}
            </div>

            <div class="pt-8">
                <a wire:navigate href="/blog"
                    class="text-orange-500 hover:text-orange-600 font-semibold inline-flex items-center gap-2">
                    ← Назад към блога
                </a>
            </div>
        </div>
    </div>
</div>
