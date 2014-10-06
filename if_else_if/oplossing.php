<?php 

	$getal = 3;
	$ondergrens = "";
	$bovengrens = "";
	$nietGelding = false;

	if ($getal <= 10 && $getal >= 0) {
		$ondergrens = 0;
		$bovengrens = 10;
	}
	elseif ($getal <= 20 && $getal >= 10) {
		$ondergrens = 10;
		$bovengrens = 20;
	}
	elseif ($getal >=20 && $getal <=30) {
		$ondergrens = 20;
		$bovengrens = 30;
	}
	else
	{
		$nietGelding = true;
	}

	$resultaat = "het getal ligt tussen " . $ondergrens . " en " . $bovengrens;

	$omgekeerd = strrev($resultaat);

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
     	<?php if (!$nietGelding): ?> 

     		het getal is :
     		<?php echo $getal ?>
     		<p><?php echo $resultaat?></p>
     		<p><?php echo $omgekeerd?></p>
     	
     <?php endif ?>
         
     </body>
 </html>

