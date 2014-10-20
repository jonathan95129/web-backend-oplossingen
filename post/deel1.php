<?php

    $password= "password";
    $username = "jonathan";
    $message = "vul in";

    if ( isset( $_POST['submit'] ) )
    {
        if ( $_POST['password'] == $password && $_POST['name'] == $username ) 
        {
            $message = "correct ingelogd";
        }
        else
        {
            $message = "verkeerd wachtwoord of verkeerde username";
        }
    
    }

    var_dump( $_POST);

	
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
                display: block;

            }
            li{
                margin: 20px;
            }
           
            
            </style>
     </head>

     <body>
        <div id="container">
            
            <h1> Inloggen </h1>

            <p><?php echo $message ?></p>

            <form action="deel1.php" method="post">

                <ul>                    
                    <li>
                        <label for="username">username</label>
                        <input type="text" name="name" >
                    </li>
                    <li>
                        <label for="password">password</label>
                        <input type="password" name="password" >
                    </li>
                    <li>
                        <input type="submit" name="submit" value="verzenden">
                    </li>                    
                </ul>

            </form>

        
        </div>
     </body>
 </html>
