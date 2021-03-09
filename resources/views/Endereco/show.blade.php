<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Show de Endereços</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="imput-ID">ID</label>
              <input  type="email" class="form-control" id="imput-ID" disabled value={{$endereco->id}}>
            </div>
            <div class="form-group">
                <label for="input-bairro">Bairro</label>
                <input name="bairro" type="text" class="form-control" id="input-bairro" disabled value="{{$endereco->bairro }}">
              </div>
              <div class="form-group">
                <label for="input-preco">Logradouro</label>
                <input name="logradouro" type="text" class="form-control" id="input-preco" disabled value="{{$endereco->logradouro}}" >
              </div>
              <div class="form-group">
                <label for="input-preco">Numero</label>
                <input  name="numero" type="text" class="form-control" id="input-preco" disabled value="{{$endereco->numero}}" >
              </div>
              <div class="form-group">
                <label for="input-preco">Complemento</label>
                <input name="complemento" type="text" class="form-control" id="input-preco" disabled value="{{$endereco->complemento}}" >
              </div>
            <a href={{route('endereco.index')}} class="btn btn-primary">Voltar</a>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>