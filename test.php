<?php
	$pattern = "/^[a-zA-Z0-9.]*$/";
	$string = "triBudi93.@";
	if(!preg_match($pattern, $string)) {
	  	echo "not valid";
	} else {
		echo "valid";
	}
?>