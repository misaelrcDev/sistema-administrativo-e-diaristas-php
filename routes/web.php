<?php

use App\Http\Controllers\ServicoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas para trablhar com serviços
Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
Route::put('/servicos/{servico}/update', [ServicoController::class, 'update'])->name('servicos.update');