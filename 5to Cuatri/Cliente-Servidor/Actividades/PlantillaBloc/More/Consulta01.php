<?php
require 'Conexion.php';

$Consultar = "SELECT * FROM primer";
$query = mysqli_query($Conectar, $Consultar);
$array = mysqli_fetch_array($query);