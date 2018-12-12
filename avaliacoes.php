<?php
  include_once("includes/conexao.php");
  include_once("includes/texto.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <title>Página das Avaliações</title>
    <!-- Bootstrap e FontAwsome CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link href="css/all.css" rel="stylesheet">
    <!-- Menu Lateral e Jumbotron CSS -->
    <link href="css/menu-lateral.css" rel="stylesheet">
    <link href="css/layout_form.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.css">
	</head>
	<style type="text/css">
		@media (min-width: 576px){
			.botao{
				width: 70%;
			}
		}
		.botao{
			width: auto;
		}
	</style>
	<body>
		<!--Menu Lateral-->
  	<?php
  		include_once ("includes/menu-professor.php");
  	?>
		<div id="container-form">
			
			<div class="jumbotron mx-sm-auto p-5">
	 			<div class="col-md-3 col-12 mt-2 ml-auto pr-0">
					<button class="btn btn-success" id="cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastrar Avaliações <i class="fas fa-plus fa-sm"></i></button>
		</div>
	      <hr/>
	      <div id="list" class="row">
	        <div class="table-responsive col-md-12">
	        	<table class="table table-striped" cellspacing="0" cellpadding="0">
	            <thead>
	              <tr>
	                <th>CD</th>
	                <th>Tipo</th>
	               	<th>Conteúdo</th>
	                <th>Data</th>
	                <th class="actions">Ações</th>
	              </tr>
	            </thead>
	            <tbody>
								<tr>
<?php 
	$select="SELECT * FROM `tb_calendario` WHERE 1 ORDER BY cd_calendario ASC";
	    if ($con=$mysqli->query($select)) {
	    while ($obj= $con->fetch_object()) {
			echo  "<td>".$obj->cd_calendario."</td>";
			echo "<td>".$obj->nm_tipo."</td>";
			echo "<td>".$obj->ds_conteudo."</td>";
			echo "<td>".$obj->dt_inicio."</td>";
	     	echo '<td class="actions">';
			echo '<a href="avaliacao.php?view=0&itens='.$obj->cd_calendario.'" TYPE="BUTTON" NAME="submit" class="btn btn-success btn-xs botao" >Visualizar</a>';
			echo ' <a href="alterar_avaliacao.php?edit=0&itens='.$obj->cd_calendario.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar</a>';
			echo ' <a class="btn btn-danger btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
			echo $obj->cd_calendario.'">Excluir</a>';
			echo '</td>';
			echo '</tr>';
	    }
	    }else{
	    	echo "Não há nenhum item cadastrado!";
	    }
?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
<?php
	$selectmodal="SELECT * FROM `tb_calendario`";
	    if ($con=$mysqli->query($selectmodal)) {
	    while ($obj= $con->fetch_object()) {
			echo '<div class="modal fade" id="delete-modal';
			echo $obj->cd_calendario . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	  			<div class="modal-dialog" role="document">
	    		<div class="modal-content corverdinha">
	      		<div class="modal-header">
	        	<h4 class="modal-title" id="modalLabel">Excluir Avaliação</h4>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
	      		</div>
		      	<div class="modal-body">
		       	Deseja realmente excluir esta avaliação?
		     	</div>
		      	<div class="modal-footer">
		        <a href="excluir_avaliacao.php?cd=';
		        echo $obj->cd_calendario . ' " class="btn btn-primary corverdinha">Sim</a>
		    	<button type="button" class="btn btn-default " data-dismiss="modal">N&atilde;o</button>
	      		</div>
	    		</div>
	  			</div>
				</div>';
	    }
	   	}
?>

	  <!-- JavaScript -->
	  <script src="js/jquery.min.js" ></script>
	  <script src="js/popper.min.js" ></script>
	  <script src="js/bootstrap.min.js" ></script>
	  <script src="js/slick.min.js" ></script>
	  <script src="js/per.js"></script>
	  <script src="js/footer-navbar-segundamento.js"></script>
  </body>
</html>

<!-- Modal para cadastrar avaliações -->

    <div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Avaliação</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="container-fluid">
             <label for="artigo"><b>Tipo da Avaliação:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <select name="tipo" class="col-12 form-group custom-select">
		              <option value="Avaliação" required autofocus>Avaliação</option>
		              <option value="Trabalho" required autofocus>Trabalho</option>
		              <option value="Lição" required autofocus>Lição</option>
		              <option value="Apresentação" required autofocus>Apresentação</option>
	              </select>
	            </div>
	          </div>
	         	<label for="conteudo"><b>Conteúdo:</b></label>
              <div class="form-row">
                <div class="col-sm-11">
                  <textarea rows="5" cols="50" class="form-control" name="conteudo" required></textarea>
                </div>
              </div>
	          <label for="data"><b>Data:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <input type="date" class="form-control" name="data" required>
	            </div>
	          </div>
	          <label for="sala"><b>Sala:</b></label>
	          <div class="row">
	          	<div class="col-11">
	          		<select name="sala" class="form-control">
	         	<?php				
							$select="SELECT * FROM `tb_turma` JOIN `tb_curso` ON `id_curso` = `cd_curso` WHERE `st_ativo` = 1";
							if ($con=$mysqli->query($select)) {
		   					while ($obj= $con->fetch_object()) {
		 							echo '<option value="'.$obj->cd_turma.'" required>'.$obj->nr_ano.'º '.$obj->sg_curso.'</option>';
								}
							}else{
		  					echo '<option>Não há nenhuma sala cadastrada</option>';
							}
						?>	
								</select>
							</div>
						</div>
              <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
                <button type="submit" name="butao" class="btn btn-success mb-2">Enviar</button>
                <button type="button" class="btn btn-danger mb-2" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
            </div>
          </div>
        
      </form>
<!-- PHP para cadastrar avaliações-->
<?php
				if (isset($_POST['butao'])) {
					$tipo = $_POST['tipo'];
					$conteudo = $_POST['conteudo'];
					$datainicio = str_replace("/", "-", $_POST["data"]);
					$usuario = $_SESSION['cd_usuario'];			
					$insert="INSERT INTO `tb_calendario`(`nm_tipo`, `ds_conteudo`, `dt_inicio`, `dt_fim`, `id_usuario`) VALUES ('$tipo','$conteudo','$datainicio','$datainicio', $usuario)";
 					if ($mysqli->query($insert)) {
 						$select00 = "SELECT * FROM `tb_calendario` WHERE `nm_tipo` = '$tipo' and `ds_conteudo` = '$conteudo' and `dt_inicio` = '$datainicio' and `dt_fim` = '$datainicio' and `id_usuario` = '$usuario' ";
 		if ($con = $mysqli->query($select00)) {
 			while ($obj= $con->fetch_object()) {

 			$sala = $_POST['sala'];
 			$calendario = $obj->cd_calendario;



 			$insert00 = "INSERT INTO `tb_calendario_turma`(`id_calendario`, `id_turma`) VALUES ('$calendario','$sala')";

if ($mysqli->query($insert00)) {
 		?>
 		<script type="text/javascript">
      alert('Cadastrado com sucesso!');
      document.location="avaliacoes.php";
    </script>
<?php
}else{
	?>
 		<script type="text/javascript">
      alert('erro no insert00');
    </script>
<?php
}
}}else{
	?>
 		<script type="text/javascript">
      alert('erro no select00');
    </script>
<?php
}
			}else{
				?>
 		<script type="text/javascript">
      alert('Erro no primeiro insert!');
    </script>
<?php
			}}
		?>