<?php
require 'Conexion.php';

$UnoTitulo = '';
$UnoPost = '';

if(isset($_POST["nombre"])){
    $UnoTitulo = $_POST["nombre"];
}
if(isset($_POST["post"])){
    $UnoPost = $_POST["post"];
}

$Agregar = "INSERT INTO segundo VALUES ('$UnoTitulo', '$UnoPost')";
$query = mysqli_query($Conectar, $Agregar);

if($query){
    header ('Location: ../home.html');
}else{
    echo "Error";
}
