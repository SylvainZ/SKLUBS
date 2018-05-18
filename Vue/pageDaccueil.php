<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="pageDacceuil.css">
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

        <header>
        <?php include("header.php") ?>;

        </header>
        <div class="titre">BIENVENUE CHEZ HOMEMATE</div>

        <br/><br/>

        <section>

            <div class="block1"></div>
            <div class="block3"></div>
            <div class="block3"></div>
            <div class="block3"></div>
            <br/>

        </section>

        <br/> <br/>

        <footer>
            <p>Copyright 2018 HomeMate | Tous droits réservés</p>
        </footer>

    </body>
</html>