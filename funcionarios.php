<?php
	include_once("includes/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
		<meta charset="utf-8">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="shortcut icon" href="imagens/icone_etec.png" >
		<!-- Bootstrap e FontAwsome CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link href="css/fontawesome-all.css" rel="stylesheet">

	<!-- Menu Lateral e Tabela CSS -->
	<link href="css/menu-lateral.css" rel="stylesheet">
	<link href="css/layout_form.css" rel="stylesheet">
<title>Página dos Funcionários</title>

</head>

<style>

@media (min-width: 576px){
	.botao{
		width: 70%;
	}
}

.botao{
		width: 24%;
	}

	      

</style>
<body>

	<?php
			include_once ("includes/menu-adm.php");
      	?>
		<div id="container-form">
			<?php
				include_once ("includes/fundo.html");
			?>


	<div class="container-fluid jumbotron mx-sm-auto">
		<div class="row justify-content-around">
			<div class="col-md-3 col-12 mt-2 ml-auto pr-0">
				<button class="btn btn-success" id="cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastrar Funcionários <i class="fas fa-plus fa-sm"></i></button>
			</div>
	    </div>
		<div id="list" class="row" style="margin-top:5px;">
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>CD</th>
							<th>Funcionários</th>
							<th>Cargo</th>
							<th class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<!--Mostrar conteúdo da tabela-->
<?php
	$select="SELECT * FROM `tb_funcionario` ORDER BY  `cd_funcionario` ASC ";
		if ($con=$mysqli->query($select)) {
			while ($obj= $con->fetch_object()) {
				echo  "<td>".$obj->cd_funcionario."</td>";
				echo "<td>".$obj->nm_funcionario." ".$obj->nm_sobrenome."</td>";
				echo "<td>".$obj->nm_cargo."</td>";
				echo '<td> <a href="funcionario.php?view=0&itens='.$obj->cd_funcionario.'" TYPE="BUTTON" NAME="submit" class="btn btn-success btn-xs botao" >Visualizar</a>';
				echo '<a href="alterar_funcionario.php?view=0&itens='.$obj->cd_funcionario.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao" >Editar</a>';;
				echo ' <a class="btn btn-danger btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
				echo $obj->cd_funcionario.'">Excluir</a>';
				echo '</td>
				</tr>';
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

		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/footer-navbar-segundamento.js"></script>


	</body>

</html>
<!-- Modal para excluir funcionários -->
<?php
    $selectmodal="SELECT * FROM `tb_funcionario`";
    if ($con=$mysqli->query($selectmodal)) {
    while ($obj= $con->fetch_object()) {

echo '<div class="modal fade" id="delete-modal';
echo $obj->cd_funcionario . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="modalLabel">Excluir Funcionário</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
		      </div>
		      <div class="modal-body">
		        Deseja realmente excluir este funcionário '.$obj->nm_funcionario.'?
		      </div>
		      <div class="modal-footer">
		        <a href="excluir_funcionario.php?cd=';
		        echo $obj->cd_funcionario . '" class="btn btn-danger">Excluir</a>
		    	<button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
		      </div>
		    </div>
  		</div>
  	</div>';
        }
    }
    ?>

     <!-- Modal para cadastrar funcionário -->

    <div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Funcionários</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="row">
		          <div class="col-6">
		            <label for="nome"><b>Nome:</b></label>
		            <input type="text" class="form-control" name="nome" required autofocus>
		          </div>
		          <div class="col-6">
		            <label for="snome"><b>Sobrenome:</b></label>
		            <input type="text" class="form-control" name="sobrenome" required>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-12">
		            <label for="foto"><b>Foto:</b></label>
		            <input type="text" class="form-control" name="foto" value="foto-funcionario/" required>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-12">
		            <label for="cargo"><b>Cargo:</b></label>
		            <input type="text" class="form-control" name="cargo" required>
		          </div>
		        </div>
		        <label for="conteudo"><b>Descrição do Cargo:</b></label>
                <div class="form-row">
                  <div class="col-sm-12">
                    <textarea rows="5" cols="50" class="form-control" name="descr_cargo" required></textarea>
                  </div>
                </div>
		        <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
                <button type="submit" name="butao" class="btn btn-success">Enviar</button>
                <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar</button>
              </div>
            </div>
		      </div>
		    </div>
		  </form>

		  <!-- Php para cadastrar funcionário -->
		   <?php
	  	if (isset($_POST['butao'])) {
		    
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];

	$foto = $_POST['foto'];

	$cargo = $_POST['cargo'];
	$descr_cargo = $_POST['descr_cargo'];

	$usuario = $_SESSION['cd_usuario'];

	$insert="INSERT INTO `tb_funcionario`(`nm_funcionario`, `nm_sobrenome`, `nm_foto`, `nm_cargo`, `ds_cargo`, `id_usuario`) VALUES ('$nome','$sobrenome','$foto','$cargo','$descr_cargo', '$usuario')";
	      		if ($mysqli->query($insert)) {
	  ?>
	  <script type="text/javascript">
	    alert('Cadastrado com sucesso!');
	    document.location="funcionarios.php";
	  </script>
	  <?php
	    }else{
	  ?>
	  <script type="text/javascript">
	    alert('Erro ao Cadastrar!');
	    document.location="funcionarios.php";
	  </script>
	  <?php
	    }}
  	?>
