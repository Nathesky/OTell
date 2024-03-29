@extends('layout')
@section('content')
<section class="container m-5"
         style="padding: 2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;">
  <h1 style="color: #f5f5f5;">Gerenciar dados dos Quartos</h1>
  <div class="container m-5">
    <form>
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="numeroQuarto" class="form-control" placeholder="Digite o número do Quarto" aria-label="First name">
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
        <th scope="col">Número do Quarto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">01</th>
        <td>119897-999</td>
        <td>Samsung</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <button type="button" class="btn btn-danger">X</button>
        </td>
      </tr>
    </tbody>
  </table>
</section>
@endsection
