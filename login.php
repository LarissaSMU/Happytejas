<!doctype html>
<html>
	<head>
		<title>Registro de usuario - Happytejas</title>
		<link rel="stylesheet" href="estilos/happytejas.css" />
	</head>
	<body>
		<?php include 'plantillas/cabecera.php' ?>
		<?php include 'plantillas/menu.php' ?>
		
		<section>
			<h2>Iniciar sesión</h2>
			<form action="procesar_login.php" method="post">
			
				Email: <input name="email" type="email" /><br/>
				Password: <input name="password" type="password" /><br/>
			
				<button>Iniciar sesión</button>
				
				<?php if (isset($_GET['error'])) { ?>
				<p style="color: red">Usuario o contraseña incorrecta.</p>
				<?php } ?>				
			</form>		
		</section>
		
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>