<!doctype html>
<html>
	<head>
		<title>Comprar Tejas- Happytejas</title>
		<link rel="stylesheet" href="estilos/happytejas.css" />
	</head>
	<body>
		<?php include 'plantillas/cabecera.php' ?>
		<?php include 'plantillas/menu.php' ?>
		
		<section>
			<h1>Hacer un pedido</h1>
			<p>Elija el tipo de chocolate que desee, relleno, cantidad y llene sus datos porfavor.</p>
			<form action= "procesar_compra.php" method="post">
				Tipo de chocolate: <select name="tipo_chocolate">
										<option value="clas">clasico</option>
										<option value="milk">milkchocolate</option>
										<option value="whit">whitechocolate</option>
									</select>
				<br/>
				Tipo de relleno: <select name="relleno">
									<option value="nut">nutella</option>
									<option value="mmani">peanut butter</option>
									<option value="brownie">brownie</option>
									<option value="pasas">pasas ebrias</option>
									<option value="coco">coco</option>
									<option value="guind">guindon</option>
								</select>
				<br/>
				Cantidad: <input type="text" name="cantidad"/>
				<br/>
				Tipo de empaque: <select name="t_empaque">
									<option value="regalo">regalo</option>
									<option value="amor">amor</option>
									<option value="consu">consumo</option>
								</select>
				<br/>
				Nombre: <input type="text" name="nombre"/>
				<br/>
				Apellido: <input type="text" name="apellido"/>
				<br/>
				Telefono: <input type="text" name="telefono"/>
				<br/>
				Direccion: <input type="text" name="direccion"/>
				<br/>
				Correo electronico: <input type="email" name="email"/>
				<br/>
				<button>Hacer el pedido</button>
				<br/>
			</form>
		</section>
		
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>