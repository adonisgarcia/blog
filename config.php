<?php
session_start();

$link = mysql_connect('localhost', 'root', '');
$db_selected = mysql_select_db('cadastro', $link);
?>