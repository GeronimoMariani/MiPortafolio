<?php

$nombre = $_POST['nombre']
$email = $_POST['email']
$textarea = $_POST['textarea']

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Su e-mail es " . $email . " \r\n";
$mensaje = "Mensaje: " . $_POST['textarea'] . " \r\n";
$mensaje = "Enviado el " . date('d/m/Y', time());

$para = 'geronimomariani5@gmail.com';
$asunto = 'Este mail fue enviado desde mi portafolio'

mail($para, $asunto, utf8_decode($mensaje), $header);

header('<Location:pages>exito.html');

?>