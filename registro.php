<!doctype html>
<html>
	<head>
		<title>Registro de usuario - happytejas </title>
		<link rel="stylesheet" href="estilos/happytejas.css" />
	</head>
	<body>
		<?php include 'plantillas/cabecera.php' ?>
		<?php include 'plantillas/menu.php' ?>
		
		<section>
			<h2>Registro de cuenta de usuario</h2>
			
			<form action="procesar_registro.php" method="post">
			
			Nombre: <input name="nombre" type="text" /><br/>
			Email: <input name="email" type="email" /><br/>
			Password: <input name="password" type="password" /><br/>
			
			<button>Registrarme</button>
			
			</form>
			
		</section>
		
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>