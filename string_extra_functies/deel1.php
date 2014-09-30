<?php 
	
	$fruit = "kokosnoot";
	$aantalKaraktersFruit = strlen($fruit);
	$posO = strpos($fruit, "o");



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
             <li>lengte woord : <?= $aantalKaraktersFruit ?></li>
             <li>positie o : <?= $posO ?> plaats</li>
             
         </ul>
         
     </body>
 </html>