<?php
  include_once("includes/conexao.php");
  $itens = $_GET['itens'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Alterar Cursos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Ícone da pagina-->
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <!-- CSS Bootstrap e Font Awesome-->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
    <!-- CSS da pagina-->
    <style>
      #chocolate{
        position:absolute;
        z-index:-1;
        top:0;
      }
      .container{
        width:40%;
      }
      .jumbotron{
        margin-top: 200px;
        margin-bottom: 1rem;
        border-radius:1rem;
        background-color: #006634;
        color: #FFF;
        width:50%;
        height:auto;
      }
      @media (max-width: 576px) {
        .jumbotron {
          width: 100%;
        }
      }

      .button {
        margin-right: 10px;
        margin-top: 10px;
      }

      #olho{
        border-radius:1rem;
      }

      .botao{
        width: 80%;
      }
    </style>
  </head>
  <body>
    <form method="post">
    <?php
      $select="SELECT * FROM `tb_curso` WHERE `cd_curso` = $itens";
      if ($con=$mysqli->query($select)) {
        while ($obj= $con->fetch_object()) {
          echo '<div class="container-fluid">
                  <div class="jumbotron mx-sm-auto">
                    <div class="form-group">
                      <label for="artigo"><b>Nome do Curso:</b></label>
                      <div class="row">
                        <div class="col-11">
                          <input type="text" class="form-control" name="curso" value="'.$obj->nm_curso.'" required autofocus>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-4">
                          <button type="submit" class="btn btn-info botao" name="botion">Enviar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>';
        }
      }else{
        echo "Não há nenhum item cadastrado!";
      }


    if (isset($_POST['botion'])) {
$curso = $_POST['curso'];

$update="UPDATE `tb_curso` SET `nm_curso`='$curso' WHERE `cd_curso` = $itens ";

 if ($mysqli->query($update)) {
  ?>
  <script type="text/javascript">
          alert('Alterado com sucesso!');
          document.location="cursos.php";
        </script>

    <?php
}else{
  ?>
  <script type="text/javascript">
          alert('Erro ao alterar!');
          document.location="cursos.php";
        </script>
        <?php

}}
?>
</form>

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>


  </body>
</html>
