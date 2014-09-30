<?php 
	
	$getal = 1;
	$dag = "";

	/*if ($getal == 1) {
		$dag = "maandag";
	}*/

	switch ($getal) {
		case '1':
			$dag = "maandag";
			break;
		
		default:
			# code...
			break;
	}

 ?>

 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>opdracht conditional statements</title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="author" href="humans.txt">
     </head>
     <body>
         <ul>
         	           
             <?php echo $dag ?>
         </ul>
         
     </body>
 </html>