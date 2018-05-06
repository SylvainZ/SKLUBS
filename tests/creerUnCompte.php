<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styleCompte.css">
</head>

<body>

<header>
	<div class="logo"><img src="images/homemate2.png" alt="logo Homemate"></div>
</header>

<section>

	<div class="inscription">

		<form class="form1" method="post" action="../Modèle/creationCompteBis.php">
			<span class="titreinscription">Créer un compte</span>

			<div class="champnom ligne1">
				<label for="nom" class="inputNom">Nom <br></label>
				<input type="text" name="nom" id="nom"/><br>	
			</div>

			<div class="champnom ligne1 colonne1">
				<label for="prenom" class="inputNom">Prénom</label><br>
				<input type="text" name="prenom" id="prenom"/>
			</div>

			<div class="champnom ligne2">
				<label for="mail" class="inputNom">Adresse mail</label><br>
				<input type="text" name="mail" id="mail"/><br>
			</div>
					
			<div class="champnom ligne2 colonne2">			
				<label for="password" class="inputNom">Mot de passe</label><br>
				<input type="password" name="password" id="password"/>
			</div>

			<div class="valid">
				<input type="submit" name="valider" value="Valider" class="bouton">

			</div>

		</form>	

	</div>

</section>

<footer>
	<p>Copyright 2018 HomeMate | Tous droits réservés</p>
</footer>

</body>
</html>