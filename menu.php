<nav>
	<ul>
		<li><a href="index.php">Principal</a></li>
		<li><a href="comprar_tejas.php">Comprar tejas</a></li>
		
		<?php if (isset($_SESSION['autenticado'])) { ?>
		
		<li><a href="cerrar.php">Cerrar sesión</a></li>
		
		<?php } else { ?> 
		
		<li><a href="login.php">Iniciar sesión</a></li>
		<li><a href="registro.php">Registro de cuenta</a></li>
		
		<?php } ?>
	</ul>
</nav>
