<!DOCTYPE html>
<html>
    <head>
        <title>Connection : echo</title>
        <link rel="stylesheet" href="connexion.css">
        <meta charset="utf-8" />
        <H1></H1>
    </head>
 <body >
        
        <img class="image" src="images/homemate3.png">
        
    <div class="connection">
        
        <form method="post">
            
            <h2>CONNECTION</h2>
           
            <span class="color">Saisissez votre identifiant <span/>
            
            <br/> 
            
            <input id="username" class="champs" type="text" name="username">
        
                <br /><br/>

            <span class="color">Saisissez votre mot de passe<span/> 

                <br/> 
            
            <input id="password"  class=champs type="password" name="password">

                <br /><br/>
            
            <input class="valider" type="submit" value="VALIDER">
                
                <br/>
 
        </form>


        <p style=" font-style: italic">
       
         <a href= "mdp_oublie.html" target="_blank"> Mot de passe oublié ?</a><br/>
         <a href="inscription.php">Pas encore de compte?</a> <br/><br/>

        </p>

    </div>
    
    

<?php

    $username = "USER";

    $password = "PASS";

    if( isset($_POST['username']) && isset($_POST['password']) ){

        if($_POST['username'] == $username && $_POST['password'] == $password){ // Si les infos correspondent...

            session_start();

            $_SESSION['user'] = $username;

            echo "Success";    

        }

        else{ // Sinon

            echo "Failed";

        }

    }

?>

 </body>

</html>