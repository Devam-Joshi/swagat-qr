<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/', function () {
    return view('client.home');
})->name('home');

Route::get('input', [QrController::class, 'index'])->name('input');
Route::post('upload', [QrController::class, 'upload'])->name('upload');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('contact-us', function () {
    return view('client.pages.contact');
})->name('contact');

Route::get('service', function () {
    return view('client.pages.services');
})->name('service');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('about',function(){
    return view('client.pages.about');
})->name('about');

// Services


Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');