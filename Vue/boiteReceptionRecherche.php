
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
$req = $bdd->query('SELECT * FROM messagerie WHERE Reception = \'moi\' '); /*ORDER BY Date DESC LIMIT 0, 10*/
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees = $req->fetch())
{
	$sujet[] = $donnees['Sujet'];
	$expediteur[] = $donnees['Expediteur'];
	$date[] = $donnees['Date'];
	$message[] = $donnees['Message'];
	$reception[] = $donnees['Reception'];
	$numMessage++;
	
}
$_SESSION['sujet']=$sujet;
$_SESSION['expediteur']=$expediteur;
$_SESSION['date']=$date;
$_SESSION['message']=$message;
$_SESSION['reception']=$reception;

header('Location: boiteMail.php');
?>