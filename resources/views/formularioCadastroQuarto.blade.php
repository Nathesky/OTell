@extends('layout')
@section('content')
<section class="container mt-5"
style="padding: 2rem"
>

<form class="row g-3" method="POST" action="{{route('envia-banco-quarto')}}">
@csrf

<!-- INPUT TIPO -->
<div class="col-12">
    <label for="inputTipo" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="inputTipo" placeholder="Classe A, Classe B" name="tipoQuarto">
  </div>

<!-- INPUT QUARTO -->
  <div class="col-md-6">
    <label for="inputQuarto" class="form-label">Número do Quarto</label>
    <input type="number" class="form-control" id="inputQuarto" placeholder="103" name="numeroQuarto">
  </div>

<!-- INPUT VALOR -->
  <div class="col-md-6">
    <label for="inputQuarto" class="form-label">Valor</label>
    <label for="inputValor" class="form-label">Valor</label>
    <input type="text" class="form-control" id="inputValor" placeholder="100.00" name="valorDiaria" pattern="^\d+(\.\d{1,2})?$" title="Por favor, insira um valor válido (por exemplo, 100.00)">
  </div>

<!-- SUBMIT -->
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>
@endsection