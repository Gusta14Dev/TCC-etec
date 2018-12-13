<?php
	include_once("includes/conexao.php");
	$select="SELECT * FROM `tb_funcionario` ORDER BY  `cd_funcionario` ASC ";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Funcionarios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/menu-lateral.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <link href="css/botao.css" rel="stylesheet">

	<style>
		
	</style>
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
				<h1 class="text-left">Funcionários</h1>
			</div>
			<div class="col-4 col-sm-4" ></div>
		</div>
		<table class="table table-striped">
		  <thead class="bg-success">
		    <tr class="text-white">
		      <th scope="col">CD</th>
		      <th scope="col">Funcionário</th>
		      <th scope="col">Cargo</th>
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
					      <th scope="row"><?php echo $obj->cd_funcionario; ?></th>
					      <td><?php echo $obj->nm_funcionario. " ". $obj->nm_sobrenome; ?></td>
					      <td><?php echo $obj->nm_cargo; ?></td>
					      <td class="acao" >
						        <div <?php echo 'data-edit="'.$id.'"'; ?> class="container-edit">
						            <div class="text">Editar</div>
						            <button class="edit" data-toggle="modal" <?php echo 'data-target="#edit-modal'.$obj->cd_funcionario.'"'; ?> ><i class="fas fa-pen"></i></button>
						        </div>
						        <div <?php echo 'data-remove="'.$id.'"'; ?> class="container-remove">
						            <div class="text">Remover</div>
						            <button class="remove" data-toggle="modal" <?php echo 'data-target="#delete-modal'.$obj->cd_funcionario.'"'; ?> ><i class="fas fa-trash-alt"></i></button>
						        </div>
								<div <?php echo 'data-vision="'.$id.'"'; ?> class="container-vision">
						            <div class="text">Visualizar</div>
						            <button class="vision" data-toggle="modal" <?php echo 'data-target="#visu-modal'.$obj->cd_funcionario.'"'; ?> ><i class="fas fa-eye"></i></button>
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
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/footer-navbar-segundamento.js"></script>
	<script src="js/botao.js"></script>
	<script>
		function previewImagem(a){
			var arquivo = 'input[id=arquivo'+a+']';
			var img = 'img[id=foto-img'+a+']';
			
			var imagem = document.querySelector(arquivo).files[0];
			var preview = document.querySelector(img);
				
			var reader = new FileReader();
				
			reader.onloadend = function () {
				preview.src = reader.result;
			}
				
			if(imagem){
				reader.readAsDataURL(imagem);
			}else{
				preview.src = "";
			}
		}
	</script>
</body>
</html>
<!-- Modal para excluir funcionários -->
<?php
    if ($con=$mysqli->query($select)) {
    	while ($obj= $con->fetch_object()) {
?>
		  <div class="modal fade" <?php echo 'id="delete-modal' . $obj->cd_funcionario . '"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="modalLabel">Excluir Funcionário</h4>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
			      </div>
			      <div class="modal-body">
			        Deseja realmente excluir <?php echo $obj->nm_funcionario . " " . $obj->nm_sobrenome; ?> ?
			      </div>
			      <div class="modal-footer">
			        <a <?php echo 'href="excluir_funcionario.php?cd='. $obj->cd_funcionario . '"'; ?> class="btn btn-danger">Excluir</a>
			    	<button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
			      </div>
			    </div>
	  		</div>
	  	</div>
<?php
        }
    }
?>
<!-- Modal para cadastrar funcionário -->
<div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Funcionários</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post" action="funcoes-func.php" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-6 col-sm-4">
		        	<label for="foto"><b>Foto:</b></label>
					<div class="mb-3" class="foto-img" ><img src="imagens/avatar.jpg" id="foto-img0" class="img-fluid" ></div>
				    <input type="file" name="arquivo" id="arquivo0" class="arquivo" onchange="previewImagem(0)" required>
					<label class="btn btn-success" for="arquivo0"> Selecione uma foto</label>
				</div>
				<div class="col-6 col-sm-8">
					<div class="row">
				    	<div class="col-12 col-sm-6">
				            <label for="nome"><b>Nome:</b></label>
				            <input type="text" class="form-control" name="nome" required autofocus>
				        </div>
				        <div class="col-12 col-sm-6">
				            <label for="snome"><b>Sobrenome:</b></label>
				            <input type="text" class="form-control" name="sobrenome" required>
				        </div>
				    </div>
					<div class="row">
						<div class="col-12">
					     	<label for="cargo"><b>Cargo:</b></label>
					    	 <input type="text" class="form-control" name="cargo" required>
						</div>
					</div>
				</div>
			</div>
               <div class="row">
                   <div class="col-sm-12">
                        <label for="conteudo"><b>Descrição do Cargo:</b></label>
                        <textarea rows="5" cols="50" class="form-control" name="descr_cargo" required></textarea>
                   </div>
                </div>
		        <div class="row">
                    <div class="col-12 mx-auto pt-2 text-center">
                         <button type="submit" name="cadastrar" class="btn btn-success">Enviar</button>
                         <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
      </div>
	</div>
  </div>
</div>
<!-- Modal para editar funcionários -->
<?php
    if ($con=$mysqli->query($select)) {
    	while ($obj= $con->fetch_object()) {
?>
<div class="modal fade" <?php echo 'id="edit-modal' . $obj->cd_funcionario . '"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Editar funcionários</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post" action="funcoes-func.php" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-6 col-sm-4">
		        	<label for="foto"><b>Foto:</b></label>
					<div class="mb-1" class="foto-img" ><img <?php echo 'src="'.$obj->nm_foto.'"'; ?> <?php echo 'id="foto-img'.$obj->cd_funcionario.'"'; ?> class="img-fluid" ></div>
				    <input type="file" name="arquivo" <?php echo 'id="arquivo'.$obj->cd_funcionario.'"'; ?> class="arquivo" <?php echo 'onchange="previewImagem('.$obj->cd_funcionario.')"'; ?> >
					<label class="btn btn-success" <?php echo 'for="arquivo'.$obj->cd_funcionario.'"'; ?> >Selecione uma foto</label>
				</div>
				<div class="col-6 col-sm-8">
					<div class="row">
				    	<div class="col-12 col-sm-6">
				            <label for="nome"><b>Nome:</b></label>
				            <input type="text" class="form-control" name="nome" <?php echo 'value="'.$obj->nm_funcionario.'"'; ?> required autofocus>
				        </div>
				        <div class="col-12 col-sm-6">
				            <label for="snome"><b>Sobrenome:</b></label>
				            <input type="text" class="form-control" name="sobrenome" <?php echo 'value="'.$obj->nm_sobrenome.'"'; ?> required>
				        </div>
				    </div>
					<div class="row">
						<div class="col-12">
					     	<label for="cargo"><b>Cargo:</b></label>
					    	 <input type="text" class="form-control" name="cargo" <?php echo 'value="'.$obj->nm_cargo.'"'; ?> required>
						</div>
					</div>
				</div>
			</div>
               <div class="row">
                   <div class="col-sm-12">
                        <label for="conteudo"><b>Descrição do Cargo:</b></label>
                        <textarea rows="5" cols="50" class="form-control" name="descr_cargo"><?php echo $obj->ds_cargo; ?></textarea>
                   </div>
                </div>
                <input type="hidden" name="txt-arquivo" <?php echo 'value="'.$obj->nm_foto.'"'; ?> >
                <input type="hidden" name="id-arquivo" <?php echo 'value="'.$obj->cd_funcionario.'"'; ?> >
		        <div class="row">
                    <div class="col-12 mx-auto pt-2 text-center">
                         <button type="submit" name="editar" class="btn btn-warning">Editar</button>
                         <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
                
            </form>
      </div>
	</div>
  </div>
</div>
<?php
	}
}
?>
<!-- Modal para visualizar funcionários -->
<?php
    if ($con=$mysqli->query($select)) {
    	while ($obj= $con->fetch_object()) {
?>
<div class="modal fade" <?php echo 'id="visu-modal' . $obj->cd_funcionario . '"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Visualizar funcionário</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        	<div class="row">
        		<div class="col-6 col-sm-3">
		        	<label for="foto"><b>Foto:</b></label>
					<div class="foto-img" ><img <?php echo 'src="'.$obj->nm_foto.'"'; ?> class="img-fluid" ></div>
				</div>
				<div class="col-6 col-sm-9">
					<div class="row">
				    	<div class="col-12 col-sm-6">
				            <label for="nome"><b>Nome:</b></label>
				            <p><?php echo $obj->nm_funcionario; ?> </p>
				        </div>
				        <div class="col-12 col-sm-6">
				            <label for="snome"><b>Sobrenome:</b></label>
				            <p><?php echo $obj->nm_sobrenome; ?></p>
				        </div>
				    </div>
					<div class="row">
						<div class="col-12">
					     	<label for="cargo"><b>Cargo:</b></label>
					    	 <p><?php echo $obj->nm_cargo; ?> </p>
						</div>
					</div>
				</div>
			</div>
               <div class="row mt-2">
                   <div class="col-sm-12">
                        <label for="conteudo"><b>Descrição do Cargo:</b></label>
                        <p><?php echo $obj->ds_cargo; ?></p>
                   </div>
                </div>
		        <div class="row">
                    <div class="col-12 mx-auto pt-2 text-center">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                    </div>
                </div>
                
            </form>
      </div>
	</div>
  </div>
</div>
<?php
	}
}
?>