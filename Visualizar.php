<?php
  include_once("includes/conexao.php");
  $itens = $_GET['itens'];
  $ds_artigo= "SELECT * FROM `tb_artigo` WHERE cd_artigo = $itens ";
  if($artigo = $mysqli->query($ds_artigo)){
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
        #foto_artigo {
          width: 40%;
          height: auto;
          float:left;
          position:relative;
        }
      }

      #foto_artigo {
          width: 100%;
          height: auto;
          position:center;
        }
    </style>
  </head>
  <body>


  <?php
    include_once ("includes/menu.php");
    while($obj = $artigo->fetch_object()){
  ?>
      <div class="container">
          <div class="mt-5"> 
      <?php
        echo '<h1> <div class="mx-auto pt-3 pb-3 text-center">'. $obj->nm_artigo .'</div></h1>';
        echo '<title>'.$obj->nm_artigo.'</title>';
      ?>   
      </div>
  <?php
  echo '<div class="mt-2 mt-sm-0" id="foto_artigo"><div class="mx-auto pt-3 pb-5 text-center">
  <img class="img-fluid" src="'.$obj->nm_foto.'"></div></div>';
?>

  <div class="ml-5 mr-5 mb-3" align="justify">
    <p>
      <?php
        echo $obj->ds_conteudo;
      ?>
    </p>
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

 <footer class="footer mt-5">
    <div class="nav-header">
    </div>
    <div class="nav-body">
      <div class="form-row mx-auto align-items-center text-center text-light">
        <div class="col-4 mx-auto mt-sm-0 mt-1 p-0">
          <p></p>
          <p>Email</p>
          <p>email.da@escola.com</p>
        </div>
        <div class="col-4 mx-auto mt-sm-0 mt-1">
          <p></p>
          <p>Telefone</p>
          <p>(13)34707070</p>
        </div>
      </div>
    </div>
    <div class="nav-footer">
      <span class="text-muted">Todos os direitos reservados &copy; para Brunno Lukas, Caio Henrique, Gabriel Ferreira, Gustavo Guimarães, Harison Costa e Pedro Rocha.</span>
    </div>
  </footer>

  </body>
</html>
