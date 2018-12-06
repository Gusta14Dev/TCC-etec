<?php
include_once("includes/conexao.php");
$itens = $_GET['itens'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alterar Notícias</title>
    <!-- Ícone da pagina-->
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <!-- BootstrapCSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link href="css/fontawesome-all.css" rel="stylesheet">

  <!-- Menu Lateral e Tabela CSS -->
  <link href="css/menu-lateral.css" rel="stylesheet">
  <link href="css/layout_form.css" rel="stylesheet">
  </head>
  <body>
    <?php
      include_once ("includes/menu-adm.php");
    ?>
    <div id="container-form">
      <?php
        include_once ("includes/fundo.html");
      ?>
      <form method="post">
      <?php
        $select="SELECT * FROM `tb_artigo` WHERE `cd_artigo` = $itens ";
        if ($con=$mysqli->query($select)) {
          while ($obj= $con->fetch_object()) {
            echo '<div class="container-fluid">
                    <div class="jumbotron mx-sm-auto">
                        <div class="mx-auto pt-3 pb-3 text-center">
                          <h1>Alterar Notícias</h1>
                        </div>
                       <div class="form-group ml-2 mr-2">
                        <label for="artigo"><b>Título da Notícia:</b></label>
                        <div class="row">
                          <div class="col-12">
                            <input type="text" class="form-control" name="artigo" value="'.$obj->nm_artigo.'" required autofocus>
                          </div>
                        </div>
                        <label for="foto"><b>Foto:</b></label>
                        <div class="form-row">
                          <div class="col-12">
                            <input type="text" class="form-control" name="foto" value="'.$obj->nm_foto.'" required autofocus>
                          </div>
                        </div>
                        <label for="noticia"><b>Notícia:</b></label>
                        <div class="form-row">
                          <div class="col-12">
                          <button type="submit" name="botion" class="btn btn-primary">Sim</button>
                          <button type="submit" name="botion" class="btn btn-danger">Não</button>
                          </div>
                        </div>
                      <label for="conteudo"><b>Conteúdo:</b></label>
                      <div class="form-row">
                        <div class="col-sm-12">
                          <textarea rows="10" cols="50" class="form-control" name="conteudo" required>'.$obj->ds_conteudo.'</textarea>
                        </div>
                      </div>
                      <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
              <button value="voltar" class="mr-5 btn btn-secondary btn-xs" onClick="goBack()"><i class="fas fa-chevron-left"></i></button>
                <button type="submit" name="botion" class="btn btn-info">Alterar</button>
              </div>
            </div>
                      </div>
                    </div>
                  </div>';
        }}else{
          echo "Não há nenhum item cadastrado!";
        }   

        if (isset($_POST['botion'])) {
          $artigo = $_POST['artigo'];
          $foto = $_POST['foto'];
          $noticia = $_POST['noticia'];
          $conteudo = $_POST['conteudo'];
          $usuario = $_SESSION['cd_usuario'];
          $update="UPDATE `tb_artigo` SET `nm_artigo`='$artigo',`nm_foto`='$foto',`st_noticia`='$noticia',`ds_conteudo`='$conteudo',`id_usuario`='$usuario' WHERE `cd_artigo` = $itens ";
            if ($mysqli->query($update)) {
      ?>
      <script type="text/javascript">
        alert('Alterado com sucesso!');
        document.location="noticias.php";
      </script>
      <?php
        }else{
      ?>
      <script type="text/javascript">
        alert('Erro ao alterar!');
       
      </script>
      <?php
        }}
      ?>       
    </form>
  </div>
    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>
    <script src="js/footer-navbar-segundamento.js"></script>

    <script>

        function goBack() {
       window.history.back();
      }

 </script> 
  </body>
</html>
