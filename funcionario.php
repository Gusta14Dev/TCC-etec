<?php
	include_once("includes/conexao.php");
  $itens = $_GET['itens'];
	$select0= "SELECT * FROM `tb_funcionario` WHERE cd_funcionario = $itens ";
	if($funcionario = $mysqli->query($select0)){
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
  #foto_funcionario {
    width: 30%;
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
	while($obj = $funcionario->fetch_object()){
	?>
<div class="container-table" style="margin-top:100px;">
	<div class="mx-auto pt-3 pb-5 text-center">
		<p class="h1">
			<?php
				echo $obj->nm_funcionario;
        echo " ".$obj->nm_sobrenome;
        echo '<title>'.$obj->nm_funcionario." ".$obj->nm_sobrenome.'</title>';
			?>
		</p>
	</div>
  <?php
	echo '<div id="foto_funcionario"  ><img class="img-fluid"
    src="'.$obj->nm_foto.'"></div>';
 echo '<div class="border p-5" style="color: #fff; background-color: #212529;">';

  echo '<div class="row"> <h1>' .$obj->nm_cargo.'</h1> ';

	echo "</div>";
  echo '<div class="row mt-5" > '.$obj->ds_cargo.'';

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
