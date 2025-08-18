<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
Route::view('/', 'welcome')->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::prefix('note')->middleware(['auth', 'verified'])->name('note.')->group(function () {
    Route::view('/', 'note');
    Route::view('/add','notes.create')->name('add');
    Route::view('/note/{note}/delete','notes.destroy')->name('delete');
});
