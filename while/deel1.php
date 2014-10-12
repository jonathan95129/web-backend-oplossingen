<?php 

    $getallen = array() ;
    $getallen2 = array() ;
    $aantal = 100;
    $getal = 0;
    $getal2 = 0;

    

    while ( $getal <= $aantal) {

        $getallen[] = $getal  ;

        $getal++;
    }

    $getallenreeks = implode(" , ", $getallen) ;


    while ($getal2 <= 80 ) {

        if ($getal2 >= 40 && $getal2 % 3 == 0 ) {
            $getallen2[] = $getal2;
        }        

        $getal2++;
    }

    $getallenreeks2 = implode(" , ", $getallen2);
	

	
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
         
        <p>
            <?php echo $getallenreeks ?>
        </p>

        <p>
            <?php echo $getallenreeks2 ?>
        </p>

     </body>
 </html>
