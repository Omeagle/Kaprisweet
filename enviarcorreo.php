<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$body ="Nombre: ". $nombre."<br>Correo: ". $correo."<br>Mensaje: ". $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'kprisweet@gmail.com';                     // SMTP username
    $mail->Password   = 'patitoforever123$';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('kprisweet@gmail.com', $nombre);
    $mail->addAddress('kprisweet@gmail.com');     // Add a recipient
       

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $body;
   

    $mail->send();
            
    echo 
    '<script>
    alert("Pronto te contactaremos");
    window.history.go(-1);
     </script>';
} catch (Exception $e) {
    echo "Error al Enviar el Coreeo. Error: {$mail->ErrorInfo}";
}