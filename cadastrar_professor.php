<?php
include_once("includes/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <title>Cadastrar Professores</title>
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
            <h1>Cadastrar Professores</h1>
          </div>
		      <div class="form-group ml-2 mr-2">
		        <div class="row">
		          <div class="col-6">
		            <label for="nome"><b>Nome:</b></label>
		            <input type="text" class="form-control" name="nome" required autofocus>
		          </div>
		          <div class="col-6">
		            <label for="snome"><b>Sobrenome:</b></label>
		            <input type="text" class="form-control" name="sobrenome" required autofocus>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-12">
		            <label for="foto"><b>Foto:</b></label>
		            <input type="text" class="form-control" name="foto" value="foto-professor/" required autofocus>
		          </div>
		        </div>
		         <div class="row">
		          <div class="col-12">
		            <label for="cargo"><b>Cargo:</b></label>
		            <input type="text" class="form-control" name="cargo" required autofocus>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-12">
		            <label for="login"><b>Login:</b></label>
		            <input type="text" class="form-control" name="login" required autofocus>
		          </div>
		        </div>
		        <label for="senha"><b>Senha:</b></label>
		        <div class="form-row">
		          <div class="col-12">
		            <input type="password" class="form-control" id="senha" name="senha" required autofocus>
		          </div>
		        </div>
		        <label for="csenha"><b>Confirmar Senha:</b></label>
		        <div class="form-row">
		          <div class="col-12">
		            <input type="password" class="form-control" id="csenha" name="csenha" required autofocus>
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
		    $senha = $_POST['senha'];
		    $csenha = $_POST['csenha'];
	    	if ($senha == $csenha) {
		      $nome = $_POST['nome'];
		      $sobrenome = $_POST['sobrenome'];
	       	$foto = $_POST['foto'];
	       	$cargo = $_POST['cargo'];
		      $login = $_POST['login'];
	      	$insert="INSERT INTO `tb_usuario`(`nm_usuario`, `nm_sobrenome`, `nm_foto`, `ds_descricao`, `nm_login`, `nm_senha`, `id_tipo`) VALUES ('$nome','$sobrenome','$foto', '$cargo', '$login','$senha', 3)";
	      		if ($mysqli->query($insert)) {
	  ?>
	  <script type="text/javascript">
	    alert('Cadastrado com sucesso!');
	    document.location="professores.php";
	  </script>
	  <?php
	    }else{
	  ?>
	  <script type="text/javascript">
	    alert('Erro ao Cadastrar!');
	    document.location="cadastrar_professor.php";
	  </script>
	  <?php
	    }}else{
	  ?>
	  <script type="text/javascript">
	    alert('As Senhas Não Condizem!');
	    document.location="cadastrar_professor.php";
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
