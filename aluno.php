<?php
session_start();
include_once "includes/conexao.php";
$cd_turma = $_GET['cd'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel de controle - Alunos</title>
	<!-- Ícone da pagina-->
    <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <!-- CSS Bootstrap e Font Awesome-->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
    <!-- CSS da pagina-->
	<link href="css/menu-lateral.css" rel="stylesheet">
	<link href="css/layout_form.css" rel="stylesheet">

	<style>
</style>
</head>
<body>
	<?php
	include_once ("includes/menu-adm.php");
	?>

	<div id="container-table">

		<div class="container-fluid p-0" style="margin-top: 56px">

			<?php
			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>

			<div class="row p-1">
				<div class="col-6 col-sm-3">
					<a class="btn btn-outline-success h1 form-control-sm p-2" href="#" data-toggle="modal" data-target="#cadastro-modal">Novo aluno</a>
				</div>
				<div class="col-sm-6 col-12 text-center">
					<h2>Alunos</h2>
				</div>
				<div class="col-sm-3 col-6">
					<a class="btn btn-outline-success h1 form-control-sm p-2 float-right" href="turma.php">Turmas</a>
				</div>
			</div> <!-- /#top -->

			<div class="table-responsive mt-sm-3">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>Aluno</th>
							<th class="text-center">RM</th>
							<th class="text-center">Email</th>
							<th class="text-center" class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$select = "SELECT * FROM `tb_aluno` JOIN `tb_turma` ON `id_turma` = `cd_turma` WHERE `id_turma` = $cd_turma;";
						$select2 = "SELECT * FROM `tb_turma` JOIN `tb_curso` ON `id_curso` = `cd_curso` WHERE `st_ativo` = 1";
						if ($query = $mysqli->query($select)) {
							$row_cnt = $query->num_rows;
							if ($row_cnt == 0) {
								?>
								<tr>
									<td>Nenhuma turma ativada</td>
									<td class="text-center">-</td>
									<td class="text-center">-</td>
									<td class="text-center">-</td>
								</tr>
								<?php
							}
							while ($obj = $query->fetch_object()) {
								?>
								<tr>
									<td><?php echo $obj->nm_aluno; ?></td>
									<td class="text-center"><?php echo $obj->nr_rm; ?></td>
									<td class="text-center"><?php echo $obj->nm_login; ?></td>
									<td class="text-center">
										<a class="btn btn-warning btn-sm"  href="#" data-toggle="modal" <?php echo 'data-target="#edit-modal'.$obj->cd_aluno.'"'; ?> >Editar</a>
										<a class="btn btn-danger btn-sm"  href="#" data-toggle="modal" <?php echo 'data-target="#delete-modal'.$obj->cd_aluno.'"'; ?> >Excluir</a>
									</td>
								</tr>
								<?php
							}
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div> <!-- /#bottom -->
</div> <!-- /#main -->

<?php
if ($query = $mysqli->query($select)) {
	while ($obj = $query->fetch_object()) {
	?>

	<!-- Modal do excluir-->
	<div class="modal fade" <?php echo 'id="delete-modal'.$obj->cd_aluno.'"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="modalLabel">Excluir aluno</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
				</div>
				<div class="modal-body">
					Deseja realmente excluir este aluno?
				</div>
				<div class="modal-footer">
					<form action="turma.php" method="post">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" <?php echo 'value="'.$obj->cd_aluno.'"'; ?> name="excluir"  class="btn btn-danger">Excluir</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal do editar-->
	<div class="modal fade" <?php echo 'id="edit-modal'.$obj->cd_aluno.'"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="modalLabel">Editar dados do aluno</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
				</div>
				<div class="modal-body">
					<form action="alunos_funcoes.php" method="post">
						<div class="form-group">
							<label for="nome">Nome do aluno:</label>
							<input type="text" class="form-control" id="nome" name="nome" <?php echo 'value="'.$obj->nm_aluno.'"'; ?> placeholder="Coloque o nome do aluno...">
						</div>
						<div class="form-group">
							<label for="rm">RM do aluno:</label>
							<input type="text" class="form-control" id="rm" name="rm" <?php echo 'value="'.$obj->nr_rm.'"'; ?> placeholder="Coloque o RM do aluno...">
						</div>
						<div class="form-group">
							<div class="form-group">
								<label for="email">Email do aluno</label>
								<input type="email" class="form-control" id="email" name="email" <?php echo 'value="'.$obj->nm_login.'"'; ?> placeholder="Coloque o email do aluno...">
							</div>
						</div>
						<div class="form-group">
							<label for="turma">Turma</label>
							<select class="form-control" id="turma" name="turma">
								<?php
								if ($query2 = $mysqli->query($select2)) {
									while ($obj2 = $query2->fetch_object()) {
										echo '<option value="'.$obj2->cd_turma.'" ';
										if ($obj2->cd_turma == $obj->id_turma) {
											echo 'selected';
										}
										echo '>'.$obj2->nr_ano.'°'.$obj2->sg_curso.'</option>';
									}
								}
								?>
							</select>
						</div>
						<input type="hidden" name="cd" <?php echo 'value="'.$obj->cd_aluno.'"'; ?> >
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" name="edit"  class="btn btn-warning">Editar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
	}
}
?>
	<!-- Modal do cadastrar-->
	<div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="modalLabel">Cadastrar nova turma</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
				</div>
				<div class="modal-body">
					<form action="alunos_funcoes.php" method="post">
						<div class="form-group">
							<label for="nome">Nome do aluno:</label>
							<input required type="text" class="form-control" id="nome" name="nome" placeholder="Coloque o nome do aluno...">
						</div>
						<div class="form-group">
							<label for="rm">RM do aluno:</label>
							<input required type="number" class="form-control" id="rm" name="rm" placeholder="Coloque o RM do aluno...">
						</div>
						<div class="form-group">
							<div class="form-group">
								<label for="email">Email do aluno</label>
								<input required type="email" class="form-control" id="email" name="name" placeholder="Coloque o email do aluno...">
							</div>
						</div>
						<div class="form-group">
							<label for="senha">Senha do aluno:</label>
							<input required type="password" class="form-control" id="senha" name="senha" placeholder="Coloque a senha do aluno...">
						</div>
						<div class="form-group">
							<label for="turma">Turma</label>
							<select required class="form-control" id="turma" name="turma">
								<?php
								if ($query2 = $mysqli->query($select2)) {
									while ($obj2 = $query2->fetch_object()) {
										echo '<option value="'.$obj2->cd_turma.'" >'.$obj2->nr_ano.'°'.$obj2->sg_curso.'</option>';
									}
								}
								?>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="submit" name="cadastrar"  class="btn btn-success">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/footer-navbar-segundamento.js"></script>
</body>
</html>
