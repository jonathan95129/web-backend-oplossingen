<?php 
	
	$fruit = "ananas";
	$aantalKaraktersFruit = strlen($fruit);
	$posO = strrpos($fruit, "a");

	$fruitCapital = strtoupper($fruit);

 ?>

 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>opdracht string extra functies</title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="author" href="humans.txt">
     </head>
     <body>
         <ul>
         	<li>het woord is <?= $fruit ?></li>             
             <li>positie laatse a : <?= $posO ?> plaats</li>
             <li><?= $fruitCapital ?></li>
         </ul>
         
     </body>
 </html>