<div class="container">



<!-- Modal -->
<div class="modal fade" id="modal-delete<?php echo $row['id_vehiculo']?>" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
           
                <h4 class="modal-title">Ingrese Correo</h4>
            </div>
            <div class="modal-body">
                <form action="delete.php" method="GET">
                    <input type="hidden" name="id_vehiculo" value="<?php echo $row['id_vehiculo']  ?>">
                    <label >¿Esta de seguro de borrar el vehiculo patente:<?php echo $row['patente']  ?> ?</label>
                   <br>
                    <button type="submit" class="btn btn-danger"> Borrar</button>
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