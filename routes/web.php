<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoController;
use App\Models\Projeto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas para cadastro de projetos
Route::get('/projetos',[ProjetoController::Class, 'index'])->name('projetos.index');
Route::get('/projetos/cadastro', [ProjetoController::class, 'cadastro'])->name('projetos.cadastro');
Route::post('/projetos', [ProjetoController::class, 'store'])->name('projetos.store');
Route::get('/projetos/{projeto}/edit', [ProjetoController::class, 'edit'])->name('projetos.edit');
Route::put('/projetos/{projeto}', [ProjetoController::class, 'update'])->name('projetos.update');