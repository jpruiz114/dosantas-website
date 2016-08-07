<?php
	session_name("dosantas-session");
	
	if(@session_start() == false) {
		session_destroy();
		
		session_start();
	}
	
	/* ***** */
	
	$allGood = 1;
	
	/* ***** */
	
	$name = $_POST["name"];
	
	if(empty($name)) {
		$_SESSION["error_message_name"] = "Indica tu nombre";
		
		$allGood = 0;
	}
	
	/* ***** */
	
	$email = $_POST["email"];
	
	if(empty($email)) {
		$_SESSION["error_message_email"] = "Indica tu email";
		
		$allGood = 0;
	}
	
	/* ***** */
	
	$message = $_POST["message"];
	
	if(empty($message)) {
		$_SESSION["error_message_message"] = "Indica tu mensaje";
		
		$allGood = 0;
	}
	
	/* ***** */
	
	$gReCaptchaResponse = $_POST["g-recaptcha-response"];
	
	if(empty($gReCaptchaResponse)) {
		$_SESSION["error_message_captcha"] = "Indica que no eres un robot";
		
		$allGood = 0;
	}
	else {
		$reCaptchaSecret = "6Lcz-CYTAAAAAGrsUWN3vZTuyJNFVGuR003S5XwU";
		
		$path = "https://www.google.com/recaptcha/api/siteverify?secret=" . $reCaptchaSecret . "&response=" . $gReCaptchaResponse;
		
		$response = file_get_contents($path);
		$response = json_decode($response, true);
		
		if($response["success"] === true) {
			
		}
		else {
			$_SESSION["error_message_captcha"] = "Captcha incorrecto";
			
			$allGood = 0;
		}
	}
	
	/* ***** */
	
	if($allGood) {
		$messageToSend = "";
		$messageToSend .= "Nombre: " . $name . "\n";
		$messageToSend .= "e-mail: " . $email . "\n";
		$messageToSend .= "Message: " . $message;
		
		mail("jpruiz114@gmail.com", "Contacto desde Dosantas.com", $messageToSend);
		mail("comercial@dosantas.com", "Contacto desde Dosantas.com", $messageToSend);
		
		$_SESSION["message_sent"] = "1";
	}
	
	/* ***** */
	
	header("Location: /contacto.php");
?>