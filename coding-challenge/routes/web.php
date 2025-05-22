<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', \App\Livewire\RegistrationForm::class);

Route::get('/login', App\Livewire\Login::class);
