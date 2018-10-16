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

        .jumbotron{
    			margin-top: 200px;
    			margin-bottom: 1rem;
    			border-radius:1rem;
    			background-color: #007BFF;
    			color: #FFF;
    			width:50%;
    			height:auto;
    		}

    		html {
    		position: relative;
    		min-height: 100%;
    		}
    		body {
    		/* Margin do footer */
    		margin-bottom: 270px;
    		background-color: #c3c3c3;
    		}
    		footer{
    		padding:0;
    		}
    		.footer {
    		position: absolute;
    		bottom: 0;
    		width: 100%;
    		/* Set the fixed height of the footer here */
    		height: 270px;
    		background-color: #3C3D3F;
    		padding:0;
    		}
    		.nav-header{
    		position:relative;
    		width: 90%;
    		height:40px;
    		margin: 0 auto;
    		}
    		.nav-header::after{
    		content:'';
    		width: 100%;
    		height:2px;
    		background-color: #ccc;
    		opacity:0.95;
    		bottom:0;
    		position:absolute;
    		}
    		.nav-body{
    		position:relative;
    		width: 90%;
    		height:120px;
    		margin: 0 auto;
    		}
    		.nav-body::after{
    		content:'';
    		width: 100%;
    		height:2px;
    		background-color: #ccc;
    		opacity:0.95;
    		bottom:0;
    		position:absolute;
    		}
    		.nav-footer{
    		width: 100%;
    		height:40px;
    		text-align:center;
    		line-height: 40px;
    		}
    		#video{
    		width:100%;
    		height:300px;
    		background-color:#343a40;
    		}
    		#noticia{
    		width:100%;
    		height:400px;
    		background-color:#E0E0E0;
    		}
    		#colaborador{
    		width:100%;
    		height:200px;
    		background-color: #1EAE98;
    		}
    		#curso{
    		width:85%;
    		height:auto;
    		padding:0;
    		margin-top: 5%;
    		}
    		.image-curso{
    		width:100%;
    		height:auto;
    		}
    		#fundo::after{
    		content:'';
    		position:absolute;
    		width:50%;
    		min-height: 70px;
    		background-color:#fff;
    		bottom:-35px;
    		left:0;
    		-ms-transform: skew(0deg, 15deg); /* IE 9 */
    		-webkit-transform: skew(0deg, 15deg); /* Safari */
    		transform: skew(0deg, 5deg);
    		}
    		#fundo::before{
    		content:'';
    		position:absolute;
    		width:50%;
    		min-height: 70px;
    		background-color:#fff;
    		bottom:-35px;
    		right:0;
    		-ms-transform: skew(0deg, -15deg); /* IE 9 */
    		-webkit-transform: skew(0deg, -15deg); /* Safari */
    		transform: skew(0deg, -5deg);
    		}
    		#fundo{
    		margin-top: 89px;
    		position:relative;
    		min-height: 74vh;
    		background-image: url("imagens/lab.jpg");
    		background-size:cover;
    		background-attachment: fixed;
    		background-position: center center;
    		}
    		#fundo2::after{
    		content:'';
    		position:absolute;
    		width:50%;
    		min-height: 50px;
    		background-color:#fff;
    		top:-29px;
    		left:0;
    		-ms-transform: skew(0deg, 15deg); /* IE 9 */
    		-webkit-transform: skew(0deg, 15deg); /* Safari */
    		transform: skew(0deg, -3deg);
    		}
    		#fundo2::before{
    		content:'';
    		position:absolute;
    		width:50%;
    		min-height: 50px;
    		background-color:#fff;
    		top:-29px;
    		right:0;
    		-ms-transform: skew(0deg, -15deg); /* IE 9 */
    		-webkit-transform: skew(0deg, -15deg); /* Safari */
    		transform: skew(0deg, 3deg);
    		}
    		#fundo2{
    		position:relative;
    		min-height: 200px;
    		background-color: #000;
    		background-size:cover;
    		background-attachment: fixed;
    		background-position: center center;
    		}
    		.navbar-header{
    		width: 96%;
    		margin-left: 2%;
    		margin-right: 2%;
    		}
    		.navbar-body{
    		width: 96%;
    		display: inline-block;
    		padding: 0;
    		margin-left: 2%;
    		margin-right: 2%;
    		}
    		.menu{
    		margin-bottom: 0;
    		padding: 0px;
    		margin-left: auto;
    		margin-right: auto;
    		}
    		.menu-item{
    		display: inline-block;
    		margin: 0;
    		margin-right: 1%;
    		padding: 10px;
    		}
    		.menu-item:hover{
    		border-bottom: green 1px solid;
    		}
    		.menu-link{
    		padding: 0;
    		color: #fff;
    		text-decoration: none;
    		}
    		.active{
    		font-weight: bold;
    		border-bottom: green 1px solid;
    		}
    		.menu-link:hover{
    		text-decoration: none;
    		color: #fff;
    		}
    		.bg-black{
    		background-color: #005200;
    		}
    		.form-right{
    		float: right;
    		}
    		.corverdinha{
    		background-color: #006634;
    		color: #f5f5f5;
        .custom-select {
      position: relative;
      font-family: Arial;
    }
    .custom-select select {
    display: none;
    }
  </style>
<title>Alterar Avaliações</title>
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
