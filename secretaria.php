<?php
  include_once("includes/conexao.php");
  $funcionario= "SELECT * FROM `tb_funcionario` ORDER BY `cd_funcionario` ASC";
  if($secre = $mysqli->query($funcionario)){
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
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
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
        width: 25%;
        height: auto;
        float: left;
      }

      #foto_prof{
        position: relative;
        width: 100%;
        height: 230px;
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
        width: 600px;
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

      .conteudo-titulo{
        position: relative;
        width: 80%;
        height: auto;
        margin-top: 2em;
        border-bottom: 2px solid #008000;
      }

      @media (min-width: 320px) and (max-width: 576px){
        #prof_row{
          width: 500px;
          height: 120px;
        }

        #nm_prof{
          width: 120px;
          font-size: 15px;
        }

        #ds_prof{ 
          width: 120px;
          font-size: 12px;
        }

        #img_prof{
          width: 80px;
        }

        #foto_prof{
          height: 100px;
        }

        .conteudo-titulo{
          height: auto;
        }
      }

      @media (min-width: 577px) and (max-width: 768px){
        #prof_row{
          width: 450px;
          height: 180px;
        }

        #nm_prof{
          width: 290px;
          font-size: 15px;
        }

        #ds_prof{ 
          width: 290px;
          font-size: 12px;
        }

        #img_prof{
          width: 130px;
        }

        #foto_prof{
          height: 150px;
        }

        .conteudo-titulo{
          height: auto;
        }
      }

      @media (min-width: 768px) and (max-width: 1192px){
        #prof_row{
          width: 600px;
          height: 200px;
        }

        #nm_prof{
          width: 430px;
          font-size: 30px;
        }

        #ds_prof{ 
          width: 430px;
          font-size: 12px;
        }

        #img_prof{
          width: 140px;
        }

        #foto_prof{
          height: 180px;
        }

        .conteudo-titulo{
          height: auto;
        }
      }
  </style>
     <title>Secretaria</title>
  </head>
  <body>


  <?php
    include_once ("includes/menu.php");
  ?>
      <div class="container-fluid">
        <div class="container-fluid conteudo-titulo">
          <h2 class="text-center titulo">SECRETARIA</h2>
        </div>
        <?php
          while($obj = $secre->fetch_object()){
            echo  '<div id="prof_row"> 
                    <div id="nm_prof">'.
                      $obj->nm_funcionario .' '.$obj->nm_sobrenome.
                    '</div>
                    <div id="img_prof"><img id="foto_prof" src="'.$obj->nm_foto.'"/></div>
                    <div id="ds_prof">'.
                      '<b>'.$obj->nm_cargo. '</b><br>'. $obj->ds_cargo.
                    '</div>
                  </div>';  
          }
        ?>
      </div>
      <?php
    include_once("includes/footer.php");
  ?>

    <!-- JavaScript -->
  <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/menu-index.js"></script>


  </body>
</html>
