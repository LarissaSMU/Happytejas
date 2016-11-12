<?php
include 'ini.php';
session_start();


# Paso 3: Ejecutar el comando SQL
$resultado = $db->query("SELECT * FROM chocotejas");
?>
<!doctype html>
<html>
	<head>
		<title>Página principal - happytejas</title>
		<link rel="stylesheet" href="estilos/happytejas.css" />
	</head>
	<body>
		<?php include 'plantillas/cabecera.php' ?>Happytejas
		<?php include 'plantillas/menu.php' ?>
		
		<section>
			<?php
			# Paso 4: Iterar la variable $resultado
			foreach($resultado as $fila) {
			?>			
			<a href="juego.php?cod=<?php echo $fila['codigo'] ?>">
				<div class="item">
					<h2><?php echo $fila['nombre'] ?></h2>
					<img src="<?php echo $fila['foto'] ?>" height="200" />
				</div>
			</a>		
			<?php } ?>
			
		</section>
		
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>