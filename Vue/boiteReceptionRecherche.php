
<?php
session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
/*
$req = $bdd->query('SELECT * FROM messagerie ');
*/
	$numMessage=0;
	

// Récupération des 10 derniers messages
$req = $bdd->query('SELECT * FROM messagerie WHERE Reception = \'Kévin\' ORDER BY Date'); /*DESC LIMIT 0, 10*/
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees = $req->fetch())
{
	echo $numMessage; 
	$_SESSION['sujet'.$numMessage] = $donnees['Sujet'];
	$_SESSION['expediteur'.$numMessage] = $donnees['Expediteur'];
	$_SESSION['date'.$numMessage] = $donnees['Date'];
	$numMessage++;
	
}
header('Location: boiteMail.php');
?>