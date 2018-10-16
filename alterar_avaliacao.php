<?php
  include_once("includes/conexao.php");
  $itens = $_GET['itens'];
  ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <title>Alterar Avaliações</title>
    <!-- Ícone da pagina-->
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
   <!-- CSS Bootstrap e Font Awesome-->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
    <!-- CSS da pagina-->

</head>

  <body>
    <nav class="navbar fixed-top navbar-dark corverdinha p-0 pt-1">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Etec de Itanhaém</a>
        <form class="form-right form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="navbar-body">
        <ul class="menu">
          <li class="menu-item active">
            <a class="menu-link" href="#">Home</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">A escola</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">Eventos</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">Cursos</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">Vestibulinho</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">Corpo docente</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">Coordenação</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">Direção</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">Secretaria</a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="#">TCC</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <?php
  $select="SELECT * FROM `tb_calendario` WHERE `cd_calendario` = $itens ";
    if ($con=$mysqli->query($select)) {
    while ($obj= $con->fetch_object()) {

     echo '<form method="post">
     <div class="container-fluid">
      <div class="jumbotron mx-sm-auto corverdinha">
        <div class="form-group">
          <label for="artigo"><b>Tipo da Avaliação:</b></label>
          <div class="row">
            <div class="col-11">
              <select name="tipo" class="col-12 form-group custom-select ">
              <option value="Avaliação" required autofocus>Avaliação</option>
              <option value="Trabalho" required autofocus>Trabalho</option>
              <option value="Lição" required autofocus>Lição</option>
              <option value="Apresentação" required autofocus>Apresentação</option>
              </select>
            </div>
          </div>
          <label for="link"><b>Conteúdo:</b></label>
          <div class="form-row">
            <div class="col-sm-11">
              <input type="text" class="form-control" name="conteudo" value="'.$obj->ds_conteudo.'"  required autofocus>
            </div>

          </div>
          <label for="conteudo"><b>Data:</b></label>
          <div class="row">
            <div class="col-11">
              <input type="date" class="form-control" name="data" required autofocus>
            </div>
          </div>
          <label for="conteudo"><b>Horário inicial:</b></label>
          <div class="row">
            <div class="col-11">
              <input type="time" class="form-control" name="inicio" required autofocus>
            </div>
          </div>
            <label for="conteudo"><b>Horário final:</b></label>
          <div class="row">
            <div class="col-11">
              <input type="time" class="form-control" name="fim" required autofocus>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12 mx-auto pt-2 text-center">
            <button type="submit" name="butao" class="btn btn-info corverdinha">Cadastrar</button>
          </div>
        </div>
      </div>
    </div>';

  }}else{
    echo "Não há nenhum item cadastrado!";
    }

    if (isset($_POST['butao'])) {
    $tipo = $_POST['tipo'];
    $conteudo = $_POST['conteudo'];
    $data = str_replace("/", "-", $_POST["data"]);
    $inicio = $_POST['inicio'].':00';
    $fim = $_POST['fim'].':00';

  $datainicio = date('Y-m-d', strtotime($data)).' '.$inicio;
  $datafinal = date('Y-m-d', strtotime($data)).' '.$fim;

$update="UPDATE `tb_calendario` SET `nm_tipo`='$tipo',`ds_conteudo`='$conteudo',`dt_inicio`='$datainicio',`dt_fim`='$datafinal',`id_usuario`= 2 WHERE `cd_calendario` = $itens ";

 if ($mysqli->query($update)) {
  ?>
  <script type="text/javascript">
          alert('Alterado com sucesso!');
          document.location="avaliacoes.php";
        </script>

    <?php
}else{
  ?>
  <script type="text/javascript">
          alert('Erro ao alterar!');
          document.location="avaliacoes.php";
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
