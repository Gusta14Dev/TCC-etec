<?php
include_once("includes/conexao.php");
include_once("includes/texto.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>

    <link rel="shortcut icon" href="imagens/icone_etec.png" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Notícias</title>
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
		<div id="container-form">
			<?php
				include_once ("includes/fundo.html");
			?>
			<div class="jumbotron mx-auto">
			<div class="col-md-3 mt-2">



 <button class="btn btn-success" id="cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastrar Notícias <i class="fas fa-plus fa-sm"></i></button>



			</div>
			<hr/>
			<div class="table-responsive">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>CD</th>
							<th>Notícia</th>
							<th>Descrição</th>
							<th class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
<?php
							
	$select="SELECT * FROM `tb_artigo` WHERE `st_noticia` = 1 "; 
		if ($con=$mysqli->query($select)) {
			while ($obj= $con->fetch_object()) {
				echo "<tr>";
				echo "<td>".$obj->cd_artigo."</td>";
				echo "<td>".$obj->nm_artigo."</td>";
				echo "<td>". limita_caracteres($obj->ds_conteudo, 140, false).'<a href="noticia.php?view=0&itens='.$obj->cd_artigo.'"> Ler Mais</a>'."</td>";
				echo '<td class="actions">';
				echo '<a href="noticia.php?view=0&itens='.$obj->cd_artigo.'" TYPE="BUTTON" NAME="submit" class="btn btn-success btn-xs botao" >Visualizar</a>';
				echo '<a href="alterar_noticia.php?edit=0&itens='.$obj->cd_artigo.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar</a>';
				echo '<a class="btn btn-danger btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
										echo $obj->cd_artigo.'">Excluir</a>';
				echo '</td>';
				echo "</tr>";
			}
		}else{
			echo "Não há nenhum item cadastrado!";
		}            
							
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



<!-- Modal para Excluir Notícia -->
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
        Deseja realmente excluir esta notícia?
      </div>
      <div class="modal-footer">
        <a href="excluir_noticia.php?cd=';
        echo $obj->cd_artigo . ' " class="btn btn-primary corverdinha">Sim</a>
    <button type="button" class="btn btn-default " data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>';
        }
    }
    ?>

    <!-- Modal para cadastrar noticia -->

    <div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Notícia</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="container-fluid">
              <label for="artigo"><b>Título da Notícia:</b></label>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control" name="nome" required autofocus>
                </div>
              </div>
              <label for="link"><b>Link da Foto da Notícia:</b></label>
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
      
   <!-- php cadastrar noticia -->
     <?php
      if (isset($_POST['butao'])) {
          $nome = $_POST['nome'];
          $foto = $_POST['foto'];
          $conteudo = $_POST['conteudo'];
          $usuario = $_SESSION['cd_usuario'];
          $select="INSERT INTO `tb_artigo`(`nm_artigo`, `nm_foto`, `st_noticia`, `ds_conteudo`, `id_usuario`) VALUES ('$nome','$foto','1','$conteudo','$usuario')";
            if ($mysqli->query($select)) {
    ?>
    <script type="text/javascript">
      alert('Cadastrado com sucesso!');
      document.location="noticias.php";
    </script>
    <?php
      }else{
        ?>
    <script type="text/javascript">
      alert('Erro ao cadastrar!');
      document.location="noticias.php";
    </script>
    <?php
        
      }}
    ?>


<style type="text/css">

	.botao{
		width: 100%;
	}
			
</style>
		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/slick.min.js" ></script>
		<script src="js/per.js"></script>
		<script src="js/footer-navbar-segundamento.js"></script>
	</body>
</html>