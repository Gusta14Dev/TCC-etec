<?php
	include_once("includes/conexao.php");
	$id = $_POST['excluir'];
	$delete = "DELETE FROM `tb_calendario` WHERE `cd_calendario` = ".$id;
	if ($mysqli->query($delete)) {
		?>
		<script type="text/javascript">
			window.location.href = "gerenciar_evento.php";
		</script>
		<?php
	}else{
		die("Connection failed: " . $mysqli->error);
	}
?>