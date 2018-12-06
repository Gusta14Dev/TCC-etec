<?php
  include_once("includes/conexao.php");
  date_default_timezone_set('UTC');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <title>Fale Conosco</title>

    <!-- Bootstrap e FontAwsome CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
   	<link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/info.css">
    <link href="css/layout_form.css" rel="stylesheet">

  
	</head>
<body>
<?php
    include_once("includes/menu.php");
  ?>
  
  <div id="container-form">
    	<form method="post">
	      <div class="jumbotron mx-sm-auto">
	        <div class="form-group mt-5 ml-5">
	          <label for="tipo">Tipo de usuário:</label>            
           		<div class="form-label-group mt-1 p-0">
                <select name="tipo" class="col-12 form-group custom-select">
                  <option value="Pai/Mãe de Aluno da Etec de Itanhaém" required autofocus>Pai/Mãe de Aluno da Etec de Itanhaém</option>
                  <option value="Professor/Funcionário da Etec de Itanhaém" required autofocus>Professor/Funcionário da Etec de Itanhaém</option>
                  <option value="Outros" required autofocus>Outros</option>
                </select>
              </div>
            </div>
	          <label for="nome"><b>Nome:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <input type="text" class="form-control" name="nome" required>
	            </div>
	          </div>

	          <label for="snome"><b>Sobrenome:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <input type="text" class="form-control" name="snome" required>
	            </div>
	          </div>

	          <label for="email"><b>Email:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <input type="email" class="form-control" name="email" required>
	            </div>
	          </div>

	          <label for="duvida"><b>Dúvida:</b></label>
                      <div class="form-row">
                        <div class="col-sm-12">
                          <textarea rows="10" cols="50" class="form-control" name="conteudo" required></textarea>
                        </div>
                      </div>

	        	<div class="row">
	          	<div class="col-12 mx-auto pt-2 text-center">
	            	<button type="submit" name="butao" class="btn btn-info">Cadastrar</button>
	          	</div>
	        	</div>
	      	</div>
	      </div>
			</form>
		</div>
<?php
	if (isset($_POST['butao'])) {

$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$snome = $_POST['snome'];
$email = $_POST['email'];
$conteudo = $_POST['conteudo'];			
	$insert="INSERT INTO `tb_fale_conosco`(`nm_publico`, `nm_sobrenome`, `nm_email`, `nm_tipo`, `ds_conteudo`, `id_usuario`) VALUES ('$nome','$snome','$email','$tipo','$conteudo',1)";
 	if ($mysqli->query($insert)) {
?>

 	<script type="text/javascript">
    alert('Dúvida enviada com sucesso!');
    document.location="index.php";
    </script>

<?php
}else{
	?>
 	<script type="text/javascript">
    alert('Erro ao enviar sua dúvida!');
    </script>
<?php
}}
		?>

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>
    <script src="js/footer-navbar-segundamento.js"></script>
	<script src="js/menu-index.js"></script>
  </body>
</html>
