<?php
function conectar(){
    $host="ls-233cbb9833b65f1d81c7123bc6f953c2597da307.cwdutvqwihot.us-east-1.rds.amazonaws.com";
    $user="dbmasteruser";
    $pass="J&ye#Ve3*f8dYR~XP~8V(uAj0%Xs|Pe2";

    $bd="keylock";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
