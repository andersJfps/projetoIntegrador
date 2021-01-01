<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\TipoProduto;
use App\Models\Produto;
use DB;


class tipoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Buscar os dados que estão na tabela Tipo_Produtos
        $tipoProdutos = DB::select('select * from Tipo_Produtos');
        return view('TipoProduto.index')->with('tipoProdutos',$tipoProdutos);
    }


    /**
     * Display a listing of the resource. With error message.
     *
     * @return \Illuminate\Http\Response
     */
    private function indexError($error)
    {

        // Buscar os dados que estão na tabela Tipo_Produtos
        $tipoProdutos = DB::select('select * from Tipo_Produtos');
        return view('TipoProduto.index')->with('tipoProdutos',$tipoProdutos)->with('error', $error);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TipoProduto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $tipoProduto = new TipoProduto();
        $tipoProduto->descricao = $request->descricao;

        try {
            $tipoProduto->save();
        } catch (\Throwable $th) {
            $error['type']      = 'danger';
            $error['message']   = 'Problema ao salvar um recurso';
            return $this->indexError($error);
        }

       
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Buscar os dados que estão na tabela Tipo_Produtos
        $tipoProduto = TipoProduto::find($id);
        if(isset($tipoProduto))
            return view('TipoProduto.show')->with('tipoProduto', $tipoProduto);
        
        $error['type']      = 'danger';
        $error['message']   = 'Recurso não encontrado';
        return $this->indexError($error);
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // Buscar os dados que estão na tabela Tipo_Produtos
        $tipoProduto = TipoProduto::find($id);
        if(isset($tipoProduto))
            return view('TipoProduto.edit')->with('tipoProduto', $tipoProduto);
        
        // #TODO Ajustar tela de erro
        $error['type']      = 'danger';
        $error['message']   = 'Recurso não encontrado';
        return $this->indexError($error);

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

        // Buscar os dados que estão na tabela Tipo_Produtos
        $tipoProduto = TipoProduto::find($id);
        if(isset($tipoProduto)){
            $tipoProduto->descricao = $request->descricao;

            try {
                $tipoProduto->update();
            } catch (\Throwable $th) {
                $error['type']      = 'danger';
                $error['message']   = 'Problema ao atualizar um recurso';
                return $this->indexError($error);
            }
            return $this->index();
        }   
        $error['type']      = 'danger';
        $error['message']   = 'Recurso não encontrado   ';
        return $this->indexError($error);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoProduto = TipoProduto::find($id);
        if(isset($tipoProduto)){

            try {
                $tipoProduto->delete();
            } catch (\Throwable $th) {
                $error['type']      = 'danger';
                $error['message']   = 'Problema ao remover um recurso';
                return $this->indexError($error);
            }
            return $this->index();
        }
       
    }
}
