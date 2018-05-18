<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="header.css">
    <meta charset="utf-8" />
    <script type="text/javascript">
        sfHover = function() {
            var sfEls = document.getElementById("menu").getElementsByTagName("LI");
            for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                    this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                    this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
            }
        }
        if (window.attachEvent) window.attachEvent("onload", sfHover);
    </script>

</head>

<body >

    <div class="barreMenu">

        <div class="cd"> <img src="images/homemate2.png"> </div>
        <div class="posMenu">
            <ul id="menu">
                <li>
                    <a href="#">Mon compte</a>
                    <ul>
                        <li><a href="connexion.php" role="button" aria-haspopup="dialog" aria-controls="dialog">Se connecter</a> </li>
                        <li><a href="creerUnCompte.php">S'inscrire</a> </li>
                    </ul>
                </li>

                <li>
                    <a href="messagerie.php">Nous contacter</a>
                </li>

                <li>
                    <a href="#">Besoin d'aide ?</a>
                </li>

            </ul>
        </div>

    </div>

    <br><br>


</body>