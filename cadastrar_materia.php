<?php
  include_once("includes/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
<title>Cadastrar matérias</title>
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
  </style>

</head>

  <body>
    <form method="post" action="">
    <img src="imagens/livro.jpeg" class="img-fluid" id="chocolate"></img>
    <div class="container-fluid">
      <div class="jumbotron mx-sm-auto">
        <div class="form-group">
          <label for="artigo"><b>Matéria:</b></label>
          <div class="row">
            <div class="col-11">
              <input type="text" class="form-control" name="materia" required autofocus>
            </div>
          </div>
        <div class="row">
          <div class="col-12 mx-auto pt-2 text-center">
            <button type="submit" name="butao" class="btn btn-info" >Cadastrar</button>
          </div>
        </div>
      </div>
    </div>
</form>
    <?php

if (isset($_POST['butao'])) {
    $materia = $_POST['materia'];

$select="INSERT INTO `tb_materia`(`nm_materia`) VALUES ('$materia')";
 if ($mysqli->query($select)) {
  ?>
  <script type="text/javascript">
          alert('Cadastrado com sucesso!');
          document.location="materias.php";
        </script>

    <?php
}

}
?>


    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>


  </body>
</html>
