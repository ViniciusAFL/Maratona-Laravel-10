@extends('index')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Criar novo produto</h1>
</div>

<form method="POST" action="{{ route('produtos.cadastrar') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror">
      @if ($errors->has('nome'))
        <div class="invalid-feedback">
          {{$errors->first('nome')}}
        </div>
      @endif
    </div>
    <div class="mb-3">
      <label class="form-label">Valor</label>
      <input name="valor" class="form-control @error('valor') is-invalid @enderror">
      @if ($errors->has('valor'))
      <div class="invalid-feedback">
        {{$errors->first('valor')}}
      </div>
    @endif
    </div>
    
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>



@endsection