<?php
include("conexion.php");
$con=conectar();

$patente=$_GET['patente'];
$id_tracker=$_GET['id_tracker'];
$status=$_GET['status'];
if ($status=='Enable'){

    $cod=rand(10000,100000);
}else{
    $cod='-----';
}

$pat=strtoupper($patente);

$sql="INSERT INTO vehiculo VALUES('','$id_tracker','$pat','$cod', '$status')";
$query= mysqli_query($con,$sql);
echo $sql;

if($query){
    Header("Location: vehiculos.php");
    
}else {
}
?>