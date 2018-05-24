
<?php
session_start();
?>
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
		    		<div class="liste"><a href='boiteReceptionRecherche.php'>Liste des messages</a></div><br/>
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
					
<?php
					/*Partie qui affiche les messages stockés dans la session ouverte*/
					

						echo '<form action="pageMessage.php" method="post" >';
						
						for ($i = 1; $i <= 10; $i++){
							if (isset($_SESSION['sujet'][$i])&& isset($_SESSION['expediteur'][$i])&&isset($_SESSION['date'][$i])){
								echo '<div class="message">';
									echo '<input type="checkbox" name="message" id="message"/>
									<a href="pageMessage.php/?message='.$i.'">
									<div class="messageIndividuel">'.$_SESSION['sujet'][$i].'</div>
									<div class="messageIndividuel">'.$_SESSION['expediteur'][$i].'</div>
									<div class="messageIndividuel">'.$_SESSION['date'][$i].'</div>
									</a>';
								echo '</div>';
							}
						}
					
						
						echo '</form>';

?>
					



		    			<!-- commentaire : changer de page -->
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
