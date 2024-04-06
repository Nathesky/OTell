@extends('layout')
@section('content')
<section class="container mt-5" style="padding: 2rem;">
    <form class="row g-3" method="POST" action="{{ route('alterar-quarto', $registroQuarto->id) }}">
        @method('PUT')
        @csrf

        <!-- INPUT NÚMERO DO QUARTO -->
        <div class="col-12">
            <label for="inputNumeroQuarto" class="form-label">Número do Quarto</label>
            <input type="text" class="form-control" value="{{ old('numeroQuarto', $registroQuarto->numeroQuarto) }}" id="inputNumeroQuarto" placeholder="Número do Quarto" name="numeroQuarto">
            @error('numeroQuarto')
            <div class="text-sm-start text-light"> *Preencher o campo Número do Quarto </div>
            @enderror
        </div>

        <!-- INPUT TIPO DO QUARTO -->
        <div class="col-md-6">
            <label for="inputTipoQuarto" class="form-label">Tipo do Quarto</label>
            <input type="text" class="form-control" value="{{ old('tipoQuarto', $registroQuarto->tipoQuarto) }}" id="inputTipoQuarto" placeholder="Tipo do Quarto" name="tipoQuarto">
            @error('tipoQuarto')
            <div class="text-sm-start text-light"> *Preencher o campo Tipo do Quarto </div>
            @enderror
        </div>

        <!-- INPUT VALOR DIÁRIA -->
        <div class="col-md-6">
            <label for="inputValorDiaria" class="form-label">Valor da Diária</label>
            <input type="text" class="form-control" value="{{ old('valorDiaria', $registroQuarto->valorDiaria) }}" id="inputValorDiaria" placeholder="Valor da Diária" name="valorDiaria">
            @error('valorDiaria')
            <div class="text-sm-start text-light"> *Preencher o campo Valor da Diária </div>
            @enderror
        </div>

        <!-- SUBMIT -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar dados</button>
        </div>
    </form>
</section>
@endsection
