<?php

namespace App\Livewire;

use Livewire\Component;

class CookieConsent extends Component
{
    public bool $show = true;

    public function mount()
    {
        $this->show = !request()->cookie('cookie_consent_accepted');
    }

    public function accept()
    {
        cookie()->queue(cookie('cookie_consent_accepted', true, 60 * 24 * 30));
        $this->show = false;
    }

    public function decline()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.cookie-consent');
    }
}
