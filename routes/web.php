<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContadorController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Rotas sobre Cadastro
Route::get('/cadastro', [ContadorController::class, 'retorna_cadastro'])->name('cadastro');
Route::post('/cadastro', [ContadorController::class, 'cadastro_store'])->name('cadastro-store');

// Chamar Login
Route::get('/', [ContadorController::class, 'retorna_login'])->name('login');

// Chamar Calendario
Route::get('/calendario', [ContadorController::class, 'retorna_calendario'])->name('calendario');

// Chamar Categorias
Route::get('/categorias', [ContadorController::class, 'retorna_categorias'])->name('categorias');

// Chamar contagens
Route::get('/contagens', [ContadorController::class, 'retorna_contagens'])->name('contagens');

// Chamar estoque
Route::get('/estoque', [ContadorController::class, 'retorna_estoque'])->name('estoque');

Route::get('/relatorio', [ContadorController::class, 'retorna_relatorio'])->name('relatorio');

// Route::prefix('contador')->group(function(){
//     Route::get('/login', [ContadorController::class, 'retorna_login'])->name('contador-login');
// });

Route::fallback(function () {
    return view('screens.fallback');
});
