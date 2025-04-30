<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class Contact extends Component
{
    public $fullName;
    public $emailAddress;
    public $subject;
    public $message;
    public $success = false;

    public function send()
    {
        $this->validate([
            'fullName' => 'required|string|max:255',
            'emailAddress' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        Mail::to('kristijangonovski@gmail.com')->send(
            new ContactFormMail([
                'fullName' => $this->fullName,
                'emailAddress' => $this->emailAddress,
                'subject' => $this->subject,
                'message' => $this->message,
            ])
        );

        $this->reset(['fullName', 'emailAddress', 'subject', 'message']);
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.pages.contact')
            ->layout('layouts.app', [
                'metaTitle' => 'Свържете се с нас | Медицински кабинет Гоновски',
                'metaDescription' => 'Контакт с медицинския кабинет на д-р Кристиян Гоновски и д-р Иванка Кулевска-Гоновска. Свържете се с нас за записване на час или въпроси относно здравето ви.',
                'metaKeywords' => 'контакти, медицински кабинет, лекари Пловдив, кардиолог, ортопед, записване на час, доктор Гоновски, доктор Кулевска',
                'metaAuthor' => 'Doctors Gonovski - Пловдив',
            ]);
    }
}
