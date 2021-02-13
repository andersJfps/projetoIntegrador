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
        return $this->indexMessage(null);
    }


    /**
     * Display a listing of the resource. With error message.
     *
     * @return \Illuminate\Http\Response
     */
    private function indexMessage($message)
    {
        // Buscar os dados que estão na tabela Tipo_Produtos
        $tipoProdutos = DB::select('select * from Tipo_Produtos');
        return view('TipoProduto.index')->with('tipoProdutos',$tipoProdutos)->with('message', $message);
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
            $message['type']      = 'danger';
            $message['message']   = 'Problema ao salvar um recurso';
            return $this->indexMessage($message);
        }
        // Constrói a mensagem de sucesso.
        $message['type']      = 'success';
        $message['message']   = 'Recurso salvo com sucesso';
        // Retorna para a view index
        return $this->indexMessage($message);
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
        
        $message['type']      = 'danger';
        $message['message']   = 'Recurso não encontrado';
        return $this->indexMessage($message);
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
        $message['type']      = 'danger';
        $message['message']   = 'Recurso não encontrado';
        return $this->indexMessage($message);

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
                $message['type']      = 'danger';
                $message['message']   = 'Problema ao atualizar um recurso';
                return $this->indexMessage($message);
            }
            // Constrói a mensagem de sucesso.
            $message['type']      = 'success';
            $message['message']   = 'Recurso atualizado com sucesso';
            // Retorna para a view index
            return $this->indexMessage($message);
        }   
        $message['type']      = 'danger';
        $message['message']   = 'Recurso não encontrado   ';
        return $this->indexMessage($message);
       
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
                $message['type']      = 'danger';
                $message['message']   = 'Problema ao remover um recurso';
                return $this->indexMessage($message);
            }
            // Constrói a mensagem de sucesso.
            $message['type']      = 'success';
            $message['message']   = 'Recurso removido com sucesso';
            // Retorna para a view index
            return $this->indexMessage($message);
        }
        $message['type']      = 'danger';
        $message['message']   = 'Recurso não encontrado   ';
        return $this->indexMessage($message);
       
    }
}
