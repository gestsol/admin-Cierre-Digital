<div class="container">



<!-- Modal -->
<div class="modal fade" id="myModaledit<?php echo $row['id_vehiculo']?>" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <h4 class="modal-title">Edicion de Vehiculos</h4>
            </div>
            <div class="modal-body">
            <div class="container mt-5">

<div class="row">
    <div class="col-md-3">
        <form action="update.php" method="POST">

            <input type="hidden" name="id_vehiculo" value="<?php echo $row['id_vehiculo']  ?>">

            <input type="text" class="form-control mb-3" name="patente" value="<?php echo $row['patente']  ?>">
            <input type="text" class="form-control mb-3" name="id_tracker" value="<?php echo $row['id_tracker']  ?>">

            <p>Desabilite o habilite el keylock del vehiculo </p>
            <input type="radio"  name="status" value="Enable" required>
            <label for="html">Enable</label>
            <input type="radio"  name="status" value="Disable" checked="checked">
            <label for="css" >Disable</label><br><br>

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
    </div>
</div>


</div>


            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</div>