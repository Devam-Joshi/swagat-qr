<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('input',[QrController::class,'index'])->name('input');
Route::post('upload',[QrController::class,'upload'])->name('upload');
