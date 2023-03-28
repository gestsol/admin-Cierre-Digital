<div class="container">



    <!-- Modal -->
    <div class="modal fade" id="Modal-qr<?php echo $row['id_vehiculo'] ?>" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Escanee Codigo QR patente: <?php echo $row['patente'] ?></h4>
                </div>
                <div class="modal-body">

                    <div class="container ">
                        <?php
                            $patente=$row['patente'];

                        //$texto="https://gama.wit.la/Cierre-centralizado/index.php?id_vehiculo=2";

                        $texto = "https://gama.wit.la/Cierre-centralizado/index.php?patente=$patente";

                        $url = "https://phpqrcode.sourceforge.net/qrsample.php?data=" . $texto . "&ecc=L&matrix=10";


                        echo "<img src='$url' alt=''>"

                        ?>
                    </div>


                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="pdf.php"><button class="impri">Download</button></a>

                </div>
            </div>
        </div>
    </div>
</div>