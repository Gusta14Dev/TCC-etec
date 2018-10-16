<?php
	include_once("includes/conexao.php");
  $itens = $_GET['itens'];
	$select= "SELECT * FROM `tb_coordenador` WHERE cd_coordenador = $itens ";
	if($coordenador = $mysqli->query($select)){
	}else {
		echo "Não foi!!!!";
	}
?>
<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="utf-8">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/fontawesome-all.css" >


    <style>

.container{
  background-color: #FFFFFF;
  margin-bottom: 1rem;
  border-radius:0rem;
  color:#343a40;
}

table{
  margin: 0 0 0 0;
}
@media (min-width: 990px) {
  #foto_coordenador {
    width: 40%;
    height: auto;
    float:left;
    position:relative;
  }
}
#logo{
	width:22%;
	height:auto;
	position:absolute;
	top:1%;
	left: 3%;
}
#div_nm_artigo{
	width: 100%;
	height: auto;
}
    </style>
		<link rel="shortcut icon" href="imagens/icone_etec.png" >
  </head>
  <body class="bg-light">
		<div class="fluid-container">
			<div id="logo">
				<img src="imagens/logo-vetorizado.png" class="img-fluid">
			</div>
			<img src="imagens/header.png" class="img-fluid">
		</div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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

	<?php
	while($obj = $coordenador->fetch_object()){
	?>
<div class="container">
	<div class="mx-auto pt-3 pb-5 text-center" id="div_nm_artigo" >
		<p id="nm_artigo" class="h1">
			<?php
				echo $obj->nm_coordenador;
        echo " ".$obj->nm_sobrenome;
        echo '<title>'.$obj->nm_coordenador." ".$obj->nm_sobrenome.'</title>';
			?>
		</p>
	</div>
  <?php
	echo '<div class="mr-sm-5 mt-5 mt-sm-0 mr-0" id="foto_coordenador"  ><img class="img-fluid"
    src="'.$obj->nm_foto.'"></div>';
				echo
        '<div class="row">
        Cargo: '.$obj->nm_cargo.'
        </div>

        <div class="row">
        Login: '.$obj->nm_login.'';

		?>
</div>
	<?php
	}
?>

<table class="table">
  <thead class="thead-dark text-center">
    <tr>
      <th scope="col text-center">Segunda-Feira</th>
      <th scope="col text-center">Terça-Feira</th>
      <th scope="col text-center">Quarta-Feira</th>
      <th scope="col text-center">Quinta-Feira</th>
      <th scope="col text-center">Sexta-Feira</th>
    </tr>
  </thead>

  <tbody>
<tr>
<?php
$select1= "SELECT * FROM `tb_horario_coordenador` WHERE `id_coordenador` = $itens and nm_dia_semana = 'Segunda-feira'";
$select2= "SELECT * FROM `tb_horario_coordenador` WHERE `id_coordenador` = $itens and nm_dia_semana = 'Terça-feira'";
$select3= "SELECT * FROM `tb_horario_coordenador` WHERE `id_coordenador` = $itens and nm_dia_semana = 'Quarta-feira'";
$select4= "SELECT * FROM `tb_horario_coordenador` WHERE `id_coordenador` = $itens and nm_dia_semana = 'Quinta-feira'";
$select5= "SELECT * FROM `tb_horario_coordenador` WHERE `id_coordenador` = $itens and nm_dia_semana = 'Sexta-feira'";

  if ($con1=$mysqli->query($select1)) {
    $row1 =  $con1->num_rows;
  if ($row1 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row1 == 1) {
    if ($obj1= $con1->fetch_object()) {
    echo '<th class="text-center">'.$obj1->hr_entrada.' as '.$obj1->hr_saida.'</th>';
  }}

  if ($row1 >= 2) {
    echo '<th class="text-center">';
    while ($obj1= $con1->fetch_object()) {
    echo "$obj1->hr_entrada as $obj1->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }




  if ($con2=$mysqli->query($select2)) {
    $row2 =  $con2->num_rows;
  if ($row2 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row2 == 1) {
    if ($obj2= $con2->fetch_object()) {
    echo '<th class="text-center">'.$obj2->hr_entrada.' as '.$obj2->hr_saida.'</th>';
  }}

  if ($row2 >= 2) {
    echo '<th class="text-center">';
    while ($obj2= $con2->fetch_object()) {
    echo "$obj2->hr_entrada as $obj2->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }

  if ($con3=$mysqli->query($select3)) {
    $row3 =  $con3->num_rows;
  if ($row3 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row3 == 1) {
    if ($obj3= $con3->fetch_object()) {
    echo '<th class="text-center">'.$obj3->hr_entrada.' as '.$obj3->hr_saida.'</th>';
  }}

  if ($row3 >= 2) {
    echo '<th class="text-center">';
    while ($obj3= $con3->fetch_object()) {
    echo "$obj3->hr_entrada as $obj3->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }

  if ($con4=$mysqli->query($select4)) {
    $row4 =  $con4->num_rows;
  if ($row4 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row4 == 1) {
    if ($obj4= $con4->fetch_object()) {
    echo '<th class="text-center">'.$obj4->hr_entrada.' as '.$obj4->hr_saida.'</th>';
  }}

  if ($row4 >= 2) {
    echo '<th class="text-center">';
    while ($obj4= $con4->fetch_object()) {
    echo "$obj4->hr_entrada as $obj4->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }

  if ($con5=$mysqli->query($select5)) {
    $row5 =  $con5->num_rows;
  if ($row5 == 0) {
    echo '<th class="text-center">---</th>';
  }

  if ($row5 == 1) {
    if ($obj5= $con5->fetch_object()) {
    echo '<th class="text-center">'.$obj5->hr_entrada.' as '.$obj5->hr_saida.'</th>';
  }}

  if ($row5 >= 2) {
    echo '<th class="text-center">';
    while ($obj5= $con5->fetch_object()) {
    echo "$obj5->hr_entrada as $obj5->hr_saida <br>";
}
  }}else {
    echo "Não foi!";
  }
?>
</tr>
</tbody>
</div>
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>

    <script>
        $(document).ready(function(){
          alert("nfjfjfg");
        }
    </script>

  </body>
</html>
