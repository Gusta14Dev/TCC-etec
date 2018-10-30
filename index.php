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
  <!--Icone do site-->
  <link rel="shortcut icon" href="imagens/icone_etec.png">

  <style>
    #video{
      width:100%;
      height:300px;
      background-color:#343a40;
    }
    #noticia{
      width:85%;
      height:auto;
    }
    #noticia-title{
      width:90%;
      border-top:2px solid #004000;
    }
    #colaborador{

    }
    #curso{
      width:85%;
      height:auto;
      z-index:-1;
    }
    .image-curso{
      width:100%;
      height:auto;
    }
    #fundo{
      position:relative;
      min-height: 80vh;
      background-size:cover;
      background-attachment: fixed;
      background-image: url(imagens/etec-itanhaem.jpg);
      background-position: center center;
    }
    #fundo::after{
      content:'';
      position:absolute;
      top:0;
      right:0;
      bottom:0;
      left:0;
      background-color: rgba(0,0,0,0.8);
      min-height: 80vh;
    }
    
    .content-title{
      width:90%;
      height:100px;
      padding-top:30px;
      color:#000;
      border-bottom:2px solid #004000;
    }
    .swiper-container {
      width: 100%;
      padding-top: 0px;
      padding-bottom: 25px;
      background-color: #fff;
      margin-top:50px;
    }
    .swiper-container h1{
    	padding:0;
    	padding-left:20px;
    	font-family: sans-serif;
    	font-size: 1.5em;
    	color:#323232;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 250px;
      height: 350px;
    }
  </style>
</head>
<body>
  <?php
  include_once("includes/menu.html");
  ?>
  <div id="fundo"></div>
  <div class="container-fluid content-title">
    <h2 class="text-center">OS MELHORES CURSOS DA REGIÃO</h2>
  </div>
  <div class="container" id="curso">
    <div class="row mx-auto mb-5 pt-3 pb-3">
      <div class="col-sm-6 mx-auto mt-sm-0 mt-1 p-0">
        <div class="image-curso">
          <img class="img-fluid" src="imagens/pc.png" alt="Curso de informática para internet">
        </div>
      </div>
      <div class="col-sm-6 mx-auto mt-sm-0 mt-1 pt-5">
        <h4 class="text-center">INFORMÁTICA PARA INTERNET</h4>
        <p class="text-justify">O curso de informática para internet esta disponibilizado no periodo noturno com duração de 2 anos e integrado ao ensino médio (Etim) com duração de 3 anos.</p>
      </div>
    </div>
    <div class="row mx-auto mb-5">
      <div class="col-sm-6 mx-auto mt-sm-0 mt-1">
        <h4 class="text-center">ADMINISTRAÇÃO</h4>
        <p class="text-justify">O curso de informática para internet esta disponibilizado no periodo noturno com duração de 2 anos e integrado ao ensino médio (Etim) com duração de 3 anos.</p>
      </div>
      <div class="col-sm-5 mx-auto mt-sm-0 mt-1 p-0">
        <div class="image-curso">
          <img src="imagens/caixa.png" alt="Curso de informática para internet" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="row mx-auto mb-3 pt-1 pb-1">
      <div class="col-sm-5 mx-auto mt-sm-0 mt-1 p-0">
        <div class="image-curso">
          <img src="imagens/inf.jpg" alt="Curso de informática para internet" class="img-fluid">
        </div>
      </div>
      <div class="col-sm-6 mx-auto mt-sm-0 mt-1">
        <h4 class="text-center">MEIO AMBIENTE</h4>
        <p class="text-justify">O curso de informática para internet esta disponibilizado no periodo noturno com duração de 2 anos e integrado ao ensino médio (Etim) com duração de 3 anos.</p>
      </div>
    </div>
  </div>

  <div class="swiper-container">
    <h1>Ultimas noticias</h1>
    <div class="swiper-wrapper mb-3">
      <div class="swiper-slide" style="background-image:url(imagens/cultura-livros.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(imagens/inf2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
       <div class="swiper-slide" style="background-image:url(imagens/cultura-livros.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(imagens/inf2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
       <div class="swiper-slide" style="background-image:url(imagens/cultura-livros.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(imagens/inf2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(imagens/etec.png)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
     <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

    <div class="container-info" id="colaborador">
      <div class="box">
        <div class="thumb">
          <img src="imagens/inf2.jpg">
        </div>
        <div class="detalhes">
          <div class="content">
            <i class="fa fa-gift" aria-hidden="true"></i>
            <h3>Lorem</h3>
            <a href="#">Ler mais</a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="thumb">
          <img src="imagens/inf2.jpg">
        </div>
        <div class="detalhes">
          <div class="content">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <h3>Lorem Ipsum</h3>
            <a href="#">Ler mais</a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="thumb">
          <img src="imagens/inf2.jpg">
        </div>
        <div class="detalhes">
          <div class="content">
            <i class="fa fa-glass" aria-hidden="true"></i>
            <h3>Lorem</h3>
            <a href="#">Ler mais</a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="thumb">
          <img src="imagens/inf2.jpg">
        </div>
        <div class="detalhes">
          <div class="content">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <h3>Lorem Ipsum</h3>
            <a href="#">Ler mais</a>
          </div>
        </div>
      </div>
    </div>


  <footer class="footer mt-5">
    <div class="nav-header">
      <div class="row mx-auto">
        <div class="col-12 bg-danger mx-auto mt-sm-0 mt-1"><i class="fab fa-facebook-square fa-2x text-primary"></i></div>
      </div>
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
  <script src="js/menu.js"></script>

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
