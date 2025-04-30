<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home')
            ->layout('layouts.app', [
                'metaTitle' => 'Медицински кабинет Гоновски | Специалисти по ортопедия и кардиология в Пловдив',
                'metaDescription' => 'Добре дошли в кабинета на д-р Гоновски и д-р Кулевска-Гоновска – водещи специалисти по ортопедия и кардиология. Предлагаме индивидуален подход и прецизни медицински прегледи.',
                'metaKeywords' => 'д-р Гоновски, д-р Кулевска-Гоновска, ортопед, кардиолог, медицински кабинет Пловдив, лекари Пловдив, здраве, медицински прегледи, консултации',
                'metaAuthor' => 'Doctors Gonovski - Медицински кабинет в Пловдив',
            ]);
    }
}
