@extends('layout')
@section('content')
<section class="container mt-5"
style="padding: 2rem">

<form class="row g-3" method="Post" action="{{route('envia-banco-hospede')}}">
@csrf

<!-- INPUT NOME -->
<div class="col-12">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" placeholder="Paulo Guedes" name="nome">
  </div>

<!-- INPUT EMAIL -->
  <div class="col-md-6">
    <label for="inputEmai" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmai" placeholder="paulo@exemplo.com" name="email">
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