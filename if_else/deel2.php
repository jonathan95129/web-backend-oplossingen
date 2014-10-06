<?php 

	$gegevenSeconden = "100000";
	
	//aant seconde in...
	$minuten		= 60;
	$uren			= $minuten*60;
	$dag			= $uren*24;
	$week			= $dag*7;
	$maanden		= $dag*31;
	$jaren 			= $dag*365;	

	$aantalminuten		= $gegevenSeconden/$minuten;
	$aantaluren			= $gegevenSeconden/$uren;
	$aantaldagen		= $gegevenSeconden/$dag;
	$aantalweken		= $gegevenSeconden/$week;
	$aantalmaanden		= $gegevenSeconden/$maanden;
	$aantaljaren		= $gegevenSeconden/$jaren;		



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
         <h1>gegeven aantal seconden :</h1><?= $gegevenSeconden ?>
         <h3>heeft</h3><?= $aantalminuten ?><h4>minuten</h4>
         <h3>heeft</h3><?= $aantaluren ?><h4>uren</h4>
         <h3>heeft</h3><?= $aantaldagen ?><h4>dagen</h4>
     </body>
 </html>

