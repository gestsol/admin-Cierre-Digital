<?php


//$texto="https://gama.wit.la/Cierre-centralizado/index.php?id_vehiculo=2";

$texto="https://gama.wit.la/Cierre-centralizado/index.html";

 $url="https://phpqrcode.sourceforge.net/qrsample.php?data=".$texto."&ecc=L&matrix=10";
   
    
echo "<img src='$url' alt=''>"

?>