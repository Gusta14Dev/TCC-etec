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
<title>Cursos</title>

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
      <?php
        include_once ("includes/fundo.html");
      ?>


  <div class="container-fluid jumbotron corverdinha mx-sm-auto">
    <div class="row justify-content-around">
      <div class="col-md-3 col-12 mt-2 ml-auto pr-0">
          <button class="btn btn-success" id="cadastro" data-toggle="modal" data-target="#cadastro-modal">Cadastrar Cursos <i class="fas fa-plus fa-sm"></i></button>
      </div>

    </div>
    <div id="list" class="row" style="margin-top:5px;">
      <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>CD</th>
                    <th>Cursos</th>
                    <th>Sigla</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
<tr>
   <?php
  $select="SELECT * FROM `tb_curso` WHERE 1"; 
    if ($con=$mysqli->query($select)) {
    while ($obj= $con->fetch_object()) {
    echo  "<td>".$obj->cd_curso."</td>";
    echo "<td>".$obj->nm_curso."</td>";
    echo "<td>".$obj->sg_curso."</td>";



echo '<td>  <a href="alterar_curso.php?edit=0&itens='.$obj->cd_curso.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar</a>';
echo ' <a class="btn btn-danger btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
                    echo $obj->cd_curso.'">Excluir</a>';
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

<!-- Modal para excluir cursos -->
<?php
    $selectmodal="SELECT * FROM `tb_curso`";
    if ($con=$mysqli->query($selectmodal)) {
    while ($obj= $con->fetch_object()) {

echo '<div class="modal fade" id="delete-modal';
echo $obj->cd_curso . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="modalLabel">Excluir Curso</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            Deseja realmente excluir este curso '.$obj->nm_curso.'?
          </div>
          <div class="modal-footer">
            <a href="excluir_curso.php?cd=';
            echo $obj->cd_curso . '" class="btn btn-danger">Excluir</a>
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

<!-- Modal para cadastrar cursos -->

    <div class="modal fade" id="cadastro-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel">Cadastrar Cursos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="container-fluid">
          <div class="row">
            <div class="col-9">
              <label for="artigo"><b>Curso:</b></label>
              <input type="text" class="form-control" name="curso" required autofocus>
            </div>
             <div class="col-3">
              <label for="artigo"><b>Sigla:</b></label>
              <input type="text" class="form-control" name="sigla"  required autofocus>
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

<!-- Php para cadastrar cursos-->
      <?php

if (isset($_POST['butao'])) {
    $curso = $_POST['curso'];
    $sigla = $_POST['sigla'];

$select="INSERT INTO `tb_curso`(`nm_curso`, `sg_curso`) VALUES ('$curso', '$sigla')";
 if ($mysqli->query($select)) {
  ?>
  <script type="text/javascript">
          alert('Cadastrado com sucesso!');
          document.location="cursos.php";
        </script>

    <?php
}

}
?>