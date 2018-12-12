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
			<?php
      	include_once ("includes/fundo.html");
    	?>
			<div class="jumbotron mx-sm-auto p-5">
	 			<div class="col-md-3 col-12 mt-2 ml-auto pr-0">
					<a href="cadastrar_avaliacao.php" class="btn btn-success form-control my-2 my-sm-0" style="padding:2px; margin-bottom:5px;"><i>Cadastrar Avaliação</i> <i class="fas fa-plus fa-sm"></i></a>
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
	$select="SELECT * FROM `tb_calendario` WHERE `st_publico_privado` = 2 ORDER BY cd_calendario ASC";
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
