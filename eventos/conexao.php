<?php
session_start();
$servidor = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'celke';
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}
?>

