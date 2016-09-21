<?php
include_once 'includes/bdd.php';
header('Content-Type: text/html;charset-UTF-8');
$usuario=$_POST['user'];
$pass=$_POST['password'];
$con=crearConexion();
$con->set_charset("UTF-8");
$sql="call login_usuario(?,?,@valor_existe)";
$stmt = $con->prepare($sql);
$stmt->bind_param('ss', $usuario, $pass);
$stmt->execute();













?>