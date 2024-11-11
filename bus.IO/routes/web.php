<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TccController;


Route::get('/', [TccController::class, 'index']);
Route::get('/cadastros/cadastro', [TccController::class, 'cadastro']);
Route::get('/cadastros/login', [TccController::class, 'login']);

Route::post('/cadastros/recCadastro', [TccController::class, 'recCadastro']);

Route::get('/cadastros/recRestrito', [TccController::class, 'recRestrito']);

Route::delete('/cadastros/{id}', [TccController::class, 'destroy'])->name('cadastros.destroy');

Route::get('/cadastros/acessoRestrito', [TccController::class, 'acessoRestrito'])->middleware('auth')->can('is-admin');

Route::get('/cadastros/pontos', [TccController::class, 'cadastroPontos'])->middleware('auth')->can('is-admin'); //pag cadastro dos pontos
Route::post('/cadastros/storePontos', [TCCController::class, 'storePontos'])->middleware(['auth'])->can('is-admin'); //armazenamento do pontos

Route::get('/cadastros/{id}', [TccController::class, 'edit'])->name('cadastros.edit');

Route::put('/task/update/{id}', [TccController::class, 'update'])->name('cadastros.update');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
