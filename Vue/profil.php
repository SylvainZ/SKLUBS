<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="miseEnPageProfil.css" />
        <title>Messagerie</title>
    </head>

    <body>
    	<br />
    	<img src="images/logo_nouvo.png" class="logo" alt="image du logo" href="pageDAccueil.php"/>
    	
    	<img src="images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" href="pageDAccueil.php"/> <span class="profil">Profil</span>

		<img src="images/iconeDeconnection.png" class="boutonDeconnection" alt="bouton de déconnection" href="pageDAccueil.php"/>
    	
    	<div class="rectangle">
    		<div class="col1">
				<p>
					Nom, Prénom, Statut: <br/>
					<span class="valeurImporte"> nom prénom</span><br/>
					<span class="valeurImporte"> statut</span><br/>
					Adresse complète:<br/>
					<span class="valeurImporte"> numAppart, numEtage</span><br/>
					<span class="valeurImporte"> numRue nomRueBdAve nomDeRue</span><br/>
					<span class="valeurImporte"> Departement Ville</span><br/>
					Mail:<br/>
					<span class="valeurImporte"> mail</span><br/>
					Numéro de téléphone:<br/>
					<span class="valeurImporte"> numTel</span>
					<form action="../Modèle/modifieProfil.php" class="positionModifProfil">
					<input type="submit"  class="modifProfil" name="modifProfil" value="Modifier le profil"/>
					</form>
		    	</p>
	    	</div>
	    	<div class="col2">
				<p>
					<img src="images/iconeMail.png" class="image" alt="image du mail" href="pageDAccueil.php"/>
					<span href="pageDAccueil.php">Boîte de réception</span><br/><br/>
					<img src="images/iconeFacture.png" class="image" alt="image du facture" href="pageDAccueil.php"/>
					<span href="pageDAccueil.php">Facture</span><br/><br/>
					<img src="images/iconeAutorisation.png" class="image" alt="icône d'une famille" href="pageDAccueil.php"/>
					<span href="pageDAccueil.php">Autorisation</span><br/><br/> 
					<img src="images/iconeMaisonArbre.png" class="image" alt="icône du maison" href="pageDAccueil.php"/>
					<span href="pageDAccueil.php">Gérer la maison</span><br/><br/>
		    	</p>
	    	</div>
    	<div/>
    </body>
</html>