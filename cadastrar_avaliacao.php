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
    <title>Cadastrar Avaliações</title>

    <!-- Bootstrap e FontAwsome CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
   	<link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Menu Lateral e Jumbotron CSS -->
    <link href="css/menu-lateral.css" rel="stylesheet">
    <link href="css/layout_form.css" rel="stylesheet">
	</head>
<body>
	<!--Menu Lateral-->
  <?php
  	include_once ("includes/menu-professor.php");
  ?>
  <div id="container-form">
   	<?php
      include_once ("includes/fundo.html");
    ?>
    <form method="post">
	      <div class="jumbotron mx-sm-auto">
	        <div class="form-group mt-5 ml-5">
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
	          <label for="link"><b>Conteúdo:</b></label>
	          <div class="form-row">
	            <div class="col-sm-11">
	              <input type="text" class="form-control" name="conteudo" required autofocus>
	            </div>
	          </div>
	          <label for="conteudo"><b>Data:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <input type="date" class="form-control" name="data" required autofocus>
	            </div>
	          </div>
	          <label for="conteudo"><b>Horário inicial:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <input type="time" class="form-control" name="inicio" required autofocus>
	            </div>
	          </div>
	          <label for="conteudo"><b>Horário final:</b></label>
	          <div class="row">
	            <div class="col-11">
	              <input type="time" class="form-control" name="fim" required autofocus>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-12 mx-auto pt-2 text-center">
	            <button type="submit" name="butao" class="btn btn-info corverdinha">Cadastrar</button>
	          </div>
	        </div>
	      </div>
		</form>
	</div>
    <?php
			if (isset($_POST['butao'])) {
		    $tipo = $_POST['tipo'];
		    $conteudo = $_POST['conteudo'];
		    $data = str_replace("/", "-", $_POST["data"]);
				$inicio = $_POST['inicio'].':00';
				$fim = $_POST['fim'].':00';
				$datainicio = date('Y-m-d', strtotime($data)).' '.$inicio;
				$datafinal = date('Y-m-d', strtotime($data)).' '.$fim;
				$select="INSERT INTO `tb_calendario`(`nm_tipo`, `ds_conteudo`, `dt_inicio`, `dt_fim`, `id_usuario`) VALUES ('$tipo','$conteudo','$datainicio','$datafinal', 2)";
 					if ($mysqli->query($select)) {
  	?>
  	<script type="text/javascript">
      alert('Cadastrado com sucesso!');
      document.location="avaliacoes.php";
    </script>
    <?php
			}else{
				echo 'errou';
			}}
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
