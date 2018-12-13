<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	</body>
		<?php
			include_once("includes/conexao.php");
			if (isset($_POST['cadastrar'])) {
				$arquivo 	= $_FILES['arquivo']['name'];
				
				//Pasta onde o arquivo vai ser salvo
				$_UP['pasta'] = 'foto-funcionario/';
				
				//Tamanho máximo do arquivo em Bytes
				$_UP['tamanho'] = 1024*1024*100; //5mb
				
				//Array com a extensões permitidas
				$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
				
				//Renomeiar
				$_UP['renomeia'] = false;
				
				//Array com os tipos de erros de upload do PHP
				$_UP['erros'][0] = 'Não houve erro';
				$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
				$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
				$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
				$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
				
				//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
				if($_FILES['arquivo']['error'] != 0){
					die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
					exit; //Para a execução do script
				}
				
				//Faz a verificação da extensao do arquivo
				$explode = explode('.', $_FILES['arquivo']['name']);
				$extensao = $explode[1];
				if(array_search($extensao, $_UP['extensoes'])=== false){		
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
						<script type=\"text/javascript\">
							alert(\"A imagem não foi cadastrada extesão inválida.\");
						</script>
					";
				}
				//Faz a verificação do tamanho do arquivo
				else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
						<script type=\"text/javascript\">
							alert(\"Arquivo muito grande.\");
						</script>
					";
				}
				
				//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
				else{
					//Primeiro verifica se deve trocar o nome do arquivo
					if($_UP['renomeia'] == true){
						//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
						$nome_final = time().'.jpg';
					}else{
						//mantem o nome original do arquivo
						$nome_final = $_FILES['arquivo']['name'];
					}
					//Verificar se é possivel mover o arquivo para a pasta escolhida
					if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
						//Upload efetuado com sucesso, exibe a mensagem
						$senha = $_POST['senha'];
        				$csenha = $_POST['csenha'];
        				if ($senha == $csenha) {
							$nome = $_POST['nome'];
							$sobrenome = $_POST['sobrenome'];
							$cargo = $_POST['cargo'];
							$login = $_POST['login'];
							$usuario = $_SESSION['cd_usuario'];
							
							$insert="INSERT INTO `tb_usuario`(`nm_usuario`, `nm_sobrenome`, `nm_foto`, `ds_descricao`, `nm_login`, `nm_senha`, `id_tipo`) VALUES ('$nome','$sobrenome','$nome_final', '$cargo', '$login','$senha', 2)";
					  	  if ($mysqli->query($insert)) {
								echo "
									<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/coordenadores.php'>
									<script type=\"text/javascript\">
										alert(\"Coordenador cadastrado com Sucesso.\");
									</script>
								";	
							}else{
								//Erro ao cadastrar no banco de dados
								echo "
									<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/coordenadores.php'>
									<script type=\"text/javascript\">
										alert(\"Erro no cadastro.\");
									</script>
								";
							}
						}
					}else{
						//Upload não efetuado com sucesso, exibe a mensagem
						echo "
							<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
							<script type=\"text/javascript\">
								alert(\"Imagem não foi cadastrada com Sucesso.\");
							</script>
						";
					}
				}
			}else if (isset($_POST['editar'])) {
				if($_FILES['arquivo']['size'] == 0){
					  $nome = $_POST['nome'];
			          $sobrenome = $_POST['sobrenome'];
			          $foto = $_POST['txt-arquivo'];
			          $cargo = $_POST['cargo'];
			          $descricao = $_POST['descr_cargo'];
					  $itens = $_POST['id-arquivo'];
			
			          $update="UPDATE `tb_funcionario` SET `nm_funcionario`='$nome',`nm_sobrenome`='$sobrenome',`nm_foto`='$foto',`nm_cargo`='$cargo',`ds_cargo`='$descricao' WHERE `cd_funcionario` = $itens ";
			          if ($mysqli->query($update)) {
			           echo "
							<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
							<script type=\"text/javascript\">
								alert(\"Dados do funcionario alterados com Sucesso.\");
							</script>
						";
			          }else{
			           echo "
							<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
							<script type=\"text/javascript\">
								alert(\"Erro na alteração.\");
							</script>
						";
			        }
				}else{
					$arquivo = $_FILES['arquivo']['name'];
					$arquivo_antigo = $_POST['txt-arquivo'];
					
					//Pasta onde o arquivo vai ser salvo
					$_UP['pasta'] = 'foto-funcionario/';
					
					//Tamanho máximo do arquivo em Bytes
					$_UP['tamanho'] = 1024*1024*100; //5mb
					
					//Array com a extensões permitidas
					$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
					
					//Renomeiar
					$_UP['renomeia'] = false;
					
					//Array com os tipos de erros de upload do PHP
					$_UP['erros'][0] = 'Não houve erro';
					$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
					$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
					$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
					$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
					
					//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
					if($_FILES['arquivo']['error'] != 0){
						die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
						exit; //Para a execução do script
					}
					
					//Faz a verificação da extensao do arquivo
					$explode = explode('.', $_FILES['arquivo']['name']);
					$extensao = $explode[1];
					if(array_search($extensao, $_UP['extensoes'])=== false){		
						echo "
							<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
							<script type=\"text/javascript\">
								alert(\"A imagem não foi cadastrada extesão inválida.\");
							</script>
						";
					}
					//Faz a verificação do tamanho do arquivo
					else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
						echo "
							<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
							<script type=\"text/javascript\">
								alert(\"Arquivo muito grande.\");
							</script>
						";
					}
					
					//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
					else{
						//Primeiro verifica se deve trocar o nome do arquivo
						if($_UP['renomeia'] == true){
							//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
							$nome_final = time().'.jpg';
						}else{
							//mantem o nome original do arquivo
							$nome_final = $_FILES['arquivo']['name'];
						}
						if(unlink($arquivo_antigo)){
							//Verificar se é possivel mover o arquivo para a pasta escolhida
							if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
								  //Upload efetuado com sucesso, exibe a mensagem
								  $nome = $_POST['nome'];
						          $sobrenome = $_POST['sobrenome'];
						          $cargo = $_POST['cargo'];
						          $descricao = $_POST['descr_cargo'];
								  $itens = $_POST['id-arquivo'];
						
						          $update="UPDATE `tb_funcionario` SET `nm_funcionario`='$nome',`nm_sobrenome`='$sobrenome',`nm_foto`='foto-funcionario/$nome_final',`nm_cargo`='$cargo',`ds_cargo`='$descricao' WHERE `cd_funcionario` = $itens ";
						          if ($mysqli->query($update)) {
						           echo "
										<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
										<script type=\"text/javascript\">
											alert(\"Dados do funcionario alterados com Sucesso.\");
										</script>
									";
						          }else{
						           echo "
										<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
										<script type=\"text/javascript\">
											alert(\"Erro na alteração.\");
										</script>
									";
						        }
							}
						}else{
							//Upload não efetuado com sucesso, exibe a mensagem
							echo "
								<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/TCC-etec/funcionarios.php'>
								<script type=\"text/javascript\">
									alert(\"Imagem não foi cadastrada com Sucesso.\");
								</script>
							";
						}
					}
				}
			}
			
			
		?>
		
	</body>
</html>