@extends('layout')
@section('content')
<section class="container m-5"
         style="padding: 2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;">
  <h1 style="color: #f5f5f5;">Gerenciar dados dos Funcionários</h1>
  <div class="container m-5">
    <form method='get' action ="{{route('gerenciar-funcionario')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do Funcionário" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Função</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosFuncionarios as $registroFuncionarioArrayLoop )
      <tr>
        <th scope="row">{{$registroFuncionarioArrayLoop->id}}</th>
        <td>{{$registroFuncionarioArrayLoop->nome}}</td>
        <td>{{$registroFuncionarioArrayLoop->funcao}}</td>
        <td>
          <a href="{{route('mostrar-funcionario', $registroFuncionarioArrayLoop->id)}}">
            <button type="button" class="btn btn-primary">Editar</button>
          </a>
        </td>
        <td>
          <form method='post' action="{{route('apagar-funcionario', $registroFuncionarioArrayLoop->id)}}">
            @method('delete')
            @csrf  
            <button type="submit" class="btn btn-danger">Excluir</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection
