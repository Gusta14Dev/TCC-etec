<?php
session_start();
include_once("includes/conexao.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Home</title>

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
      include_once ("includes/menu-adm.php");
    ?>

    <div id="container-form">
      <?php
        include_once ("includes/fundo.html");
      ?>

    <div class="container-fluid">
      <div class="jumbotron mx-auto pt-2">
        <h1>Cadastrar aluno</h1>
        <form method="post">
          <div class="form-group">
            <label for="nome">Nome do aluno:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Coloque o nome do aluno...">
          </div>
          <div class="form-group">
            <label for="rm">RM do aluno:</label>
            <input type="text" class="form-control" id="rm" name="rm" placeholder="Coloque o RM do aluno...">
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="email">Email do aluno</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Coloque o email do aluno...">
            </div>
          </div>
          <div class="form-group">
            <label for="senha">Senha do aluno:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Coloque a senha do aluno...">
          </div>
          <div for="turma" class="form-group">Turma do aluno</label>
            <select class="form-control" id="turma" name="turma">
              <?php
              $sql1 = "SELECT * FROM `tb_turma` JOIN `tb_curso` ON `id_curso` = `cd_curso` WHERE `st_ativo` = 1";
              if ($query = $mysqli->query($sql1)) {
                while ($obj = $query->fetch_object()) {
                  ?>
                  <option <?php echo 'value="'.$obj->cd_turma.'"'; ?> > <?php echo $obj->nr_ano. ' '. $obj->sg_curso; ?> </option>
                  <?php
                }
              }
              ?>

            </select>
          </div>
          <div class="row justify-content-center">
            <div class="col-3">
              <button type="button" class="btn btn-cadastrar btn-block" data-toggle="modal" data-target="#confirmar">Confirmar</button>
            </div>
          </div>
          <!--Modal-->
          <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="confirmar" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="confirmar">Confirmar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Tem certeza que deseja enviar?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <input type="submit" name="cadastrar" class="btn btn-success" value="Enviar"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      <?php
      if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $rm= $_POST['rm'];
        $turma = $_POST['turma'];
        $sql1 = "INSERT INTO `tb_aluno`(`nm_aluno`, `nr_rm`, `nm_login`, `nm_senha`, `id_turma`) VALUES ('$nome', '$rm', '$email', '$senha', $turma)";
        if ($mysqli->query($sql1)) {
          session_destroy();
        } else {
          echo "Error updating record: " . $conn->error;
        }
      }
      ?>
    </div>
    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/footer-navbar-segundamento.js"></script>
    </body>
    </html>
