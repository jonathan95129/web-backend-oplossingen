<?php 

    $getallen = array() ;
    $getallen2 = array() ;
    $aantal = 100;
          

    for ($i=0; $i <= $aantal ; $i++) { 
        $getallen[] = $i;
    }

    $getallenreeks = implode(" , ", $getallen) ;
    

    for ($i=0; $i < $aantal ; $i++) { 

        if ($i > 40 && $i < 80 && $i % 3 == 0) {

            $getallen2[] = $i;
        }
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
