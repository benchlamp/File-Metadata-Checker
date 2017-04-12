<?php

$path = $_POST["mypath"];

function timeStamper($path) {

	echo "path = " . $path . "<br/>";

	$size = filesize($path);
	 

	$returnObj->size = $size;
	$returnJSON = json_encode($returnObj, JSON_UNESCAPED_SLASHES);
	   
	return $returnJSON;
   }


echo timeStamper($path);
  
 
?>