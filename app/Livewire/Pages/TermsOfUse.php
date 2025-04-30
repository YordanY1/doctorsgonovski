<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class TermsOfUse extends Component
{
    public function render()
    {
        return view('livewire.pages.terms-of-use')
            ->layout('layouts.app', [
                'metaTitle' => 'Политика за поверителност и условия за ползване | Doctors Gonovski',
                'metaDescription' => 'Запознайте се с нашата политика за защита на личните данни и условия за ползване съгласно Регламент (ЕС) 2016/679 (GDPR). Гарантираме поверителност и сигурност на вашата информация.',
                'metaKeywords' => 'условия за ползване, GDPR, защита на лични данни, поверителност, политика, cookies, бисквитки, лична информация, сигурност на данните',
                'metaAuthor' => 'Doctors Gonovski - Пловдив',
            ]);
    }
}
