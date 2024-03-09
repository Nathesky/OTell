@extends('layout')
@section('content')
<section class="container mt-5"
style="padding: 2rem">
>
<h1>Reserva de quarto</h1>    
<form class="row g-3" method="POST" action="{{route('envia-banco-reserva')}}">
@csrf

<!-- INPUT IDHospede -->

<div class="col-md-6">    
    <label for="inputIdHospede" class="form-label">ID do Hóspede</label>
    <input type="number" class="form-control" id="inputIdHospede" placeholder="Digite o Id do Hóspede" name="idHospede">
  </div>

  <div class="col-md-6">
    <label for="inputNomeHospede" class="form-label">Nome do Hóspede</label>
    <input type="text" readonly class="form-control" id="inputIdHospede" placeholder="Hospede da Silva" name="nomeHospede">
  </div>

<!-- INPUT IDFUNCIONÁRIO -->
  <div class="col-md-6">
    <label for="inputIdFuncionario" class="form-label">ID do Funcionário</label>
    <input type="number" class="form-control" id="inputIdFuncionario" placeholder="Digite o Id do Funcionário" name="idFuncionario">
  </div>

  <div class="col-md-6">
    <label for="inputNomeFuncionario" class="form-label">Nome do Funcionário</label>
    <input type="text" readonly class="form-control" id="inputNomeFuncionario" placeholder="Funcionario da Silva" name="nomeFuncionario">
  </div>

<!-- INPUT IDQUARTO -->
  <div class="col-md-3">
    <label for="inputNomeFuncionario" class="form-label">Número do Quarto</label>
    <input type="text" class="form-control" id="inputNomeFuncionario" placeholder="Digite o número do quarto" name="numeroQuarto">
  </div>

  <div class="col-md-3">
    <label for="inputTipoQuarto" class="form-label">Tipo de Quarto</label>
    <input type="text"  class="form-control" id="inputTipoQuarto" placeholder="Classe A, B..." name="tipoQuarto">
  </div>

  <div class="col-md-3">
    <label for="inputValorDiaria" class="form-label">Valor da Diária</label>
    <input type="text" readonly class="form-control" id="inputValorDiaria" placeholder="100.00" name="valorDiaria" pattern="^\d+(\.\d{1,2})?$" title="Por favor, insira um valor válido (por exemplo, 100.00)">
  </div>

  <div class="col-md-3">
    <label for="inputValorDiaria" class="form-label">Valor Total</label>
    <input type="text"  class="form-control" id="inputValorDiaria" placeholder="100.00" name="valorTotal" pattern="^\d+(\.\d{1,2})?$" title="Por favor, insira um valor válido (por exemplo, 100.00)">
  </div>



<!-- INPUT SITUACAO -->
    <div class="col-md-12">
        <label for="inputSituacao" class="form-label">Situação</label>
            <select class="form-select" id="inputSituacao" name="situacao">
                <option value="pago">Pago</option>
                <option value="pendente">Pendente</option>
            </select>
    </div>

<!-- INPUT DATA DE ENTRADA -->
    <div class="col-md-6">
        <label for="inputDtEntrada" class="form-label">Data de Entrada</label>
        <input type="date" class="form-control" id="inputDtEntrada" name="dtEntrada">
    </div>

<!-- INPUT DATA DE SAÍDA -->
    <div class="col-md-6">
        <label for="inputDtSaida" class="form-label">Data de Saída</label>
        <input type="date" class="form-control" id="inputDtSaida" name="dtSaida">
    </div>

<!-- SUBMIT -->
  </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
</section>
@endsection