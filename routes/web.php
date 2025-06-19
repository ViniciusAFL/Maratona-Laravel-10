<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendaController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::prefix('produtos')
->controller(ProdutosController::class)
->group(function () {
    Route::get('/', 'index')->name('produtos.index');
    Route::delete('/', 'delete')->name('produtos.delete');
    //Cadastro Create
    Route::get('/cadastrarProduto', 'cadastrarProduto')->name('produtos.cadastrar');
    Route::post('/cadastrarProduto', 'cadastrarProduto')->name('produtos.cadastrar');

    //Atualiza update
    Route::get('/AtualizarProduto/{id}', 'AtualizarProduto')->name('produtos.atualizar');
    Route::put('/AtualizarProduto/{id}', 'AtualizarProduto')->name('produtos.atualizar');


});

Route::prefix('Clientes')
->controller(ClientesController::class)
->group(function () {
    Route::get('/', 'index')->name('clientes.index');
    Route::delete('/', 'delete')->name('clientes.delete');
    //Cadastro Create
    Route::get('/cadastrarCliente', 'cadastrarCliente')->name('clientes.cadastrar');
    Route::post('/cadastrarCliente', 'cadastrarCliente')->name('clientes.cadastrar');

    //Atualiza update
    Route::get('/AtualizarCliente/{id}', 'AtualizarCliente')->name('clientes.atualizar');
    Route::put('/AtualizarCliente/{id}', 'AtualizarCliente')->name('clientes.atualizar');
});


Route::prefix('Vendas')
->controller(VendaController::class)
->group(function () {
    Route::get('/', 'index')->name('vendas.index');
    //Cadastro Create
    Route::get('/cadastrarVenda', 'cadastrarVenda')->name('vendas.cadastrar');
    Route::post('/cadastrarVenda', 'cadastrarVenda')->name('vendas.cadastrar');
    Route::get('/enviaComprovantePorEmail/{id}', [VendaController::class, 'enviaComprovantePorEmail'])->name('enviaComprovantePorEmail.venda');
});

Route::prefix('dashboard')
->controller(DashboardController::class)
->group(function(){
    Route::get('/', 'index')->name('dashboard.index');
});

