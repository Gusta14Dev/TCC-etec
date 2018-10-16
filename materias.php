<?php
  include_once("includes/conexao.php");
  include_once("includes/texto.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" >
      <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
      <title>Página das Materias</title>
    </head>

<style>

.botao{
  width: 80%;
}

</style>

  <div class="col-md-3 mt-2">
    <a href="cadastrar_materia.php" class="btn btn-primary pull-right h2">Nova Materia</a>
  </div>
      </div> <!-- /#top -->

      <hr />
      <div id="list" class="row">
        <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>CD</th>
                    <th>Materias</th>
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

echo '<td>';
echo ' <a href="alterar_materia.php?edit=0&itens='.$obj->cd_materia.'" TYPE="BUTTON" NAME="submit" class="btn btn-warning btn-xs botao">Editar</a>';
echo ' <a href="excluir_materia.php?excl=0&itens='.$obj->cd_materia.'" TYPE="BUTTON" NAME="submit" class="btn btn-danger btn-xs botao">Excluir</a>';
echo '</td>';
    }}else{
    echo "Não há nenhum item cadastrado!";
    }

?>
</tr>

    <!-- JavaScript -->
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/slick.min.js" ></script>
    <script src="js/per.js"></script>


  </body>
</html>
