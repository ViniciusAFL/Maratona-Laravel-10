<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Models\Componentes;
use App\Models\Produto;
use Illuminate\Http\Request;
use Brian2694\Toastr\facades\Toastr;

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
            $componentes = new Componentes();
            $prods['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($prods['valor']);
            Produto::create($prods);

            Toastr::success('Cadastrado com sucesso!');
            return redirect()
            ->route('produtos.index');
        };
        

        return view('produtos.create');
    }

    public function AtualizarProduto(FormRequestProduto $request, int $id) 
    {   
        if($request->method() == "PUT"){
            //Atualiza os dados
             $prods = $request->all();
             $componentes = new Componentes();
             $prods['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($prods['valor']);
             $buscaregistro = Produto::find($id);
             $buscaregistro->update($prods);

             return redirect()
             ->route('produtos.index');
        };
        
        //mostrar os dados
        $findproduto = Produto::where('id', '=', $id)->first();
        return view('produtos.atualiza', compact('findproduto'));
    }

}
