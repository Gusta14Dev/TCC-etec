<?php
include_once("includes/conexao.php");
$itens = $_GET['itens'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alterar Funcionários</title>
    <!-- Ícone da pagina-->
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <!-- CSS Bootstrap e Font Awesome-->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
    <!-- CSS da pagina-->
    <link href="css/layout_form.css" rel="stylesheet">
  
</head>

<body>
  <?php
  include_once("includes/menu-adm.php")
  ?>
  <form method="post">
    <?php
    $select="SELECT * FROM `tb_funcionario` WHERE `cd_funcionario` = $itens ";
    if ($con=$mysqli->query($select)) {
      while ($obj= $con->fetch_object()) {
        ?>
        <div id="container-form">
          <?php
            include_once ("includes/fundo.html");
          ?>
         <div class="jumbotron mx-sm-auto">
            <div class="mx-auto p-3 text-center">
            <h1>Alterar Funcionários</h1>
          </div>
          <div class="form-group ml-2 mr-2">
             <div class="row">
               <div class="col-6">
                 <label for="nome"><b>Nome:</b></label>
                 <input type="text" class="form-control" name="nome" <?php echo 'value="'.$obj->nm_funcionario.'"'; ?> required autofocus>
               </div>
               <div class="col-6">
                 <label for="snome"><b>Sobrenome:</b></label>
                 <input type="text" class="form-control" name="sobrenome"<?php echo 'value="'.$obj->nm_sobrenome.'"'; ?> required>
               </div>
             </div>

             <div class="row">
               <div class="col-12">
                 <label for="foto"><b>Foto:</b></label>
                 <input type="text" class="form-control" name="foto" <?php echo 'value="'.$obj->nm_foto.'"'; ?> required>
               </div>
             </div>

             <div class="row">
               <div class="col-12">
                 <label for="cargo"><b>Cargo:</b></label>
                 <input type="text" class="form-control" name="cargo" <?php echo 'value="'.$obj->nm_cargo.'"'; ?> required>
               </div>
             </div>

              <label for="conteudo"><b>Descrição do Cargo:</b></label>
                <div class="form-row">
                  <div class="col-sm-12">
                    <textarea rows="5" cols="50" class="form-control" name="descricao" required> <?php echo $obj->ds_cargo;?></textarea>
                  </div>
                </div>

             <div class="row">
               <div class="col-12 mx-auto pt-2 text-center">
                 <button type="submit" name="butao" class="btn btn-info corverdinha" >Alterar</button>
               </div>
             </div>
           </div>
         </div>

         <?php

       }}else{
        echo "Não há nenhum item cadastrado!";
      }

      if (isset($_POST['butao'])) {

          $nome = $_POST['nome'];
          $sobrenome = $_POST['sobrenome'];
          $foto = $_POST['foto'];
          $cargo = $_POST['cargo'];
          $descricao = $_POST['descricao'];

          $update="UPDATE `tb_funcionario` SET `nm_funcionario`='$nome',`nm_sobrenome`='$sobrenome',`nm_foto`='$foto',`nm_cargo`='$cargo',`ds_cargo`='$descricao' WHERE `cd_funcionario` = $itens ";
          if ($mysqli->query($update)) {
            ?>
            <script type="text/javascript">
              alert('Alterado com sucesso!');
              document.location="funcionarios.php";
            </script>

            <?php
          }else{
           ?>
           <script type="text/javascript">
            alert('Erro ao alterar dados!');
            document.location="funcionarios.php";
          </script>

          <?php
        }
    }
    ?>
  </form>

  <!-- JavaScript -->
  <link href="css/menu-lateral.css" rel="stylesheet">
    <link href="css/layout_form.css" rel="stylesheet">
  <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/per2.js"></script>
  <script src="js/footer-navbar-segundamento.js"></script>


</body>
</html>
