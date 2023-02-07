<?php

include("conexion.php");
$con=conectar();

$id_vehiculo=$_GET['id_vehiculo'];

$sql="DELETE FROM vehiculo  WHERE id_vehiculo='$id_vehiculo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vehiculos.php");
    }
?>
