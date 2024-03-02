<?php

use App\Http\Controllers\HospedeController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HospedeController::class,'showHome']) ->name('home');

// ROTA HÓSPEDE
Route::get('/cadastro-hospede', [HospedeController::class,'showFormularioCadastroHospede']) ->name('show-formulario-cadastro-hospede');
Route::post('/cadastro-hospede',[HospedeController::class, 'cadHospede'])->name('envia-banco-hospede');

// ROTA FUNCIONARIO
Route::get('/cadastro-funcionario', [FuncionarioController::class,'showFormularioCadastroFuncionario']);
Route::post('/cadastro-funcionario',[FuncionarioController::class, 'cadFuncionario'])->name('envia-banco-funcionario');

// ROTA QUARTO
Route::get('/cadastro-quarto', [QuartoController::class,'showFormularioCadastroQuarto']) ->name('show-formulario-cadastro-quarto');
Route::post('/cadastro-quarto', [QuartoController::class, 'cadQuarto'])->name('envia-banco-quarto');

// ROTA RESERVA
Route::get('/cadastro-reserva', [ReservaController::class,'showFormularioCadastroReserva']);
Route::post('/cadastro-reserva', [ReservaController::class, 'cadReserva'])->name('envia-banco-reserva');