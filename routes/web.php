<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/layanan', 'pages.services', ['title' => 'Layanan'])->name('services');
Route::view('/artikel', 'pages.articles')->name('articles');
Route::view('/hubungi-kami', 'pages.contacts')->name('contact');
Route::post('/hubungi-kami', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/cari', function (\Illuminate\Http\Request $r) {
    return view('pages.search', ['q' => $r->get('q')]);
})->name('search');