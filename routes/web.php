<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;


Route::get('login', Login::class)->name('login');
Route::middleware(['role:admin'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
