<div class="container-user">
		<div class="user" style="background: #007bff">
			<?php
				if ($select = $mysqli->query($aluno)) {
					while ($obj = $select->fetch_object()) {
			?>
						<p class="title">Alunos</p>
						<p class="number"><?php echo $obj->qt_alunos; ?></p>
				<?php
					}
				}else{
					echo "Deu ruim";
				};
			?>
		</div>
		<div class="user" style="background: #150730">
			<?php
				if ($select1 = $mysqli->query($professor)) {
					while ($obj1 = $select1->fetch_object()) {
			?>			
						<p class="title">Professores</p>
						<p class="number"><?php echo $obj1->qt_professor; ?></p>
				<?php
					}
				}else{
					echo "Deu ruim";
				};
			?>
			
		</div>
		<div class="user" style="background: #007333">
			<?php
				if ($select2 = $mysqli->query($coordenador)) {
					while ($obj2 = $select2->fetch_object()) {
			?>			
						<p class="title">Coordenadores</p>
						<p class="number"><?php echo $obj2->qt_coordenador; ?></p>
				<?php
					}
				}else{
					echo "Deu ruim";
				};
			?>
		</div>
		<div class="user" style="background: #348930">
			<?php
				if ($select3 = $mysqli->query($funcionario)) {
					while ($obj3 = $select3->fetch_object()) {
			?>			
						<p class="title">Funcionários</p>
						<p class="number"><?php echo $obj3->qt_funcionario; ?></p>
				<?php
					}
				}else{
					echo "Deu ruim";
				};
			?>
		</div>
	</div>