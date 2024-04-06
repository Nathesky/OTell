@extends('layout')

@section('content')
<section class="container mt-5">
    <div style="padding: 2rem;">
        <h1>Gerenciar Dados dos Quartos</h1>
        
        <!-- Formulário de busca por número do quarto -->
        <form method="get" action="{{ route('gerenciar-quarto') }}">
            <div class="row align-items-center">
                <div class="col">
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o número do Quarto" aria-label="Número do Quarto">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-info">Buscar</button>
                </div>
            </div>
        </form>
        
        <!-- Tabela de quartos -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Número do Quarto</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Diária</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrosQuartos as $registroQuartoArrayLoop)
                <tr>
                    <th scope="row">{{ $registroQuartoArrayLoop->id }}</th>
                    <td>{{ $registroQuartoArrayLoop->numeroQuarto }}</td>
                    <td>{{ $registroQuartoArrayLoop->tipoQuarto }}</td>
                    <td>{{ $registroQuartoArrayLoop->valorDiaria }}</td>
                    <td>
                    <td>
                        <a href="{{ route('mostrar-quarto', $registroQuartoArrayLoop->id) }}">
                          <button type="button" class="btn btn-primary">Editar</button>
                      </a>
                    </td>

                    </td>
                    <td>
                        <form method="post" action="{{ route('apagar-quarto', $registroQuartoArrayLoop->id) }}">
                            @method('delete')
                            @csrf  
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
