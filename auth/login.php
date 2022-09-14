<?php
session_start();

include '../db/conexion.php'; 

$name = $_POST['name'];
$pass = md5($_POST['pass']) ;

$sql = "SELECT * FROM user WHERE name = '$name' AND pass = '$pass' ";

$r = $con->query($sql);

if($r->num_rows > 0 ){
    $_SESSION['user'] = $r->fetch_assoc();
    var_dump($_SESSION['user']);
}