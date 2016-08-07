<?php
	
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title>Dosantas - Everywear Clothing - Colección Mar Adentro</title>
		
		<link rel="image_src" href="http://www.dosantas.com/assets/dosantas-everywear-clothing-logo.png" />
		
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet" type="text/css">
		
		<link href="/css/coleccion-mar-adentro.css" media="screen" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="/lib/jquery.fancybox.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="/lib/jquery-1.10.1.min.js"></script>
		
		<?php include(dirname(__FILE__) . "/../php/includes/browser_queries.php"); ?>

		<?php include(dirname(__FILE__) . "/../php/includes/facebook_pixel.php"); ?>
		
		<script type="text/javascript" src="/lib/jquery.fancybox.js"></script>
		
		<script type="text/javascript" src="/js/measureBW.js"></script>
		
		<script type="text/javascript">
			var listOfPhotos = [
				"C14001.jpg",
				"P14010.jpg",
				
				"T14001.jpg",
				"P14001.jpg",
				
				"C14005.jpg",
				"P14015.jpg",
				
				"T14020.jpg",
				"P14030.jpg",
				
				"T14010.jpg",
				"P14020.jpg",
				
				"T14005.jpg",
				"P14005.jpg",
				
				"T14015.jpg",
				"P14025.jpg",
				
				"T14025.jpg",
				"P14035.jpg"
			];
			
			var widths = [
				216 - 4, 216 - 4, 216 - 4, 216 - 4, /* 4 small */
				216 - 4, 216 - 4, 216 - 4, 216 - 4, /* 4 small */
				216 - 4, 216 - 4, 216 - 4, 216 - 4, /* 4 small */
				216 - 4, 216 - 4, 216 - 4, 216 - 4 /* 4 small */
			];
			
			var minHeights = [
				318, 318, 318, 318,
				318, 318, 318, 318,
				318, 318, 318, 318,
				318, 318, 318, 318
			];
			
			var heightOverrides = [
				318, 318, 318, 318,
				318, 318, 318, 318,
				318, 318, 318, 318,
				318, 318, 318, 318
			];
			
			var excludesFancyBox = [
				0, 0, 0, 0,
				0, 0, 0, 0,
				0, 0, 0, 0,
				0, 0, 0, 0
			];
			
			var titles = [
				"C14001 - CAMISILLA CARACOLES", "P14010 - PANTY CAHETERO CORALES", "T14001 - TOP TRIANGULO ANCLAS", "P14001 - PANTY HILO ANCLAS",
				"C14005 - CAMISILLA PECES", "P14015 - PANTY CACHETEROS PECES", "T14020 - TOP RECTO CONCHAS", "P14030 - PANTY ENCAJE - CONCHAS",
				"T14010 - TOP CRUZADO TORTUGAS", "P14020 - PANTY BÁSICO TORTUGAS", "T14005 - TOP TRIANGULO CANGREJOS", "P14005 - PANTY HUILO CANGREJOS",
				"T14015 - TOP CRUZADO ESTRELLAS", "P14025 - PANTY BÁSICO ESTRELLAS", "T14025 - TOP CORALES", "P14035 - PANTY ENCAJE CORALES",
			];
			
			var idsToAppend = [
				"pc_row_1_col_1", "pc_row_1_col_1", "pc_row_1_col_1", "pc_row_1_col_1",
				"pc_row_2_col_1", "pc_row_2_col_1", "pc_row_2_col_1", "pc_row_2_col_1",
				"pc_row_3_col_1", "pc_row_3_col_1", "pc_row_3_col_1", "pc_row_3_col_1",
				"pc_row_4_col_1", "pc_row_4_col_1", "pc_row_4_col_1", "pc_row_4_col_1",
			];
			
			var baseURL = "http://dosantas.com/assets/coleccion-mar-adentro/";
			
			var collection = "mar-adentro";
			
			var counter = 0;
			
			$(document).ready(
				function() {
					measureBW(10, function(e) {
						console.log("bandwidth: " + e);
						
						/* ***** */
						
						if(e < 400) {
							preLoadPhotos();
						}
						else {
							$("#preloader").remove();
							
							loadPhotos();
						}
						
						$(".fancy_img").fancybox({"cyclic": true, "showNavArrows": true});
					});
				}
			);
			
			function getAJAX(img, width, minHeight, heightOverride, excludeFancyBox, title, container) {
				console.log("Appending img " + img + " to " + container);
				
				$.ajax(
					{
						url: "/php/includes/load_pic.php?collection=" + collection + "&reference=" + img + "&width=" + width + "&minHeight=" + minHeight + "&heightOverride=" + heightOverride + "&excludeFancyBox=" + excludeFancyBox + "&title=" + title,
						success: function(result) {
							$("#" + container).append(result);
							
							if(counter + 1 < listOfPhotos.length) {
								++counter;
								
								getAJAX(listOfPhotos[counter], widths[counter], minHeights[counter], heightOverrides[counter], excludesFancyBox[counter], titles[counter], idsToAppend[counter]);
							}
							else {
								counter = 0;
							}
						}
					}
				);
			}
			
			function preLoadPhotos() {
				var imgs = [];
				var cnt = 0;
				
				for(var i=0; i<listOfPhotos.length; i++) {
					var img = new Image();
					
					img.onload = function() {
						++cnt;
						
						if(cnt >= listOfPhotos.length) {
							// all images loaded here
							
							console.log("All images have been loaded.");
							
							$("#preloader").remove();
							
							loadPhotos();
						}
						else {
							// still more images to load
						}
					};
					
					img.src = baseURL + listOfPhotos[i];
					imgs.push(img);
				}
			}
			
			function loadPhotos() {
				var ajaxResult;
				
				getAJAX(listOfPhotos[0], widths[0], minHeights[0], heightOverrides[0], excludesFancyBox[0], titles[0], idsToAppend[0]);
			}
		</script>
	</head>
	
	<body>
		<div id="main-container">
			<div id="central-container">
				<?php include(dirname(__FILE__) . "/../php/includes/proudly_header.php"); ?>
				
				<div class="logo-container">
					<a href="/" title="Dosantas Everywear Clothing">
						<img alt="Dosantas Everywear Clothing" src="/assets/dosantas-everywear-clothing-logo.png" width="300px" height="300px" />
					</a>
				</div>
				
				<div class="banner-container">
					<img alt="Banner Colección Mar Adentro" src="/assets/banner-coleccion-mar-adentro.jpg" width="728px" height="200px" />
				</div>
				
				<div style="margin-bottom: 30px;">
					<a href="/" rel="follow" title="Regresar">
						<img alt="Regresar" src="/assets/btn-regresar.png" width="186" height="34" />
					</a>
				</div>
				
				<div id="photos-container">
					<div id="preloader">
						<img alt="Preloader" src="/assets/preloader.gif" />
					</div>
					
					<div id="pc_row_1">
						<div class="one_col" id="pc_row_1_col_1">
							
						</div>
					</div>
					
					<div id="pc_row_2">
						<div class="one_col" id="pc_row_2_col_1">
							
						</div>
					</div>
					
					<div id="pc_row_3">
						<div class="one_col" id="pc_row_3_col_1">
							
						</div>
					</div>
					
					<div id="pc_row_4">
						<div class="one_col" id="pc_row_4_col_1">
							
						</div>
					</div>
				</div>
				
				<div style="clear: both;"></div>
				
				<div style="margin-bottom: 30px;">
					<a href="/" rel="follow" title="Regresar">
						<img alt="Regresar" src="/assets/btn-regresar.png" width="186" height="34" />
					</a>
				</div>
				
				<div class="spacer"></div>
				
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
		
		<?php include(dirname(__FILE__) . "/../php/includes/tracking_ga.php"); ?>
	</body>
</html>