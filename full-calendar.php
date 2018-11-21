<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- CSS  font awesome -->
    <link rel="stylesheet" href="css/fontawesome-all.css" >
    <!-- CSS Full calendar -->
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link rel="stylesheet" href="css/fullcalendar.min.css" >
	
	<style>
		#calendario{
			width:98%;
			margin:1%;
		}
	</style>
    <title>Olá, Full Calendar!</title>
  </head>
  <body>
  	<div id="calendario" class="mt-3">
  		<div id="calendar"></div>
  	</div>
  
    <!-- JavaScript Jquery -->
    <script src="js/jquery.min.js" ></script>
    <!-- JavaScript Full Calendar -->
	<script src="js/moment.min.js"></script>
	<script src="js/fullcalendar.js"></script>
	<script src="js/pt-br.js"></script>
    <!-- JavaScript Bootstrap-->
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <!-- Scripts personalizados -->
    <script type="text/javascript">
    $(document).ready(function() {
	$('#calendar').fullCalendar({
		themeSystem: 'bootstrap4',
		themeName: 'Simplex',
		titleFormat: 'MMMM YYYY',
		height: 475,
		contentHeight: 475,
		handleWindowResize: false,
		header: {
        left: 'title',
        center: ''
      },
      eventLimit: true,
      views: {
	   month : {
      eventLimit: 2 // adjust to 6 only for agendaWeek/agendaDay
    }
  },
      businessHours: true, // display business hours
      editable: true,
      events: [
        {
          title: 'Business Lunch',
          start: '2018-07-13T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Business Lunch',
          start: '2018-07-13T14:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Business Lunch',
          start: '2018-07-13T15:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Business Lunch',
          start: '2018-07-13T16:00:00',
          constraint: 'businessHours'
        }
      ]
	});
	
});
    </script>
    
  </body>
</html>