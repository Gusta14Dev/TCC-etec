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
    <title>Corpo Docente</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/fontawesome-all.css" >
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="imagens/icone_etec.png">
    <style>
      .nm_prof{
        position: relative;
        width: 100%;
        height: 20px;
        color: #008000;
      }

      .img_prof{
        position: relative;
      }

      .foto_prof{
        width: 100px;
        height: 120px;
      }

      .ds_prof{ 
        width: 100%;
        height: 20px;
      }

      .prof_row:hover{
        background-color: #CCC;
      }
    </style>
  </head>
  <body>
  <?php
    include_once ("includes/menu.php");
  ?>
    <div class="container-fluid">
        <?php
          while($obj = $docente->fetch_object()){
            echo  '<div class="row prof_row">
                    <div class="col-12">  
                      <div class="nm_prof">'.
                        $obj->nm_usuario .' '.$obj->nm_sobrenome.
                      '</div>
                      <div class="img_prof"><img  class="foto_prof" src="'.$obj->nm_foto.'"/></div>
                      <div class="ds_prof">'.
                        $obj->ds_descricao;
                      '</div>
                    </div>
                  </div>';   
          }
        ?>
    </div>
  
  <!-- JavaScript -->
  <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/menu-index.js"></script>
  </body>
</html>
