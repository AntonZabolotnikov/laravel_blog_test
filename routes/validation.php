<?php

use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Route;

Route::get('/validation', [ValidationController::class, 'index'])->name('validation');
Route::post('/validation', [ValidationController::class, 'store'])->name('validation.store');