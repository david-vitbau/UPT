<?php
require 'Conexion.php';

$Consultar = "SELECT * FROM sexto";
$query = mysqli_query($Conectar, $Consultar);
$array = mysqli_fetch_array($query);