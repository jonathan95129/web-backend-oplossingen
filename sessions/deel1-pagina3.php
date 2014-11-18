<?php
    session_start();
    $message = "vul in";


    if ( isset( $_GET['sluiten'])) {

        session_destroy();
        header("Location: deel1-pagina1.php");
    }

    
    
    if ( isset( $_POST['submit'] ) )
    {
        $_SESSION['adres']['straat'] = $_POST['straat'];
        $_SESSION['adres']['nummer'] = $_POST['nummer'];
        $_SESSION['adres']['gemeente'] = $_POST['gemeente'];
        $_SESSION['adres']['postcode'] = $_POST['postcode']; 
        
    
    }

        $straat = (isset ($_SESSION['adres']['straat'])) ? $_SESSION['adres']['straat'] : "" ;
        $nummer = (isset($_SESSION['adres']['nummer'])) ? $_SESSION['adres']['nummer'] : "";
        $gemeente = (isset($_SESSION['adres']['gemeente'])) ? $_SESSION['adres']['gemeente'] : "";
        $postcode = (isset($_SESSION['adres']['postcode'])) ? $_SESSION['adres']['postcode'] : "";
        $email = (isset($_SESSION['gegevens']['email'])) ? $_SESSION['gegevens']['email'] : "";
        $name = (isset($_SESSION['gegevens']['name'])) ? $_SESSION['gegevens']['name'] : "";

    

	
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

            #container{
                width: 960px;
                color: black;
                margin: auto;

            }
            ul{
                list-style: none;      

            }
            li{
                margin: 10px;
            }
           
            
            </style>
     </head>

     <body>
        <?php var_dump($_SESSION) ?>
        <div id="container">
            
            <h1> OverzichtPagina </h1>

            <p><?php echo $message ?></p>
            <p><?php echo $email ?></p>
            <p><?php echo $name ?></p>
            <p><?php echo $straat ?></p>
            <p><?php echo $nummer ?></p>
            <p><?php echo $gemeente ?></p>
            <p><?php echo $postcode ?></p>


            <a href="?sluiten" >delete sesions</a>

        
        </div>
     </body>
 </html>
