<?php 
    
    $product = 0;
    $getal = 1;
    $maxrij = 10;
	

	
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
         <style>
            
            .even
            {
                background-color    :   green;
            }

        </style>
     </head>
     <body>
         
        <table>

            <?php while ($product <= $maxrij): ?>
                
                <tr>
                    <?php $getal = 1 ?>
                    <?php while ($getal <= $maxrij): ?>

                        <td class="<?= (($getal*$product) % 2 == 0 ) ? 'even' : '' ?>" >                  
                          <?php echo $product*$getal ?> 
                        </td> 

                        <?php $getal++ ?>
                    <?php endwhile ?>    

                </tr>

                <?php $product++ ?>
            <?php endwhile ?>


        </table>

     </body>
 </html>
