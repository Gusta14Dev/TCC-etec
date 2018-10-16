<?php
  include_once("includes/conexao.php");
  $itens = $_GET['itens'];
  ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">

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
      background-color: #007BFF;
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
<title>Alterar materias</title>
</head>

  <body>
    <form method="post">
    <img src="imagens/livro.jpeg" class="img-fluid" id="chocolate"></img>
    <?php
  $select="SELECT * FROM `tb_materia` WHERE `cd_materia` = $itens ";
    if ($con=$mysqli->query($select)) {
    while ($obj= $con->fetch_object()) {

     echo '<div class="container-fluid">
      <div class="jumbotron mx-sm-auto">
        <div class="form-group">
          <label for="artigo"><b>Nome da materia:</b></label>
          <div class="row">
            <div class="col-11">
  <input type="text" class="form-control" name="materia" value="'.$obj->nm_materia.'" required autofocus>
            </div>
          </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-info botao" name="botion">Enviar</button>
          </div>
        </div>
      </div>
    </div>';

  }}else{
    echo "Não há nenhum item cadastrado!";
    }

    if (isset($_POST['botion'])) {

$materia = $_POST['materia'];

$update="UPDATE `tb_materia` SET `nm_materia`='$materia' WHERE `cd_materia` = $itens ";

 if ($mysqli->query($update)) {
  ?>
  <script type="text/javascript">
          alert('Alterado com sucesso!');
          document.location="materias.php";
        </script>

    <?php
}else{
  ?>
  <script type="text/javascript">
          alert('Erro ao alterar!');
          document.location="materias.php";
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
