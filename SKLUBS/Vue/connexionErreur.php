<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="connexionErreur.css">
    <meta charset="utf-8" />

</head>
<body >
<img class="image" src="images/homemate2.png" alt="image logo">

<div class="connection">

    <form method="post" action="../Contrôleur/authentification.php">
        <p>L'identifiant et/ou le mot de pass n'existe pas <br/> Veuillez recommencer</p>
        <h2>CONNEXION</h2>

        <span class="color">Saisissez votre identifiant
            <span/>

            <br/>

            <input id="username" class="champs" type="text" name="username">

                <br /><br/>

            <span class="color">Saisissez votre mot de passe
            <span/>

                <br/>

            <input id="password"  class=champs type="password" name="password">

                <br /><br/>

            <input class="valider" type="submit" value="VALIDER">

                <br/>

    </form>


    <p style=" font-style: italic">

        <a href= "../mdp_oublie.html" target="_blank"> Mot de passe oublié ?</a><br/>
        <a href="creerUnCompte.php">Pas encore de compte?</a> <br/><br/>

    </p>

</div>

<br/>
<footer>
    <p>Copyright 2018 HomeMate | Tous droits réservés</p>
</footer>
<br/>
</body>

</html>