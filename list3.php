<?php
$link = mysql_connect('localhost', 'root', ''); // conecta com servidor 
if (!$link) {
    die('Could not connect: ' . mysql_error());	// se der erro
}
//echo 'Connected successfully';					// conectado

$db_selected = mysql_select_db('cadastro', $link);	// seleciona a base de dados
if (!$db_selected) {
    die ('Can\'t use cadastro : ' . mysql_error());	// erro de seleחדo da base
}
//echo "<br />Selecionou o cadastro!"; //imprime do echo
$nome1 = $_POST['nome1_enviar'];//atribui 
$senha1 = $_POST['senha1_enviar'];//atribui 
$email = $_POST['email_enviar'];//atribui 

$sql = "INSERT INTO usuario ( nome, senha, email) VALUEs ('".$nome1."', '".$senha1."', '".$email."')";//atribui e usando insere

if (mysql_query($sql)){
	$retorno = "inserido com sucesso";
        }
else{
	$retorno = "falha ao tentar inserir";
    }
	
$arrayRetorno['retorno'] = $retorno;
echo json_encode($arrayRetorno);

//mysql_close($link);//fecha

//header("Location:page02.php");
?>