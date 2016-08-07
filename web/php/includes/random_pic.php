<?php

function getRandomFileFromFolder($dir) {
	if(empty($dir)) {
		return "";
	}
	else {
		$files = glob($dir . "/*.*");
		$file = array_rand($files);
		return $files[$file];
	}
}