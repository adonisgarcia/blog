<?php
include("config.php");

$id = $_SESSION['id'];
$comentario = $_POST['comentario_enviar'];//atribui 
$data = $_POST['data_enviar'];//atribui 

$result = mysql_query("SELECT  * FROM post");//procura

while($rg=mysql_fetch_array($result)){
  if($rg[0] == $id){//caso já tenha comentado
    
    $sql = "UPDATE  post 
    SET comentario ='$comentario', data='$data'
    WHERE id2 = $id";
    }
    else{//ou não
        $sql = "INSERT INTO post ( id2, comentario, data) VALUEs ('".$id."', '".$comentario."', '".$data."')";//atribui e usando insere
    }
}
if (mysql_query($sql)){
	$retorno = "inserido com sucesso";
        }
else{
	$retorno = "falha ao tentar inserir";
    }
	
$arrayRetorno['retorno'] = $retorno;
echo json_encode($arrayRetorno);

?>

