
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Boîte de réception</title>
        <link rel="stylesheet" href="styleBoiteMail.css" />
    </head>

    <body>
    	<img src="images/homemate2.png" alt="logo HomeMate" id="logo"/>

    	<h1>Bienvenue sur votre boîte de réception !</h1>

    	<div class="listeMessage">
	    	<section class="menu">
	    		<p>
		    		<input type="button" value="Nouveau message" class="nouveau"/>
		    		<div class="liste">Liste des messages</div><br/>
		    		<div><a href="corbeille.php" class="corbeille">Corbeille</a></div>
	    		</p>
	    	</section>

	    	<section class="rectangle">
	    		<div class="debut">
		    		<h2>Liste des messages</h2>
		    		<section class="option">
	    				<label for="selection">Pour la sélection : </label>
	    				<select name="selection" id="selection">
	    					<option value="lu">Marquer comme lus</option>
	    					<option value="non_lu">Marquer comme non lus</option>
	    					<option value="supprimer">Supprimer</option>
	    				</select><br/>    		
	    			</section>
	    		</div>
	    		<p> 
	    			<!--<label for="tout">Tout sélectionner</label>-->
	    			<div class="en_tete">
	    				<input type="checkbox" name="tout" id="tout" title="Tout sélectionner"/>

	    				<span>Sujet</span>
	    				<span>Expéditeur</span>
	    				<span>Date</span>
	    			</div>

	    			<div class="rectanglebis">
	    				<div class="message1">
	    					<input type="checkbox" name="message1" id="message1"/>
			    			<label for="message1">Message 1</label>
			    			<label for="message1">Léon</label>
			    			<label for="message1">10/05/2018</label>
			    		</div>

			    		<div class="message2">
			    			<input type="checkbox" name="message2" id="message2"/>
			    			<label for="message2">Message 2</label>
			    			<label for="message2">Kévin</label>
			    			<label for="message2">02/05/2018</label>
			    		</div>

			    		<div class="message3">
			    			<input type="checkbox" name="message3" id="message3"/>
			    			<label for="message3">Message 3</label>
			    			<label for="message3">Sylvain</label>
			    			<label for="message3">15/04/2018</label>
			    		</div><br/>

		    			<!--<div class="sujet">
			    			<input type="checkbox" name="message1" id="message1"/>
			    			<label for="message1">Message 1</label><br/>

			    			<input type="checkbox" name="message2" id="message2"/>
			    			<label for="message2">Message 2</label><br/>

			    			<input type="checkbox" name="message3" id="message3"/>
			    			<label for="message3">Message 3</label><br/>		
		    			</div>

		    			<div class="expediteur">
		    				<label for="message1">Léon</label><br/>
		    				<label for="message2">Kévin</label><br/>
		    				<label for="message3">Sylvain</label>
		    			</div>

		    			<div class="date">
		    				<label for="message1">10/05/2018</label><br/>
		    				<label for="message2">02/05/2018</label><br/>
		    				<label for="message3">15/04/2018</label>
		    			</div> -->
		    			<div class="page">Pages: 1</div>
	    			</div>

	    			
	    		</p>
	    	</section>
	    </div>




    	<footer>
    		<p class="droit">Copyright 2018 HomeMate, Tous droits réservés</p>
    	</footer>
    </body>
</html>
