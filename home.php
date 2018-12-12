<?php
include_once("includes/conexao.php");
if(!isset($_SESSION['nm_usuario'])){
    $_SESSION['msg-fim']= "<div class='alert alert-danger' role='alert'>Logue primeiro antes de tentar entrar aqui!</div>";
    $_SESSION['fim']= 1;
    ?>
    <script type="text/javascript">
        document.location="login.php";
    </script>
    <?php
}
    $aluno = "SELECT COUNT(`nm_aluno`) as qt_alunos FROM `tb_aluno`";
    $professor = "SELECT COUNT(`nm_usuario`) as qt_professor FROM `tb_usuario` WHERE `id_tipo` = 3";
    $coordenador = "SELECT COUNT(`nm_usuario`) as qt_coordenador FROM `tb_usuario` WHERE `id_tipo` = 2";
    $funcionario = "SELECT COUNT(`nm_funcionario`) as qt_funcionario FROM `tb_funcionario`";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">

    <!-- Menu Lateral e Jumbotron CSS -->
    <link href="css/menu-lateral.css" rel="stylesheet">
    <link href="css/painel.css" rel="stylesheet" >
    
  </head>
    <!--Menu Lateral-->
    <?php
      if ($_SESSION['tipo'] == 1) {
        include_once ("includes/menu-adm.php");
      }else if ($_SESSION['tipo'] == 2) {
        include_once ("includes/menu-coordenador.php");
      }else if ($_SESSION['tipo'] == 3) {
        include_once ("includes/menu-professor.php");
      }else if ($_SESSION['tipo'] == 4) {
        include_once ("includes/menu-aluno.php");
      }
      if (isset($_SESSION['inicio'])) {
        echo "<div id='alert'>".$_SESSION['msg-inicio']."</div>";
        unset($_SESSION['inicio']);
      }
    ?>
  <body>
    <!--Layout do Fundo-->
    <div id="container-form">
    </div>
    <?php
        if ($_SESSION['tipo'] == 1) {
        include_once("includes/conteudo_adm.php");
      }else if ($_SESSION['tipo'] == 2) {
        
      }else if ($_SESSION['tipo'] == 3) {
        
      }else if ($_SESSION['tipo'] == 4) {
        
      }
        
    ?>

    <!-- Bootstrap e JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/footer-navbar-segundamento.js"></script>
  </body>
</html>