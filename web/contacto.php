<?php
	session_name("dosantas-session");
	
	if(@session_start() == false) {
		session_destroy();
		
		session_start();
	}
	
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	include(dirname(__FILE__) . "/php/includes/random_pic.php");
	
	/* ***** */
	
	$errorMessageName = "";
	
	if(!empty($_SESSION["error_message_name"])) {
		$errorMessageName = $_SESSION["error_message_name"];
		unset($_SESSION["error_message_name"]);
	}
	
	/* ***** */
	
	$errorMessageEmail = "";
	
	if(!empty($_SESSION["error_message_email"])) {
		$errorMessageEmail = $_SESSION["error_message_email"];
		unset($_SESSION["error_message_email"]);
	}
	
	/* ***** */
	
	$errorMessageMessage = "";
	
	if(!empty($_SESSION["error_message_message"])) {
		$errorMessageMessage = $_SESSION["error_message_message"];
		unset($_SESSION["error_message_message"]);
	}
	
	/* ***** */
	
	$errorMessageCaptcha = "";
	
	if(!empty($_SESSION["error_message_captcha"])) {
		$errorMessageCaptcha = $_SESSION["error_message_captcha"];
		unset($_SESSION["error_message_captcha"]);
	}
	
	/* ***** */
	
	$messageSent = "";
	
	if(!empty($_SESSION["message_sent"])) {
		$messageSent = $_SESSION["message_sent"];
		unset($_SESSION["message_sent"]);
	}
	else {
		$messageSent = 0;
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title>Dosantas - Everywear Clothing - Contacto</title>
		
		<link rel="image_src" href="http://www.dosantas.com/assets/dosantas-everywear-clothing-logo.png" />
		
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet" type="text/css">
		
		<link href="/css/contacto.css" media="screen" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="/lib/jquery-1.10.1.min.js"></script>
		
		<?php include(dirname(__FILE__) . "/php/includes/browser_queries.php"); ?>
		
		<script src="https://www.google.com/recaptcha/api.js"></script>
		
		<link rel="stylesheet" href="/css/toastr.min.css">
		
		<script src="/js/toastr.min.js"></script>
		
		<script type="text/javascript">
			var errorMessageName = "<?php echo($errorMessageName); ?>";
			var errorMessageEmail = "<?php echo($errorMessageEmail); ?>";
			var errorMessageMessage = "<?php echo($errorMessageMessage); ?>";
			var errorMessageCaptcha = "<?php echo($errorMessageCaptcha); ?>";
			
			var messageSent = <?php echo($messageSent); ?>;
			
			var allGood = 1;
			
			function sendMessage() {
				$("#contact-form").submit();
			}
			
			$(document).ready(
				function() {
					toastr.clear();
					
					toastr.options.newestOnTop = false;
					
					if(typeof errorMessageName !== "undefined" && errorMessageName != null && errorMessageName != "") {
						toastr.warning(errorMessageName);
						
						allGood = 0;
					}
					
					if(typeof errorMessageEmail !== "undefined" && errorMessageEmail != null && errorMessageEmail != "") {
						toastr.warning(errorMessageEmail);
						
						allGood = 0;
					}
					
					if(typeof errorMessageMessage !== "undefined" && errorMessageMessage != null && errorMessageMessage != "") {
						toastr.warning(errorMessageMessage);
						
						allGood = 0;
					}
					
					if(typeof errorMessageCaptcha !== "undefined" && errorMessageCaptcha != null && errorMessageCaptcha != "") {
						toastr.warning(errorMessageCaptcha);
						
						allGood = 0;
					}
					
					if(allGood && messageSent) {
						toastr.success("Tu mensaje ha sido enviado. Pronto estaremos en contacto.");
					}
				}
			);
		</script>
	</head>
	
	<body>
		<div id="main-container">
			<div id="central-container">
				<?php include(dirname(__FILE__) . "/php/includes/proudly_header.php"); ?>
				
				<div class="logo-container">
					<a href="/" title="Dosantas Everywear Clothing">
						<img alt="Dosantas Everywear Clothing" src="/assets/dosantas-everywear-clothing-logo.png" width="300px" height="300px" />
					</a>
				</div>
				
				<div id="contact-form-container">
					<form action="/php/ContactController.php" id="contact-form" method="post">
						<label>Nombre</label>
						
						<br>
						
						<input id="name" name="name" type="text">
						
						<br><br>
						
						<label>e-mail</label>
						
						<br>
						
						<input id="email" name="email" type="text">
						
						<br><br>
						
						<label>Mensaje</label>
						
						<br>
						
						<textarea id="message" name="message"></textarea>
						
						<br><br>
						
						<div class="g-recaptcha" data-sitekey="6LdlpwMTAAAAAGLnULZHUGwScx6C9Xtph6udsrC9"></div>
						
						<div id="contact-form-buttons" style="margin-bottom: 30px; margin-top: 30px;">
							<a href="/" rel="follow" title="Regresar">
								<img alt="Regresar" src="/assets/btn-regresar.png" width="186" height="34" />
							</a>
							
							<a href="#" onclick="sendMessage();" title="Enviar Mensaje">
								<img alt="Enviar Mensaje" src="/assets/btn-enviar-mensaje.png" width="186" height="34" />
							</a>
						</div>
					</form>
				</div>
				
				<div class="ruler"></div>
				
				<div id="social-networks">
					<a class="social-network-link" href="https://facebook.com/dosantas.prendas" rel="follow" title="Dosantas en Facebook">
						<img alt="Botón Facebook Dosantas" src="/assets/sn/Facebook.png" />
					</a>
					
					<a class="social-network-link" href="https://instagram.com/dosantas/" rel="follow" title="Dosantas en Instagram">
						<img alt="Botón Instagram Dosantas" src="/assets/sn/Instagram.png" />
					</a>
					
					<a class="social-network-link" href="https://pinterest.com/dosantas/" rel="follow" title="Dosantas en Pinterest">
						<img alt="Botón Pinterest Dosantas" src="/assets/sn/Pinterest.png" />
					</a>
					
					<a class="social-network-link" href="/contacto.php" rel="follow" title="Contacto Dosantas">
						<img alt="Botón Mail Dosantas" src="/assets/sn/Mail.png" />
					</a>
				</div>
				
				<div class="ruler"></div>
				
				<span class="copyright">Dosantas &#9400; <?php echo date("Y"); ?> - comercial@dosantas.com / +57 310-444-32-75</span>
				
				<div class="spacer"></div>
			</div>
		</div>
		
		<?php include(dirname(__FILE__) . "/php/includes/tracking_ga.php"); ?>
	</body>
</html>