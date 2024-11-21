<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalController;

Route::get('/', [JournalController::class, 'index'])->name('home');
Route::get('/journals/{id}', [JournalController::class, 'show'])->name('show');
