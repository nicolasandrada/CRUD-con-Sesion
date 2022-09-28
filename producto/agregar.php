<?php
include "../db/conexion.php";

$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];
$foto = $_POST['foto']; 

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

$talles = $_POST['talle']; 
/**
 * $talles[0] ----->45
 * $talles[1] ----->46
 * $talles[2] ----->47
 * $talles[3] ----->48
 * 
 */
$stock = $_POST['stock'];

$sql = "INSER INTO  zapatilla (modelo, marca, precio ) VALUES ('$modelo', 'marca', precio)";
