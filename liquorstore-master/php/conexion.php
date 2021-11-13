<?php

$servername = "162.241.62.55";
$database = "lindoyqu_rixen_bd";
$username = "lindoyqu_admin_rixen";
$password = "Hola2125";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die ("connection failed: " . mysqli_connect_error());
}

echo "conected succesfuly";



?>