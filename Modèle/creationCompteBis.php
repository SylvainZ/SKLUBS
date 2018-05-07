<?php
if(!empty($_POST['nom']))
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
        $password = $_POST['password'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $Email = $_POST['Email'];



        // Je vais crypter le mot de passe.
        $password = sha1($password);
        $req = $bdd->prepare("INSERT INTO profil(nom,prenom,Email,password) VALUES(:nom,:prenom,:Email,:password)");
        $req->execute(array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'Email' => $_POST['Email'],
            'password' => $_POST['password'],
        ));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    header('Location:../Vue/profil.php');

}

?>