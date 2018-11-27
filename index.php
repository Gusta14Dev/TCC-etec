<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Etec de Itanhaém</title>
  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/fontawesome-all.css" >
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/index.css">
  <!--Icone do site-->
  <link rel="shortcut icon" href="imagens/icone_etec.png">
</head>
<body>
  <?php
    include_once("includes/menu.php");
  ?>
  <div id="fundo"></div>
  <div class="container-fluid content-title">
    <h2 class="text-center titulo">OS MELHORES CURSOS DA REGIÃO</h2>
  </div>
  <div class="container-fluid" id="curso">
    <div class="row">
      <!-- Imagem do curso de informática -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-5">
        <div class="image-curso">
          <img src="imagens/pc.svg" alt="Curso de informática para internet" class="img-fluid">
        </div> 
        <!-- Informações do curso de informática para internet -->
        <h4 class="text-center">DESENVOLVIMENTO DE SISTEMAS</h4>
        <p class="text-justify">O curso de informática para internet esta disponibilizado no periodo noturno com duração de 1 ano e 6 meses e integrado ao ensino médio (Etim) com duração de 3 anos.</p>
      </div>

      <!-- Imagem do curso de Administração -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-5">
        <div class="image-curso">
          <img src="imagens/caixa.svg" alt="Curso de administração" class="img-fluid">
        </div>
        <!-- Informações do curso de administração -->
        <h4 class="text-center">ADMINISTRAÇÃO</h4>
        <p class="text-justify">O curso de informática para internet esta disponibilizado no periodo noturno com duração de 2 anos e integrado ao ensino médio (Etim) com duração de 3 anos.</p>
      </div>

      <!-- Imagem do curso de Meio ambiente -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-5">
        <div class="image-curso">
          <img src="imagens/planta.svg" alt="Curso de meio ambiente" class="img-fluid">
        </div>
        <!-- Informações do curso de meio ambiente -->
        <h4 class="text-center">MEIO AMBIENTE</h4>
        <p class="text-justify">O curso de informática para internet esta disponibilizado no periodo noturno com duração de 2 anos e integrado ao ensino médio (Etim) com duração de 3 anos.</p>
      </div>
    </div>
      
    </div>
  </div>

  <div class="container-fluid bg-third">
    <div class="swiper-container bg-third">
      <div class="container-fluid content-title container-titulo">
        <h2 class="text-center titulo">ULTIMAS NOTÍCIAS</h2>
      </div>
      <div class="swiper-wrapper mb-3 pt-3">
        <!-- Imagens do slide de Notícias -->
        <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/Alunos_Etec.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/Alunos_Etec.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/)"></div>
        <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
      </div>
      <!-- Adicionar Paginação -->
      <div class="swiper-pagination"></div>
      <!-- Adicionar Setas -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

  <div class="container-fluid mb-5" id="info">
    <div class="container-info">
        <div class="box">
          <div class="thumb">
            <img src="imagens/etec.png">
          </div>
          <div class="detalhes">
            <div class="content">
              <i class="fa fa-building" aria-hidden="true"></i>
              <h3>Sobre a etec</h3>
              <a href="#">Ler Mais</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="thumb">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.0822602432277!2d-46.787713684857984!3d-24.168847690191086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce2a7e0dafb751%3A0x2416b73463c04254!2sAv.+Jos%C3%A9+Batista+Campos%2C+1431+-+Cidade+Anchieta%2C+Itanha%C3%A9m+-+SP%2C+11740-000!5e0!3m2!1spt-BR!2sbr!4v1541521296688" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="detalhes">
            <div class="content">
              <i class="fa fa-map-marked-alt" aria-hidden="true"></i>
              <h3>Localização</h3>
              <a href="#">Ler Mais</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="thumb">
            <img src="imagens/">
          </div>
          <div class="detalhes">
            <div class="content">
              <i class="fa fa-wrench" aria-hidden="true"></i>
              <h3>Infraestrutura</h3>
              <a href="#">Ler Mais</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="thumb">
            <img src="imagens/">
          </div>
          <div class="detalhes">
            <div class="content">
              <i class="fa fa-user-tie" aria-hidden="true"></i>
              <h3>Secretaria</h3>
              <a href="#">Ler Mais</a>
            </div>
          </div>
        </div>
      </div>
  </div>

  <footer class="footer mt-5">
    <div class="nav-header">
    </div>
    <div class="nav-body">
      <div class="form-row mx-auto align-items-center text-center text-light">
        <div class="col-4 mx-auto mt-sm-0 mt-1 p-0">
          <p></p>
          <p>Email</p>
          <p>email.da@escola.com</p>
        </div>
        <div class="col-4 mx-auto mt-sm-0 mt-1">
          <p></p>
          <p>Telefone</p>
          <p>(13)34707070</p>
        </div>
      </div>
    </div>
    <div class="nav-footer">
      <span class="text-muted">Todos os direitos reservados &copy; para Brunno Lukas, Caio Henrique, Gabriel Ferreira, Gustavo Guimarães, Harison Costa e Pedro Rocha.</span>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="js/jquery.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/menu-index.js"></script>

  <script>
    $(document).ready(function(){
      var width = $('body').width();
      if (width <= 600) {
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 1,
          spaceBetween: 30,
          freeMode: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      }else if (width >= 601 && width <= 900) {
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 2,
          spaceBetween: 30,
          freeMode: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      }else if (width >= 901 && width <= 1300){
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 3,
          spaceBetween: 30,
          freeMode: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      }else if (width >= 1301){
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 4,
          spaceBetween: 30,
          freeMode: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      }
    });
  </script>
</body>
</html>
