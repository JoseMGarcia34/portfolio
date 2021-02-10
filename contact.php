<?php
 
// Llamada a los campos

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "josemanuelgarciamunoz@gmail.com";
$asunto = "Contacto Web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando mensaje

mail($destinatario, $asunto, $carta);
header('Location:mensaje.html')


 
?>