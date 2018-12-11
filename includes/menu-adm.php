<header>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-dark bg-black p-0">
		<button class="navbar-toggler p-1 border-1" type="button" data-toggle="menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand h1 pl-1" href="home.php">Painel Administrativo</a>
		<a href="sair.php" class="p-2 border-0 text-white p-0">
			<i>Sair</i> <i class="fas fa-sign-out-alt"></i>
		</a>
	</nav>
	<div class="fechar-menu-lateral"></div>
	<div class="menu-lateral bg-light p-0">
		<div class="w-100 h-auto bg-dark" id="navbar-header">
			<div id="area-usuario" class="text-light">
				<div class="icon">
					<i class="fas fa-user-circle"></i>
				</div>
				<div class="text-right">
					<a class="nm-user"><?php echo $_SESSION['nm_usuario']." ".$_SESSION['sobrenome']; ?></a>
					<i class="email-user"><?php echo $_SESSION['email']; ?></i>
				</div>
			</div>
		</div>
		<ul id="navbar-body">
			<li class="menu-item">
				<a class="menu-link ml-4" href="home.php"><i class="fas fa-home fa-lg mr-3"></i>Home</a>
			</li>
			<li class="menu-item" data-dropdawn-toggle="menu-dropdown1">
				<a class="menu-link ml-4 " href="eventos/"><i class="far fa-calendar-alt fa-lg mr-3"></i>Eventos</i> </a>
			</li>

			<li class="menu-item" data-dropdawn-toggle="menu-dropdown2">
				<a class="menu-link ml-4" href="#"><i class="far fa-newspaper fa-lg mr-3"></i>Artigos<i class="fas fa-caret-down ml-2" id="seta2"></i></a>
			</li>
			<ul class="menu-dropdown-body bg-dark" id="menu-dropdown2" >
				<li class="menu-dropdown-item">
					<a class="menu-dropdown-link" href="noticias.php"><i class="fas fa-caret-right ml-5 mr-2"></i>Notícias</a>
				</li>
				<li class="menu-dropdown-item">
					<a class="menu-dropdown-link" href="artigos.php"><i class="fas fa-caret-right ml-5 mr-2"></i>Artigos</a>
				</li>
			</ul>
			<li class="menu-item">
				<a class="menu-link ml-4" href="funcionarios.php"><i class="fas fa-user fa-lg mr-3"></i>Funcionários</a>
			</li>
			<li class="menu-item">
				<a class="menu-link ml-4" href="coordenadores.php"><i class="fas fa-user-tie fa-lg mr-3"></i>Coordenadores</a>
			</li>
			<li class="menu-item">
				<a class="menu-link ml-4" href="diretores.php"><i class="fas fa-user-tie fa-lg mr-3"></i>Diretores</a>
			</li>
			<li class="menu-item">
				<a class="menu-link ml-4" href="professores.php"><i class="fas fa-chalkboard-teacher fa-lg mr-3"></i>Professores</a>
			</li>
			<li class="menu-item">
				<a class="menu-link ml-4" href="turma.php"><i class="fas fa-chalkboard fa-lg mr-3"></i>Turmas</a>
			</li>
			<li class="menu-item">
				<a class="menu-link ml-4" href="cursos.php"><i class="fas fa-graduation-cap fa-lg mr-3"></i>Cursos</a>
			</li>
			<li class="menu-item">
				<a class="menu-link ml-4" href="materias.php"><i class="fas fa-book-open fa-lg mr-3"></i>Matérias</a>
			</li>
		</ul>
	</div>
</header>
