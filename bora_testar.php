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
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <style type="text/css">
        #alert{
            position: fixed;
            width: 50%;
            z-index: 100000;
            top: -10%;
            left: 50%;
            right: 50%;
            opacity: 0;
            transform: translate(-50%, 0);
            animation-name: alert;
            animation-duration: 4s;
        }
        @keyframes alert {
            0%{top: -10%;}
            10%{opacity: 1;}
            50%{top: 5%;}
            90%{top: -10%;}
            100%{opacity: 1;}
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">

    <!-- Menu Lateral e Jumbotron CSS -->
    <link href="css/menu-lateral.css" rel="stylesheet">
    <link href="css/layout_form.css" rel="stylesheet">
  </head>
  <body>
    <!--Menu Lateral-->
    <?php
      include_once ("includes/menu-professor.php");
      if (isset($_SESSION['inicio'])) {
        echo "<div id='alert'>".$_SESSION['msg-inicio']."</div>";
        unset($_SESSION['inicio']);
      }
    ?>
    <!--Layout do Fundo-->
    <div id="container-form">
    </div>

    <!-- Bootstrap e JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/footer-navbar-segundamento.js"></script>
  </body>
</html>