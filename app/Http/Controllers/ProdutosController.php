<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()  
    {
        $produto = Produto::all();

        return view('produtos.paginacao', compact('produto'));
    }

}
