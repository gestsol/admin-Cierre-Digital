
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<H1>
    Se envia correo
</H1>




<?php


include("conexion.php");
$con = conectar();

$id = $_GET['id_vehiculo'];
$correo=$_GET['correo'];


$sql = "SELECT * FROM vehiculo WHERE id_vehiculo='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
$patente=$row['patente'];
$codigo=$row['codigo'];


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.zoho.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'face-control@masgps.la';                     //SMTP username
    $mail->Password   = 'Wit2022#';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('face-control@masgps.la', 'Cierre Digital');
    
    $mail->addAddress($correo);     

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = "Codigo Cierre Digital 'Gama'";
    $mail->Body    = "
  Estimado Cliente: <br>
    El codigo para activar el vehiculo patente $patente es: ' $codigo ' <br>
    <br>
    Esperamos que disfrute su experiencia de con Gama !Buen viaje!! 
        ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Tu correo ya ha sido enviado..';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    ///
}
?>





