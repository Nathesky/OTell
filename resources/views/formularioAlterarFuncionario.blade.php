@extends('layout')
@section('content')
<section class="container mt-5" style="padding: 2rem;">
    <form class="row g-3" method="POST" action="{{ route('alterar-funcionario', $registrosFuncionarios->id) }}">
        @method('PUT')
        @csrf

        <!-- INPUT NOME -->
        <div class="col-12">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" value="{{ old('nome', $registrosFuncionarios->nome) }}" id="inputNome" placeholder="Nome do Funcionário" name="nome">
            @error('nome')
            <div class="text-sm-start text-light"> *Preencher o campo Nome </div>
            @enderror
        </div>

        <!-- INPUT FUNÇÃO -->
        <div class="col-md-6">
            <label for="inputFuncao" class="form-label">Função</label>
            <input type="text" class="form-control" value="{{ old('funcao', $registrosFuncionarios->funcao) }}" id="inputFuncao" placeholder="Função do Funcionário" name="funcao">
            @error('funcao')
            <div class="text-sm-start text-light"> *Preencher o campo Função </div>
            @enderror
        </div>

        <!-- INPUT TELEFONE -->
        <div class="col-md-6">
            <label for="inputFone" class="form-label">Telefone</label>
            <input type="text" class="form-control" value="{{ old('fone', $registrosFuncionarios->fone) }}" id="inputFone" placeholder="Telefone do Funcionário" name="fone">
            @error('fone')
            <div class="text-sm-start text-light"> *Preencher o campo Telefone </div>
            @enderror
        </div>

        <!-- SUBMIT -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar dados</button>
        </div>
    </form>
</section>
@endsection
