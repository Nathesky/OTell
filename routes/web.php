<?php

use App\Http\Controllers\HospedeController;
use App\Http\Controllers\FuncionarioController;
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

Route::get('/cadastro-hospede', [HospedeController::class,'showFormularioCadastroHospede']) ->name('show-formulario-cadastro');

Route::get('/cadastro-funcionario', [FuncionarioController::class,'showFormularioCadastroFuncionario']);

Route::post('/cadastro-hospede',[HospedeController::class, 'cadHospede'])->name('envia-banco-hospede');

Route::post('/cadastro-funcionario',[FuncionarioController::class, 'cadFuncionario'])->name('envia-banco-funcionario');