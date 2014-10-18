<?php

    $pigHealth = 5;
    $maximumThrows = 8;

    $spelResultaat = array();

    function calculateHit()
    {
        global $pigHealth;
        
        $result = "";
        $randomGetal = rand(0,100);
        

        if ($randomGetal<= 40) {
            //hit
            
            $pigHealth--;
            $result = "raak er zijn nog maar " . $pigHealth . " varkens over" ;
        }
        else{
            $result = "mis er zijn nog " . $pigHealth . " varkens";
        }

        return $result;
    }

    function launchAngryBird()
    {
        global $maximumThrows;
        global $pigHealth;
        global $spelResultaat;

        $aantalLaunch = 0;
        
        do {
            $resultHit = calculateHit();
            $spelResultaat[] = $resultHit;

            $aantalLaunch++;

        } while ($aantalLaunch <= $maximumThrows && $pigHealth > 0);

        if ( $pigHealth <= 0) {
            
            $spelResultaat[] = "you lose";
        }      
        else
        {
            $spelResultaat[] = "you won";
        }
        
    }

	
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
        
        <?php launchAngryBird() ?>
        <?php foreach ($spelResultaat as $resultaat): ?>
            
                <li><?= $resultaat ?></li>                
            
        
        <?php endforeach ?>
        <p> </p>

     </body>
 </html>
