@extends('index')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Cliente: {{$findCliente->nome}}</h1>
</div>

<form method="POST" action="{{ route('clientes.atualizar', $findCliente->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text"  value=" {{ isset($findCliente) ? $findCliente->nome : old('nome') }}" name="nome" class="form-control @error('nome') is-invalid @enderror">
      @if ($errors->has('nome'))
        <div class="invalid-feedback">
          {{$errors->first('nome')}}
        </div>
        @endif
    </div>
    <div class="mb-3">
      <label class="form-label">E-mail</label>
      <input value=" {{ isset($findCliente) ? $findCliente->email : old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror">
      @if ($errors->has('email'))
      <div class="invalid-feedback">
        {{$errors->first('email')}}
      </div>
      @endif
    </div>

    <div class="mb-3">
      <label class="form-label">CEP</label>
      <input id="cep" value="{{ isset($findCliente) ? $findCliente->cep : old('cep') }}" name="cep" class="form-control @error('cep') is-invalid @enderror">
      @if ($errors->has('cep'))
      <div class="invalid-feedback">
        {{$errors->first('cep')}}
      </div>
    
    </div>
    @endif

    <div class="mb-3">
      <label class="form-label">Endereço</label>
      <input id="endereco" value="{{ isset($findCliente) ? $findCliente->endereco : old('endereco') }}" name="endereco" class="form-control @error('endereco') is-invalid @enderror">
      @if ($errors->has('endereco'))
      <div class="invalid-feedback">
        {{$errors->first('endereco')}}
      </div>
    
    </div>
    @endif

    <div class="mb-3">
      <label class="form-label">Logradouro</label>
      <input id="logradouro" value="{{ isset($findCliente) ? $findCliente->logradouro : old('logradouro') }}" name="logradouro" class="form-control @error('logradouro') is-invalid @enderror">
      @if ($errors->has('logradouro'))
      <div class="invalid-feedback">
        {{$errors->first('logradouro')}}
      </div>
    </div>
    @endif
   
    
    <div class="mb-3">
      <label class="form-label">Bairro</label>
      <input id="bairro" value="{{ isset($findCliente) ? $findCliente->bairro : old('bairro') }}" name="bairro" class="form-control @error('bairro') is-invalid @enderror">
      @if ($errors->has('bairro'))
      <div class="invalid-feedback">
        {{$errors->first('bairro')}}
      </div>
    </div>
    @endif
    
    <button type="submit" class="mt-2 btn btn-success">Atualizar</button>
  </form>



@endsection