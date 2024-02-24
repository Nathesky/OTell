@extends('layout')
@section('content')
<section class="container mt-5">
<form class="row g-3" method="Post" action="{{route('envia-banco-funcionario')}}">
@csrf

<!-- INPUT NOME -->
<div class="col-12">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" placeholder="Roger Guedes" name="nome">
  </div>

<!-- INPUT EMAIL -->
  <div class="col-md-6">
    <label for="inputFuncao" class="form-label">Função</label>
    <input type="text" class="form-control" id="inputFuncao" placeholder="Roger@exemplo.com" name="funcao">
  </div>

<!-- INPUT FONE -->
  <div class="col-md-6">
    <label for="inputFone" class="form-label">Telefone</label>
    <input type="fone" class="form-control" id="inputFone" placeholder="11 96523-1901" name="fone">
  </div>

<!-- SUBMIT -->
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>
@endsection