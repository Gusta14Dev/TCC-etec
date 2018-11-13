<?php
	include_once("includes/conexao.php");
  $itens = $_GET['itens'];
	$select0= "SELECT * FROM `tb_usuario` WHERE cd_usuario = $itens and id_tipo = 3 ";
	if($professor = $mysqli->query($select0)){
	}else {
		echo "Não foi!!!!";
	}
?>
<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="utf-8">
  <head>
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap e FontAwsome CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <!-- Menu Lateral e Tabela CSS -->
  <link href="css/menu-lateral.css" rel="stylesheet">
  <link href="css/layout_form.css" rel="stylesheet">


    <style>

	
@media (min-width: 990px) {
  #foto_professor {
    width: 40%;
    height: auto;
    float:left;
    position:relative;
  }
}
    </style>
		<link rel="shortcut icon" href="imagens/icone_etec.png" >
  </head>
  <body class="bg-light">

	<?php
    include_once ("includes/menu-adm.php");
	while($obj = $professor->fetch_object()){
	?>
<div class="container-table" style="margin-top:100px;">
	<div class="mx-auto pt-3 pb-5 text-center">
		<p id="nm_coordenador" class="h1">
			<?php
				echo $obj->nm_usuario;
        echo " ".$obj->nm_sobrenome;
        echo '<title>'.$obj->nm_usuario." ".$obj->nm_sobrenome.'</title>';
			?>
		</p>
	</div>
  <?php
	echo '<div class="mr-sm-5 mt-5 mt-sm-0 mr-0" id="foto_professor"  ><img class="img-fluid"
    src="'.$obj->nm_foto.'"></div>';
 echo '<div class="border" style="color: #fff; background-color: #212529;">';
  echo '<div class="row">
        Login: '.$obj->nm_login.'
        </div>';

  echo '<div class="row">
        Cargo: Professor';

	echo "</div>";
		?>
</div>
	<?php
	}
?>

  	<script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>
    <script src="js/footer-navbar-segundamento.js"></script>

    <script>
        $(document).ready(function(){
          alert("nfjfjfg");
        }
    </script>

  </body>
</html>
