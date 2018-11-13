<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/fontawesome-all.css" >
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
        max-width:1200px;
        margin:auto;
      }
    }
			
		</style>
	</head>
	<body class="bg-light">

  	<div id="calendario" class="mt-3">
  		<div id="calendar"></div>
		

		<!-- JavaScript -->
		<script src="js/jquery.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/moment.min.js"></script>
		<script src="js/fullcalendar.min.js"></script>
		<script src="js/pt-br.js"></script>

		<script type="text/javascript">
		

 $(document).ready(function() {
    var largura = $(window).width();
    if (largura <= 700) {
      var tam = 450;
    }else{
      var tam = 700;
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
      eventLimit: true,
      businessHours: true, // display business hours
      editable: true,
      events: [
        {
          title: 'è ISSO AE FIOTE',
          start: '2018-11-13T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Business Lunch',
          start: '2018-11-13T14:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Business Lunch',
          start: '2018-11-13T15:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Business Lunch',
          start: '2018-11-13T16:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Business Lunch',
          start: '2018-11-13T16:00:00',
          constraint: 'businessHours'
        }
      ]
	});
	
});

		</script>

	</body>
</html>
