<?php 
	
	$jaartal = "";
	$isSchrikkeljaar = fasle;

	if ($jaartal%4 == 0 && $jaartal % 100 != 0 || $jaartal % 400 == 0) {
		
		$isSchrikkeljaar = true;

	}

 ?>

