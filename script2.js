/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $('#ok2').click(function() {
// busca informação dos campos
      
        var comentario = $('#comentario').val();
        var data = document.lastModified;
        

        // chamada AJAX
        $.ajax({
            // configurações
            type: "post",
            url: "list2.php", // caminho do arquivo PHP
            dataType: "JSON",
            data: {
                // dados para serem enviados para o PHP
                comentario_enviar : comentario,
                data_enviar : data
                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('error - ' + errorThrown);
            },
            success: function(result) {
                $('#lista').append(result.retorno + ' <br />');
                
                 
            } 
        });
     });
 });