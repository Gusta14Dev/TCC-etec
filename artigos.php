<?php
include_once("includes/conexao.php");
include_once("includes/texto.php");
$select="SELECT * FROM `tb_artigo` WHERE `st_noticia` = 0 "; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>

    <link rel="shortcut icon" href="imagens/icone_etec.png" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Página dos Artigos</title>
	<!-- CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link href="css/menu-lateral.css" rel="stylesheet">
      <link href="css/fontawesome-all.css" rel="stylesheet">
      <link href="css/botao.css" rel="stylesheet">
</head>
	<body>
		<?php
			include_once ("includes/menu-adm.php");
      	?>
		<div class="container-table">
    <div class="form-row">
      <div class="col-2 col-sm-4 p-3" >
        <button class="btn btn-success btn-circle" data-toggle="modal" data-target="#cadastro-modal" >&#43;</button>
      </div>
      <div class="col-6 col-sm-4 p-3">
        <h1 class="text-center">Artigo</h1>
      </div>
      <div class="col-4 col-sm-4" ></div>
    </div>
    <table class="table table-striped">
      <thead class="bg-success">
        <tr class="text-white">
          <th scope="col">CD</th>
          <th scope="col">Artigo</th>
          <th scope="col">Descrição</th>
          <th id="col-acao" scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $id = 0;
        if ($con=$mysqli->query($select)) {
          while ($obj= $con->fetch_object()) {
            $id++;
      ?>
              <tr>
                <th scope="row"><?php echo $obj->cd_artigo; ?></th>
                <td ><?php echo $obj->nm_artigo; ?></td>
                <td><?php echo limita_caracteres($obj->ds_conteudo, 140, false); ?></td>
                <td class="acao" >
                    <div <?php echo 'data-edit="'.$id.'"'; ?> class="container-edit">
                        <div class="text">Editar</div>
                        <button class="edit" data-toggle="modal" <?php echo 'data-target="#edit-modal'.$obj->cd_artigo.'"'; ?> ><i class="fas fa-pen"></i></button>
                    </div>
                    <div <?php echo 'data-remove="'.$id.'"'; ?> class="container-remove">
                        <div class="text">Remover</div>
                        <button class="remove" data-toggle="modal" <?php echo 'data-target="#delete-modal'.$obj->cd_artigo.'"'; ?> ><i class="fas fa-trash-alt"></i></button>
                    </div>
                <div <?php echo 'data-vision="'.$id.'"'; ?> class="container-vision">
                        <div class="text">Visualizar</div>
                        <button class="vision" data-toggle="modal" <?php echo 'data-target="#visu-modal'.$obj->cd_artigo.'"'; ?> ><i class="fas fa-eye"></i></button>
                    </div>
                    <button <?php echo 'id="'.$id.'"'; ?> class="config fechado"><i class="fas fa-cogs"></i></button>
              </td>
              </tr>
      <?php
          }
        }else{
      ?>
        <tr>
            <td>-</td>
            <td>Não a itens cadastrados</td>
            <td>-</td>
            <td>-</td>
          </tr>
      <?php
        }
      ?>
      </tbody>
    </table>
  </div>

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/footer-navbar-segundamento.js"></script>
    <script src="js/botao.js"></script>
<?php
    $selectmodal="SELECT * FROM `tb_artigo`";
    if ($con=$mysqli->query($selectmodal)) {
    while ($obj= $con->fetch_object()) {

echo '<div class="modal fade" id="delete-modal';
echo $obj->cd_artigo . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content corverdinha">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Excluir Artigo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este artigo?
      </div>
      <div class="modal-footer">
        <a href="excluir_artigo.php?cd=';
        echo $obj->cd_artigo . ' " class="btn btn-primary corverdinha">Sim</a>
    <button type="button" class="btn btn-default " data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>';
        }
    }
    ?>


<!-- Modal para cadastrar artigos -->

    <div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Artigo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="container-fluid">
              <label for="artigo"><b>Título do Artigo:</b></label>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control" name="nome" required autofocus>
                </div>
              </div>
              <label for="link"><b>Link da Foto do Artigo:</b></label>
              <div class="form-row">
                <div class="col-12">
                  <input type="text" class="form-control" name="foto" value="foto-artigos/" required>
                </div>
              </div>
              <label for="conteudo"><b>Conteúdo:</b></label>
                      <div class="form-row">
                        <div class="col-sm-12">
                          <textarea rows="5" cols="50" class="form-control" name="conteudo" required></textarea>
                        </div>
                      </div>
              <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
                <button type="submit" name="butao" class="btn btn-success">Enviar</button>
                <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar</button>
              </div>
            </div>
            </div>
          </div>
        
      </form>
<!-- Php para cadastrar artigos-->
       <?php
      if (isset($_POST['butao'])) {
          $nome = $_POST['nome'];
          $foto = $_POST['foto'];
          $conteudo = $_POST['conteudo'];
          $usuario = $_SESSION['cd_usuario'];
          $select="INSERT INTO `tb_artigo`(`nm_artigo`, `nm_foto`, `st_noticia`, `ds_conteudo`, `id_usuario`) VALUES ('$nome','$foto','0','$conteudo','$usuario')";
            if ($mysqli->query($select)) {
    ?>
    <script type="text/javascript">
      alert('Cadastrado com sucesso!');
      document.location="artigos.php";
    </script>
    <?php
      }else{
        ?>
    <script type="text/javascript">
      alert('Erro ao cadastrar!');
      document.location="artigos.php";
    </script>
    <?php
        
      }}
    ?>
	</body>
</html>