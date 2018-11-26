<?php
include_once("../includes/conexao.php");
$result_events = "SELECT * FROM tb_evento";
$resultado_events = $mysqli->query($result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS -->
		<link rel="stylesheet" href="../css/bootstrap.css" >
		<link rel="stylesheet" href="../css/fontawesome-all.css" >
		<link href='../css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    	<link rel="stylesheet" href="../css/fullcalendar.min.css" >

		<title>Etec de Itanhaém</title>

		<style>
		
			#footer{
				background-color:#343a40;
				color:#fff;
			}
			.jumbotron{
				margin-bottom: 0rem;
				border-radius:0rem;
			}
			.sumidao{
				display: none;
			}
			@media (min-width: 576px) {
				.jumbotron {
					padding: 2rem 2rem;
				}
				.sumidao{
				display: block;
			}
			}
			.jumbotron h3{
				color:#fff;
			}
			#logo{
				width:22%;
				height:auto;
				position:absolute;
				top:1%;
				left: 3%;
			}
			.nav-link{}
			
			.visualizar{
				display: block;
			}

			.form{
				display: none;
			}

			#calendario{
			width:98%;
			margin:1%;
		}
    @media (min-width: 576px) {
      #calendario{
        width:90%;
        margin:5%;
      }
    }
		</style>
	</head>
	<body class="bg-light">

  	<div id="calendario" class="mt-3">
	<a href="cadastrar-eventos.html" class="btn btn-primary">Adicionar Evento</a> 
		<div id='calendar'></div>
	</div>
		
		<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-center">Dados do Evento</h4>
					</div>
					<div class="modal-body">
						<div class="visualizar">
							<dl class="dl-horizontal">
								<dt>ID do Evento</dt>
							<dd id="id"></dd>
							<dt>Titulo do Evento</dt>
							<dd id="title"></dd>
							<dt>Foto do Evento</dt>
							<dd id="image"></dd>
							<dt>Inicio do Evento</dt>
							<dd id="start"></dd>
							<dt>Fim do Evento</dt>
							<dd id="end"></dd>
							</dl>
							<button class="btn btn-canc-vis btn-warning">Editar</button>
						</div>
						<div class="form">
							<form class="form-horizontal" method="POST" action="proc_edit_evento.php">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="title" id="title" placeholder="Titulo do Evento">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
									<div class="col-sm-10">
										<select name="color" class="form-control" id="color">
											<option value="">Selecione</option>			
											<option style="color:#FFD700;" value="#FFD700">Amarelo</option>
											<option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
											<option style="color:#FF4500;" value="#FF4500">Laranja</option>
											<option style="color:#8B4513;" value="#8B4513">Marrom</option>	
											<option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
											<option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
											<option style="color:#A020F0;" value="#A020F0">Roxo</option>
											<option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>										
											<option style="color:#228B22;" value="#228B22">Verde</option>
											<option style="color:#8B0000;" value="#8B0000">Vermelho</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
									</div>
								</div>
								<input type="hidden" class="form-control" name="id" id="id">
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="button" class="btn btn-canc-edit btn-primary">Cancelar</button>
										<button type="submit" class="btn btn-warning">Salvar Alterações</button>
									</div>
								</div>
							</form>
							
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="../js/jquery.min.js" ></script>
		<script src="../js/bootstrap.min.js" ></script>
		<script src="../js/moment.min.js"></script>
		<script src="../js/fullcalendar.min.js"></script>
		<script src="../js/pt-br.js"></script>

		<script type="text/javascript">
		

 $(document).ready(function() {
	$('.btn-canc-vis').on("click", function() {
		$('.form').slideToggle();
		$('.visualizar').slideToggle();
	 });
	$('.btn-canc-edit').on("click", function() {
		$('.visualizar').slideToggle();
		$('.form').slideToggle();
	});
    var largura = $(window).width();
    if (largura <= 570) {
      var tam = 450;
    }else{
      var tam = 675;
    }
	$('#calendar').fullCalendar({
		themeSystem: 'bootstrap4',
		titleFormat: 'MMMM YYYY',
		height: tam,
		contentHeight: tam,
		handleWindowResize: false,
		header: {
        left: 'title',
        center: ''
      },
	  defaultDate: Date(),
					navLinks: true, // can click day/week names to navigate views
					editable: true,
					eventLimit: true, // allow "more" link when too many events
					eventClick: function(event) {
						
			$('#visualizar #id').text(event.id);
			$('#visualizar #id').val(event.id);
			$('#visualizar #title').text(event.title);
			$('#visualizar #title').val(event.title);
			$('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
			$('#visualizar #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
			$('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
			$('#visualizar #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
			$('#visualizar #color').val(event.color);
			$('#visualizar').modal('show');
			return false;
		},
	   events: [
		<?php
			while($obj = $resultado_events->fetch_object()){
		?>
				{
					id: '<?php echo $obj->cd_evento; ?>',
					title: '<?php echo $obj->nm_evento; ?>',
					start: '<?php echo $obj->dt_inicio; ?>',
					end: '<?php echo $obj->dt_fim; ?>',
					color: '<?php echo $obj->nm_cor; ?>',
					image: '<?php echo $obj->nm_foto; ?>',
				},
		<?php
			}
		?>
					]
	});
	
});

		</script>

	</body>
</html>
