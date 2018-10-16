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
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
<title>Página dos Cursos</title>

</head>

<style>

.botao{
  width: 80%;
}

</style>

 <div class="col-md-3 mt-2">
            <a href="cadastrar_curso.php" class="btn btn-primary pull-right h2">Novo Curso</a>
        </div>
      </div> <!-- /#top -->
 
      <hr />
      <div id="list" class="row">
        <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>CD</th>
                    <th>Cursos</th>
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


echo '<td>  <a href="alterar_curso.php?edit=0&itens='.$obj->cd_curso.'" TYPE="BUTTON" NAME="submit" class="btn btn-success btn-xs botao">Editar</a>';
echo ' <a class="btn btn-info btn-xs botao" style="color:white;" data-toggle="modal" data-target="#delete-modal';
                    echo $obj->cd_curso.'">Excluir</a>';
echo '</td>
</tr>';
    }}else{
    echo "Não há nenhum item cadastrado!";
    }            

?>
</tr>

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
        Deseja realmente excluir este curso?
      </div>
      <div class="modal-footer">
        <a href="excluir_curso.php?cd=';
        echo $obj->cd_curso . ' " class="btn btn-primary">Sim</a>
    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
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
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>


  </body>
</html>