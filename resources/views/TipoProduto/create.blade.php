<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de Tipo Produto</title>

  <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



</head>
<body>

   <div class="container">
    <form method="post" action={{route('tipoproduto.store')}}>
        @csrf
        <div class="form-group">
          <label for="inputId">ID</label>
          <input type="text" class="form-control" id="inputId" disabled value="#">

        </div>
        <div class="form-group">
          <label for="inputDesc">Descrição</label>
          <input name="descricao" type="text" class="form-control" id="inputDesc" placeholder="Informe a descrição do recurso">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href={{route('tipoproduto.index')}} class="btn btn-primary">Voltar</a>
      </form>
   </div>

</body>





<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
