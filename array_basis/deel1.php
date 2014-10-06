<?php 
	#array 1
	$dieren = array("hond" , "kat" , "paard" , "giet" ,  "schaap", "olifant", "tijger", "schildpad", "giraf", "vogel");

	#array 2
	$dieren2[] = "hond";
	$dieren2[] = "kat";
	// ...

	#array 3
	$autos = array('landvoertuigen' => array("vespa", "fiets") ,
					'watervoertuigen' => array("surfplak","vlot"),
					'luchtvoertuigen' => array("luchtbalon", "helicopter") 
					);

	

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
     	
     		<pre><?php var_dump($autos) ?></pre>
     		    
         
     </body>
 </html>

