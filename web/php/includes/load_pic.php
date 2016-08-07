<?php
	$collection = $_GET["collection"];
	
	$reference = $_GET["reference"];
	
	$desiredWidth = $_GET["width"];
	
	$minHeight = $_GET["minHeight"];
	
	$heightOverride = $_GET["heightOverride"];
	
	$excludeFancyBox = $_GET["excludeFancyBox"];
	
	$title = $_GET["title"];
	
	// Check if values given.
	
	if(empty($collection)) {
		echo("Error. Right usage: collection=COLECCIÓN&reference=REFERENCIA&width=ANCHO");
		exit();
	}
	
	if(empty($reference)) {
		echo("Error. Right usage: collection=COLECCIÓN&reference=REFERENCIA&width=ANCHO");
		exit();
	}
	
	if(empty($desiredWidth)) {
		echo("Error. Right usage: collection=COLECCIÓN&reference=REFERENCIA&width=ANCHO");
		exit();
	}
	
	// Check if reference exists.
	
	if($collection != "fractales" && $collection != "mar-adentro") {
		echo("Error. The only two valid collections are 'fractales' and 'mar-adentro'");
		exit();
	}
	
	$imagePath = "";
	$imageURL = "";
	
	if($collection == "fractales") {
		$imagePath = dirname(__FILE__) . "/../../assets/coleccion-fractales/" . $reference;
		$imageURL = "/assets/coleccion-fractales/" . $reference;
	}
	
	if($collection == "mar-adentro") { 
		$imagePath = dirname(__FILE__) . "/../../assets/coleccion-mar-adentro/" . $reference;
		$imageURL = "/assets/coleccion-mar-adentro/" . $reference;
	}
	
	// Get width and height for reference image.
	
	list($width, $height, $type, $attr) = getimagesize($imagePath);
	
	// Get new height based on input width.
	
	$desiredHeight = $desiredWidth * $height / $width;
	
	// echo image.
	
	$style = "";
	
	if(!empty($minHeight) && $minHeight != "0" && $minHeight != 0) {
		$style = "float: left; margin: 2px; min-height: $minHeight" . "px;";
	}
	else {
		$style = "float: left; margin: 2px;";
	}
	
	$heightValue = "";
	
	if(!empty($heightOverride) && $heightOverride != "0" && $heightOverride != 0) {
		$heightValue = "height='$heightOverride'";
	}
	else {
		$heightValue = "height='$desiredHeight'";
	}
	
	if(!empty($excludeFancyBox) && $excludeFancyBox != "0" && $excludeFancyBox != 0) {
		$html = "<div style='$style'><img alt='' src='" . $imageURL . "' width='$desiredWidth' $heightValue /></div>";
	}
	else {
		$titleHTML = "";
		
		if(!empty($title)) {
			$titleHTML = "title='$title'";
		}
		
		$html = "<div style='$style'><a class='fancy_img' href='$imageURL' $titleHTML rel='current-gallery'><img alt='' src='" . $imageURL . "' width='$desiredWidth' $heightValue /></a></div>";
	}
	
	echo($html);
?>