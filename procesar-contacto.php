<?php



	include_once 'config.php';
		
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");
	
	$nombre = $_POST["nombre"];
	$mail = $_POST["mail"];
	$cuentame = $_POST["cuentame"];
	/*
	$to = "lsaez@pm.cl,cflores@pm.cl";
	$subject = "Comentario de usuario en pagina web Amarrados";
	$headers = "From: Amarrados.cl <noreply@amarrados.cl>";
	$message = "Comentario: $cuentame
	\n Nombre del usuario: $nombre
	\n Correo del usuario que escribe: $mail 
	\n ";
	
	mail($user, '=?utf-8?B?'.base64_encode($subject).'?=' ,$message, $headers );
	*/
	$query = mysqli_query($conexion, "INSERT INTO contacto(nombre,email,comentario) values('$nombre','$mail','$cuentame') ");
	//echo "Nombre: ".$nombre;
	
	if($query){
        //echo "Su comentario a sido enviado";
		echo json_encode(array('msg' => 'Su comentario a sido enviado'));
     }
     else{
        //echo "Error en el envio de su comentario: ".mysqli_error($conexion);
		echo json_encode(array('msg' => 'Error en el envio de su comentario'));
     }
	 
	 //echo json_encode(array('msg' => 'Datos enviados'));
	
?>