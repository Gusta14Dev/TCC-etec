<?php
  include_once("includes/conexao.php");
  $professor= "SELECT * FROM `tb_usuario` WHERE id_tipo = 3 ";
  if($docente = $mysqli->query($professor)){
  }else {
    echo "Não foi!!!!";
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/fontawesome-all.css" >
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="shortcut icon" href="imagens/icone_etec.png">

    <style>
      @media (min-width: 990px) {
        #foto_prof {
          width: 40%;
          height: auto;
          float:left;
          position:relative;
        }
      }

      #foto_prof {
          width: 100%;
          height: auto;
          position:center;
        }
    </style>
     <title>Corpo Docente</title>
  </head>
  <body>


  <?php
    include_once ("includes/menu.php");
    while($obj = $docente->fetch_object()){

      ?>
      <div class="container">
          <div class="mt-5"> 

            <?php

    echo '<h3> <div class="mx-auto pt-3 pb-3 text-center">'. $obj->nm_usuario .' '.$obj->nm_sobrenome.'</div></h3>';  
    echo '<row> <div class="mt-2 mt-sm-0" id="foto_artigo"><div class="mx-auto pt-3 pb-5">
    <img id="foto_prof" class="img-fluid" src="'.$obj->nm_foto.'"></div></div>';
?>

     
      </div>
 
  <div class="ml-5 mr-5 mb-3">
    
      <?php
        echo $obj->ds_descricao;
      ?>
    
  </div>
  <?php
  }
  ?>
</div>

    <!-- JavaScript -->
  <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/menu-index.js"></script>


  </body>
</html>
