<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastroQuarto(Request $request){
        return view("formularioCadastroQuarto");
    }

    public function cadQuarto(Request $request){
            $dadosValidos = $request -> validate([
                'tipoQuarto' => 'string|required',
                'numeroQuarto' => 'integer|required',
                'valorDiaria' => 'numeric|required|regex:/^\d+(\.\d{1,2})?$/'
            ]);
        Quarto::create($dadosValidos);
        return Redirect::route('home');

    } 
}