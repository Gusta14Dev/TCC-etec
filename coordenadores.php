<?php
	include_once("includes/conexao.php");
	include_once("includes/texto.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
		<meta charset="utf-8">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="shortcut icon" href="imagens/icone_etec.png" >
		<!-- Bootstrap e FontAwsome CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link href="css/fontawesome-all.css" rel="stylesheet">

	<!-- Menu Lateral e Tabela CSS -->
	<link href="css/menu-lateral.css" rel="stylesheet">
	<link href="css/layout_form.css" rel="stylesheet">
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


	<div class="container-fluid jumbotron corverdinha mx-sm-auto">
		<div class="row justify-content-around">
			<div class="col-md-3 col-12 mt-2 ml-auto pr-0">
					<button class="btn btn-success" id="cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastrar Coordenadores <i class="fas fa-plus fa-sm"></i></button>
			</div>

			<div class="col-md-3 col-12 mt-2 mx-md-auto pr-0">
				<button class="btn btn-success" id="cadastro2" data-toggle="modal" data-target="#cadastro2-modal">Cadastrar Horários <i class="far fa-clock"></i></button>
			</div>
		</div>
		<div id="list" class="row" style="margin-top:5px;">
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th>CD</th>
							<th>Coordenador</th>
							<th class="actions">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr>
	<!--Mostrar conteúdo da tabela-->
<?php
	$select="SELECT * FROM `tb_usuario` WHERE `id_tipo` = 2 ORDER BY  `cd_usuario` ASC ";
		if ($con=$mysqli->query($select)) {
		while ($obj= $con->fetch_object()) {
			echo "<td>".$obj->cd_usuario."</td>";
			echo "<td>".$obj->nm_usuario." ".$obj->nm_sobrenome."</td>";
			echo '<td> <a href="coordenador.php?view=0&itens='.$obj->cd_usuario.'" TYPE="BUTTON" NAME="submit" class="btn btn-success btn-xs botao" >Visualizar</a>';
			echo ' <a class="btn btn-warning btn-xs botao" style="color:black;" id="alterar" data-toggle="modal" data-target="#alterar-modal';
			echo $obj->cd_usuario.'">Editar</a>';
			echo ' <a href="alterar_horario.php?edit=0&itens='.$obj->cd_usuario.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar Horário</a>';
			echo ' <a class="btn btn-danger btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
			echo $obj->cd_usuario.'">Excluir</a>';
			echo '</td></tr>';
		}
		}else{
			echo "Não há nenhum item cadastrado!";
		}
?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>	
	</div>
</div>

<!-- JavaScript -->
<script src="js/jquery.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/footer-navbar-segundamento.js"></script>

</body>
</html>

<!-- Modal para Excluir Coordenadores -->
<?php
    $selectmodal="SELECT * FROM `tb_usuario`";
    if ($con=$mysqli->query($selectmodal)) {
    while ($obj= $con->fetch_object()) {

echo '<div class="modal fade" id="delete-modal';
echo $obj->cd_usuario . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="modalLabel">Excluir Coordenador</h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
		      </div>
		      <div class="modal-body">
		        Deseja realmente excluir este coordenador '.$obj->nm_usuario.'?
		      </div>
		      <div class="modal-footer">
		        <a href="excluir_coordenador.php?cd=';
		        echo $obj->cd_usuario . '" class="btn btn-danger">Excluir</a>
		    	<button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
		      </div>
		    </div>
  		</div>
  	</div>';
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