<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Post;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.pages.blog', [
            'posts' => Post::latest()->get(),
        ])->layout('layouts.app', [
            'metaTitle' => 'Блог | Здравни съвети от д-р Гоновски',
            'metaDescription' => 'Прочетете съвети от ортопед и кардиолог, полезни за вашето здраве.',
            'metaKeywords' => 'здраве, ортопед, кардиолог, блог, доктор Гоновски, медицински статии',
            'metaAuthor' => 'Doctors Gonovski',
        ]);
    }
}
