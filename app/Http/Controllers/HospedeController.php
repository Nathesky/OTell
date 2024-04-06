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

    // CADASTRAR
    public function cadHospede(Request $request){
        $dadosValidos = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        Hospede::create($dadosValidos);
        return Redirect::route('home');

    }

    //GERENCIAR/SELECT/ MOSTRAR UM HÓSPEDE EM ESPECÍFICO
    public function mostrarHospedeId(Hospede $id){
        return view('formularioAlterarHospede',['registrosHospedes' => $id]);
    }

    // MOSTRAR TODOS OS HÓSPEDES
    public function gerenciarHospede(Request $request){
        $dadosHospedes = Hospede::query();

        $dadosHospedes -> when($request -> nome,function($query,$valor){
        $query -> where('nome', 'like', '%'.$valor.'%');
        });

        $dadosHospedes = $dadosHospedes -> get();
        return view('gerenciarHospede',['registrosHospedes' => $dadosHospedes]);
    }

    // DELETAR/APAGAR
    public function destroy(Hospede $id){
        $id -> delete();
        return Redirect::route('home');
        // return view('home');
    }
    // ALTERAR/EDITAR
    public function alterarHospede(Hospede $id, Request $request){
        $dadosValidos = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        $id -> fill($dadosValidos);
        $id -> save(); 
        return Redirect::route('home');
    }
}
