<?php
require 'Conexion.php';

$Consultar = "SELECT * FROM segundo";
$query = mysqli_query($Conectar, $Consultar);
$array = mysqli_fetch_array($query);