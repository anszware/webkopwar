<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;


Route::get('login', Login::class)->name('login');
Route::middleware(['role:petugas'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('dashboard', App\Livewire\Dashboard\Main::class)->name('dashboard');
});
