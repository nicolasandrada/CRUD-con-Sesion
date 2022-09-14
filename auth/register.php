<?php
include '../db/conexion.php'; 

$name = $_POST['name'];
//md5 encripta contraseña
$pass = md5($_POST['pass']) ;


$birth_date = $_POST['birth_date'];
$sex = $_POST['sex'];
$photo = 'imagen.png';

$sql = "SELECT * FROM user WHERE name = '$name'";
$r = $con->query($sql);

//cuenta el numero de resultados devueltos
if($r->num_rows > 0){

    //reenvia hacia otra pag
    header("location: ../index.php?error=ya existe el usuario");
}else{
    $sql = "INSERT INTO user VALUES ( null, '$name', '$pass', '$birth_date', '$sex', '$photo')";
    //$sql = "INSERT INTO user(name, pass) VALUES ( '$name', '$pass')";
    
    $con->query($sql);
}


