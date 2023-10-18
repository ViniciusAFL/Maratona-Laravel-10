<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function __construct(Produto $produto)
    {
       $this->produto = $produto;
    }

    public function index(Request $request)  
    {   
        $pesquisar = $request->pesquisar;
        $produtos = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');

        return view('produtos.paginacao', compact('produtos'));
    }

    public function delete(Request $request, int $id)  
    {
            
    }

}
