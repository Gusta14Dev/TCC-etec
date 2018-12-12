<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Layout form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/menu-lateral.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <link href="css/botao.css" rel="stylesheet">

	<style>
		#arquivo{
			display:none;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<form method="post" id="form">
        	<div class="form-row">
        		<div class="col-6 col-sm-4">
		        	<label for="foto"><b>Foto:</b></label>
					<div class="mb-3" id="foto-img" ><img src="imagens/avatar.jpg" class="img-fluid" ></div>
				    <input type="file" name="arquivo" id="arquivo" onchange="previewImagem()" required>
					<label class="btn btn-success" for="arquivo"> Selecione uma foto</label>
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
                         <button type="submit" name="butao" class="btn btn-success">Enviar</button>
                         <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
	</div>
	<!-- JavaScript -->
	<script src="js/jquery.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/footer-navbar-segundamento.js"></script>
	<script src="js/botao.js"></script>
	<script>
		function previewImagem(){
			var imagem = document.querySelector('input[name=arquivo]').files[0];
			var preview = document.querySelector('img');
				
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
