<?php
include("config.php");

//echo "<br />Selecionou o cadastro!"; //imprime do echo
$nome1 = $_POST['nome1_enviar'];//atribui 
$senha1 = $_POST['senha1_enviar'];//atribui 
$email = $_POST['email_enviar'];//atribui 

$sql = "INSERT INTO usuario ( nome, senha, email) VALUEs ('".$nome1."', '".$senha1."', '".$email."')";//atribui e usando insere

if (mysql_query($sql)){
	$retorno = "inserido com sucesso <br>Entre no seu login";
        }
else{
	$retorno = "falha ao tentar inserir";
    }
	
$arrayRetorno['retorno'] = $retorno;
echo json_encode($arrayRetorno);

?>