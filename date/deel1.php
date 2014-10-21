<?php

    $mktime = mktime(22,35,25, 1,21,1904);
     
    $date = date('d/m/Y h:i:s', $mktime);

	
 ?>

 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>  </title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="author" href="humans.txt">
         <style>
         </style>
     </head>

     <body>

        <p>de timestamp van 22u 35m 25sec 21 januari 1904 is <?php echo $mktime ?></p>
        <p>de timestamp in het juiste formaat is <?php echo $date ?></p>


        
     </body>
 </html>
