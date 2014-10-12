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

            <?php for ($i=0; $i <= $maxrij ; $i++): ?>            
                    
               
                <tr>
                    
                    <?php for ($j=0; $j <= $maxrij ; $j++): ?>                    

                        <td class="<?= (($i*$j) % 2 == 0 ) ? 'even' : '' ?>" >

                          <?php echo $i*$j ?> 

                        </td> 

                        
                    <?php endfor ?>    

                </tr>

                
            <?php endfor ?>


        </table>

     </body>
 </html>
