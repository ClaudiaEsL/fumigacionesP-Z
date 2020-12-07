<?php

$nombre= $_POST [name];
$correo= $_POST [email];
$mensaje= $_POST [message];

$destinatario = "dinosauricohost@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje ";

mail($destinatario, $asunto, $carta);


?>
