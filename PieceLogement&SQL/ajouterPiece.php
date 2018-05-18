<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un capteur</title>
        <link rel="stylesheet" href="ajouterPiece.css"/>
    </head>

    <body>
    
    <header>
	<div class="logo"><img src="images/homemate2.png" alt="logo Homemate"></div>
	</header>

		<div class="piece">

		<form class="form1" method="post" action="ajoutPiece2.php">
			<span class="piece2">Ajouter une pièce</span>

			<div class="champnom ligne1">
				<label for="nom" class="inputNom">Nom <br></label>
				<input type="text" name="nom" id="nom"/><br>	
			</div>

			<div class="champnom ligne1 colonne1">
				<label for="type" class="inputNom">Type</label><br>
				<input type="text" name="type" id="type"/>
			</div>

			<div class="champnom ligne2">
				<label for="Superficie" class="inputNom">Superficie</label><br>
				<input type="text" name="superficie" id="superficie"/><br>
			</div>
					

			<div class="valid">
				<input type="submit" name="valider" value="Valider" class="bouton">

			</div>

		</form>	

	</div>
	        <p class="droit">Copyright 2018 HomeMate, Tous droits rÃ©servÃ©s</p>
    </body>

</html>