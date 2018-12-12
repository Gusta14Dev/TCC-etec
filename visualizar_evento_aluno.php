<?php
include_once("includes/conexao.php");
$result_events = "SELECT * FROM tb_calendario WHERE 1 ";
$resultado_events = $mysqli->query($result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="imagens/icone_etec.png" >
		<!-- CSS -->
		<link href="css/menu-lateral.css" rel="stylesheet">
		<link href="css/layout_form.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/fontawesome-all.css" >
    	<link rel="stylesheet" href="css/fullcalendar.min.css" >
    	<link rel="stylesheet" href="css/menu.css">
  

		<title>Eventos</title>
<?php
  		include_once ("includes/menu-professor.php");
  	?>
  
		<style>

			#calendario{
			width:80%;
			margin:1%;
		}
    @media (max-width: 576px) {
      #calendario{
        width:80%;
        margin:5%;
      }
    }
		</style>
	</head>
	<body class="bg-light">
		<div id='calendar' class="mt-5"></div>
		
		<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title text-center">Informações sobre o Evento</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="visualizar">
							<dl class="dl-horizontal">
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
							

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/moment.min.js"></script>
		<script src="js/fullcalendar.min.js"></script>
		<script src="js/pt-br.js"></script>
		<script src="js/footer-navbar-segundamento.js"></script>
		<script src="js/slick.min.js" ></script>
		<script src="js/popper.min.js" ></script>

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
					eventClick: function(event) {
						
		
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
