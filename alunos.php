<!DOCTYPE html>
<?php
session_start();
include_once("includes/conexao.php");
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Ícone da pagina-->
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <!-- CSS Bootstrap e Font Awesome-->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
    <!-- CSS da pagina-->
    <link rel="stylesheet" type="text/css" href="css/layout-form.css">
	
</head>
<body>
	<?php
		include_once("includes/fundo.html")
	?>

	<div class="container-fluid">
		<div class="jumbotron mx-auto pt-5 pb-2">
			<form method="post">
				<div class="form-group">
					<label for="rm">RM:</label>
					<div class="form-row">
						<div class="col-10">
							<input type="text" class="form-control" id="rm" name="rm">
						</div>
						<div class="col-2">
							<button class="btn btn-nome" name="pesquisar" value="pesquisar">Pesquisar</button>
						</div>
					</div>
					<label for="nome">NOME:</label>
					<div class="form-row">
						<div class="col-12"><input type="text" class="form-control" id="nome" disabled value="
							<?php
							if (isset($_POST['pesquisar'])) {
								$_SESSION['rm'] = $_POST['rm'];
								$rm = $_SESSION["rm"];
								$sql = "SELECT nm_aluno FROM tb_aluno WHERE nr_rm='$rm'";
								$result = $mysqli->query($sql);

								if ($result->num_rows > 0) {
											// dados de cada row
									$row = $result->fetch_assoc();
									echo $row["nm_aluno"];
								}
								else {
									echo "0 results";
								}
							}
							?>
							">
						</div>
					</div>
				</form>
				<hr>
				<form method="post">
					<div class="form-group">
						<label for="usr">
							EMAIL:
						</label>
						<div class="row">
							<div class="col-12">
								<input type="text" class="form-control" name="email" id="usr">
							</div>
						</div>
						<label for="senhainput">
							SENHA:
						</label>
						<div class="form-row">
							<div class="col-sm-11 col-10">
								<input type="password" class="form-control" name="senha" id="senhainput">
							</div>
							<div class="col-sm-1 col-2">
								<button type="button" id="olho" class="btn btn-light"><i class="fas fa-eye"></i></button>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-3">
							<button type="button" class="btn btn-cadastrar" data-toggle="modal" data-target="#confirmar">Confirmar</button>
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
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$rml= $_SESSION['rm'];
				$sql1 = "UPDATE tb_aluno SET nm_login='$email', nm_senha='$senha' WHERE nr_rm='$rml'";
				if ($mysqli->query($sql1)) {
					session_destroy();
				} else {
					echo "Error updating record: " . $conn->error;
				}
			}
			?>
		</div>

		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/slick.min.js" ></script>
		<script src="js/per.js"></script>

	</body>
	</html>
