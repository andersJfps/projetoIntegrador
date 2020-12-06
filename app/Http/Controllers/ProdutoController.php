<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use DB;

class ProdutoController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $produtos = DB::select('select * from Produtos');
        return view('Produto.index')->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // Buscar os dados que estão na tabela Tipo_Produtos
         $tipoProdutos = DB::select('select * from Tipo_Produtos');
        return view('Produto.create')->with('tipoProdutos', $tipoProdutos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome              =  $request->nome;
        $produto->preco             =  $request->preco;
        $produto->Tipo_Produtos_id  = $request->Tipo_Produtos_id;
        $produto->save();

        $tipoProdutos = DB::select('select * from Tipo_Produtos');
        return view('Produto.create')->with('tipoProdutos', $tipoProdutos);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
