<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM vehiculo WHERE id_vehiculo='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
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
</body>

</html>