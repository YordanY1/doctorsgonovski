<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Doctors extends Component
{
    public function render()
    {
        return view('livewire.pages.doctors')
            ->layout('layouts.app', [
                'metaTitle' => 'Нашите лекари | Д-р Гоновски и д-р Кулевска-Гоновска – Пловдив',
                'metaDescription' => 'Запознайте се с екипа на медицинския кабинет в Пловдив – д-р Кристиян Гоновски (ортопед) и д-р Иванка Кулевска-Гоновска (кардиолог). Професионализъм, опит и индивидуален подход към пациента.',
                'metaKeywords' => 'лекари, медицински кабинет, д-р Гоновски, д-р Кулевска-Гоновска, ортопед, кардиолог, Пловдив, специалисти, здраве',
                'metaAuthor' => 'Doctors Gonovski - Лекари Пловдив',
            ]);
    }
}
