<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Etec de Itanhaém</title>
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/fontawesome-all.css" >
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
  <button class="btn btn-success" id="fale">Fale conosco <i class="fas fa-question-circle"></i></button>
  <div class="container-fluid content-title">
    <h2 class="text-center titulo">OS MELHORES CURSOS DA REGIÃO</h2>
  </div>
  <div class="container-fluid" id="curso">
    <div class="row">
      <!-- Imagem do curso de informática -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-0 p-sm-4">
        <div class="image-curso">
          <img src="imagens/pc.svg" alt="Curso de informática para internet" class="img-fluid">
        </div> 
        <!-- Informações do curso de informática para internet -->
        <h4 class="text-center">Informática para Internet (ETIM)</h4>
        <p class="text-justify">O Ensino Médio integrado da ETEC de Itanhaém oferece ao aluno todo conhecimento da base nacional comum do ensino médio porém oferece também a Educação Profissional, o que é uma forma de fazer o ensino médio (formação básica) junto com a educação profissional (formação técnica), um atalho paraos alunos, pois ao concluirem o ensino médio,já terão uma formação profissional técnica. O Técnico em Informática para Internet desenvolve e realiza manutenções em Websites...</p>
        <div class="mx-auto w-25"><a href="visualizar.php?view=0&itens=4" class="btn btn-success justify-content-center">Saiba mais</a></div>
      </div>

      <!-- Imagem do curso de Administração -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-0 p-sm-4">
        <div class="image-curso">
          <img src="imagens/caixa.svg" alt="Curso de administração" class="img-fluid">
        </div>
        <!-- Informações do curso de administração -->
        <h4 class="text-center">Administração (ETIM)</h4>
        <p class="text-justify">O Ensino Médio integrado da ETEC de Itanhaém oferece ao aluno todo conhecimento da base nacional comum do ensino médio porém oferece também a Educação Profissional, o que é uma forma de fazer o ensino médio (formação básica) junto com a educação profissional (formação técnica), um atalho paraos alunos, pois ao concluirem o ensino médio,já terão uma formação profissional técnica.O Técnico em Administração adota postura ética na execução da rotina administrativa...</p>
        <div class="mx-auto w-25"><a href="visualizar.php?view=0&itens=3" class="btn btn-success justify-content-center">Saiba mais</a></div>
      </div>

      <!-- Imagem do curso de Meio ambiente -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-0 p-sm-4">
        <div class="image-curso">
          <img src="imagens/planta.svg" alt="Curso de meio ambiente" class="img-fluid">
        </div>
        <!-- Informações do curso de meio ambiente -->
        <h4 class="text-center mt-1">Meio Ambiente (ETIM)</h4>
        <p class="text-justify">O Ensino Médio integrado da ETEC de Itanhaém oferece ao aluno todo conhecimento da base nacional comum do ensino médio porém oferece também a Educação Profissional, o que é uma forma de fazer o ensino médio (formação básica) junto com a educação profissional (formação técnica), um atalho paraos alunos, pois ao concluirem o ensino médio,já terão uma formação profissional técnica. O Técnico em Meio Ambiente é o profissional que coleta, armazena e interpreta informações...</p>
        <div class="mx-auto w-25"><a href="visualizar.php?view=0&itens=5" class="btn btn-success">Saiba mais</a></div>
      </div>
    </div>
    <div class="row">
      <!-- Imagem do curso de informática -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-0 p-sm-4">
        <div class="image-curso">
          <img src="imagens/pc.svg" alt="Curso de informática para internet" class="img-fluid">
        </div> 
        <!-- Informações do curso de informática para internet -->
        <h4 class="text-center">Desenvolvimento de Sistemas</h4>
        <p class="text-justify">O Ensino Técnico modular de Informática para Internet tem duração de 3 semestres (3 módulos). O Técnico em Informática para Internet desenvolve e realiza manutenções em Websites, portais na Internet e Intranet. Utiliza ferramentas de desenvolvimento de projetos para construir soluções que auxiliam o processo de criação de interfaces e aplicativos empregados no comércio e marketing eletrônicos. ...</p>
        <div class="mx-auto w-25"><a href="visualizar.php?view=0&itens=6" class="btn btn-success justify-content-center">Saiba mais</a></div>
      </div>

      <!-- Imagem do curso de Administração -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-0 p-sm-4">
        <div class="image-curso">
          <img src="imagens/caixa.svg" alt="Curso de administração" class="img-fluid">
        </div>
        <!-- Informações do curso de administração -->
        <h4 class="text-center">Administração</h4>
        <p class="text-justify">O Ensino Técnico modular de Administração tem duração de 3 semestres (3 módulos). O Técnico em Administração é o profissional que adota postura ética na execução da rotina administrativa, na elaboração do planejamento da produção e materiais, recursos humanos, financeiros e mercadológicos. Realiza atividades de controles e auxilia nos processos de direção utilizando ferramentas da informática básica...</p>
        <div class="mx-auto w-25"><a href="visualizar.php?view=0&itens=7" class="btn btn-success justify-content-center">Saiba mais</a></div>
      </div>

      <!-- Imagem do curso de Meio ambiente -->
      <div class="col-sm-4 mx-auto mt-sm-0 mt-1 p-0 p-sm-4">
        <div class="image-curso">
          <img src="imagens/planta.svg" alt="Curso de meio ambiente" class="img-fluid">
        </div>
        <!-- Informações do curso de meio ambiente -->
        <h4 class="text-center mt-1">Meio Ambiente</h4>
        <p class="text-justify">O Ensino Técnico modular de Meio Ambiente tem duração de 3 semestres (3 módulos). O Técnico em Meio Ambiente é o profissional que coleta, armazena e interpreta informações, dados e documentações ambientais. Colabora na elaboração de laudos, relatórios, estudos e no acompanhamento e execução de sistemas de gestão ambiental. Atua na organização de programas de educação ambiental...</p>
        <div class="mx-auto w-25"><a href="visualizar.php?view=0&itens=5" class="btn btn-success justify-content-center">Saiba mais</a></div>
      </div>
    </div>
      
    </div>
  </div>

  <div class="container-fluid" id="noticia">
      <div class="container-fluid content-title container-titulo">
        <h2 class="text-center titulo">ÚLTIMAS NOTÍCIAS</h2>
      </div>
      <div id="content">
		<div id="carrossel">
			<ul>
				<li>
					<img src="imagens/teste.jpg" class="image-fluid" alt="Nome da Imagem" title="Nome da Imagem"/>
				</li>
				<li>
					<img src="imagens/teste.jpg" class="image-fluid" alt="Nome da Imagem" title="Nome da Imagem"/>
				</li>
				<li>
					<img src="imagens/teste.jpg" class="image-fluid" alt="Nome da Imagem" title="Nome da Imagem"/>
				</li>
				<li>
					<img src="imagens/teste.jpg" class="image-fluid" alt="Nome da Imagem" title="Nome da Imagem"/>
				</li>
				<li>
					<img src="imagens/teste.jpg" class="image-fluid" alt="Nome da Imagem" title="Nome da Imagem"/>
				</li>
			</ul>
		</div>
		<nav id="menu-carrossel">
			<a href="#" class="prev" title="Anterior"><i class="fas fa-arrow-circle-left"></i></a>
			<a href="#" class="next" title="Próximo"><i class="fas fa-arrow-circle-right"></i></a>
		</nav>
	  </div>
    </div>

  <div class="container-fluid" id="info">
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

  <!-- JavaScript -->
  <script src="js/jquery.min.js" ></script>
  <script src="js/jquery-1.7.min.js" ></script>
  <script src="js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="js/jcarousellite.js"></script>
  <script src="js/carousel.js"></script>
  <script src="js/menu-index.js"></script>
</body>
</html>
