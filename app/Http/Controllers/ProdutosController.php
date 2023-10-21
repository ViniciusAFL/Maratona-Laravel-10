<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
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

    public function delete(Request $request)  
    {   
        $id = $request->id;
        $buscaregis = Produto::find($id);
        $buscaregis->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarProduto(FormRequestProduto $request) 
    {
        if($request->method() == "POST"){
            $prods = $request->all();
            Produto::create($prods);

            return redirect()
            ->route('produtos.index');
        };
        

        return view('produtos.create');
    }

}
