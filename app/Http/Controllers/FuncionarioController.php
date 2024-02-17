<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastroFuncionario(Request $request){
        return view("formularioCadastroFuncionario");
    }
}
