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
	          
	         <?php
						echo '<label for="sala"><b>Sala:</b></label>
										<div class="row">
		    							<div class="col-11">
		        						<select name="sala" class="form-control">';
													$select="SELECT * FROM `tb_turma` JOIN `tb_curso` ON `id_curso` = `cd_curso` WHERE `st_ativo` = 1";
													if ($con=$mysqli->query($select)) {
		    										while ($obj= $con->fetch_object()) {
		            							echo '<option value="'.$obj->cd_turma.'" required>'.$obj->nr_ano.'º '.$obj->sg_curso.'';
														}
					}else{
		  				echo 'Não há nenhuma sala cadastrada';
					}
?>
</option>
</select>
</div>
</div>

	        </div>

	        <div class="row">
	          <div class="col-12 mx-auto pt-2 text-center">
	            <button type="submit" name="butao" class="btn btn-info">Cadastrar</button>
	          </div>
	        </div>
	      </div>
		</form>
	</div>
<?php
	if (isset($_POST['butao'])) {
	$tipo = $_POST['tipo'];
	$conteudo = $_POST['conteudo'];
	$datainicio = str_replace("/", "-", $_POST["data"]);
	$usuario = $_SESSION['cd_usuario'];			

	$insert="INSERT INTO `tb_calendario`(`nm_tipo`, `ds_conteudo`, `dt_inicio`, `dt_fim`, `id_usuario`) VALUES ('$tipo','$conteudo','$datainicio','$datainicio', $usuario)";
 					if ($mysqli->query($insert)) {


 		$select00 = "SELECT * FROM `tb_calendario` WHERE `nm_tipo` = '$tipo' and `ds_conteudo` = '$conteudo' and `dt_inicio` = '$datainicio' and `dt_fim` = '$datainicio' and `id_usuario` = '$usuario' ";
 		if ($mysqli->query($select00)) {
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

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>
    <script src="js/footer-navbar-segundamento.js"></script>
  </body>
</html>
