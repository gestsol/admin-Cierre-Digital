<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM vehiculo";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Keylock</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <div class="row text-center mb-5">
            <h1>Administrador de Cierre Digital</h1>
        </div>

        <div class="row">

            <div class="col-md-3">
                <h3>Ingrese datos</h3>
                <form action="insertar.php" method="GET">


                    <input type="text" class="form-control mb-3" name="patente" placeholder="Patente" required>
                    <input type="text" class="form-control mb-3" name="id_tracker" placeholder="Id_tracker" required>
                    <p>Desabilite o habilite el keylock del vehiculo </p>
                    <input type="radio" name="status" value="Enable" required>
                    <label for="html">Enable</label>
                    <input type="radio" name="status" value="Disable" checked="checked">
                    <label for="css">Disable</label><br><br>




                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-9">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>

                            <th>Patente</th>
                            <th>Id_tracker</th>
                            <th>Codigo</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id_vehiculo'] ?></th>

                                <th><?php echo $row['patente'] ?></th>
                                <th><?php echo $row['id_tracker'] ?></th>
                                <th><?php echo $row['codigo'] ?></th>
                                <th><?php echo $row['status'] ?></th>
                               

                              
                                <th><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModaledit<?php echo $row['id_vehiculo']?>">Editar</button></th>

                                <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?php echo $row['id_vehiculo']?>">Enviar</button></th>

                                <th><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete<?php echo $row['id_vehiculo']?>">Borrar</button></th>

                                <!-- <th><a href="delete.php?id=<?php echo $row['id_vehiculo'] ?>" class="btn btn-danger">Eliminar</a></th> -->


                                

                            </tr>
                           
                            <?php include ("modal.php"); ?>  
                            <?php include ("modal-edit.php"); ?> 
                            <?php include ("modal-delete.php"); ?>
                            

                        <?php
                        


                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   



</body>

</html>
<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>