<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require("class.smtp.php");
require("class.phpmailer.php");

$name = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
$place = filter_var($_POST['Lugar'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL);

// O Utilizar 
// $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);

header('Content-Type: application/json');

$data = [ 'code' => 0, 'message' => '' ];

if(!isset($_POST)) {
    die;
}

// Valores enviados desde el formulario
if ( !isset($name) || !isset($place) || !isset($email) ) {
    $data['code']    = 500;
    $data['message'] = 'Campos incompletos';
    echo json_encode( $data );
    die;
}

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true;

// SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Host = "c0990242.ferozo.com"; 
// Correo completo a utilizar
$mail->Username = "comunicacion@sergiomassa.com.ar"; 
$mail->Password = "6*@S*WL5eZ"; // Contraseña
$mail->Port = 465; // Puerto a utilizar
$mail->SMTPSecure = 'ssl';
$mail->CharSet = "utf-8";


$mail->From = "comunicacion@sergiomassa.com.ar"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Sergio Massa - Sitio principal";
$mail->AddAddress("comunicacion@sergiomassa.com.ar"); // Esta es la dirección a donde enviamos

//$mail->AddCC("Copia@Copia.com");
//$mail->AddBCC("CopiaOculta@CopiaOculta.com");

// El correo se envía como HTML
$mail->IsHTML(true); 

// Este es el asunto
$mail->Subject = $name . " se quiere sumar"; 

$body = "Una persona quiere sumarse <br/>Email: " . $email . " <br/>Nombre:" . $name . "<br/>Lugar: " . $place ;

$mail->Body = $body; // Mensaje a enviar
//$mail->AltBody = "Hola mundo. Esta es la primer línean Acá continuo el mensaje"; // Texto sin html
//$mail->AddAttachment("imagenes/imagen.jpg", "imagen.jpg");

$exito = $mail->Send(); // Envía el correo.

if($exito) {
    $data['code']    = 200;
    $data['message'] = '¡Muchas gracias! Pronto nos pondremos en contacto.';
} else {
    $data['code']    = 500;
    $data['message'] = 'Hubo un error al guardar el mensaje, reintenta en unos minutos.';
}
echo json_encode( $data );
?>