<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="miseEnPageMessagerie.css" />
        <title>Messagerie</title>
    </head>

    <body>
    	<br />
    	<img src="lettre.png" class="iconeLettre" alt="Icône lettre" href="pageDAccueil.php"/> <h1>Envoyer un message</h1>
    	<img src="homemate2.png" class="logo" alt="image du logo" href="pageDAccueil.php"/>
    	<span class="nomSite">HOMEMATE</span>
    	<div class="rectangle">
    	<div class="col1">
			<p>
		        <label for="nom">Nom</label><br />
		        <input type="text" class="zoneTexte" name="nom" /><br />
		        <label for="email">E-mail</label><br />
		        <input type="text" class="zoneTexte" name="E-mail" /><br />
		        <label for="objet">Objet</label><br />
		        <input type="text" class="zoneTexte" name="Objet" /><br />
		        
		        <label for="message">Comment pouvons-nous vous aider?</label><br />
	       		<textarea class="zoneMessage" name="message" rows="12" cols="109"></textarea><br />
	       		<input type="submit"  class="zoneEnvoie" name="Envoyer" value="Envoyer"/>
	    	</p>
	    </div>
    </body>
</html>