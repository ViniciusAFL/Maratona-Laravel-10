<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestVenda;
use App\Mail\ComprovanteDeVendaEmail;
use Illuminate\Http\Request;
use App\models\{Venda, Produto, Cliente};
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;


class VendaController extends Controller
{
    public function __construct(Venda $venda)
    {
       $this->venda = $venda;
    }

    public function index(Request $request)  
    {   
        $pesquisar = $request->pesquisar;
        $findVendas = $this->venda->getVendaPesquisarIndex(search: $pesquisar ?? '');

        return view('vendas.paginacao', compact('findVendas'));
    }


    public function cadastrarVenda(FormRequestVenda $request) 
    {
        $findnumeracao = Venda::max('numero_venda')+1;
        $findProduto = Produto::all();
        $findCliente = Cliente::all();

        if($request->method() == "POST"){
            $prods = $request->all();
            $prods['numero_venda'] = $findnumeracao;
            Venda::create($prods);
            Toastr::success('Cadastrado com sucesso!');
            return redirect()
            ->route('vendas.cadastrar');
        };
              
        return view('vendas.create', compact('findnumeracao', 'findProduto', 'findCliente'));
    }

    public function enviaComprovantePorEmail($id)
    {
        $buscaVenda = Venda::where('id', '=', $id)->first();
        $produtoNome = $buscaVenda->produto->nome;
        $clienteEmail = $buscaVenda->cliente->email;
        $clienteNome = $buscaVenda->cliente->nome;

        $sendMailData = [
            'produtoNome' => $produtoNome,
            'clienteNome' => $clienteNome
        ];

        Mail::to($clienteEmail)->send(new ComprovanteDeVendaEmail($sendMailData));

        Toastr::success('Email enviado com sucesso.');
        return redirect()->route('vendas.index');
    }

}
