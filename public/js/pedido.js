$( "#spinner" ).spinner({
    min:1,
    max:10
});

$('#idFormNovoPedido').on('submit', function(event) {
    event.preventDefault();
    const endereco_id = $('#idSelectEndereco').val();
    //Inicia uma chamada assincrona
    $.ajax({
        //Tipo da requisição
        type:"POST",
        //Utilizo uma template string para construção
        url:`/pedido/${endereco_id}`,
        //Pega o elemento idSelectEndereco e transforma ele em dados para serem enviados
        data:$(this).serialize(),
        //Tipo dos dados para serem enviados
        dataType:'json',
        success: function(response){
            //Limpa o HTML
            $('#list-pedidos').html("");
            response.return.forEach(element => {
                $('#list-pedidos').append(`<a href="" class="list-group-item list-group-item-action" data-toggle="list" value=${element.id}>Pedido ${element.id}</a>`);
            });

            //Click no primeiro a
            $("#list-pedidos a:first-child").click();

            //Quando o servidor consegue responder (mesmo que positivo ou negativo)
            // console.log(response.success);
            // console.log(response.message);
            // console.log(response.return);
        },
        error: function(error){
            //Quando o servidor não consegue responder
            console.log(error.responseJSON);
        }
    })

} );