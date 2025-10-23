<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Route::get('/', [Controller::class, 'login'])->name('login');
Route::post('/login', [Controller::class, 'handleLogin'])->name('login.submit');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [Controller::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [Controller::class, 'profile'])->name('profile');