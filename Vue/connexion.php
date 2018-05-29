<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="connexion.css">
        <meta charset="utf-8" />


    </head>
 <body >

        <img class="image"   src="images/homemate2.png" alt="image logo"><br>

   <div class="connection">
        <h2>CONNEXION</h2>
        <div id="resultat"></div>

        <form >

            <span class="color">Saisissez votre identifiant
            </span>
            
            <br/>

            <input id="username" class="champs" type="email" name="Email" required/>
        
                <br /><br/>

            <span class="color">Saisissez votre mot de passe
            </span>

                <br/> 
            
            <input id="password"  class=champs type="password" name="password" required/>

                <br /><br/>
            
            <input id="valider" type="submit" value="VALIDER"">
                
                <br/>

        </form>


         <a href= "mdp_oublie.html" target="_blank"> Mot de passe oublié ?</a><br/>
         <a href="creerUnCompte.php">Pas encore de compte?</a> <br/><br/>


    </div>


        <br/>
    <footer>
            <p>Copyright 2018 HomeMate | Tous droits réservés</p>
    </footer>
 <br/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="../Controleur/connexion.js" type="text/javascript"></script>
 </body>

</html>

