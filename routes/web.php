<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContadorController;

Route::get('/', function () {
    return view('welcome');
});

// Chamar Login
Route::get('/login',[ContadorController::class,'retorna_login'])->name('login');

// Chamar Cadastro
Route::get('/cadastro',[ContadorController::class,'retorna_cadastro'])->name('cadastro');

// Chamar Calendario
Route::get('/calendario',[ContadorController::class,'retorna_calendario'])->name('calendario');

// Chamar Categorias
Route::get('/categorias',[ContadorController::class,'retorna_categorias'])->name('categorias');

// Chamar contagens
Route::get('/contagens',[ContadorController::class,'retorna_contagens'])->name('contagens');

// Chamar estoque
Route::get('/estoque',[ContadorController::class, 'retorna_estoque'])->name('estoque');

Route::view('/menu','template.menu');






