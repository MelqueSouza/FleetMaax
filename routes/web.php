<?php

use Illuminate\Support\Facades\Route;

// Páginas públicas
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Grupo de rotas protegidas (somente usuários autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/motoristas', function () {
        return view('motoristas.index');
    })->name('motoristas');

    Route::get('/caminhoes', function () {
        return view('caminhoes.index');
    })->name('caminhoes');

    Route::get('/motoristas/{id}', function ($id) {
        return view('motoristas.profile', compact('id'));
    })->name('motoristas.profile');

    Route::get('/rotas', function () {
        return view('rotas.index');
    })->name('rotas');
});
