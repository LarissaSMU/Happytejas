<?php
include 'ini.php';


# Paso 3: Ejecutar el comando SQL
$cod_teja = intval($_GET['cod']);
$resultado = $db->query("SELECT * FROM chocotejas WHERE codigo = $cod_teja");
?>
<!doctype html>
<html>
	<head>
		<title>Happytejas</title>
		<link rel="stylesheet" href="estilos/happytejas.css" />
	</head>
	<body>
		<?php include 'plantillas/cabecera.php' ?>
		<?php include 'plantillas/menu.php' ?>
		
		<section>
			<?php
			# Paso 4: Iterar la variable $resultado
			foreach($resultado as $fila) {
			?>					
				<div>
					<h2><?php echo $fila['nombre'] ?></h2>
					<img src="<?php echo $fila['foto'] ?>" />
					<p><?php echo utf8_encode($fila['descripcion']) ?></p>
				</div>
					
			<?php } ?>
		</section>
		
		<a href="index.php">Regresar</a>
		
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>