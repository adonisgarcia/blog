<?php
include("config.php");

$nome0 = $_POST['nome_enviar'];//atribui 
$senha0 = $_POST['senha_enviar'];//atribui 

$sql = "SELECT * FROM usuario WHERE  nome ='".$nome0."' AND senha ='".$senha0."'";//procura no banco

if ($rs = mysql_query($sql)){
        if (mysql_num_rows($rs)>0){                
			$rg = mysql_fetch_array($rs);        
			$_SESSION['id'] = $rg[0];
			$_SESSION['nome'] = $rg[1];
                        $_SESSION['email'] = $rg[3];
			$retorno = "Usuário encontrado";
	} else {
		$retorno = "Usuário não encontrado";
		}
} else {
	$retorno = "Falha na consulta";
	}
		
$arrayRetorno['retorno'] = $retorno;
echo json_encode($arrayRetorno);

?>