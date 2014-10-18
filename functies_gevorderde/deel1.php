<?php

    $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
    $karakter = array('2' , '8' , 'a');

    function aantalkaraters($volledigeString, $karakter)
    {
        $lengteKey = strlen($volledigeString);

        $resultaat["aantal"] = substr_count($volledigeString, $karakter);
        $resultaat["procent"] = ($resultaat["aantal"] / $lengteKey) * 100 ;

        return $resultaat;
    }

    function aantalkarakters2($karakter)
    {        
        global $md5HashKey;
        $volledigeString = $md5HashKey;
        $lengteKey = strlen($volledigeString);

        $resultaat["aantal"] = substr_count($volledigeString, $karakter);
        $resultaat["procent"] = ($resultaat["aantal"] / $lengteKey) * 100 ;

        return $resultaat;
    }

    function aantalkarakters3($karakter)
    {    
        
        $volledigeString = $GLOBALS['md5HashKey'];
        $lengteKey = strlen($volledigeString); 
        $resultaat["aantal"] = substr_count($volledigeString, $karakter);
        $resultaat["procent"] = ($resultaat["aantal"] / $lengteKey) * 100 ;

        return $resultaat;
    }

    $fie1 = aantalkaraters($md5HashKey,$karakter[0]);
    $fie2 = aantalkarakters2($karakter[1]);
    $fie3 = aantalkarakters3($karakter[2]);


	
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
        functie 1: 2= komt <?= $fie1["aantal"] ?> keer voor (<?php echo $fie1["procent"]  ?> procent)  in  <?= $md5HashKey ?> <br>
        functie 2: 8= komt <?= $fie2["aantal"] ?> keer voor (<?php echo $fie2["procent"]  ?> procent)  in  <?= $md5HashKey ?>  <br>
        functie 3: <?= $karakter[2] ?> = komt <?= $fie3["aantal"] ?> keer voor (<?php echo $fie3["procent"]  ?> procent)  in  <?= $md5HashKey ?> ?> 
        

        <p> </p>

     </body>
 </html>
