<?php
include_once("includes/conexao.php");
$result_events = "SELECT * FROM tb_evento";
$resultado_events = $mysqli->query($result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS -->
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/fontawesome-all.css" >
		<link rel="stylesheet" href="css/slick.css" >
		<link rel="stylesheet" href="css/slick-theme.css" >
		<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    	<link rel="stylesheet" href="css/fullcalendar.min.css" >

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
		<div class="fluid-container">
			<div id="logo">
				<img src="imagens/logo-vetorizado.png" class="img-fluid">
			</div>
			<img src="imagens/header.png" class="img-fluid">
		</div>

		<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">A Escola</a>
					</li>
			 		<li class="nav-item">
						<a class="nav-link" href="#">Eventos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Cursos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Vestibulinho</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Corpo Docente</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Coordenação</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Direção</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Secretaria</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">TCC</a>
					</li>
				</ul>
			</div>
		</nav>
	


  	<div id="calendario" class="mt-3">
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
					</div>
				</div>
			</div>
		</div>
		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/slick.min.js" ></script>
		<script src="js/moment.min.js"></script>
		<script src="js/fullcalendar.min.js"></script>
		<script src="js/pt-br.js"></script>

		<script type="text/javascript">
		

 $(document).ready(function() {
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
      eventLimit: true,
      businessHours: true, // display business hours
      editable: true,
      eventClick: function(event) {
						
		$('#visualizar #id').text(event.id);
		$('#visualizar #title').text(event.title);
		$('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
		$('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
		$('#visualizar #image').text(event.image);
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
