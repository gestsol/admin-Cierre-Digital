<?php

include("conexion.php");
$con=conectar();

$id_vehiculo=$_POST['id_vehiculo'];
$id_tracker=$_POST['id_tracker'];
$patente=$_POST['patente'];
$status=$_POST['status'];

if ($status=='Enable'){

    $cod=rand(10000,100000);
}else{
    $cod='-----';
}

$pat=strtoupper($patente);

$sql="UPDATE vehiculo SET  id_tracker='$id_tracker',patente='$pat',status='$status',codigo='$cod' WHERE id_vehiculo='$id_vehiculo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vehiculos.php");
    }
?>