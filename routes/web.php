<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Doctors;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Blog;
use App\Livewire\Pages\BlogPost;
use App\Livewire\Pages\TermsOfUse;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/doctors', Doctors::class)->name('doctors');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/blog', Blog::class)->name('blog');
Route::get('/blog/{slug}', BlogPost::class)->name('blog.show');
Route::get('/terms-of-use', TermsOfUse::class)->name('terms-of-use');
