<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;


Route::get('login', Login::class)->name('login');
Route::middleware(['role:petugas'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('dashboard', App\Livewire\Dashboard\Main::class)->name('dashboard');
    Route::get('data/anggota', App\Livewire\Pages\Anggota::class)->name('data.anggota');
    Route::get('data/petugas', App\Livewire\Pages\Petugas::class)->name('data.petugas');
    Route::get('data/layanan', App\Livewire\Pages\Layanan::class)->name('data.layanan');
});
