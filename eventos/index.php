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
							<dt>Banner do Evento</dt>
							<dd id="image"></dd>
							<dt>Inicio do Evento</dt>
							<dd id="start"></dd>
							<dt>Fim do Evento</dt>
							<dd id="end"></dd>
							</dl>
							<form action="editar-eventos.php" method="get">
							<button type="submit" name="editar" class="btn btn-warning" id="editar">Editar</a>
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
			$('#visualizar #editar').val(event.id);
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
					id: '<?php echo $obj->cd_calendario; ?>',
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
		<?php

			$nome = $_POST['nome'];
			$ds_descricao = $_POST['ds_descricao'];
			$cor = $_POST['cor'];
			$dt_inicio = $_POST['dt_inicio'];
			$tm_inicio = $_POST['tm_inicio'];
			$dt_fim = $_POST['dt_fim'];
			$tm_fim = $_POST['tm_fim'];
			$st_publico_privado = $_POST['st_publico_privado'];
			$usuario = $_SESSION['cd_usuario'];

			$timeset_inicio = $dt_inicio.' '.$tm_inicio.':00';
			$timeset_fim = $dt_fim.' '.$tm_fim.':00';

			$query="INSERT INTO `tb_calendario`(`nm_foto`, `nm_evento`, `ds_conteudo`, `nm_cor`, `dt_inicio`, `dt_fim`, `st_ativo`, `st_publico_privado`, `id_usuario`) VALUES ('imagens/eventos/$foto_evento', '$nome','$ds_descricao', '$cor','$timeset_inicio','$timeset_fim',1,$st_publico_privado, $usuario)";
			if ($mysqli->query($query)) {
				echo 'Certo';
			}else{
				die("Connection failed: " . $mysqli->error);
			}
		?>
	</body>
</html>
