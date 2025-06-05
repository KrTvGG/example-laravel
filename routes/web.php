<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

// Главная страница
Route::get('/', function () {
    return view('home');
});

Route::resource('note',NotesController::class);