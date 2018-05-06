<?php
if (isset($_POST['nom'])
	&&isset($_POST['prenom'])
	&&isset($_POST['statut'])
	&&isset($_POST['numAppartement'])
	&&isset($_POST['numRue'])
	&&isset($_POST['numBis'])
	&&isset($_POST['prefixRueBdAve'])
	&&isset($_POST['nomRueBdAve'])
	&&isset($_POST['departement'])
	&&isset($_POST['ville'])
	&&isset($_POST['email'])
	&&isset($_POST['numTel'])){
	try {	$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
	catch(Exception $e){	die('Erreur : '.$e->getMessage());}

	/*INSERT INTO profil (Nom,Prenom,Statut,NumeroAppartement,NumeroEtage,NumeroRue,Bis,PrefixeRueAveBd,NomRueAveBd,NumeroDepartement,Ville,Email,NumeroTelephone) VALUES ('nom','preomn','Gérant',5,5,46,'avenue','Champs de Mars',71,'Paris','fr@fr.fr',32)*/
	$req = $bdd->prepare('INSERT INTO profil (Nom,Prenom,Statut,NumeroAppartement,NumeroEtage,NumeroRue,Bis,PrefixeRueAveBd,NomRueAveBd,NumeroDepartement,Ville,Email,NumeroTelephone) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)');
	$req->execute(array($_POST['nom'],
	$_POST['prenom'],
	$_POST['statut'],
	$_POST['numAppartement'],
	$_POST['numEtage'],
	$_POST['numRue'],
	$_POST['numBis'],
	$_POST['prefixRueBdAve'],
	$_POST['nomRueBdAve'],
	$_POST['departement'],
	$_POST['ville'],
	$_POST['email'],
	$_POST['numTel']));
	$req->closeCursor();
	echo 'vous avez bien enregistrer les modification';
}
else{
    header('Location: ../Vue/modifierProfil.php');
} ?>

