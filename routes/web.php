<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Главная страница
Route::get('/', function () {
    return view('home');
});

// Страница новостей
Route::get('/news', [PostController::class, 'getNewsTemplate'])->name('news.list');
