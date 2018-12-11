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
    <title>TCC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        color: #000;
        float: right;
        font-size: 30px;
        font-weight: bold;
      }

      #img_prof{
        position: relative;
        width: 100%;
        height: auto;
        float: left;
      }

      #foto_prof{
        position: relative;
        width: 100%;
        height: 100%;
        margin-left: 0;
      }

      #prof_row{
        position: relative;
        width: 80%;
        height: auto;
        background-color: white;
        border-left: 0.5em solid #008000;
        padding: 1em;
        padding-left: 0;
        margin-top: 2em;
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
      <div class="container-fluid content-title">
        <h2 class="text-center titulo">Arquivos para TCC</h2>
      </div>
          <div id="prof_row"> 
            <div id="img_prof"><img id="foto_prof" src="foto pagina-tcc/1.jpg"/></div> 
          </div>
          <a href="download/Apostila_Normas_TCC.pdf" download="Apostila_Normas_TCC.pdf"> 
          <div id="prof_row"> 
            <div id="img_prof"><img id="foto_prof" src="foto pagina-tcc/2.jpg"/></div> 
          </div>
          </a>
          <a href="download/regulamento_interno_tcc.pdf" download="regulamento_interno_tcc.pdf"> 
          <div id="prof_row"> 
            <div id="img_prof"><img id="foto_prof" src="foto pagina-tcc/3.jpg"/></div> 
          </div>
          </a>
          <a href="download/Livro_TCC.pdf" download="Livro_TCC.pdf"> 
          <div id="prof_row"> 
            <div id="img_prof"><img id="foto_prof" src="foto pagina-tcc/4.jpg"/></div> 
          </div>
          </a>
          <a href="download/BANNER_TCC_ETECItanhaem.rar" download="BANNER_TCC_ETECItanhaem.rar"> 
          <div id="prof_row"> 
            <div id="img_prof"><img id="foto_prof" src="foto pagina-tcc/5.jpg"/></div> 
          </div>
          </a>
    </div>
  
  <!-- JavaScript -->
  <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/menu-index.js"></script>
  </body>
</html>
