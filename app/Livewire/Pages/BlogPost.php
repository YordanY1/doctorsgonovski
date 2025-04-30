<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Attributes\Url;
use Livewire\Component;

class BlogPost extends Component
{
    #[Url(as: 'slug')]
    public string $slug;

    public Post $post;

    public function mount()
    {
        $this->post = Post::where('slug', $this->slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.pages.blog-post')
            ->layout('layouts.app', [
                'metaTitle' => $this->post->title . ' | Блог на Doctors Gonovski',
                'metaDescription' => strip_tags(substr($this->post->content, 0, 160)),
                'metaKeywords' => $this->post->excerpt ?? 'блог, здраве, медицински съвети, лекари, ортопедия, кардиология',
                'metaAuthor' => 'Doctors Gonovski',
            ]);
    }
}
