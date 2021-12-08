<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::post('/', [ContactController::class, 'send']);

Route::get('/find', [ContactController::class, 'find'])->name('find');