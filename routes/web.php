<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('welcome');

Route::post('/contact',[ContactController::class,'store'])->name('contact');
