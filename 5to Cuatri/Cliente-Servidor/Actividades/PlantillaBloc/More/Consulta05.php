<?php
require 'Conexion.php';

$Consultar = "SELECT * FROM quinto";
$query = mysqli_query($Conectar, $Consultar);
$array = mysqli_fetch_array($query);