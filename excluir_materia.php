<?php
  include_once "includes/conexao.php";
  $itens = $_GET['cd'];
  $delete="DELETE FROM `tb_materia` WHERE `cd_materia` = $itens ";
 if ($mysqli->query($delete)) {

  $delete2="DELETE FROM `tb_materia_usuario` WHERE `id_materia` = $itens ";
  if ($mysqli->query($delete2)) {
 	?>
 	<script type="text/javascript">
          alert('Item apagado com sucesso!');
          document.location="materias.php";
        </script>

    <?php
}else{
 	?>
 	<script type="text/javascript">
          alert('Erro ao excluir item!');
          document.location="materias.php";
        </script>
        <?php

}}
?>
