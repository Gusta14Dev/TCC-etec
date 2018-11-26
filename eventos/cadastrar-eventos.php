<?php
	include_once("conexao.php");

	$nome = $_POST['nome'];
	$ds_descricao = $_POST['ds_descricao'];
	$foto_evento = $_FILES['foto_evento']['name'];
	$cor = $_POST['cor'];
	$dt_inicio = $_POST['dt_inicio'];
	$tm_inicio = $_POST['tm_inicio'];
	$dt_fim = $_POST['dt_fim'];
	$tm_fim = $_POST['tm_fim'];
	$st_publico_privado = $_POST['st_publico_privado'];

	$timeset_inicio = $dt_inicio.' '.$tm_inicio.':00';
	$timeset_fim = $dt_fim.' '.$tm_fim.':00';

	$query="INSERT INTO `tb_evento`(`nm_foto`, `nm_evento`, `ds_evento`, `nm_cor`, `dt_inicio`, `dt_fim`, `st_ativo`, `st_publico_privado`, `id_coordenador`) VALUES ('imagens/eventos/$foto_evento', '$nome','$ds_descricao', '$cor','$timeset_inicio','$timeset_fim',1,$st_publico_privado,1)";
	if ($mysqli->query($query)) {
		echo 'harison';
	}else{
		echo 'Gabriel';
	}
?>