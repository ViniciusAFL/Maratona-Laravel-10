@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>

    <div>
        <form action="{{ route('vendas.index') }}" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome">
            <button>Pesquisar</button>
            <a type="button" href="{{ route('vendas.cadastrar') }}" class="btn btn-success float-end">Cadastrar Nova Venda</a>
        </form>

        <div class="table-responsive small mt-4">
            @if ($findVendas->isempty())
                <p>Não existe dados</p>
                @else
           
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Numeração</th>
                        <th>Produto</th>
                        <th>Cliente</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findVendas as $venda )
                    <tr>
                        <td>{{$venda->numero_venda}}</td>
                        <td>{{$venda->produto->nome}}</td>
                        <td>{{$venda->cliente->nome}}</td>

                        <td>
                            <meta name="csrf-token" content="{{csrf_token()}}">
                            <a class="btn btn-primary btn-sm">Enviar E-mail</a>
                        </td>

                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            @endif
        </div> 


    </div>
@endsection
