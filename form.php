<?php

$nombre   = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail     = $_POST['mail'];
$mensaje  = $_POST['mensaje'];

if(mail('joraad99@gmail.com', $nombre, $telefono, $mail, $mensaje))
{
  echo "Tu mensaje ha sido enviado";
}
else{
  echo "algo salió mal :(";
}

 ?>
