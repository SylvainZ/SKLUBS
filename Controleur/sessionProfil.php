<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

try {	$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
catch(Exception $e){	die('Erreur : '.$e->getMessage());}

$req = $bdd->query('SELECT * FROM `profil` WHERE ID=\'1\''); //à modifier pour faire en fonction de l'utilisateur

$donnees = $req->fetch();

$_SESSION['nom']=$donnees['Nom'];
$_SESSION['prenom']=$donnees['Prenom'];
$_SESSION['statut']=$donnees['Statut'];
$_SESSION['numAppartement']=$donnees['NumeroAppartement'];
$_SESSION['numEtage']=$donnees['NumeroEtage'];
$_SESSION['numRue']=$donnees['NumeroRue'];
$_SESSION['numBis']=$donnees['Bis'];
$_SESSION['prefixRueBdAve']=$donnees['PrefixeRueAveBd'];
$_SESSION['nomRueBdAve']=$donnees['NomRueAveBd'];
$_SESSION['departement']=$donnees['NumeroDepartement'];
$_SESSION['ville']=$donnees['Ville'];
$_SESSION['email']=$donnees['Email'];
$_SESSION['numTel']=$donnees['NumeroTelephone'];

header('Location: ../Vue/modifierProfil.php');
?>
