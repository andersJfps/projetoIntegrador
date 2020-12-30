<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Create de Tipo Produto</title>
</head>
<body>
    <div class="container">
        <form method="POST" action={{route('produto.update', $produto->id )}}>
            @csrf

            <input name="_method" type="hidden" value="PUT">
            <div class="form-group">
                <label for="input-id">ID</label>
                <input type="text" class="form-control" id="input-id" aria-describedby="idHelp" placeholder="#" disabled value={{$produto->id}}>
                <small id="idHelp" class="form-text text-muted">Não é necessário informar o ID para cadastrar um novo dado.</small>
            </div>
            <div class="form-group">
                <label for="input-nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="input-nome" placeholder="Digite o nome" value={{$produto->nome}}>
            </div>
            <div class="form-group">
                <label for="input-preco">Preço</label>
                <input type="text" name="preco" class="form-control" id="input-preco" placeholder="Digite o preço"  value={{$produto->preco}}>
            </div>
            <div class="form-group">
                <label for="select-tipo">Tipo</label>
                <select id="select-tipo" class="form-control" name="Tipo_Produtos_id">
                    {{-- Aqui terá um for --}}
                    {{-- <option value="Pizza">Pizza</option>
                    <option value="Suco">Suco</option>
                    <option value="Cerveja">Cerveja</option>
                    <option value="Lanche">Lanche</option> --}}
                    
                    @foreach ($tipoProdutos as $tipoProduto)
                        @if ($tipoProduto->id == $produto->Tipo_Produtos_id)
                            <option value={{$tipoProduto->id}} selected>{{$tipoProduto->descricao}}</option >
                        @else
                            <option value={{$tipoProduto->id}}>{{$tipoProduto->descricao}}</option >
                        @endif
                        
                    @endforeach


                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href={{route('produto.index')}} class="btn btn-primary">Voltar</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

