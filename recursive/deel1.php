<?php
    $aantalJaar = 10;

    function intrest($Beginkapitaal, $rentevoet, $aantalJaar)
    {
        //1jaar later
        $kapitaal = array();
        $kapitaal[0] = $Beginkapitaal;

        for ($i=1; $i <= $aantalJaar ; $i++) {

            $nieuwKapitaal = $kapitaal[$i-1]+ (($kapitaal[$i-1]/100)*$rentevoet);

            $kapitaal[$i] = floor($nieuwKapitaal);            
            
        }

        return $kapitaal;
    }

    $kapitaalTot = intrest(100,8,$aantalJaar);
	
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
        
        <ul>
        <?php for ($i=0; $i < $aantalJaar ; $i++): ?>                
            
            <?php// foreach($kapitaalTot as $totaal): ?>
                <li>na <?= $i ?> jaar heeft u zoveel op u rekening staan :<?php echo $kapitaalTot[$i] ?></li>
            <?php// endforeach ?>

        <?php endfor ?>
        </ul>

     </body>
 </html>
