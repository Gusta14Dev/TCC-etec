<?php
include_once("conexao.php");
$result_events = "SELECT * FROM tb_calendario";
$resultado_events = $mysqli->query($result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" >
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
    @media (max-width: 576px) {
      #calendario{
        width:90%;
        margin:5%;
      }
    }
		</style>
	</head>
	<body class="bg-light">

  	<div id="calendario" class="mt-3">
	<a href="cadastrar-eventos.html" class="btn btn-success">Adicionar Evento</a> 
		<div id='calendar'></div>
	</div>
		
		<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-center">Dados do Evento</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="visualizar">
							<dl class="dl-horizontal">
							<dt>ID do Evento</dt>
							<dd id="id"></dd>
							<dt>Titulo do Evento</dt>
							<dd id="title"></dd>
							<dt>Descrição do Evento</dt>
							<dd id="desc"></dd>
							<dt>Banner do Evento</dt>
							<dd id="image"></dd>
							<dt>Inicio do Evento</dt>
							<dd id="start"></dd>
							<dt>Fim do Evento</dt>
							<dd id="end"></dd>
							</dl>
							<form action="editar-eventos.php" method="get">
							<button type="submit" name="editar" class="btn btn-warning mr-2" id="editar">Editar</a>
							<button type="button" name="excluir" class="btn btn-danger" id="excluir">Excluir</a>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-center">Excluir evento</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						Deseja realmente exlcuir esta turma?
					</div>
					<div class="modal-footer">
						<form action="excluir_evento.php" method="post">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
							<button type="submit" name="excluir"  class="btn btn-danger" id="id">Excluir</button>
						</form>
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
	$('#excluir').on("click", function() {
		$('#visualizar').modal('hide');
		$('#delete').modal('show');
	 });
    var largura = $(window).width();
    if (largura <= 400) {
      var tam = 350;
    }else if (largura <= 570) {
      var tam = 450;
      $('#calendario h2').css("font-size", "0.5em");
    }else{
      var tam = 675;
    }
	$('#calendar').fullCalendar({
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
			$('#visualizar #editar').val(event.id);
			$('#delete #id').val(event.id);
			$('#visualizar #desc').text(event.desc);
			$('#visualizar #title').text(event.title);
			$('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
			$('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
			$('#visualizar #color').val(event.color);
			$('#visualizar').modal('show');
			return false;
		},
	   events: [
		<?php
			while($obj = $resultado_events->fetch_object()){
		?>
				{
					id: '<?php echo $obj->cd_calendario; ?>',
					title: '<?php echo $obj->nm_evento; ?>', 
					desc: '<?php echo $obj->ds_conteudo; ?>', 
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
