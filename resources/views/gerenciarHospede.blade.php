@extends('layout')
@section('content')
<section class="container m-5"
         style="padding: 2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;">
  <h1 style="color: #f5f5f5;">Gerenciar dados dos Hóspedes</h1>
  <div class="container m-5">
    <form method='get' action ="{{route('gerenciar-hospede')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do Hóspede" aria-label="First name">
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
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosHospedes as $registroHospedeArrayLoop )
      <tr>
        <th scope="row">{{$registroHospedeArrayLoop -> id}}</th>
        <td>{{$registroHospedeArrayLoop -> nome}}</td>
        <td>{{$registroHospedeArrayLoop -> email}}</td>
        <td>{{ $registroHospedeArrayLoop->fone }}</td>

        <td>
          <a href="{{route('mostrar-hospede', $registroHospedeArrayLoop -> id)}}">
            <button type="button" class="btn btn-primary">✔️</button>
          </a>
        </td>
        <td>
          <form method='post' action="{{route( 'apagar-hospede', $registroHospedeArrayLoop -> id)}}">
            @method('delete')
            @csrf  
            <button type="submit" class="btn btn-danger">❌</button>
            </form>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection
