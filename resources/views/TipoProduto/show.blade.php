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

        <div class="form-group">
          <label for="inputId">ID</label>
          <input type="text" class="form-control" id="inputId" disabled value={{$tipoProduto->id}}>

        </div>
        <div class="form-group">
          <label for="inputDesc">Descrição</label>
          <input  type="text" class="form-control" id="inputDesc" value={{$tipoProduto->descricao}} disabled>
        </div>

        <div class="form-group">
            <label for="inputUpdateAt">Data de atualização</label>
            <input type="text" class="form-control" id="inputUpdateAt" value={{$tipoProduto->updated_at}} disabled>
          </div>

          <div class="form-group">
            <label for="inputCreateAt">Data de criação</label>
            <input type="text" class="form-control" id="inputCreateAt" value={{$tipoProduto->created_at}} disabled>
          </div>
    
        <a href={{route('tipoproduto.index')}} class="btn btn-primary">Voltar</a>
   </div>

</body>





<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
