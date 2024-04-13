<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController; 


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [HospedeController::class,'showHome']) ->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ROTA HÓSPEDE
//Cadastro
Route::get('/cadastro-hospede', [HospedeController::class,'showFormularioCadastroHospede']) ->name('show-formulario-cadastro-hospede');
Route::post('/cadastro-hospede',[HospedeController::class, 'cadHospede'])->name('envia-banco-hospede');
//Gerenciamento
Route::get('/gerenciar-hospede', [HospedeController::class,'gerenciarHospede']) ->name('gerenciar-hospede');
Route::get('/alterar-hospede/{id}', [HospedeController::class, 'mostrarHospedeId']) -> name('mostrar-hospede');
Route::put('/alterar-hospede/{id}', [HospedeController::class,  'alterarHospede']) -> name('alterar-hospede');

Route::delete('/apagar-hospede/{id}', [HospedeController::class, 'destroy']) -> name('apagar-hospede');



// ROTA FUNCIONARIO
Route::get('/cadastro-funcionario', [FuncionarioController::class,'showFormularioCadastroFuncionario']) ->name('show-formulario-cadastro-funcionario');
Route::post('/cadastro-funcionario',[FuncionarioController::class, 'cadFuncionario'])->name('envia-banco-funcionario');
//Gerenciamento
Route::get('/gerenciar-funcionario', [FuncionarioController::class,'gerenciarFuncionario']) ->name('gerenciar-funcionario');
Route::get('/alterar-funcionario/{id}', [FuncionarioController::class, 'mostrarFuncionarioId']) -> name('mostrar-funcionario');
Route::put('/alterar-funcionario/{id}', [FuncionarioController::class,  'alterarFuncionario']) -> name('alterar-funcionario');

Route::delete('/apagar-funcionario/{id}', [FuncionarioController::class, 'destroy']) -> name('apagar-funcionario');


// ROTA QUARTO
Route::get('/cadastro-quarto', [QuartoController::class,'showFormularioCadastroQuarto']) ->name('show-formulario-cadastro-quarto');
Route::post('/cadastro-quarto', [QuartoController::class, 'cadQuarto'])->name('envia-banco-quarto');
//Gerenciamento
Route::get('/gerenciar-quarto', [QuartoController::class,'gerenciarQuarto']) ->name('gerenciar-quarto');
Route::get('/alterar-quarto/{id}', [QuartoController::class, 'mostrarQuartoId']) -> name('mostrar-quarto');
Route::put('/alterar-quarto/{id}', [QuartoController::class,  'alterarQuarto']) -> name('alterar-quarto');

Route::delete('/apagar-quarto/{id}', [QuartoController::class, 'destroy']) -> name('apagar-quarto');



// ROTA RESERVA
Route::get('/cadastro-reserva', [ReservaController::class,'showFormularioCadastroReserva']);
Route::post('/cadastro-reserva', [ReservaController::class, 'cadReserva'])->name('envia-banco-reserva');
//Gerenciamento
Route::get('/gerenciar-reserva', [ReservaController::class,'gerenciarReserva']) ->name('gerenciar-reserva');