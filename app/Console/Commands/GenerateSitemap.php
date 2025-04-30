<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Генерира sitemap.xml за сайта';

    public function handle()
    {
        $sitemap = Sitemap::create();

        $sitemap->add(Url::create(route('home')));
        $sitemap->add(Url::create(route('about')));
        $sitemap->add(Url::create(route('doctors')));
        $sitemap->add(Url::create(route('contact')));
        $sitemap->add(Url::create(route('blog')));
        $sitemap->add(Url::create(route('terms-of-use')));

        foreach (Post::all() as $post) {
            $sitemap->add(
                Url::create(route('blog.show', $post->slug))
                    ->setLastModificationDate($post->updated_at ?? Carbon::now())
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap успешно генериран.');
    }
}
