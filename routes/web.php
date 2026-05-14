<?php

use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('', [PetugasController::class, 'index']);

Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');