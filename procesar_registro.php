<?php
include 'ini.php';

# Paso 1: Entrada
$nombre 	= $_POST['nombre'];
$email 		= $_POST['email'];
$password 	= $_POST['password'];

# Paso 2: Proceso
# Encriptar el password
$password_hash = md5($password);

# Guardar el usuario en base de datos
# mysql_connect('localhost', 'root', '');
# mysql_select_db('gamestore');

$query = "INSERT INTO usuarios VALUES (NULL, '$nombre', '$email', '$password_hash')";

# mysql_query($query);
$db->query($query);

# Paso 3: Salida
header('Location: resultado_registro.php');
?>