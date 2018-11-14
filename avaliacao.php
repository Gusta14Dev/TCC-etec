<?php
	include_once("includes/conexao.php");
  $itens = $_GET['itens'];
	$select0= "SELECT * FROM `tb_calendario` WHERE cd_calendario = $itens";
	if($avaliacao = $mysqli->query($select0)){
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
	<link rel="shortcut icon" href="imagens/icone_etec.png" >
  </head>
  <body class="bg-light">

	<?php
    include_once ("includes/menu-professor.php");
	while($obj = $avaliacao->fetch_object()){
	?>
<div class="container-table" style="margin-top:100px;">
	<div class="mx-auto pt-3 pb-5 text-center">
		<p id="nm_avaliacao" class="h1">
			<?php
				echo $obj->nm_tipo;
        echo '<title>'.$obj->nm_tipo.'</title>';
			?>
		</p>
  <?php
 echo '<div class="border p-5" style="color: #fff; background-color: #212529;">';
  echo '<div class="row">
        <h1>'.$obj->ds_conteudo.'</h1>
        </div>';

  echo '<div class="row">';
       if ($obj->dt_inicio == $obj->dt_fim) {
       	echo 'Data: '.$obj->dt_inicio;
       }else{
       	echo 'Data de início: '.$obj->dt_inicio;
       	echo 'Data final: '.$obj->dt_fim;
       };

	echo "</div>";
		?>
</div>
	<?php
	}
?>
</div>
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
