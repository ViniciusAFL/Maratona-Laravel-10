<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Componentes;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\FormRequestClientes;

class ClientesController extends Controller
{
    public function __construct(Cliente $cliente)
    {
       $this->Cliente = $cliente;
    }

    public function index(Request $request)  
    {   
        $pesquisar = $request->pesquisar;
        $findCliente = $this->Cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');

        return view('clientes.paginacao', compact('findCliente'));
    }

    public function delete(Request $request)  
    {   
        $id = $request->id;
        $buscaregis = Cliente::find($id);
        $buscaregis->delete();

        Toastr::warning('Deletado com sucesso!');
        return response()->json(['success' => true]);
    }

    public function cadastrarCliente(FormRequestClientes $request) 
    {
        if($request->method() == "POST"){
            $dados = $request->all();
            Cliente::create($dados);
            Toastr::success('Cadastrado com sucesso!');
            return redirect()
            ->route('clientes.index');
        };
        

        return view('clientes.create');
    }

    public function AtualizarCliente(FormRequestClientes $request, int $id) 
    {   
        if($request->method() == "PUT"){
            //Atualiza os dados
             $dados = $request->all();
             $buscaregistro = Cliente::find($id);
             $buscaregistro->update($dados);

             return redirect()
             ->route('clientes.index');
        };
        
        //mostrar os dados
        $findCliente = Cliente::where('id', '=', $id)->first();
        return view('clientes.atualiza', compact('findCliente'));
    }
}
