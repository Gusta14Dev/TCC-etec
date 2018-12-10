<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css" >
    <title>Icones de ação</title>
    
    <style>
        body{
            background-color: #007bff;
            
        }
        .container-config{
            position: relative;
            width: 138px;
            height: 138px;
        }
        .container-edit{
        	position: absolute;
            width: 50px;
            height: 70px;
            right: 10px;
            bottom: 68px;
            opacity:0;
            transition: opacity 1s;
        }
        .container-remove{
        	position: absolute;
            width: 68px;
            height: 70px;
            right: 70px;
            bottom: 10px;
            opacity:0;
            transition: opacity 1s;
        }
        .edit{
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 100%;
            color:#fff;
            font-size: 1em;
            background-color: #e5bb00;
            outline:none;
        }
        .remove{
        	margin:0 9px;
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 100%;
            color:#fff;
            font-size: 1em;
            background-color: #b70000;
            outline:none;
        }
        .config{
            position: absolute;
            width: 50px;
            height: 50px;
            right: 0;
            bottom: 0;
            border: none;
            border-radius: 100%;
            color:#fff;
            font-size: 1em;
            background-color: #000000;
            outline:none;
        }
        .open-edit{
        	opacity:1;
        }
        .open-remove{
        	opacity:1;
        }
	</style>
  </head>
  <body>
    <div class="container-config">
        <div class="container-edit">
            <div class="text">Editar</div>
            <a href=""><button class="edit" ><i class="fas fa-pen"></i></button></a>
        </div>
        <div class="container-remove">
            <div class="text">Remover</div>
            <button class="remove" ><i class="fas fa-trash-alt"></i></button>
        </div>
        <button class="config" ><i class="fas fa-cogs"></i></button>
    </div>

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script type="text/javascript" >
		$(document).ready(function(){
			$(".config").click(function(){
				$(".container-remove").toggleClass("open-remove");
				$(".container-edit").toggleClass("open-edit");
				$(".config i").toggleClass("fa-cogs");
				$(".config i").toggleClass("fa-times");
			});
		});
	</script>
  </body>
</html>