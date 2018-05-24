
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Message</title>
	    <link rel="stylesheet" href="miseEnPageMessage.css" />
    </head>
	
	 <body >
			<img class="imageLettre" src="images/lettre.png" alt="image logo">
			<img class="logo" src="images/logo_nouvo.png" alt="image logo">
			<h2>Message</h2>
			<div class="case">	
				<div class="positionColonne">		
					<div class="zoneExpediteur">
					
						<span class="margeGauche">De : 
						<?php
						echo $_SESSION['expediteur'][$_GET['message']];
						?>
						</span>
					</div>
					
					<div class="zoneDate">
						<span class="margeGauche">Date:
	<?php
	echo $_SESSION['date'][$_GET['message']];
	?> </span>
					</div>
				</div>
				
				<div class="zoneReception">
					<span class="margeGauche">à :
	<?php
	echo $_SESSION['reception'][$_GET['message']];
	?></span>
				</div>
				<br/>
				<div class="zoneMessage">
					<p>
					<?php
	echo $_SESSION['message'][$_GET['message']];
	?>
					</p>
				</div>
				
			</div>
			<br/>
		<footer>
				<p>Copyright 2018 HomeMate | Tous droits réservés</p>
		</footer>
	 <br/>
	 </body>

</html>
