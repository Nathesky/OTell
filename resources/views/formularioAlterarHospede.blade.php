@extends('layout')
@section('content')
<section class="container mt-5" style="padding: 2rem;">
    <form class="row g-3" method="POST" action="{{ route('alterar-hospede', $registrosHospedes->id) }}">
        @method('PUT')
        @csrf

        <!-- INPUT NOME -->
        <div class="col-12">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" value="{{ old('nome', $registrosHospedes->nome) }}" id="inputNome" placeholder="Paulo Guedes" name="nome">
            @error('nome')
            <div class="text-sm-start text-light"> *Preencher o campo Nome </div>
            @enderror
        </div>

        <!-- INPUT EMAIL -->
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" value="{{ old('email', $registrosHospedes->email) }}" id="inputEmail" placeholder="paulo@exemplo.com" name="email">
            @error('email')
            <div class="text-sm-start text-light"> *Preencher o campo Email </div>
            @enderror
        </div>

        <!-- INPUT FONE -->
        <div class="col-md-6">
            <label for="inputFone" class="form-label">Telefone</label>
            <input type="fone" class="form-control" value="{{ old('fone', $registrosHospedes->fone) }}" id="inputFone" placeholder="11 96523-1901" name="fone">
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
