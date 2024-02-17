<?php

use App\Http\Controllers\HospedeController;
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
Route::get('/', [HospedeController::class,'showHome']);
Route::get('/cadastro-hospede', [HospedeController::class,'showFormCadastro']);