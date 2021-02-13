<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/pedido.css') }}>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row my-3">
            {{-- Parte esquerda --}}
            <div class="col-lg-4"> 
                <div class="row">
                    <div class="col-5">

                        <a href="#" class="btn btn-primary w-100">Voltar</a>
                    </div>

                    <form class="col-7" action="#" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-primary w-100" value="Novo Pedido">
                    </form>
    
                </div>

                <div id="list-pedidos" class="list-group my-3">
                    <a href="#" class="list-group-item list-group-item-action active " data-toggle="list">Pedido 7</a>
                    <a href="#" class="list-group-item list-group-item-action " data-toggle="list">Pedido 6</a>
                    <a href="#" class="list-group-item list-group-item-action " data-toggle="list">Pedido 5</a>
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 4</a>
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 3</a>
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 2</a>
                    <a href="#" class="list-group-item list-group-item-action" data-toggle="list">Pedido 1</a>
                  </div>
    
            </div>
            
            {{-- Parte meio --}}

            <div class="col-lg-4">
                <h2 class="text-center my-3">Adicione Produtos</h2>
                {{-- Form de Tipo de produto --}}
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <select class="form-control">
                          <option>Pizza</option>
                          <option>Suco</option>
                          <option>Cerveja</option>
                        </select>
                      </div>  
                </form>

                {{-- Form de Produto --}}
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <select class="form-control">
                          <option>Pepperoni</option>
                          <option>Quatro Queijos</option>
                        </select>
                      </div>  
                </form>
                {{-- <input type="text" value="1" class="form-control"> --}}
                <input id="spinner" name="value" value="1">
               
                {{-- Botão Adicionar produto no pedido --}} 
                <form class="my-3" action="#" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-success  w-100" value="Adicionar Pedido">
                </form>

                 {{-- Form de Endereço --}}
                 <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <select class="form-control">
                          <option>Rua X</option>
                          <option>Rua Y</option>
                        </select>
                      </div>  
                </form>

                {{-- Botão Enviar --}}
                <form class="my-3" action="#" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-info w-100" value="Enviar Pedido">
                </form>

            </div>



            {{-- Parte direita --}}
            <div class="col-lg-4">

                <div class="form-group">
                    <input type="text" id="idTextState" class="text-center form-control my-3" value="Estado: Aberto">
                  </div>

                <div id="list-produtos" class="list-group my-3">
                    <span href="#" class="list-group-item " >
                        Pizza - Pepperoni - 1x
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash icons-list-produtos" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>
                    </span>
                    
                    <span href="#" class="list-group-item " >
                        Suco - Laranja - 2x 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash icons-list-produtos" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>
                    </span>

                    <span href="#" class="list-group-item " data-toggle="list">
                        Cerveja - Skol Lata -  3x
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash icons-list-produtos" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg>
                    </span>

                  </div>

                  <div class="input-group">
                    <input type="text" class="form-control" value="Valor Total:">
                    <div class="input-group-append">
                      <span class="input-group-text">R$</span>
                      <span class="input-group-text">0.00</span>
                    </div>
                  </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/
    tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src={{ asset('js/pedido.js') }}></script>

</body>
</html>