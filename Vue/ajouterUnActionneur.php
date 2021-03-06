<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un actionneur</title>
        <link rel="stylesheet" href="styleNouveauCapteur.css"/>
    </head>

    <body>
    	<img src="images/homemate2.png" alt="logo HomeMate" id="logo"/>
    	<!--<span class="nom_du_site">HOMEMATE</span><br/>-->
    	<section class="ajout">
	        <h1>Ajouter un actionneur</h1>
	        <form method="post" action="capteur.php">
	        	<p>
					<label for="nom_du_capteur" class="nom_capteur">Nom de l'actionneur* : </label><br/>
					<select name="nom_du_capteur" id="nom_du_capteur" required>
						<optgroup label="Chauffage">
							<option value="thermomètre">Thermomètre</option>
							<option value="chaud">Chaud</option>
							<option value="froid">Froid</option>
						</optgroup>
						<optgroup label="Lumière">
							<option value="lampe_de_bureau">Lampe de bureau</option>
							<option value="lustre">Lustre</option>
							<option value="ampoule">Ampoule</option>
							<option value="globe">Globe</option>
						</optgroup>
						<optgroup label="Fenêtre" >
							<option value="mouvement">Mouvement</option>
							<option value="bouge">Bouge</option>
							<option value="present">Présent</option>
						</optgroup>
					</select><br/><br/>
					
					<label for="numero_de_serie">Numéro de série* : </label><br/>
					<input type="text" name="numero_de_serie" id="numero_de_serie" maxlength="10" placeholder="Ex: XXXXXXXXXX" required/>
					<img src="images/interrogation.png" alt="un point d'interrogation" title="Il s'agit d'un numéro à 10 caractères composé de chiffres et de lettres" class="interrogation"/><br/><br/>

					<!--
					<label for="seuil">Seuil* : </label><br/>
					<input type="number" name="seuil" id="seuil" placeholder="Ex: 10" required/>
					<img src="images/interrogation.png" alt="un point d'interrogation" title="Indiquez le seuil pour lequel vous voulez recevoir une alerte" class="interrogation"/><br/><br/>

					 <label for="etat">Etat du capteur</label>
					<select name="etat" id="etat">
						<option value="neuf">Neuf</option>
					</select> 	Le nouveau capteur est neuf par défaut--> 

					<label for="piece">Pièce* : </label><br/>
					<select name="piece" id="piece" required>
						<option value="salon">Salon</option>
						<option value="cuisine">Cuisine</option>
						<option value="chambre1">Chambre parentale</option>
						<option value="chambre2">Chambre des enfants</option>
						<option value="salle_de_bain1">Salle de bain parentale</option>
						<option value="salle_de_bain2">Salle de bain des enfants</option>
						<option value="toilettes">Toilettes des enfants</option>
					</select>
					<img src="images/interrogation.png" alt="un point d'interrogation" title="Où se situe le capteur ?" class="interrogation"/><br/><br/>

					<label for="description">Description de la localisation (facultatif) : </label><br/>
					<textarea name="description" id="description" rows="10" cols="40" placeholder="Vous pouvez ajouter un descriptif qui vous permettra de savoir où se situe le capteur précisemment dans la pièce.
Ex: Derrière le canapé"/></textarea><br/><br/>

					<input type="submit" value="Valider" class="bouton"/>
					<input type="reset" value="Effacer" class="bouton"/>			
	        	</p>
	        </form>
	    </section>

        <p class="droit">Copyright 2018 HomeMate, Tous droits réservés</p>
    </body>

</html>

