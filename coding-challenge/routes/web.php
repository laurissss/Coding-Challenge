<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\PostsOverview::class)->name('overview');

Route::get('/post/{id}', \App\Livewire\PostDetailed::class)->name('post');

Route::get('/register', \App\Livewire\RegistrationForm::class);

Route::get('/login', \App\Livewire\Login::class);
