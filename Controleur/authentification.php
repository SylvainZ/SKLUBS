<?php
session_start();

if (isset($_POST['username'])
    &&isset($_POST['password'])) {

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    /*$mailConnect = htmlspecialchars($_POST['Email']);
    $mdpConnect = sha1($_POST['password']);*/


    $requete = $bdd->prepare("SELECT Email,password FROM profil WHERE Email = ? AND password = ?");
    $requete->execute(array($_POST['username'], $_POST['password']));
    while ($donnees = $requete->fetch()){
        if (isset($donnees['Email'])&& isset($donnees['password'])) {
            /*$userInfo = $donnees->fetch();
            $_SESSION['id'] = $userInfo['id'];
            $_SESSION['Email']=$userInfo['Email'];
            header('Location:../Vue/profil.php'.$_SESSION['id']);*/

            echo "success";
        }

        else {
            echo "failed";
        }
    }

    $requete->closeCursor();

}


/*if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $mdp = $_POST['mdp'];

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($username)){
        echo "<span>Completez les champs vides </span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($username, FILTER_VALIDATE_EMAIL)){
        echo "<span>Cet email n'est pas valide!</span>";
        $errorEmail = true;
    }
    else{
        echo "<span>Completez les champs vides!</span>\"";
    }
}

else{
    echo "Il y a une erreur";
}
?>

<script>
    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    if (errorEmpty == true){
        $("#username").addClass("input-error")
    }
</script>*/
?>
