
function listarMercadorias() {
    var mercadorias = "", url = "php/teste.php";
    $.ajax({
        url: url,
        cache: false,
        dataType: "json",
        beforeSend: function(){
             $("h2").html("Carregando a Lista...");
        },
        error: function(){
            $("h2").html("Erro ou listar os dados");
        },
        success: function(r){
            if (r[0].erro) {
                $('h2').html(r[0].erro);
            }
            else{
                for (var i = 0; i < r.length; i++){
                   mercadorias += "<tr>";  
                   mercadorias += "<td class='text-center'>" + r[i].codigoDaMercadoria + "</td>";
                   mercadorias += "<td class='text-center'>" + r[i].nomeDaMercadoria + "</td>";
                   mercadorias += "<td class='text-center'>" + r[i].tipoDaMercadoria + "</td>"; 
                   mercadorias += "<td class='text-center'>" + r[i].quantidade + "</td>"; 
                   mercadorias += "<td class='text-center'>" + r[i].preco + "</td>"; 
                   mercadorias += "<td class='text-center'>" + r[i].tipoDoNegocio + "</td>"; 
                   mercadorias += "<td class='text-center'>";
                   mercadorias += "<a title='edit' class='btn btn-default btn-sm edit' id='edit' rel='"+r[i].id+"'> <i class='glyphicon glyphicon-edit text-primary'></i> </a> ";
                   mercadorias += "<a title='del' class='btn btn-default btn-sm del' id='del' rel='"+r[i].id+"'><i class='glyphicon glyphicon-trash text-danger'></i> </a> </td>"; 
                   mercadorias += "</tr>";
                } 
                    
                $("#tableMercadoria tbody").html(mercadorias);
                $("h2").empty();
            }
        }
    });
    
}


$(document).ready(function(){
    $('#btn-save').click(function(){
        var form = new FormData($('#frm_mercadoria')[0]);
        $.ajax({
            url: 'php/enviar.php',
            type: 'POST',
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            data: form,
            timeout: 8000,
            beforeSend: function(){
                $("#response").html("Inserindo ...");
            },
            success: function(response){
                $('#response').html(response);
                $("#response").fadeOut(9000);
            },
             error: function(response){
                $("#response").html(response.error);
            }
        });
    });
    
    $(".edit").click(function(evento){
        evento.preventDefault();
        var id = $(this).attr('rel');
        var acao = "edit";
        $.ajax({
            url: 'php/enviar.php',
            type: 'get',
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            data: "id="+id+"&acao="+acao,
            timeout: 8000,
            success: function(response){
                $("#response").html(response);
                $("#response").fadeOut(9000);
            },
             error: function(response){
                $("#res").html(response.error);
            }
        });
    });
    
    $(".del").click(function(evento){
        evento.preventDefault();
        var id = $(this).attr('rel');
        var acao = "del";
        $.ajax({
            url: 'php/enviar.php',
            type: 'get',
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,
            data: "id="+id+"&acao="+acao,
            timeout: 8000,
            success: function(response){
                $("#response").html(response);
                $("#response").fadeOut(9000);
            },
             error: function(response){
                $("#res").html(response.error);
            }
        });
    });    
});
