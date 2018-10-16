<?php
  include_once("includes/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
<title>Cadastrar Cursos</title>
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
  </style>

</head>

  <body>
    <form method="post" action="">
    <div class="container-fluid">
      <div class="jumbotron mx-sm-auto">
        <div class="form-group">
          <label for="artigo"><b>Curso:</b></label>
          <div class="row">
            <div class="col-11">
              <input type="text" class="form-control" name="curso" required autofocus>
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
    $curso = $_POST['curso'];

$select="INSERT INTO `tb_curso`(`nm_curso`) VALUES ('$curso')";
 if ($mysqli->query($select)) {
  ?>
  <script type="text/javascript">
          alert('Cadastrado com sucesso!');
          document.location="cursos.php";
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
