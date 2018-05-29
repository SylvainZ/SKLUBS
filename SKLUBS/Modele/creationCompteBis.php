<?php
session_start();

if(isset($_POST['nom']))
{   
    try
    {
        
        $_SESSION['Email'] = $_POST['Email'];
        
        
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        $password = sha1($_POST['password']);
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $Email = $_POST['Email'];



        
        $req = $bdd->prepare("INSERT INTO profil(nom,prenom,Email,password) VALUES(:nom,:prenom,:Email,:password)");
        $req->execute(array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'Email' => $_POST['Email'],
            'password' => $password,
        ));
        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    header('Location:../Vue/locataireProprietaire.php');

}
else
    
    header('Location:../Vue/creerUnCompte.php');
?>