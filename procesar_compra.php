<?php
include 'ini.php';

# Paso 1: Entrada
$tipo_chocolate	= $_POST['t_chocolate'];
$relleno 		= $_POST['relleno'];
$cantidad 	= $_POST['cantidad'];
$t_empaque	= $_POST['ocasion'];
$nombre 		= $_POST['nombre'];
$apellido 	= $_POST['apellido'];
$telefono 	= $_POST['telefono'];
$direccion 		= $_POST['direccion'];
$email 	= $_POST['email'];

# Paso 2: Proceso
$query = "INSERT INTO compra VALUES (NULL,NULL,'$t_chocolate','$relleno','$cantidad','$ocasion', '$nombre','$apellido','$telefono','$direccion','$email')";
setcookie("tipo_chocolate", $t_chocolate, time() + 3600 * 24);
setcookie("relleno", $relleno, time() + 3600 * 24);
setcookie("t_empaque", $ocasion, time() + 3600 * 24);
# mysql_query($query);
$db->query($query);

# Paso 3: Salida
header('Location: resultado_compra.php');
?>