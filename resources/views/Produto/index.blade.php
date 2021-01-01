<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Index de Tipo Produto</title>
</head>
<body>

  @if (isset($error))
  <div class="alert alert-{{$error['type']}} alert-dismissible fade show" role="alert">
      <strong> {{$error['message']}}. </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
  
@endif

    <div class="container">
        <a href={{route('produto.create')}} class="btn btn-primary">Cadastrar Produto</a>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Tipo</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
    
              @foreach ($produtos as $produto)
                <tr>
                <th scope="row">{{$produto->id}}</th>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->descricao}}</td>
                <td>
                    <a href={{route('produto.show', $produto->id)}} class="btn btn-primary">Show</a>
                    <a href={{route('produto.edit', $produto->id)}} class="btn btn-info">Edit</a>

                    <a href="#" class="btn btn-danger destroyButton"  data-toggle="modal" data-target="#exampleModal" value={{route('produto.destroy', $produto->id )}}>Delete</a>
                </td>
                </tr>
                </tr>
              @endforeach
    
            </tbody>
          </table>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Remover recurso</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button> 
                  </div>
                  <div class="modal-body">
                      Deseja remover este recurso?
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                  <form id="destroyForm" method="POST" action="">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">

                      <input class="btn btn-danger" type="submit" value="Confirmar">

                  </form>
                  </div>
              </div>
              </div>
        </div>





    </div>


    <script>
        
      const destroyButtons = document.querySelectorAll(".destroyButton");
      const destroyForm = document.querySelector("#destroyForm");

      destroyButtons.forEach(destroyButton => {
          destroyButton.addEventListener('click', configureAction);
          
      });

      function configureAction(){
          destroyForm.setAttribute('action', this.getAttribute('value'));
      }

  </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
