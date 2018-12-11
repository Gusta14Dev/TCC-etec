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
      #nm_prof{
        position: relative;
        width: 75%;
        height: auto;
        color: #008000;
        float: right;
        font-size: 30px;
        font-weight: bold;
      }

      #img_prof{
        position: relative;
        width: 25%;
        height: auto;
        float: left;
      }

      #foto_prof{
        position: relative;
        width: 100%;
        height: 180px;
        margin-left: 0;
      }

      #ds_prof{
        position: relative; 
        width: 75%;
        height: auto;
        float: right;
      }

      #prof_row{
        position: relative;
        width: 80%;
        height: auto;
        background-color: white;
        border: 1px solid #008000;
        border-radius: 1em;
        padding: 1em;
        margin-top: 5em;
        margin-bottom: 5em;
        overflow: hidden;
        margin-left: 10%;
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
          echo  '<div id="prof_row"> 
                  <div id="nm_prof">'.
                    $obj->nm_usuario .' '.$obj->nm_sobrenome.
                  '</div>
                  <div id="img_prof"><img id="foto_prof" src="'.$obj->nm_foto.'"/></div>
                  <div id="ds_prof">'.
                    $obj->ds_descricao.
                  '</div>
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
