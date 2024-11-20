<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
=======
use App\Http\Controllers\Api\JournalController;

Route::get('/journals', [JournalController::class, 'index'])->name('apihome');
Route::post('/journals', [JournalController::class, 'store'])->name('apistore');
Route::get('/journals/{id}', [JournalController::class, 'show'])->name('apishow');
Route::put('/journals/{id}', [JournalController::class, 'update'])->name('apiupdate');
Route::delete('/journals/{id}', [JournalController::class, 'destroy'])->name('apidestroy');
>>>>>>> origin/dev
