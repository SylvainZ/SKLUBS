<?php
session_start();

if(!empty($_POST['dateDeNaissance']&&!empty($_POST['tel'])&&!empty($_POST['statut'])&&!empty($_POST['numLogement'])&&!empty($_POST['numEtage'])
    &&!empty($_POST['numRue'])&&!empty($_POST['prefixRueBdAve'])&&!empty($_POST['nomRoute'])&&!empty($_POST['postal'])
    &&!empty($_POST['Ville'])&&!empty($_POST['pays'])
    &&!empty($_POST['typedHab'])&&!empty($_POST['surface'])&&!empty($_POST['pièce'])))
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }




    $req = $bdd->prepare("UPDATE profil SET Datedenaissance = ?,NumeroTelephone = ?,Statut = ?,NumeroLogement = ?,
                            NumeroEtage = ?,NumeroRue = ?,Bis = ?,PrefixRue = ?,NomRueAveBd = ?, CodePostal = ?, Ville = ?, Pays = ?, TypeHab = ?,surface = ?,Pieces = ? 
                            WHERE Email = ?");
    $req->execute(array(
        $_POST['dateDeNaissance'],
        $_POST['tel'],
        $_POST['statut'],
        $_POST['numLogement'],
        $_POST['numEtage'],
        $_POST['numRue'],
        $_POST['numBis'],
        $_POST['prefixRueBdAve'],
        $_POST['nomRoute'],
        $_POST['postal'],
        $_POST['ville'],
        $_POST['pays'],
        $_POST['typedHab'],
        $_POST['surface'],
        $_POST['pièce'],
        $_SESSION['Email']

    ));

    echo $_SESSION['Email'];


    header('Location:../Vue/profil.php');
}
else
{
    header('Location:../Vue/locataireProprietaire.php');
}
?>