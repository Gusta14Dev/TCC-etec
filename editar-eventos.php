<?php
	date_default_timezone_set('UTC');
	include_once("conexao.php");
	if (isset($_GET['editar'])) {
		$evento = $_GET['editar'];
		$result_events = "SELECT * FROM tb_calendario WHERE cd_calendario = ".$evento;
		$resultado = $mysqli->query($result_events);
	}
	if (isset($_POST['butao'])) {
		$evento = $_POST['evento'];
		$nome = $_POST['nome'];
		$ds_descricao = $_POST['ds_descricao'];
		$cor = $_POST['cor'];
		$dt = explode("/", $_POST['dt_inicio']);
		$dt_inicio = $dt[2]."-".$dt[1]."-".$dt[0];
		$tm_inicio = $_POST['tm_inicio'];
		$dt1 = explode("/", $_POST['dt_fim']);
		$dt_fim = $dt1[2]."-".$dt1[1]."-".$dt1[0];
		$tm_fim = $_POST['tm_fim'];
		$st_publico_privado = $_POST['st_publico_privado'];
		$usuario = $_SESSION['cd_usuario'];

		$timeset_inicio = $dt_inicio.' '.$tm_inicio.':00';
		$timeset_fim = $dt_fim.' '.$tm_fim.':00';

		$query="UPDATE `tb_calendario` SET `nm_evento`= '$nome',`ds_conteudo`= '$ds_descricao',`nm_cor`= '$cor',`dt_inicio`= '$timeset_inicio' ,`dt_fim`= '$timeset_fim ' ,`st_ativo`= 1 ,`st_publico_privado`= $st_publico_privado ,`id_usuario`= $usuario WHERE cd_calendario = $evento";
		if ($mysqli->query($query)) {
			?>
			<script type="text/javascript">
				window.location.href = "index.php";
			</script>
			<?php
		}else{
			die("Connection failed: " . $mysqli->error);
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">

	<title>Editar eventos</title>

	<link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/cadastrar-eventos.css" >

</head>
<body>
	<form class="form-cad mx-auto mt-5 bg-light" action="editar-eventos.php" method="post" enctype="multipart/form-data">
		<?php
			while($obj = $resultado->fetch_object()){
		?>
		<h1 class="text-center mb-4"><?php echo $obj->nm_evento. " - ". $evento; ?></h1>
		<?php
				$explode = explode(" ", $obj->dt_inicio);
				$dt_inicio = date('d/m/Y', strtotime($explode[0]));
				$hr_inicio = $explode[1];

				$explode2 = explode(" ", $obj->dt_fim);
				$dt_final = date('d/m/Y', strtotime($explode2[0]));
				$hr_final = $explode2[1];
		?>
		<div class="form-label-group">
			<input type="text" name="nome" id="nm-evento" <?php echo 'value="'.$obj->nm_evento.'"'; ?> class="form-control" placeholder="Nome do evento" required autofocus> 
			<label for="nm-evento">Nome do evento</label>
		</div>
		<div class="form-label-group">
			<textarea class="form-control"  name="ds_descricao" id="ds-descricao" placeholder="Descrição do evento" rows="5" required><?php echo $obj->ds_conteudo; ?></textarea>
			<label for="ds-descricao">Descrição do evento</label>
		</div>
		
		<div class="form-group mt-3">
			<div class="form-row">
				<div class="col-sm-1">
					<label for="color h1">Cor</label>
				</div>
				<div class="col-sm-11">
					<select name="cor" class="form-control" id="color" >
				    	<option value="#007bff" <?php if ( "#007bff" == $obj->nm_cor) { echo "selected"; } ?> >Azul</option>
				    	<option value="#dc3545" <?php if ( "#28a745" == $obj->nm_cor) { echo "selected"; } ?> >Verde</option>
				    	<option value="#dc3545" <?php if ( "#dc3545" == $obj->nm_cor) { echo "selected"; } ?> >Vermelho</option>
				    	<option value="#fd7e14" <?php if ( "#fd7e14" == $obj->nm_cor) { echo "selected"; } ?> >Laranja</option>
				    	<option value="#6f42c1" <?php if ( "#6f42c1" == $obj->nm_cor) { echo "selected"; } ?> >Roxo</option>
				    </select>
				</div>
			</div>
			
		    
		</div>
		<div class="form-group">
			<label >Data e hora do inicio do evento</label>
			<div class="form-row">
				<div class="col-sm-6">
					<input type="text" name="dt_inicio"  class="form-control" <?php echo 'value="'.$dt_inicio.'"'; ?> onKeyPress="Data(event, this)" required>
				</div>
				<div class="col-sm-6">
					<input type="text" name="tm_inicio" class="form-control" <?php echo 'value="'.$hr_inicio.'"'; ?> onKeyPress="Hora(event, this)" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label >Data e hora do fim do evento</label>
			<div class="form-row">
				<div class="col-sm-6">
					<input type="text" name="dt_fim" class="form-control" <?php echo 'value="'.$dt_final.'"'; ?> onKeyPress="Data(event, this)"  required>
				</div>
				<div class="col-sm-6">
					<input type="text" name="tm_fim" class="form-control" <?php echo 'value="'.$hr_final.'"'; ?> onKeyPress="Hora(event, this)" required>
				</div>
			</div>
		</div>
		<div class="w-100 text-center">
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="publico" name="st_publico_privado" class="custom-control-input" value="1" <?php if ( "1" == $obj->st_publico_privado) { echo "checked"; } ?> required>
			  <label class="custom-control-label" for="publico">Evento publico</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="privado" name="st_publico_privado" class="custom-control-input" value="2" <?php if ( "2" == $obj->st_publico_privado) { echo "checked"; } ?> required>
			  <label class="custom-control-label" for="privado" >Evento privado</label>
			</div>
		</div>
			<input type="hidden" <?php echo 'value="'. $evento . '"'; ?> name="evento">
		<div class="form-group mt-5">
			<button type="submit" name="butao" class="btn btn-primary btn-lg form-control">Editar</button>
		<?php
			}
		?>
		</div>
	</form>
</body>
</html>
	<script>
        function Data(evento, objeto){
         	var keypress=(window.event)?event.keyCode:evento.which;
         	campo = eval (objeto);
          
         	caracteres = '0123456789';
         	separacao1 = '/';
         	conjunto1 = 2;
         	conjunto2 = 5;
         	if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (10)){
         		if (campo.value.length == conjunto1 )
         		campo.value = campo.value + separacao1;
         		else if (campo.value.length == conjunto2)
         		campo.value = campo.value + separacao1;
         	}else{
         		event.returnValue = false;
         	}
         }
         function Hora(evento, objeto){
         	var keypress=(window.event)?event.keyCode:evento.which;
         	campo = eval (objeto);
          
         	caracteres = '0123456789';
         	separacao3 = ':';
         	conjunto1 = 2;
         	conjunto2 = 5;
         	if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (8)){
         		if (campo.value.length == conjunto1 )
         		campo.value = campo.value + separacao3;
         		else if (campo.value.length == conjunto2)
         		campo.value = campo.value + separacao3;
         	}else{
         		event.returnValue = false;
         	}
         }
    </script>