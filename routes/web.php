<?php

use App\Http\Controllers\NotesApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

// Главная страница
Route::get('/', function () {
    return view('home');
});

// Route::get('/note', [NotesController::class, 'index'])->name('note.index');
// Route::get('/note/create', [NotesController::class, 'create'])->name('note.create');
// Route::post('/note', [NotesController::class, 'store'])->name('note.store');
// Route::get('/note/{id}', [NotesController::class, 'show'])->name('note.show');
// Route::get('/note/{id}/edit', [NotesController::class, 'edit'])->name('note.edit');
// Route::put('/note/{id}', [NotesController::class, 'update'])->name('note.update');
// Route::delete('/note/{id}', [NotesController::class, 'destroy'])->name('note.destroy');

Route::resource('note',NotesController::class);