<?php
include 'ini.php';
# Entrada
$email 		= $_POST['email'];
$password 	= $_POST['password'];

# Proceso
$password_hash = md5($password);
$query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password_hash'";


$sentencia = $db->query($query);
$filas = $sentencia->rowCount();

# Salida
if ($filas == 0) {
	
	header('Location: login.php?error=1');
}
else {
	session_start();
	$_SESSION['autenticado'] = true;
	header('Location: index.php');
}
?>