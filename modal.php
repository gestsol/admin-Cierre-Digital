<div class="container">



<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id_vehiculo']?>" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <h4 class="modal-title">Ingrese Correo</h4>
            </div>
            <div class="modal-body">
                <form action="enviar.php" method="GET">
                    <input type="hidden" name="id_vehiculo" value="<?php echo $row['id_vehiculo']  ?>">
                    <label for="">ingrese Correo</label>
                    <input type="email" name="correo" id="">
                    <button type="submit" class="btn btn-success"> Enviar</button>
                    <br>
                    



                </form>


            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</div>