<?php

if (isset($_POST['Email'])
    &&isset($_POST['password'])) {

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    $requete = $bdd->prepare("SELECT Email,password FROM profil WHERE Email = ? AND password = ?");
    $requete->execute(array($_POST['Email'], $_POST['password']));
    //$requete->closeCursor();
    $donnees = $requete->fetch();
    //echo $donnees['Email'].' '.$donnees['password'];
    if (isset($donnees['Email']) AND isset($donnees['password']) ) {
        header('Location:../Vue/profil.php');
    }

    else {
        header('Location:../Vue/connexionErreur.php');
    }
}
?>
