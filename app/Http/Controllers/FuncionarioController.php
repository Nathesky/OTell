<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastroFuncionario(Request $request){
        return view("formularioCadastroFuncionario");
    }

    
public function cadFuncionario(Request $request){
    $dadosValidos = $request->validate([
        'nome' => 'required|string',
        'funcao' => 'required|string',
        'fone' => 'required|string'
    ]);

    Funcionario::create($dadosValidos);

    return redirect()->route('home');
}
 
    public function gerenciarFuncionario(Request $request){
        $dadosFuncionario = Funcionario::query();

        $dadosFuncionario -> when($request -> nome,function($query,$valor){
        $query -> where('nome', 'like', '%'.$valor.'%');
        });

        $dadosFuncionario = $dadosFuncionario -> get();
        return view('gerenciarFuncionario',['registrosFuncionarios' => $dadosFuncionario]);
    }

    

      //GERENCIAR/SELECT/ MOSTRAR UM FUNCIONÁRIO EM ESPECÍFICO
      public function mostrarFuncionarioId(Funcionario $id){

        return view('formularioAlterarFuncionario',['registrosFuncionarios' => $id]);

    }

     // DELETAR/APAGAR
      public function destroy(Funcionario $id){
        $id -> delete();
         return Redirect::route('home');
        // return view('home');
    }

        // ALTERAR/EDITAR
     public function alterarFuncionario(Funcionario $id, Request $request){
      $dadosValidos = $request -> validate([
        'nome' => 'string|required',
        'funcao' => 'string|required',
        'fone' => 'string|required'
    ]);
        $id -> fill($dadosValidos);
        $id -> save(); 
        return Redirect::route('home');
    }
    }
