<?php
$destino= "kcerdas943@gmail.com";
$nombre= $_POST["nombre"];
$telefono= $_POST["telefono"];
$correo= $_POST["email"];
$detalles= $_POST["detalles"];
$embalaje= $_POST["embalaje"];


/ Construir el contenido del mensaje de correo electrónico
$contenido = "Nuevo mensaje del formulario de contacto:\n\n";
$contenido .= "Nombre: " . $nombre . "\n";
$contenido .= "Teléfono: " . $telefono . "\n";
$contenido .= "Correo electrónico: " . $correo . "\n";
$contenido .= "Detalles: " . $detalles . "\n";
$contenido .= "Tipo de embalaje: " . $embalaje . "\n";

// Enviar el correo electrónico usando la función mail()
$asunto = "Nuevo mensaje del formulario de contacto";
$headers = "From: " . $correo; // Debe ser una dirección de correo válida del remitente

// Enviar el correo
$mail_enviado = mail($destino, $asunto, $contenido, $headers);

// Verificar si el correo fue enviado con éxito
if ($mail_enviado) {
    echo "¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.";
} else {
    echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
}

?>