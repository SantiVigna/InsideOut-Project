<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JournalController;

Route::get('/journals', [JournalController::class, 'index'])->name('apihome');
