<?php

    function BerekenSom($getal1,$getal2)
    {
       return $getal1+$getal2; 
    }
    
    function Vermenigvuldig($getal1,$getal2)
    {
       return $getal1*$getal2; 
    }

    function isEven($getal1)
    {
       if ($getal1%2 == 0) {
           return "true";
       }
       else {
        return "false";
       }
    }
    
    $stringBewerkingArray = array();
    
    function string_Lengte_Hoofdletters($string)
    {
        

        $stringBewerkingArray["lengte"] = strlen($string);
        $stringBewerkingArray["hoofdletters"] = strtoupper($string);

        return $stringBewerkingArray;

    }
        
    $zin = "het is vandaag zaterdag";
    $bewerkteString = string_Lengte_Hoofdletters($zin);


    


	
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
         
        <?php echo isEven(3) ?>
        <?php echo BerekenSom(1,1) ?>
        <?php echo Vermenigvuldig(2,2) ?>

        <p> de string "<?= $zin ?>" is <?= $bewerkteString["lengte"] ?>  zolang en in hoofdletters is het <?= $bewerkteString["hoofdletters"] ?> </p>

     </body>
 </html>
