<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastroReserva(Request $request){
        return view("formularioCadastroReserva");
    }

    public function cadReserva(Request $request){
        $dadosValidos = $request -> validate([
            'idHospede' => 'integer|required',
            'idFuncionario' => 'integer|required',
            'idQuarto' => 'integer|required',
            'situacao' => 'required|in:pago,pendente',
            'valortotal' => 'numeric|required|regex:/^\d+(\.\d{1,2})?$/',
            'dtSaida' => 'required|date',
            'dtEntrada' => 'required|date_format:Y-m-d\TH:i'
        ]);
        
        Reserva::create($dadosValidos);
        return Redirect::route('home');
    } 
}
