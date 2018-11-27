<?php
	include_once("conexao.php");
	$evento = $_GET['editar'];
	$result_events = "SELECT * FROM tb_calendario WHERE cd_calendario = ".$evento;
	$resultado = $mysqli->query($result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">

	<title>Cadastrar eventos</title>

	<link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/cadastrar-eventos.css" >

</head>
<body>
	<form class="form-cad mx-auto mt-5 bg-light" action="cadastrar-eventos.php" method="post" enctype="multipart/form-data">
		<h1 class="text-center mb-4"><?php echo $evento; ?></h1>
		<?php
			while($obj = $resultado->fetch_object()){
		?>
		<div class="form-label-group">
			<input type="text" name="nome" id="nm-evento" <?php echo 'value="'.$obj->nm_evento.'"'; ?> class="form-control" placeholder="Nome do evento" required autofocus> 
			<label for="nm-evento">Nome do evento</label>
		</div>
		<div class="form-label-group">
			<textarea class="form-control"  name="ds_descricao" id="ds-descricao" <?php echo 'value="'.$obj->ds_conteudo.'"'; ?> placeholder="Descrição do evento" rows="5" required></textarea>
			<label for="ds-descricao">Descrição do evento</label>
		</div>
		
		<div class="custom-file">
		  <input type="file" name="foto_evento" id="customFile">
		</div>
		
		<div class="form-group mt-3">
			<div class="form-row">
				<div class="col-sm-1">
					<label for="color h1">Cor</label>
				</div>
				<div class="col-sm-11">
					<select name="cor" class="form-control" id="color" <?php echo 'selected="'.$obj->nm_cor.'"'; ?> >
				    	<option value="#007bff" >Azul</option>
				    	<option value="#28a745" >Verde</option>
				    	<option value="#dc3545">Vermelho</option>
				    	<option value="#fd7e14" >Laranja</option>
				    	<option value="#6f42c1" >Roxo</option>
				    </select>
				</div>
			</div>
			
		    
		</div>
		<div class="form-group">
			<label >Data e hora do inicio do evento</label>
			<div class="form-row">
				<div class="col-sm-6">
					<input type="date" name="dt_inicio" class="form-control" required>
				</div>
				<div class="col-sm-6">
					<input type="time" name="tm_inicio" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label >Data e hora do fim do evento</label>
			<div class="form-row">
				<div class="col-sm-6">
					<input type="date" name="dt_fim" class="form-control" required>
				</div>
				<div class="col-sm-6">
					<input type="time" name="tm_fim" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="w-100 text-center">
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="publico" name="st_publico_privado" class="custom-control-input" value="1" required>
			  <label class="custom-control-label" for="publico">Evento publico</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
			  <input type="radio" id="privado" name="st_publico_privado" class="custom-control-input" value="2" required>
			  <label class="custom-control-label" for="privado" >Evento privado</label>
			</div>
		</div>
		<div class="form-group mt-5">
			<button type="submit" class="btn btn-primary btn-lg form-control">Editar</button>
		<?php
			}
		?>
		</div>
	</form>

</body>
</html>
	<script>
        var loadFile = function(event) {
	        var reader = new FileReader();
	        reader.onload = function(){
	        	var output = document.getElementById('output');
	        	output.src = reader.result;
	        };
	        reader.readAsDataURL(event.target.files[0]);
        };
    </script>