<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Hospede;

class HospedeController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastroHospede(Request $request){
        return view("formularioCadastroHospede");
    }

    public function cadHospede(Request $request){
        $dadosValidos = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        Hospede::create($dadosValidos);
        return Redirect::route('home');

    } 
}