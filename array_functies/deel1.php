<?php 
	
	$dieren = array("kat","hond","tijger","vis","slak","paard");

	$lengte = count($dieren);
	
	$teZoekenDier = "tijger";

	$boodschap = in_array($teZoekenDier, $dieren);

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
     	
     		<?php echo $lengte ?>
     		<?php if ($boodschap) ?> 
     			dier gevonden
     		<?php endif ?>
     		    
         
     </body>
 </html>

