<?php
    session_start();
    $message = "vul in";


    if ( isset( $_GET['sluiten'])) {

        session_destroy();
        header("Location: deel1-pagina1.php");
    }

        
    if ( isset( $_POST['submit'] ) )
    {
        $_SESSION['gegevens']['email'] = $_POST['email'];
        $_SESSION['gegevens']['name'] = $_POST['name'];

        $email = $_SESSION['gegevens']['email'];
        $name = $_SESSION['gegevens']['name'];
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
        <?php var_dump($_SESSION) ?>
        <div id="container">
            
            <h1> Registratiegegevens </h1>

            <p><?php echo $message ?></p>
            <p><?php echo $email ?></p>
            <p><?php echo $name ?></p>

            <h1> Deel2: adress </h1>

            <form action="deel1-pagina3.php" method="post" >

                <ul>                    
                    <li>
                        <label for="straat">straat:</label>
                    </li>
                    <li> 
                        <input type="text" name="straat" >
                    </li>
                    <li>
                        <label for="nummer">nummer:</label>
                    </li>
                    <li>
                        <input type="text" name="nummer" >
                    </li>
                    <li>
                        <label for="gemeente">gemeente:</label>
                    </li>
                    <li>
                        <input type="text" name="gemeente" >
                    </li>
                    <li>
                        <label for="postcode">postcode:</label>
                    </li>
                    <li>
                        <input type="text" name="postcode" >
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
