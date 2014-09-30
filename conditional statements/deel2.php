<?php 
	
	$getal = 1;
	$dag = "";

	// kunt dit op meerdere manieren doen

	if ($getal == 1) {
		$dag = "maandag";
	}

	switch ($getal) {
		case '1':
			$dag = "maandag";
			break;
		
		default:
			# code...
			break;
	}

	$dag = strtoupper($dag);

	$dag_kleine_a = str_replace("A", "a", $dag);

	$pos_Laatse_a = strrpos($dag, "A");
	$dag_kleineLaaste_a = substr_replace($dag, "a", $pos_Laatse_a, 1);

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
             <li><?php echo $dag ?></li>
             <li><?php echo $dag_kleine_a ?></li>
             <li><?php echo $dag_kleineLaaste_a ?></li>
         </ul>
         
     </body>
 </html>