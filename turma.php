<?php
include_once "includes/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel de controle - CRUD</title>

	<!-- Bootstrap e FontAwsome CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/fontawesome-all.css" rel="stylesheet">

	<!-- Menu Lateral e Form CSS -->
	<link href="css/menu-lateral.css" rel="stylesheet">
	<link href="css/layout_form.Css" rel="stylesheet">
</head>
<body>
	<?php
	include_once ("includes/menu-adm.php");
	?>
	<div id="container-table">
		<div class="container-fluid p-0">
 
			<?php
			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>

			<div class="row p-1">
				<div class="col-12 col-sm-3">
					<a class="btn btn-outline-success h1 form-control-sm p-2" href="#" data-toggle="modal" data-target="#cadastro-modal">Nova turma</a>
				</div>
				<div class="col-sm-6 col-12 text-center">
					<h2>Turmas Ativas</h2>
				</div>
				<div class="col-sm-3"></div>
			</div> <!-- /#top -->

			<div class="table-responsive">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>Turma</th>
							<th class="text-center">Inicio - Fim</th>
							<th class="text-center">Ativo</th>
							<th class="text-center" class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$select = "SELECT * FROM `tb_turma` JOIN `tb_curso` ON `id_curso` = `cd_curso` WHERE `st_ativo` = 1";
						$select2 = "SELECT * FROM `tb_curso`";
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
									<td><?php echo $obj->nr_ano.'º '.$obj->sg_curso; ?></td>
									<td class="text-center"><?php echo $obj->dt_ano_inicio.' - '.$obj->dt_ano_fim; ?></td>
									<td class="text-center">
										<?php
										if ($obj->st_ativo == 1){
											echo 'Sim';
										}else  {
											echo 'Não';
										}
										?>
									</td>
									<td class="text-center">
										<a class="btn btn-primary btn-sm" <?php echo 'href="aluno.php?cd='.$obj->cd_turma.'"'; ?> >Alunos</a>
										<a class="btn btn-warning btn-sm"  href="#" data-toggle="modal" <?php echo 'data-target="#edit-modal'.$obj->cd_turma.'"'; ?> >Editar</a>
										<?php
										if ($obj->nr_ano != 3) {
											?>
											<a class="btn btn-danger btn-sm"  href="#" data-toggle="modal" <?php echo 'data-target="#delete-modal'.$obj->cd_turma.'"'; ?> >Excluir</a>
											<?php
										}elseif ($obj->nr_ano == 3) {
											?>
											<a class="btn btn-danger btn-sm"  href="#" data-toggle="modal" <?php echo 'data-target="#desativa-modal'.$obj->cd_turma.'"'; ?> >Desativar</a>
											<?php
										}
										?>
										<a class="btn btn-success btn-sm"  href="#" data-toggle="modal" <?php echo 'data-target="#aprovar-modal'.$obj->cd_turma.'"'; ?> >Aprovar</a>
									</td>
								</tr>
								<!-- Modal do desativar-->
								<div class="modal fade" <?php echo 'id="desativa-modal'.$obj->cd_turma.'"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="modalLabel">Desativar turma</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
											</div>
											<div class="modal-body">
												Deseja realmente Desativar esta turma?
											</div>
											<div class="modal-footer">
												<form action="turma.php" method="post">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
													<button type="submit" <?php echo 'value="'.$obj->cd_turma.'"'; ?> name="desativar"  class="btn btn-danger">Desativar</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal do excluir-->
								<div class="modal fade" <?php echo 'id="delete-modal'.$obj->cd_turma.'"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="modalLabel">Excluir turma</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
											</div>
											<div class="modal-body">
												Deseja realmente exlcuir esta turma?
											</div>
											<div class="modal-footer">
												<form action="turma.php" method="post">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
													<button type="submit" <?php echo 'value="'.$obj->cd_turma.'"'; ?> name="excluir"  class="btn btn-danger">Excluir</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal do editar-->
								<div class="modal fade" <?php echo 'id="edit-modal'.$obj->cd_turma.'"'; ?>tabindex="-1" role="dialog" aria-labelledby="modalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="modalLabel">Editar dados da turma</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
											</div>
											<div class="modal-body">
												<form action="turma.php" method="post">
													<div class="form-group">
														<div class="row">
															<div class="col-sm-6">
																<label for="dt-inicio">Data do inicio</label>
																<input type="number" id="dt-inicio" name="inicio" <?php echo 'value="'.$obj->dt_ano_inicio.'"'; ?> class="form-control" data-mascara="ano">
															</div>
															<div class="col-sm-6">
																<label for="dt-fim">Data do fim</label>
																<input type="number" id="dt-fim" name="fim" <?php echo 'value="'.$obj->dt_ano_fim.'"'; ?> class="form-control" maxlength="4">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label for="curso">Curso</label>
														<select class="form-control" id="curso" name="curso">
															<?php
															if ($query2 = $mysqli->query($select2)) {
																while ($obj2 = $query2->fetch_object()) {
																	echo '<option value="'.$obj2->cd_curso.'" ';
																	if ($obj2->cd_curso == $obj->id_curso) {
																		echo 'selected';
																	}
																	echo ' >'.$obj2->nm_curso.'</option>';
																}
															}
															?>
														</select>
													</div>
													<input type="hidden" name="cd" <?php echo 'value="'.$obj->cd_turma.'"'; ?> >
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

					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 text-center">
					<h2>Turmas Desativadas</h2>
				</div>
				<div class="col-sm-3"></div>
			</div> <!-- /#top -->

			<div class="table-responsive">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>Turma</th>
							<th class="text-center">Inicio - Fim</th>
							<th class="text-center">Ativo</th>
							<th class="text-center" class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$select = "SELECT * FROM `tb_turma` JOIN `tb_curso` ON `id_curso` = `cd_curso` WHERE `st_ativo` = 0";
						if ($query = $mysqli->query($select)) {
							$row_cnt = $query->num_rows;
							if ($row_cnt == 0) {
								echo '
								<tr>
								<td>Nenhuma turma desativada</td>
								<td class="text-center">-</td>
								<td class="text-center">-</td>
								<td class="text-center">-</td>
								</tr>';
							}
							while ($obj = $query->fetch_object()) {
								?>
								<tr>
									<td><?php echo $obj->sg_curso; ?></td>
									<td class="text-center"><?php echo $obj->dt_ano_inicio.' - '.$obj->dt_ano_fim; ?></td>
									<td class="text-center">
										<?php
										if ($obj->st_ativo == 1){
											echo 'Sim';
										}else  {
											echo 'Não';
										};
										?>
									</td>
									<td class="text-center">
										<a class="btn btn-success btn-sm" href="view.php?cd='.$obj->cd_turma.'">Visualizar</a>
										<a class="btn btn-warning btn-sm"  href="#" data-toggle="modal" <?php echo'data-target="#edit-modal'.$obj->cd_turma.'"' ?> >Editar</a>
										<a class="btn btn-danger btn-sm"  href="#" data-toggle="modal" <?php echo'data-target="#delete-modal'.$obj->cd_turma.'"'; ?> >Ativar</a>
									</td>
								</tr>
								<!-- Modal -->
								<div class="modal fade" <?php echo 'id="delete-modal'.$obj->cd_turma.'"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="modalLabel">Ativar turma</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
											</div>
											<div class="modal-body">
												Deseja realmente ativar esta turma?
											</div>
											<div class="modal-footer">
												<form action="turma.php" method="post">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
													<button type="submit" <?php echo 'value="'.$obj->cd_turma.'"'; ?> name="ativar"  class="btn btn-danger">Ativar</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal do editar-->
								<div class="modal fade" <?php echo'id="edit-modal'.$obj->cd_turma.'"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="modalLabel">Editar dados da turma</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
											</div>
											<div class="modal-body">
												<form action="turma.php" method="post">
													<div class="form-group">
														<div class="row">
															<div class="col-sm-6">
																<label for="dt-inicio">Data do inicio</label>
																<input type="number" id="dt-inicio" name="inicio" <?php echo'value="'.$obj->dt_ano_inicio.'"'; ?> class="form-control">
															</div>
															<div class="col-sm-6">
																<label for="dt-fim">Data do fim</label>
																<input type="number" id="dt-fim" name="fim" <?php echo'value="'.$obj->dt_ano_fim.'"'; ?> class="form-control">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label for="curso">Curso</label>
														<select class="form-control" id="curso" name="curso">
															<?php
															if ($query2 = $mysqli->query($select2)) {
																while ($obj2 = $query2->fetch_object()) {
																	echo '<option value="'.$obj2->cd_curso.'" ';
																	if ($obj2->cd_curso == $obj->id_curso) {
																		echo 'selected';
																	}
																	echo '>'.$obj2->nm_curso.'</option>';
																}
															}
															?>
														</select>
													</div>
													<input type="hidden" name="cd" <?php echo'value="'.$obj->cd_turma.'"'; ?> >
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

					</tbody>
				</table>
			</div>
		</div>
	</div> <!-- /#bottom -->
</div> <!-- /#main -->

<!-- Modal do cadastrar-->
<div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modalLabel">Cadastrar nova turma</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
			</div>
			<div class="modal-body">
				<form action="turma.php" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<label for="dt-inicio">Ano do inicio</label>
								<input type="number" id="dt-inicio" name="inicio" class="form-control" data-mascara="ano">
							</div>
							<div class="col-sm-6">
								<label for="dt-fim">Ano do fim</label>
								<input type="number" id="dt-fim" name="fim" class="form-control" maxlength="4">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="curso">Curso</label>
						<select class="form-control" id="curso" name="curso">
							<?php
							if ($query2 = $mysqli->query($select2)) {
								while ($obj2 = $query2->fetch_object()) {
									echo '<option value="'.$obj2->cd_curso.'">'.$obj2->nm_curso.'</option>';
								}
							}
							?>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" name="cadastrar"  class="btn btn-success">Cadastrar</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
      <script src="js/footer-navbar-segundamento.js"></script>
</body>
</html>
