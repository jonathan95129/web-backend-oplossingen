<?php

    $text = file_get_contents("text-file.txt");

    $textChars = array();
    $textChars = str_split($text);

    rsort($textChars);

    $rtextChars = array();
    $rtextChars = array_reverse($textChars);

    $lengteArray = strlen($text);
    $tellerArray = array();

    //echo $lengteArray;

    for ($i=0; $i < $lengteArray; $i++) { 
        
        if ( isset ( $tellerArray[$rtextChars[$i]] ) ) {
            ++$tellerArray[$rtextChars[$i]];
        }
        else
        {
            $tellerArray[$rtextChars[$i]] = 1 ;
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
         
        <pre><?php var_dump ($tellerArray) ?></pre>

     </body>
 </html>
