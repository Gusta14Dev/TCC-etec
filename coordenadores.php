<?php
	include_once("includes/conexao.php");
	$select="SELECT * FROM `tb_usuario` WHERE `id_tipo` = 2 ORDER BY  `cd_usuario` ASC";
?>
<!DOCTYPE html>
<html lang="pt-br">
		<meta charset="utf-8">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="shortcut icon" href="imagens/icone_etec.png" >
		<!-- CSS -->
  	  <link rel="stylesheet" href="css/bootstrap.min.css">
    	<link href="css/menu-lateral.css" rel="stylesheet">
   	 <link href="css/fontawesome-all.css" rel="stylesheet">
   	 <link href="css/botao.css" rel="stylesheet">
<title>Coordenadores</title>

</head>

<style>

@media (min-width: 576px){
	.botao{
		width: 70%;
	}
}

.botao{
		width: 24%;
	}

	      

</style>
<body>

	<?php
			include_once ("includes/menu-adm.php");
      	?>
		<div id="container-form">
			<?php
				include_once ("includes/fundo.html");
			?>


	<div class="container-table">
		<div class="form-row">
			<div class="col-2 col-sm-4 p-3" >
				<button class="btn btn-success btn-circle" data-toggle="modal" data-target="#cadastro-modal" >&#43;</button>
			</div>
			<div class="col-6 col-sm-4 p-3">
				<h1 class="text-left">Coordenadores</h1>
			</div>
			<div class="col-4 col-sm-4" ></div>
		</div>
		<table class="table table-striped">
		  <thead class="bg-success">
		    <tr class="text-white">
		      <th scope="col">CD</th>
		      <th scope="col">Coordenador</th>
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
					      <th scope="row"><?php echo $obj->cd_usuario; ?></th>
					      <td><?php echo $obj->nm_usuario. " ". $obj->nm_sobrenome; ?></td>
					      <td class="acao" >
						        <div <?php echo 'data-edit="'.$id.'"'; ?> class="container-edit">
						            <div class="text">Editar</div>
						            <button class="edit" data-toggle="modal" <?php echo 'data-target="#edit-modal'.$obj->cd_usuario.'"'; ?> ><i class="fas fa-pen"></i></button>
						        </div>
						        <div <?php echo 'data-remove="'.$id.'"'; ?> class="container-remove">
						            <div class="text">Remover</div>
						            <button class="remove" data-toggle="modal" <?php echo 'data-target="#delete-modal'.$obj->cd_usuario.'"'; ?> ><i class="fas fa-trash-alt"></i></button>
						        </div>
								<div <?php echo 'data-vision="'.$id.'"'; ?> class="container-vision">
						            <div class="text">Visualizar</div>
						            <button class="vision" data-toggle="modal" <?php echo 'data-target="#visu-modal'.$obj->cd_usuario.'"'; ?> ><i class="fas fa-eye"></i></button>
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
		  <div class="modal fade" <?php echo 'id="delete-modal' . $obj->cd_usuario . '"'; ?> tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title" id="modalLabel">Excluir Coordenador</h4>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
			      </div>
			      <div class="modal-body">
			        Deseja realmente excluir <?php echo $obj->nm_usuario . " " . $obj->nm_sobrenome; ?> ?
			      </div>
			      <div class="modal-footer">
			        <a <?php echo 'href="excluir_funcionario.php?cd='. $obj->cd_usuario . '"'; ?> class="btn btn-danger">Excluir</a>
			    	<button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
			      </div>
			    </div>
	  		</div>
	  	</div>
<?php
        }
    }
?>
<!-- Modal para cadastrar coordenadores -->

    <div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Coordenadores</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="container-fluid">
              <div class="row">
		          <div class="col-6">
		            <label for="nome"><b>Nome:</b></label>
		            <input type="text" class="form-control" name="nome" required autofocus>
		          </div>
		          <div class="col-6">
		            <label for="snome"><b>Sobrenome:</b></label>
		            <input type="text" class="form-control" name="sobrenome" required>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-12">
		            <label for="foto"><b>Foto:</b></label>
		            <input type="text" class="form-control" name="foto" value="foto-coordenadores/" required>
		          </div>
		        </div>
		         <div class="row">
		          <div class="col-12">
		            <label for="cargo"><b>Cargo:</b></label>
		            <input type="text" class="form-control" name="cargo" required>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-12">
		            <label for="login"><b>Login:</b></label>
		            <input type="email" class="form-control" name="login" required>
		          </div>
		        </div>
		        <label for="senha"><b>Senha:</b></label>
		        <div class="form-row">
		          <div class="col-12">
		            <input type="password" class="form-control" id="senha" name="senha" required>
		          </div>
		        </div>
		        <label for="csenha"><b>Confirmar Senha:</b></label>
		        <div class="form-row">
		          <div class="col-12">
		            <input type="password" class="form-control" id="csenha" name="csenha" required>
		          </div>
		        </div>
		      </div>
		    </div>
              <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
                <button type="submit" name="butao" class="btn btn-success mb-2">Enviar</button>
                <button type="button" class="btn btn-danger mb-2" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
            </div>
          </div>
        
      </form>
      
   <!-- php cadastrar coordenadores -->
    <?php
	  	if (isset($_POST['butao'])) {
		    $senha = $_POST['senha'];
		    $csenha = $_POST['csenha'];
	    	if ($senha == $csenha) {
		      $nome = $_POST['nome'];
		      $sobrenome = $_POST['sobrenome'];
	       	$foto = $_POST['foto'];
	       	$cargo = $_POST['cargo'];
		      $login = $_POST['login'];
	      	$insert="INSERT INTO `tb_usuario`(`nm_usuario`, `nm_sobrenome`, `nm_foto`, `ds_descricao`, `nm_login`, `nm_senha`, `id_tipo`) VALUES ('$nome','$sobrenome','$foto', '$cargo', '$login','$senha', 2)";
	      		if ($mysqli->query($insert)) {
	  ?>
	  <script type="text/javascript">
	    alert('Cadastrado com sucesso!');
	    document.location="coordenadores.php";
	  </script>
	  <?php
	    }else{
	  ?>
	  <script type="text/javascript">
	    alert('Erro ao Cadastrar!');
	    document.location="coordenadores.php";
	  </script>
	  <?php
	    }}else{
	  ?>
	  <script type="text/javascript">
	    alert('As Senhas Não Condizem!');
	    document.location="coordenadores.php";
	  </script>
	  <?php
	   	}}
  	?>
</div>
<!-- Modal para cadastrar o horário dos coordenadores-->
  	<div class="modal fade" id="cadastro2-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Horários</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
         <form method="post">
		          <div class="row">
		            <div class="col-6">
		          		<label for="entrada"><b>Entrada:</b></label>
		              <input type="time" class="form-control" name="entrada" required autofocus>
		            </div>
		            <div class="col-6">
		              <label for="saida"><b>Saída:</b></label>
		              <input type="time" class="form-control" name="saida" required autofocus>
		            </div>
		          </div>
		   				<label for="semana"><b>Dia da Semana:</b></label>
		          <div class="row">
		            <div class="col-12">
		              <select name="tipo" class="form-control">
			              <option value="Segunda-feira" required autofocus> Segunda-feira
			              <option value="Terça-feira" required> Terça-feira
			              <option value="Quarta-feira" required> Quarta-feira
			              <option value="Quinta-feira" required> Quinta-feira
			              <option value="Sexta-feira" required> Sexta-feira
		              </select>
		            </div>
		          </div>
<?php
	echo '<label for="coord"><b>Coordenadores:</b></label>
		    <div class="row">
		        <div class="col-12">
		            <select name="coordenadores" class="form-control">';
		           	$select="SELECT * FROM `tb_usuario` WHERE `id_tipo` = 2";
		    		if ($con=$mysqli->query($select)) {
		    			while ($obj= $con->fetch_object()) {
		            		echo '<option value="'.$obj->cd_usuario.'" required autofocus>'.$obj->nm_usuario.' '.$obj->nm_sobrenome.'';
		            		
						}
					}else{
		  				echo 'Não há coordenadores cadastrados';
					}
?>
</option>
</select>
</div>
</div>
		        
              <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
                <button type="submit" name="butao2" class="btn btn-success mb-2">Enviar</button>
                <button type="button" class="btn btn-danger mb-2" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
            </div>
          </div>
        
      </form>
<!-- PHP para cadastrar horário -->
       <?php
			if (isset($_POST['butao2'])) {
		    $entrada = $_POST['entrada'];
		    $saida = $_POST['saida'];
		    $tipo = $_POST['tipo'];
		    $coordenadores = $_POST['coordenadores'];
				$insert="INSERT INTO `tb_horario_coordenador`(`hr_entrada`, `hr_saida`, `nm_dia_semana`, `id_usuario`) VALUES ('$entrada','$saida','$tipo','$coordenadores')";
 					if ($mysqli->query($insert)) {
  	?>
  	<script type="text/javascript">
      alert('Cadastrado com sucesso!');
      document.location="coordenadores.php";
    </script>
    <?php
			}else{
  	?>
  	<script type="text/javascript">
      alert('Erro ao Cadastrar!');
      document.location="coordenadores.php";
    </script>
    <?php
  		}}
		?>

<!-- Modal para alterar coordenadores -->

<?php
    $selectmodal3="SELECT * FROM `tb_usuario`";
    if ($con=$mysqli->query($selectmodal3)) {
    while ($obj= $con->fetch_object()) {

echo '<div class="modal fade" id="alterar-modal';
echo $obj->cd_usuario . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Alterar Coordenadores</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">
             <div class="row">
               <div class="col-6">
                 <label for="nome"><b>Nome:</b></label>
                 <input type="text" class="form-control" name="nome" value="'.$obj->nm_usuario.'" required autofocus>
               </div>
               <div class="col-6">
                 <label for="snome"><b>Sobrenome:</b></label>
                 <input type="text" class="form-control" name="sobrenome" value="'.$obj->nm_sobrenome.'" required autofocus>
               </div>
             </div>

             <div class="row">
               <div class="col-12">
                 <label for="foto"><b>Foto:</b></label>
                 <input type="text" class="form-control" name="foto" value="'.$obj->nm_foto.'" required autofocus>
               </div>
             </div>

             <div class="row">
               <div class="col-12">
                 <label for="cargo"><b>Cargo:</b></label>
                 <input type="text" class="form-control" name="cargo" value="'.$obj->ds_descricao.'" required autofocus>
               </div>
             </div>

             <div class="row">
               <div class="col-12">
                 <label for="login"><b>Login:</b></label>
                 <input type="text" class="form-control" name="login" value="'.$obj->nm_login.'" required autofocus>
               </div>
             </div>

             <label for="senha"><b>Senha:</b></label>
             <div class="form-row">
               <div class="col-sm-11 col-10">
                 <input type="password" class="form-control" id="senha" name="senha" value="'.$obj->nm_senha.'" required autofocus>
               </div>
               <div class="col-sm-1 col-2">
                 <button type="button" id="olho" class="btn btn-light"><i class="fas fa-eye"></i></button>
               </div>
             </div>

             <label for="csenha"><b>Confirmar Senha:</b></label>
             <div class="form-row">
               <div class="col-sm-11 col-10">
                 <input type="password" class="form-control" id="csenha" name="csenha" value="'.$obj->nm_senha.'" required autofocus>
               </div>
               <div class="col-sm-1 col-2">
                 <button type="button" id="olho2" class="btn btn-light"><i class="fas fa-eye"></i></button>
               </div>
             </div>
              <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
                <button type="submit" name="butao3" class="btn btn-success mb-2">Enviar</button>
                <button type="button" class="btn btn-danger mb-2" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        
      </form>';
}}
      
      if (isset($_POST['butao3'])) {
        $senha = $_POST['senha'];
        $csenha = $_POST['csenha'];
        if ($senha == $csenha) {

          $nome = $_POST['nome'];
          $sobrenome = $_POST['sobrenome'];
          $foto = $_POST['foto'];
          $cargo = $_POST['cargo'];
          $login = $_POST['login'];

          $update="UPDATE `tb_usuario` SET `nm_usuario`='$nome',`nm_sobrenome`='$sobrenome',`nm_foto`='$foto', `ds_descricao`='$cargo', `nm_login`='$login',`nm_senha`='$senha' WHERE `cd_usuario` = $itens ";
          if ($mysqli->query($update)) {
            ?>
            <script type="text/javascript">
              alert('Alterado com sucesso!');
              document.location="coordenadores.php";
            </script>

            <?php
          }else{
           ?>
           <script type="text/javascript">
            alert('Erro ao alterar dados!');
            document.location="coordenadores.php";
          </script>

          <?php
        }
      }else{
        ?>
        <script type="text/javascript">
          alert('Novas Senhas Não Condizem!');
          document.location="coordenadores.php";
        </script>
        <?php
      }
    }
    ?>