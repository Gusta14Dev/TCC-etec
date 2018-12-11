<?php
  include_once("includes/conexao.php");
  include_once("includes/texto.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" href="imagens/icone_etec.png" >
    <!-- Bootstrap e FontAwsome CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link href="css/fontawesome-all.css" rel="stylesheet">

  <!-- Menu Lateral e Tabela CSS -->
  <link href="css/menu-lateral.css" rel="stylesheet">
  <link href="css/layout_form.css" rel="stylesheet">
<title>Matérias</title>

</head>

<style>

.botao{
  width: 80%;
}

</style>

<?php
      include_once ("includes/menu-adm.php");
        ?>
    <div id="container-form">
      


  <div class="container-fluid jumbotron corverdinha mx-sm-auto">
    <div class="row justify-content-around">
      <div class="col-md-3 col-12 mt-2 ml-auto pr-0">
          <button class="btn btn-success" id="cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastrar Matérias <i class="fas fa-plus fa-sm"></i></button>
      </div>

    </div>
    <div id="list" class="row" style="margin-top:5px;">
      <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>CD</th>
                    <th>Matérias</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
<tr>
   <?php
  $select="SELECT * FROM `tb_materia` WHERE 1"; 
    if ($con=$mysqli->query($select)) {
    while ($obj= $con->fetch_object()) {
    echo  "<td>".$obj->cd_materia."</td>";
    echo "<td>".$obj->nm_materia."</td>";



echo '<td>  <a href="alterar_materia.php?edit=0&itens='.$obj->cd_materia.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar</a>';
echo ' <a class="btn btn-danger btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
                    echo $obj->cd_materia.'">Excluir</a>';
echo '</td>
</tr>';
    }}else{
    echo "Não há nenhum item cadastrado!";
    }            

?>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

<!-- Modal para excluir matéria -->
<?php
    $selectmodal="SELECT * FROM `tb_materia`";
    if ($con=$mysqli->query($selectmodal)) {
    while ($obj= $con->fetch_object()) {

echo '<div class="modal fade" id="delete-modal';
echo $obj->cd_materia . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="modalLabel">Excluir Curso</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            Deseja realmente excluir esta matéria '.$obj->nm_materia.'?
          </div>
          <div class="modal-footer">
            <a href="excluir_materia.php?cd=';
            echo $obj->cd_materia . '" class="btn btn-danger">Excluir</a>
          <button type="button" class="btn btn-default " data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>';
        }
    }
    ?>

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/footer-navbar-segundamento.js"></script>


  </body>
</html>

<!-- Modal para cadastrar matéria -->

    <div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Matéria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <label for="materia"><b>Matéria:</b></label>
              <input type="text" class="form-control" name="nome" required autofocus>
            </div>
          </div>
             <?php
  echo '<div class="row">
            <div class="col-12">
            <label for="materia"><b>Cursos:</b></label>
                <select name="curso" class="form-control">';
                $select="SELECT * FROM `tb_curso`";
            if ($con=$mysqli->query($select)) {
              while ($obj= $con->fetch_object()) {
                    echo '<option value="'.$obj->cd_curso.'" required>'.$obj->nm_curso.'';
                    
            }
          }else{
              echo 'Não há nenhum curso cadastrado';
          }
?>
</option>
</select>
</div>
</div>

 <?php
  echo '<div class="row">
            <div class="col-12">
            <label for="professor"><b>Professor:</b></label>
                <select name="professor" class="form-control">';
                $select="SELECT * FROM `tb_usuario` WHERE `id_tipo` = 3";
            if ($con=$mysqli->query($select)) {
              while ($obj= $con->fetch_object()) {
                    echo '<option value="'.$obj->cd_usuario.'" required>'.$obj->nm_usuario.' '.$obj->nm_sobrenome.'';
                    
            }
          }else{
              echo 'Não há nenhum professor cadastrado';
          }
?>
</option>
</select>
</div>
</div>

<?php
  echo '<div class="row">
            <div class="col-12">
            <label for="professor"><b>Professor (opcional):</b></label>
                <select name="professor2" class="form-control">';
                echo '<option value="">';
                $select="SELECT * FROM `tb_usuario` WHERE `id_tipo` = 3";
            if ($con=$mysqli->query($select)) {
              while ($obj= $con->fetch_object()) {
                    echo '<option value="'.$obj->cd_usuario.'">'.$obj->nm_usuario.' '.$obj->nm_sobrenome.'';
                    
            }
          }else{
              echo 'Não há nenhum professor cadastrado';
          }
?>
</option>
</select>
</div>
</div>

          </div>
              <div class="row">
              <div class="col-12 mx-auto pt-2 text-center">
                <button type="submit" name="butao" class="btn btn-success mb-2">Enviar</button>
                <button type="button" class="btn btn-danger mb-2" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
            </div>
          </div>
        
      </form>

<!-- Php para cadastrar matéria-->
      <?php

if (isset($_POST['butao'])) {
    $materia = $_POST['nome'];
    $curso = $_POST['curso'];

$insert="INSERT INTO `tb_materia`(`nm_materia`, `id_curso`) VALUES ('$materia','$curso')";

 if ($mysqli->query($insert)) {
  $select00 = "SELECT * FROM `tb_materia` WHERE `nm_materia` = '$materia' and `id_curso` = '$curso' ";
  if ($con = $mysqli->query($select00)) {
      while ($obj= $con->fetch_object()) {

      $professor = $_POST['professor']; 
      $materia2 = $obj->cd_materia;



      $insert00 = "INSERT INTO `tb_materia_usuario`(`id_materia`, `id_usuario`) VALUES ('$materia2','$professor')";

if ($mysqli->query($insert00)) {

      if ($_POST['professor2'] != 0 && $_POST['professor'] != $_POST['professor2']) {
        $professor2 = $_POST['professor2'];

         $insert11 = "INSERT INTO `tb_materia_usuario`(`id_materia`, `id_usuario`) VALUES ('$materia2','$professor2')";

      }else{}
      if ($mysqli->query($insert11)) {
        ?> 
      <script type="text/javascript">
      alert('Cadastrado com sucesso!');
      document.location="materias.php";
    </script>
    <?php }else{}
    ?> 
      <script type="text/javascript">
      alert('Cadastrado com sucesso!');
      document.location="materias.php";
    </script>
    <?php
}else{
  ?>
    <script type="text/javascript">
      alert('erro no insert00');
    </script>
<?php
}
}}else{
  ?>
    <script type="text/javascript">
      alert('erro no select00');
    </script>
<?php
}
      }else{
        ?>
    <script type="text/javascript">
      alert('Erro no primeiro insert!');
    </script>
<?php
      }}
    ?>
