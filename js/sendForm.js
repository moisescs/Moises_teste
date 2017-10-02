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
                Refresh();
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
                Refresh(9000);
            },
             error: function(response){
                $("#res").html(response.error);
            }
        });
    });
    
    function Refresh(){
        window.location.reload();
    }
    
});