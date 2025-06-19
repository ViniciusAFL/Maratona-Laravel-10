<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () 
    {
        $totalDeProdutoCadastrado = $this->buscaTotalProdutoCadastrado();
        $totalDeClientesCadastrados = $this->buscaTotalClientesCadastrados();
        $totalDeVendasRealizadas = $this->buscaTotalVendasCadastradas();
        return view('dashboard.dashboard', compact('totalDeProdutoCadastrado', 'totalDeClientesCadastrados', 'totalDeVendasRealizadas'));
    }

    public function buscaTotalProdutoCadastrado ()
    {
        $findproduto = Produto::all()->count();

        return $findproduto;
    }


    public function buscaTotalClientesCadastrados () 
    {
        $findCliente = Cliente::all()->count();

        return $findCliente;
    }

    public function buscaTotalVendasCadastradas () 
    {
        $findVendas = Venda::all()->count();

        return $findVendas;
    }
}
