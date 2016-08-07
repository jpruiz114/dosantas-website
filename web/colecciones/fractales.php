<?php
	
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title>Dosantas - Everywear Clothing - Colección Fractales</title>
		
		<link rel="image_src" href="http://www.dosantas.com/assets/dosantas-everywear-clothing-logo.png" />
		
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet" type="text/css">
		
		<link href="/css/coleccion-fractales.css" media="screen" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="/lib/jquery.fancybox.css" type="text/css" media="screen" />
		
		<script type="text/javascript" src="/lib/jquery-1.10.1.min.js"></script>
		
		<?php include(dirname(__FILE__) . "/../php/includes/browser_queries.php"); ?>

		<?php include(dirname(__FILE__) . "/../php/includes/facebook_pixel.php"); ?>
		
		<script type="text/javascript" src="/lib/jquery.fancybox.js"></script>
		
		<script type="text/javascript" src="/js/measureBW.js"></script>
		
		<script type="text/javascript">
			var listOfPhotos = [
				"ad-01.jpg",
				"T15055.jpg", "T15055atras.jpg", "C15015atras.jpg", "C15015.jpg", 
				"T15070.jpg", "T15075atras.jpg", "T15075.jpg",
				"P15055.jpg", "P15055atras.jpg",
				"P15040.jpg", "P15040atras.jpg", "T15065.jpg", "T15065atras.jpg",
				"ad-02.jpg",
				"T15040.jpg",
				"T15040atras.jpg",
				"P15050.jpg", "P15050atras.jpg", "T15050.jpg", "T15050atras.jpg",
				"ad-03.jpg",
				"T15060.jpg", "T15060atras.jpg", "P15060.jpg", "P15060atras.jpg",
				"ad-04.jpg",
				"P15080.jpg", "P15080atras.jpg", "P15085.jpg", "P15085atras.jpg"
			];
			
			var widths = [
				432 - 4, /* 1 big */
				216 - 4, 216 - 4, 216 - 4, 216 - 4, /* 4 small */
				288 - 4, 288 - 4, 288 - 4, /* 3 cols */
				432 - 4, 432 - 4, /* 2 cols */
				216 - 4, 216 - 4, 216 - 4, 216 - 4, /* 4 small */
				432 - 4, /* 1 big */
				432 - 4, /* 1 big */
				432 - 4, /* 1 big */
				216 - 4, 216 - 4, 216 - 4, 216 - 4, /* 4 small */
				432 - 4, /* 1 big */
				216 - 4, 216 - 4, 216 - 4, 216 - 4, /* 4 small */
				864 - 4, /* 1 large */
				216 - 4, 216 - 4, 216 - 4, 216 - 4 /* 4 small */
			];
			
			var minHeights = [
				0,
				212, 212, 212, 212,
				0, 0, 0,
				0, 0,
				212, 212, 212, 212,
				0,
				0,
				0,
				212, 212, 212, 212,
				0,
				212, 212, 212, 212,
				0,
				212, 212, 212, 212
			];
			
			var heightOverrides = [
				0,
				0, 0, 0, 0,
				0, 0, 0,
				0, 0,
				0, 0, 0, 0,
				432,
				0,
				0,
				0, 0, 0, 0,
				0,
				0, 0, 0, 0,
				0,
				0, 0, 0, 0
			];
			
			var excludesFancyBox = [
				1,
				0, 0, 0, 0,
				0, 0, 0,
				0, 0,
				0, 0, 0, 0,
				1,
				0,
				0,
				0, 0, 0, 0,
				1,
				0, 0, 0, 0,
				1,
				0, 0, 0, 0
			];
			
			var titles = [
				"",
				"T15055 - TOP LARGO ROSAS  - $ 30.000 - S M L", "T15055 - TOP LARGO ROSAS  - $ 30.000 - S M L", "C15015 - CAMISILLA ROSAS - $ 35.000 - S M L" + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO", "C15015 - CAMISILLA ROSAS - $ 35.000 - S M L" + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO",
				"T15070 - TOP CIERRE ROSAS - $ 30.000 - S M L", "T15075 - TOP CIERRE TROPICAL - $ 30.000 - S M L", "T15075 - TOP CIERRE TROPICAL - $ 30.000 - S M L",
				"P15055 - BÁSICA FAJON ROSAS - $ 20.000 - S M L", "P15055 - BÁSICA FAJON ROSAS - $ 20.000 - S M L",
				"P15040 - CAHETERO FLAMINGO - $ 20.000 - S M L" + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO", "P15040 - CAHETERO FLAMINGO - $ 20.000 - S M L" + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO", "T15065 - TOP  CUADRADO FLAMINGOS - $ 30.000 - S M L", "T15065 - TOP  CUADRADO FLAMINGOS - $ 30.000 - S M L",
				"",
				"T15040 - TOP RECTO FLAMINGOS - $ 30.000 - S M L" + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO", "T15040 - TOP RECTO FLAMINGOS - $ 30.000 - S M L"  + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO",
				"P15050 - BÁSICA FAJON MACAW - $ 20.000 - S M L", "P15050 - BÁSICA FAJON MACAW - $ 20.000 - S M L", "T15050 - TOP LARGO MACAW - $ 30.000 - S M L", "T15050 - TOP LARGO MACAW - $ 30.000 - S M L",
				"",
				"T15060 - TOP CUADRADO CEBRA - $ 30.000 - S M L", "T15060 - TOP CUADRADO CEBRA - $ 30.000 - S M L", "P15060 - BÁSICA CEBRA - $ 18.000 - S M L" + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO", "P15060 - BÁSICA CEBRA - $ 18.000 - S M L" + "<br>" + "DISPONIBLE TAMBIÉN EN NEGRO",
				"",
				"P15080 - BÁSICA  AZUL - $ 18.000 - S M L", "P15080 - BÁSICA  AZUL - $ 18.000 - S M L", "P15085 - ENCAJE AZUL - $ 18.000 - S M L", "P15085 - ENCAJE AZUL - $ 18.000 - S M L"
			];
			
			var idsToAppend = [
				"pc_row_1_col_1",
				"pc_row_1_col_2", "pc_row_1_col_2", "pc_row_1_col_2", "pc_row_1_col_2",
				"pc_row_2_col_1", "pc_row_2_col_2", "pc_row_2_col_3",
				"pc_row_3_col_1", "pc_row_3_col_2",
				"pc_row_4_col_1", "pc_row_4_col_1", "pc_row_4_col_1", "pc_row_4_col_1",
				"pc_row_4_col_2",
				"pc_row_5_col_1",
				"pc_row_5_col_2",
				"pc_row_6_col_1", "pc_row_6_col_2", "pc_row_6_col_3", "pc_row_6_col_4",
				"pc_row_7_col_1",
				"pc_row_7_col_2", "pc_row_7_col_2", "pc_row_7_col_2", "pc_row_7_col_2",
				"pc_row_8_col_1",
				"pc_row_9_col_1", "pc_row_9_col_2", "pc_row_9_col_3", "pc_row_9_col_4"
			];
			
			var baseURL = "http://dosantas.com/assets/coleccion-fractales/";
			
			var collection = "fractales";
			
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
					<img alt="Banner Colección Fractales" src="/assets/banner-coleccion-fractales.jpg" width="728px" height="200px" />
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
						<div class="two_cols" id="pc_row_1_col_1">
							
						</div>
						
						<div class="two_cols" id="pc_row_1_col_2">
							
						</div>
					</div>
					
					<div id="pc_row_2">
						<div class="three_cols" id="pc_row_2_col_1">
							
						</div>
						
						<div class="three_cols" id="pc_row_2_col_2">
							
						</div>
						
						<div class="three_cols" id="pc_row_2_col_3">
							
						</div>
					</div>
					
					<div id="pc_row_3">
						<div class="two_cols" id="pc_row_3_col_1">
							
						</div>
						
						<div class="two_cols" id="pc_row_3_col_2">
							
						</div>
					</div>
					
					<div id="pc_row_4">
						<div class="two_cols" id="pc_row_4_col_1">
							
						</div>
						
						<div class="two_cols" id="pc_row_4_col_2">
							
						</div>
					</div>
					
					<div id="pc_row_5">
						<div class="two_cols" id="pc_row_5_col_1">
							
						</div>
						
						<div class="two_cols" id="pc_row_5_col_2">
							
						</div>
					</div>
					
					<div id="pc_row_6">
						<div class="four_cols" id="pc_row_6_col_1">
							
						</div>
						
						<div class="four_cols" id="pc_row_6_col_2">
							
						</div>
						
						<div class="four_cols" id="pc_row_6_col_3">
							
						</div>
						
						<div class="four_cols" id="pc_row_6_col_4">
							
						</div>
					</div>
					
					<div id="pc_row_7">
						<div class="two_cols" id="pc_row_7_col_1">
							
						</div>
						
						<div class="two_cols" id="pc_row_7_col_2">
							
						</div>
					</div>
					
					<div id="pc_row_8">
						<div class="one_col" id="pc_row_8_col_1">
							
						</div>
					</div>
					
					<div id="pc_row_9">
						<div class="four_cols" id="pc_row_9_col_1">
							
						</div>
						
						<div class="four_cols" id="pc_row_9_col_2">
							
						</div>
						
						<div class="four_cols" id="pc_row_9_col_3">
							
						</div>
						
						<div class="four_cols" id="pc_row_9_col_4">
							
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