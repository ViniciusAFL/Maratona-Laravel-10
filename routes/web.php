<?php

use App\Http\Controllers\ProdutosController;
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