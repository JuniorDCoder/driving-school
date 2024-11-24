<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/licenses', [HomeController::class, 'licenses'])->name('licenses');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('features', [HomeController::class, 'features'])
    ->name('features');
Route::get('appointment', [HomeController::class, 'appointment'])
    ->name('appointment');
Route::get('testimonials', [HomeController::class, 'testimonials'])
    ->name('testimonials');
