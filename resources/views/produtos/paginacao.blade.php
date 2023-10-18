@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="{{ route('produtos.index') }}" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome">
            <button>Pesquisar</button>
            <a type="button" href="" class="btn btn-success float-end">Adicionar Produto</a>
        </form>

        <div class="table-responsive small mt-4">
            @if ($produtos->isempty())
                <p>Não existe dados</p>
                @else
           
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $prod )
                    <tr>
                        <td>{{$prod->nome}}</td>
                        <td>{{'R$'. '' . number_format($prod->valor, 2, ',', '.')}}</td>
                        <td>
                            <a href="{{ route('produtos.delete') }}" class="btn btn-danger btn-sm">Excluir</a>
                            <a href="" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            @endif
        </div> 


    </div>
@endsection
