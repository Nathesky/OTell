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
    public function gerenciarQuarto(Request $request){
        $dadosQuarto = Quarto::query();

        $dadosQuarto -> when($request -> nome,function($query,$valor){
        $query -> where('nome', 'like', '%'.$valor.'%');
        });

        $dadosQuarto = $dadosQuarto -> get();
        return view('gerenciarQuarto',['registrosQuartos' => $dadosQuarto]);
    }

      //GERENCIAR/SELECT/ MOSTRAR UM HÓSPEDE EM ESPECÍFICO
      public function mostrarQuartoId(Quarto $id){
        return view('formularioAlterarQuarto', ['registroQuarto' => $id]);
    }
    

     // DELETAR/APAGAR
     public function destroy(Quarto $id){
     $id -> delete();
     return Redirect::route('home');
     // return view('home');
     }
     // ALTERAR/EDITAR
     public function alterarQuarto(Quarto $id, Request $request){
     $dadosValidos = $request -> validate([
        'tipoQuarto' => 'string|required',
        'numeroQuarto' => 'integer|required',
        'valorDiaria' => 'numeric|required|regex:/^\d+(\.\d{1,2})?$/'
     ]);
     $id -> fill($dadosValidos);
     $id -> save(); 
     return Redirect::route('home');
    }
}