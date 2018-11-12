<?php
session_start();
include_once("includes/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <title>Cadastrar Funcionários</title>
   <link rel="stylesheet" href="css/bootstrap.min.css" >
  	<link rel="stylesheet" href="css/fontawesome-all.css">
    <link href="css/menu-lateral.css" rel="stylesheet">
    <link href="css/layout_form.css" rel="stylesheet">
  </head>

<body> 
		<?php
		 include_once ("includes/menu-adm.php");
		?>

	 	<div id="container-form">
		  <?php
		  	include_once ("includes/fundo.html");
		  ?>
		  <form method="post">
		    <div class="jumbotron mx-auto p-3">
		       <div class="mx-auto pt-3 pb-3 text-center">
            <h1>Cadastrar Funcionários</h1>
          </div>
		      <div class="form-group ml-2 mr-2">
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
		        <label for="descr_cargo"><b>Descrição do Cargo:</b></label>
		        <div class="form-row">
		          <div class="col-12">
		            <input type="text" class="form-control" name="descr_cargo" required>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-12 mx-auto pt-2 text-center">
		            <button type="submit" name="butao" class="btn btn-info" >Cadastrar</button>
		          </div>
		        </div>
		      </div>
		    </div>
		  </form>
	  </div>
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
	    document.location="cadastrar_funcionario.php";
	  </script>
	  <?php
	    }}
  	?>

		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/footer-navbar-segundamento.js"></script>
	</body>
</html>
