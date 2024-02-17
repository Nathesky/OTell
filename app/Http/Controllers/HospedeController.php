<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospedeController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastroHospede(Request $request){
        return view("formularioCadastroHospede");
    }
}
