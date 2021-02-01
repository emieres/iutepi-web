<?php 
	// email de destino
	$email = "iutepi@iutepi.edu";
	// asunto del email
	$subject = $_POST["asunto"];
	// Cuerpo del mensaje
	$mensaje = "____________ \n";
	$mensaje.= " Contacto \n";
	$mensaje.= "____________ \n";
	$mensaje.= "NOMBRE: ".$_POST['nombre']."\n";
	$mensaje.= "EMAIL: ".$_POST['email']."\n";
	$mensaje.= "CIUDAD: ".$_POST['ciudad']."\n";
	$mensaje.= "TELEFONO: ".$_POST['telefono']."\n";
	$mensaje.= "FECHA: ".date("d/m/Y")."\n";
	/*$mensaje.= "HORA: ".date("h:i:s a")."\n";*/
	$mensaje.= "IP: ".$_SERVER['REMOTE_ADDR']."\n\n";
	$mensaje.= "____________ \n\n";
	$mensaje.= $_POST['msj']."\n\n";
	$mensaje.= "____________ \n";
	$mensaje.= "Enviado desde http://www.iutepi.edu \n";
	// headers del email
	$headers = "From: ".$_POST['email']."\r\n";
	// Enviamos el mensaje
	$recaptcha = $_POST["g-recaptcha-response"];
	if($recaptcha != ''){
		
		$secret = "6LesjCkTAAAAAJv8vkws-DCTdAVr3_jW0eaYF6mX";
		$ip = $_SERVER["REMOTE_ADDR"];
		$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
		$array = json_decode($var, true);
		
		$mail = mail($email, $subject, $mensaje, $headers);
				echo '<script>';
				echo 'alert("Mensaje enviado con exito!!!");';
				echo 'window.location="index.php?pagina=39";';
				echo '</script>';			
		
	}else{

		echo '<script>';
		echo 'alert("Mensaje no Enviado \nCumpruebe el Catpcha");';
		echo 'window.location="index.php?pagina=39";';
		echo '</script>';

	}
	
?>
