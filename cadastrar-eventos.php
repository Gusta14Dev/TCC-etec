<?php
	include_once("includes/conexao.php");

	$nome = $_POST['nome'];
	$ds_descricao = $_POST['ds_descricao'];
	$foto_evento = $_FILES['foto_evento']['name'];
	$cor = $_POST['cor'];
	$dt_inicio = $_POST['dt_inicio'];
	$tm_inicio = $_POST['tm_inicio'];
	$dt_fim = $_POST['dt_fim'];
	$tm_fim = $_POST['tm_fim'];
	$st_publico_privado = $_POST['st_publico_privado'];
	$usuario = $_SESSION['cd_usuario'];

	$timeset_inicio = $dt_inicio.' '.$tm_inicio.':00';
	$timeset_fim = $dt_fim.' '.$tm_fim.':00';

	$query="INSERT INTO `tb_calendario`(`nm_foto`, `nm_evento`, `ds_conteudo`, `nm_cor`, `dt_inicio`, `dt_fim`, `st_ativo`, `st_publico_privado`, `id_usuario`) VALUES ('imagens/eventos/$foto_evento', '$nome','$ds_descricao', '$cor','$timeset_inicio','$timeset_fim',1,$st_publico_privado, $usuario)";
	if ($mysqli->query($query)) {
		echo 'Certo';
		header('location:gerenciar_evento.php');
	}else{
		die("Connection failed: " . $mysqli->error);
	}
?>