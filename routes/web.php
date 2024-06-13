<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\SaranaController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/ekskul', [EkskulController::class, 'ekskul'])->name('ekskul');
Route::get('/sarana', [SaranaController::class, 'sarana'])->name('sarana');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');