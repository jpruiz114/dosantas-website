<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	include(dirname(__FILE__) . "/php/includes/random_pic.php");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title>Dosantas - Everywear Clothing</title>
		
		<link rel="image_src" href="http://www.dosantas.com/assets/dosantas-everywear-clothing-logo.png" />
		
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet" type="text/css">
		
		<link href="/css/index.css" media="screen" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="/lib/jquery-1.10.1.min.js"></script>
		
		<?php include(dirname(__FILE__) . "/php/includes/browser_queries.php"); ?>

		<?php include(dirname(__FILE__) . "/php/includes/facebook_pixel.php"); ?>
		
		<script type="text/javascript">
			$(document).ready(
				function() {
					
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
				
				<div class="banner-container">
					<img alt="Banner Dosantas Everywear Clothing" src="<?php echo str_replace(dirname(__FILE__), "", getRandomFileFromFolder(dirname(__FILE__) . "/assets/banners/es")); ?>" width="864px" height="200px" />
				</div>
				
				<div id="collections-links">
					<div id="collections-links-l">
						<div class="inner-collection-col">
							<span>Colección</span>
							
							<a href="/colecciones/mar-adentro.php" rel="follow" title="Colección Mar Adentro">
								<img alt="Botón Colección Mar Adentro" src="/assets/btn-coleccion-mar-adentro.png" />
							</a>
						</div>
					</div>
					
					<div id="collections-links-r">
						<div class="inner-collection-col">
							<span>Colección</span>
							
							<a href="/colecciones/fractales.php" rel="follow" title="Colección Fractales">
								<img alt="Botón Colección Fractales" src="/assets/btn-coleccion-fractales.png" />
							</a>
						</div>
					</div>
				</div>
				
				<div class="banner-container">
					<img alt="Banner Dosantas Everywear Clothing" src="/assets/banner-vendedoras.jpg" width="864px" height="200px" />
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