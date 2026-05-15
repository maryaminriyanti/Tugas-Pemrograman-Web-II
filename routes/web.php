<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('', [PetugasController::class, 'index']);

Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
Route::post('/petugas/store', [PetugasController::class, 'store'])->name('petugas.store');
Route::get('/petugas/{petugas}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::put('/petugas/{petugas}', [PetugasController::class, 'update'])->name('petugas.update');
Route::delete('/petugas/{petugas}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

Route::resource('kecamatan', KecamatanController::class);