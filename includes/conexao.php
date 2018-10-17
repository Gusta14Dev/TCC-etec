<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'db_etec_itanhaem';
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}
?>

