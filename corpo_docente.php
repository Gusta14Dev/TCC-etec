<?php
  include_once("includes/conexao.php");
  $professor= "SELECT * FROM `tb_usuario` WHERE id_tipo = 3 ORDER BY `nm_usuario` ASC";
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
          width: 10%;
          height: auto;
          float:left;
          position:relative;
        }
      }

      #foto_prof {
          width: 20%;
          height: auto;
          position:center;
        }
        .textao{
          position: absolute;
          margin-left: 1px;
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

    echo '<div class="col"> 

    <div class="row textao"> <div class="mx-auto pt-3 pb-5 text-center" style="color: #008000">'. $obj->nm_usuario .' '.$obj->nm_sobrenome.'</div></div>
    <img id="foto_prof" class="img-fluid mt-5" src="'.$obj->nm_foto.'"></div></div></div> 
    <div class="row mt-2 mt-sm-0 mx-auto pt-3 pb-5">'; echo $obj->ds_descricao;'</div>

    </div>';
    
  }
  ?>
</div>
</div>

    <!-- JavaScript -->
  <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/menu-index.js"></script>


  </body>
</html>
