<?php
require("conexion.php");
$nombre= "";
$correo = "";
$asunto = "";
$mensaje = "";

if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
}

if(isset($_POST["correo"])){
    $correo = $_POST["correo"];
}

if(isset($_POST["asunto"])){
    $asunto = $_POST["asunto"];
}

if(isset($_POST["mensaje"])){
    $mensaje = $_POST["mensaje"];
}

$sql = "INSERT INTO registritos (id,nombre,correo,asunto,mensaje) VALUES (' ','$nombre','$correo','$asunto,'$mensaje')";

if(mysqli_query($conn,$sql)){
    echo "new recod created succefuly";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>