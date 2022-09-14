<?php
//utilizar sesiones
session_start();

include '../db/conexion.php'; 

$name = $_POST['name'];
$pass = md5($_POST['pass']) ;

//selecciona el usario que coincide con el nombre de usuario y contraseña
$sql = "SELECT * FROM user WHERE name = '$name' AND pass = '$pass' ";

$r = $con->query($sql);

//si coincide, guarda una sesion con los datos del usuario
if($r->num_rows > 0 ){
    $_SESSION['user'] = $r->fetch_assoc();
    //var_dump($_SESSION['user']['name']);

    header("location: ../home.php");
}