<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotoController;

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
// Rota Pagina Index
Route::get('/', [VotoController::class, 'index'])->name('home');


// Retorna View para cadastrar uma nova pessoa
Route::get('vote', [VotoController::class, 'create']);

// Post para Salvar a nova pessoa no BD
Route::post('vote', [VotoController::class, 'store'])->name('salvar_voto');




//Route::get('vote', [VotoController::class, 'create'])->name('vote');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
