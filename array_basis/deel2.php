<?php 
	
	$getallen = array(1,2,3,4,5);
	$getallen2 = array(5,4,3,2,1);

	$lengte = count($getallen);
	$lengte2 = count($getallen2);

	$som = 1;


	for ($i=0; $i < $lengte ; $i++) { 
		
		$som *= $getallen[$i];
	}

	for ($i=0; $i < $lengte ; $i++) { 
		if ($getallen[$i]%2 != 0) {
			$onevenGetalen[] = $getallen[$i];
		}
	}

	for ($i=0; $i < $lengte ; $i++) { 
		$somVanArray[] = $getallen[$i] + $getallen2[$i];

	}

	

 ?>

 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Untitled</title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="author" href="humans.txt">
     </head>
     <body>
     	
     		<?php echo $som ?>
     		<?php print_r($onevenGetalen) ?>
     		<?php var_dump($somVanArray) ?>
     		    
         
     </body>
 </html>

