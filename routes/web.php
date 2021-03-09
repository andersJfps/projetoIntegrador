<?php

use Illuminate\Support\Facades\Route;
use App\Models\TipoProduto;
use App\Models\Produto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('produto', 'App\http\Controllers\ProdutoController');

Route::resource('tipoproduto', 'App\http\Controllers\TipoProdutoController');

Route::get('/pedido', 'App\http\Controllers\PedidoController@index')->name('pedido.index');
Route::post('/pedido/{endereco_id}', 'App\http\Controllers\PedidoController@store')->name('pedido.store');

Route::resource('endereco', 'App\http\Controllers\EnderecoController');



