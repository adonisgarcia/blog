/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function() {

    $('#ok').click(function() {
// busca informação dos campos
        var nome = $('#nome').val();
        var senha = $('#senha').val();

        // chamada AJAX
        $.ajax({
            // configurações
            type: "post",
            url: "list.php", // caminho do arquivo PHP
            dataType: "JSON",
            data: {
                // dados para serem enviados para o PHP
                nome_enviar : nome,
                senha_enviar : senha
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('error - ' + errorThrown);
            },
            success: function(result) {
                $('#lista').append(nome + '<font color="yellow"> - ' + 'OK </font> <br />');
                
                 if(result.retorno === "Usuário encontrado"){ // se retorno igual a Usuário encontrado mudo a página
				//header('Location: page02.php');
                               window.location="page02.php";
                   
				}else{
					$('#lista').append(result.retorno + '<font color="yellow"></font> <br />');
					} 
            } 
        });
        // esvazia os campos
        $('#nome').val('');
        $('#senha').val('');       
        //location.href="page02.php";

       
        //header("Location:blog/src/test/java/test/blog/page02.php");
    });

    $('#confirmar').click(function() {
        // busca informação dos campos
        var nome = $('#nome1').val();
        var senha = $('#senha1').val();
        var confirma = $('#confirma').val();
        var email = $('#email').val();

        //confere senha 
        if ((senha === null) || (senha === "")) {
            alert("Preencha o campo senha");
            return false;
        }

        if (confirma === null || confirma === "") {
            alert("Preencha o campo confirma senha");
            return false;
        }

        if (senha !== confirma) {
            alert("Confirmação de senha inválido");
            return false;
        }
        if (senha === confirma) {
            // chamada AJAX
            $.ajax({
                // configurações
                type: "post",
                url: "list1.php", // caminho do arquivo PHP
                dataType: "JSON",
                data: {
                    // dados para serem enviados para o PHP
                    nome1_enviar: nome,
                    senha1_enviar: senha,
                    email_enviar: email
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('error - ' + errorThrown);
                },
                success: function(result) {
                    $('#lista').append(nome + ' - ' + email + ' - ' + 'OK <br />');
                    $('#lista').append(result.retorno + '<br />');
                    
                }
            });
            // esvazia os campos
            $('#nome1').val('');
            $('#senha1').val('');
            $('#confirma').val('');
            $('#email').val('');
        }
    });
});
