<?php
    session_start();
    $message = "vul in";

    if ( isset( $_GET['sluiten'])) {

        session_destroy();
        header("Location: deel1-pagina1.php");
    }

    
	
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
        <?php var_dump($_POST) ?>
        <div id="container">
            
            <h1> Deel1: registratiegegevens </h1>

            <p><?php echo $message ?></p>

            <form action="deel1-pagina2.php" method="post" >

                <ul>                    
                    <li>
                        <label for="email">Email:</label>
                    </li>
                    <li> 
                        <input type="text" name="email" >
                    </li>
                    <li>
                        <label for="name">Nickname:</label>
                    </li>
                    <li>
                        <input type="text" name="name" >
                    </li>
                    <li>
                        
                        <input type="submit" name="submit" value="volgende">
                        
                    </li>                    
                </ul>

            </form>

            <a href="?sluiten" >delete sesions</a>

        
        </div>
     </body>
 </html>
