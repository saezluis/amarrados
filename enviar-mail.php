<?php
	
	$nombre = $_POST["nombre"];
	$mail = $_POST["mail"];
	$cuentame = $_POST["cuentame"];
	
	$to = "lsaez@pm.cl,cflores@pm.cl";
	$subject = "Comentario de usuario en pagina web Amarrados";
	$headers = "From: Amarrados.cl <noreply@amarrados.cl>";
	$message = "Comentario: $cuentame
	\n Nombre del usuario: $nombre
	\n Correo del usuario que escribe: $mail 
	\n ";
	
	mail($user, '=?utf-8?B?'.base64_encode($subject).'?=' ,$message, $headers );

?>