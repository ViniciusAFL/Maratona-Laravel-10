@extends('index')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Produtos Cadastrados</h5>
        <p class="card-text">Total De Produtos Cadastrados No Sistema</p>
        <a href="#" class="btn btn-primary">{{$totalDeProdutoCadastrado}}</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Clientes Cadastrados</h5>
        <p class="card-text">Total De Clientes Cadastrados No Sistema.</p>
        <a href="#" class="btn btn-primary">{{$totalDeClientesCadastrados}}</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vendas Cadastradas</h5>
        <p class="card-text">Total De Vendas Cadastradas No Sistema.</p>
        <a href="#" class="btn btn-primary">{{$totalDeVendasRealizadas}}</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Usuários Cadastrados</h5>
        <p class="card-text">Total De Usuários Cadastradas No Sistema.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>


@endsection