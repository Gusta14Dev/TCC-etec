<?php
include_once("includes/conexao.php");
?>
<div class="login">
  <div id="redes-sociais">
    <a href="https://www.facebook.com/etecdeitanhaem" id="face"><i class="fab fa-facebook-square"></i></a>
    <a href="http://bibliotecaetecdeitanhaem.blogspot.com" id="blog"><i class="fab fa-blogger"></i></a>
  </div>
  <marquee id="endereco">Endereço: Av.José Batista Campos, 1431 - Anchieta - Itanhaém/SP - Tel (13)3426-4926</marquee>
  <a href="login.php" id="logar">Login</a>
</div>
<div class="fechar-menu-lateral"></div>
<!-- Menu fixo -->

 <nav class="menu navbar-expand-lg navbar-dark bg-green">
  <a class="navbar-brand font-weight-bold ml-auto ml-lg-3 float-left" href="#">Etec de Itanhaém</a>
  <button class="navbar-toggler p-25 border-0 float-right " type="button" data-toggle="menu">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse float-right p-0 mr-2">
    <ul class="navbar-nav mr-auto">
      <a class="menu-link" href="index.php">
        <li class="menu-item active">
          <span>Home</span>
        </li>
        </a>
        <li class="menu-item" data-dropdawn-toggle="menu-dropdown1">
          <span>A Escola</span>
          <ul class="menu-dropdown-body bg-dark" id="menu-dropdown1" >

           <?php
                $select="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'Histórico' ";
                  if ($con=$mysqli->query($select)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>



              <li class="menu-dropdown-item">
                <span>Histórico</span>
              </li>
            </a>
            <a class="menu-dropdown-link" href="download/calendario.xlsx" download="Calendário.xlsx" >
              <li class="menu-dropdown-item">
                <span>Calendário</span>
              </li>
            </a>
             <a class="menu-dropdown-link" href="download/horario.xlsx" download="Horário Escolar.xlsx" >
              <li class="menu-dropdown-item">
                <span>Horário Escolar</span>
              </li>
            </a>
            <a class="menu-dropdown-link" href="download/observatorio.pdf" download="Observatório.pdf" >
              <li class="menu-dropdown-item">
                <span>Observatório</span>
              </li>
            </a>
             <a class="menu-dropdown-link" href="download/regimento.pdf" download="Regimento Comum.pdf" >
              <li class="menu-dropdown-item">
                <span>Regimento Comum</span>
              </li>
            </a>
            <?php
                $select1="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'APM' ";
                  if ($con=$mysqli->query($select1)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>
              <li class="menu-dropdown-item">
                <span>APM</span>
              </li>
            </a>
             <a class="menu-dropdown-link" href="download/sobre o conselho da escola.pdf" download="Sobre o Conselho da Escola.pdf" >
              <li class="menu-dropdown-item">
                <span>Sobre o Conselho da Escola</span>
              </li>
            </a>
            <a class="menu-dropdown-link" href="download/membros do conselho.pdf" download="Membros do Conselho Escolar.pdf" >
              <li class="menu-dropdown-item">
                <span>Membros do Conselho Escolar</span>
              </li>
            </a>
          </ul>
        </li>
        <a class="menu-link" href="#">
         <li class="menu-item">
           <span>Eventos</span>
         </li>
        </a>
        <a class="menu-link" href="#">
         <li class="menu-item">
           <span>Cursos</span>
           <ul class="menu-dropdown-body bg-dark" id="menu-dropdown1" >
           <?php
                $select2="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'ETIM - Administração' ";
                  if ($con=$mysqli->query($select2)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>
              <li class="menu-dropdown-item">
                <span>ETIM-Administração</span>
              </li>
            </a>

            <?php
                $select2="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'ETIM - Informática para Internet' ";
                  if ($con=$mysqli->query($select2)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>
              <li class="menu-dropdown-item">
                <span>ETIM-Informática p/ Internet</span>
              </li>
            </a>

            <?php
                $select2="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'ETIM - Meio Ambiente' ";
                  if ($con=$mysqli->query($select2)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>
              <li class="menu-dropdown-item">
                <span>ETIM-Meio Ambiente</span>
              </li>
            </a>

            <?php
                $select2="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'Informática para Internet' ";
                  if ($con=$mysqli->query($select2)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>
              <li class="menu-dropdown-item">
                <span>Informática para Internet</span>
              </li>
            </a>

            <?php
                $select2="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'Administração' ";
                  if ($con=$mysqli->query($select2)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>
              <li class="menu-dropdown-item">
                <span>Administração</span>
              </li>
            </a>

            <?php
                $select2="SELECT * FROM `tb_artigo` WHERE `nm_artigo` = 'Meio Ambiente' ";
                  if ($con=$mysqli->query($select2)) {
                    while ($obj= $con->fetch_object()) {

            echo '<a class="menu-dropdown-link" href="visualizar.php?view=0&itens='.$obj->cd_artigo.'">';  


            }
                  }else{
                      echo "Erro!";
                  }
              ?>
              <li class="menu-dropdown-item">
                <span>Meio Ambiente</span>
              </li>
            </a>
              
            </ul>
         </li>
        </a>
        <a class="menu-link" href="#">
         <li class="menu-item">
           <span>Vestibulinho</span>
          <ul class="menu-dropdown-body bg-dark" id="menu-dropdown2" >
            <a class="menu-dropdown-link" href="https://www.vestibulinhoetec.com.br/home/" >
              <li class="menu-dropdown-item">
                <span>Inscrições</span>
              </li>
            </a>
             <a class="menu-dropdown-link" href="https://www.vestibulinhoetec.com.br/calendario/" >
              <li class="menu-dropdown-item">
                <span>Cronograma</span>
              </li>
            </a>
          </ul>
         </li>
        </a>
        <a class="menu-link" href="#">
         <li class="menu-item">
           <span>Corpo docente</span>
         </li>
      </a>
      <a class="menu-link" href="#">
       <li class="menu-item">
         <span>Coordenação</span>
       </li>
      </a>
      <a class="menu-link" href="#">
       <li class="menu-item">
         <span>Direção</span>
       </li>
      </a>
      <a class="menu-link" href="#">
       <li class="menu-item">
         <span>Secretaria</span>
       </li>
      </a>
      <a class="menu-link" href="#">
        <li class="menu-item">
        <span>TCC</span>
        </li>
      </a>
      <a href="login.php" id="login"></a>
    </ul>
  </div>
</nav>
