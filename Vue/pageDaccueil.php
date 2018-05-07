<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="pageDacceuil.css">
        <meta charset="utf-8" />
    </head>
    <body >
        <header>
            <div class="cd"> <img src="images/homemate2.png"> </div>
            <div class="titre">BIENVENUE CHEZ HOMEMATE</div>
        </header>
        <br/><br/>

        <section>
        <div class="block1"></div>
        <div class="block3"></div>
        <div class="block3"></div>
        <div class="block3"></div>
        <br/>

        <div id="vf">

            <form action="connexion.php" class="connect">
                <input type="submit" value="Connexion" class="button">
            </form>

            <form action="creerUnCompte.php" method="post">
                <input type="submit" value="S'inscrire" class="button"/>
            </form>

            <form action="messagerie.php">
                <input type="submit" value="Nous contacter" class="button" />
            </form>

            <form action="aide.php" class="help">
                <input type="submit" value="aide" class="button" >
            </form>

        </div>
        </section>
        <br/> <br/>
        <footer>
            <p>Copyright 2018 HomeMate | Tous droits réservés</p>
        </footer>

    </body>
</html>
