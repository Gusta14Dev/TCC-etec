<?php
include_once("includes/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="imagens/logo-vetorizado.svg" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/fontawesome-all.css">

	<style type="text/css">
		:root {
		  --input-padding-x: .75rem;
		  --input-padding-y: .75rem;
		}
		
		html,
		body {
		  height: 100%;
		}
		
		body {
		  display: -ms-flexbox;
		  display: flex;
		  -ms-flex-align: center;
		  align-items: center;
		}
		
		.form-label-group {
		  position: relative;
		  margin-bottom: 1rem;
		}
		
		.form-label-group > input,
		.form-label-group > label {
		  padding: var(--input-padding-y) var(--input-padding-x);
		}
		
		.form-label-group > label {
		  position: absolute;
		  top: 0;
		  left: 0;
		  display: block;
		  width: 100%;
		  margin-bottom: 0; /* Override default `<label>` margin */
		  line-height: 1.5;
		  color: #495057;
		  cursor: text; /* Match the input under the label */
		  border: 1px solid transparent;
		  border-radius: .25rem;
		  transition: all .1s ease-in-out;
		}
		
		.form-label-group input::-webkit-input-placeholder {
		  color: transparent;
		}
		
		.form-label-group input:-ms-input-placeholder {
		  color: transparent;
		}
		
		.form-label-group input::-ms-input-placeholder {
		  color: transparent;
		}
		
		.form-label-group input::-moz-placeholder {
		  color: transparent;
		}
		
		.form-label-group input::placeholder {
		  color: transparent;
		}
		
		.form-label-group input:not(:placeholder-shown) {
		  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
		  padding-bottom: calc(var(--input-padding-y) / 3);
		}
		
		.form-label-group input:not(:placeholder-shown) ~ label {
		  padding-top: calc(var(--input-padding-y) / 3);
		  padding-bottom: calc(var(--input-padding-y) / 3);
		  font-size: 12px;
		  color: #777;
		}
		
		.container-login{
			position: absolute;
			top: 20px;
			width: 600px;
			height: auto;
			padding: 50px;
			background-color: #fff;
			z-index:2000;
		}
		.container-login p{
			padding: 0;
		}
		.container-dados{
			position: absolute;
			top: 0;
			right: 0;
			width: 400px;
			height: 500px;
			padding: 25px;
			background-color: #002000;
			border-radius: 10px;
			box-shadow: 0px 0px 30px #0F340F;
		}
		.container-desk{
			position:relative;
			margin-top: 10%;
			margin-left:auto;
			margin-right:auto;
			width:1000px;
			height:auto;
			z-index: 1000;
		}
		.fundo{
			position: fixed;
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			background-color: green;
		}
		.fundo::after{
			content:'';
			position: absolute;
			top: 0;
			bottom: 0;
			right: -200px;
			height: 100%;
			width: 60%;
			transform: skew(25deg);
			background-color: #00BA00;
		}
		.fundo::before{
			content:'';
			position: absolute;
			top: 0;
			bottom: 0;
			right: -210px;
			height: 100%;
			width: 62%;
			transform: skew(28deg);
			background-color: #5DBB5B;
			box-shadow: 0px 0px 20px #0F340F;
		}
		.container-img{
			width: 100%;
			margin-right: auto;
			margin-left: auto;
		}
		#users{
			position:absolute;
			width:100px;
			height:100px;
			top:-50px;
			left:50%;
			right:50%;
			transform: translate(-50%, 0);
			line-height:125px;
			border-radius:100%;
			background-color:green;
			box-shadow: 0px 0px 20px #0F340F;
		}
		#alert{
	    position: absolute;
	    width: 50%;
	    z-index: 2000;
	    top: -10%;
	    left: 50%;
	    right: 50%;
	    opacity: 0;
	    transform: translate(-50%, 0);
	    animation-name: alert;
	    animation-duration: 4s;
	  }
		#voltar{
			position:absolute;
			top:5px;
			left:5px;
		}
		@media(min-width:1010px){
			.container-desk{
				display:block;
			}
			.container-mob{
				display:none;
			}
			.btn-block{
				width:40%;
			}
		}
		@media(max-width:1010px){
			.container-desk{
				display:none;
			}
			.container-mob{
				display:block;
			}
			.fundo::after{
				right: -130px;
				width:90%;
			}
			.fundo::before{
				right: -15px;
			}
			.container-login{
				position:relative;
				width:90%;
				max-width:500px;
				top:90px;
				margin-left:auto;
				margin-right:auto;
				padding-left:20px;
				padding-right:20px;
				padding-bottom:20px;
				border-radius:10px;
				box-shadow: 0px 0px 30px #0F340F;
			}
			.btn-block{
				width:90%;
			}
			#alert{
			    width: 90%;
			}
		}
	  @keyframes alert {
	    0%{top: -10%;}
	    10%{opacity: 1;}
	    50%{top: 5%;}
	    90%{top: -10%;}
	    100%{opacity: 1;}
	  }
	</style>
</head>
<body>
		<?php
	    	if (isset($_SESSION['fim'])) {
	    		echo "<div id='alert'>".$_SESSION['msg-fim']."</div>";
	    		unset($_SESSION['fim']);
	    	}

	    	if (isset($_SESSION['sair'])) {
	      		unset($_SESSION['cd_usuario']);
	      		unset($_SESSION['nm_usuario']);
	      		unset($_SESSION['sobrenome']);
	      		unset($_SESSION['tipo']);
	      		unset($_SESSION['email']);
	      		unset($_SESSION['turma']);
	      		unset($_SESSION['rm']);
	      		unset($_SESSION['sair']);
	      	}
	    ?>
	<div class="fundo">
		
		<div class="container-desk">
			<div class="container-login">
				<form method="post">
					<p class="h5 text-secondary">Olá visitante,</p>
					<p class="font-weight-bold h3">Bem vindo ao site da Etec!</p>
					<div class="form-label-group mt-4 p-0">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email:" required autofocus>
						<label for="email">Email:</label>
					</div>
					<div class="form-label-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha:" required>
						<label for="senha">Senha:</label>
					</div>
					<button class="btn btn-lg btn-success btn-block mx-auto" name="entrar" type="submit">Entrar</button>
   				 <p class="mt-5 text-muted text-center">Etec de Itanhaém &copy; 2018</p>
				</form>
			</div>
			<div class="container-dados">
				<div class="container-img mt-5 mb-5">
					<img src="imagens/logo da etec - branco.png" class="img-fluid">
				</div>
				<p class="font-weight-bold h3 text-white text-center mt-5">Etec de Itanhaém</p>
				<p class="h6 text-light">Trabalhando o presente, preparando o futuro!</p>
			</div>
		</div>
		
		<div class="container-mob">
			<div class="container-login">
			<a href="index.php" class="btn btn-success" id="voltar"><i class="fas fa-arrow-left"></i></a>
				<form method="post">
					<div class="text-center mx-auto" id="users"><i class="fas fa-users h1 text-light"></i></div>
					<h1 class="text-center">Login</h1>
					<div class="form-group mt-4 p-0">
						<input type="email" class="form-control" name="email" placeholder="Email:" required autofocus>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="senha" placeholder="Senha:" required>
					</div>
					<button class="btn btn-lg btn-success btn-block mx-auto" name="entrar" type="submit">Entrar</button>
   				 <p class="mt-5 text-muted text-center">Etec de Itanhaém &copy; 2018</p>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js" ></script> 
	<script src="js/bootstrap.min.js" ></script>
</body>
</html>
<?php
if (isset($_POST['entrar'])) {
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$select="SELECT * FROM `tb_usuario` WHERE `nm_login` = '$email' and `nm_senha` = '$senha' ";
	if ($con=$mysqli->query($select)) {
	    $row =  $con->num_rows;
		if ($row == 1) {
			while($obj = $con->fetch_object()){
				$_SESSION['cd_usuario']=$obj->cd_usuario;
				$_SESSION['nm_usuario']=$obj->nm_usuario;
				$_SESSION['sobrenome']=$obj->nm_sobrenome;
				$_SESSION['tipo']=$obj->id_tipo;
				$_SESSION['email']=$obj->nm_login;
			}
			$_SESSION['msg-inicio']= "<div class='alert alert-success' role='alert'>Bem vindo, ".$_SESSION['nm_usuario']."!</div>";
			$_SESSION['inicio']= 1;
			?>
			<script type="text/javascript">
				document.location="home.php";
			</script>
		    <?php
		}
	}
		$select="SELECT * FROM `tb_aluno` WHERE `nm_login` = '$email' and `nm_senha` = '$senha' ";
		if ($con=$mysqli->query($select)) {
		    $row =  $con->num_rows;
			if ($row == 1) {
				while($obj = $con->fetch_object()){
					$_SESSION['cd_usuario']=$obj->cd_aluno;
					$_SESSION['nm_usuario']=$obj->nm_aluno;
					$_SESSION['tipo']=4;
					$_SESSION['email']=$obj->nm_login;
					$_SESSION['rm']=$obj->nr_rm;
					$_SESSION['turma']=$obj->id_turma;
				}
				$_SESSION['msg-inicio']= "<div class='alert alert-success' role='alert'>Bem vindo, ".$_SESSION['nm_usuario']."!</div>";
				$_SESSION['inicio']= 1;
		    ?>
			<script type="text/javascript">
		        document.location="home.php";
			</script>
		    <?php
			}else{
			?>
			<script type="text/javascript">
		        alert('Email ou senha incorretos!');
		        document.location="login.php";
			</script>
		    <?php
			}
	}
}
?>