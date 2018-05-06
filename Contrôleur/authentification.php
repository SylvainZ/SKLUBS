<?php
$username = "USER";

$password = "PASS";

if( isset($_POST['username']) && isset($_POST['password']) ){

    if($_POST['username'] == $username && $_POST['password'] == $password){ // Si les infos correspondent...

        session_start();

        $_SESSION['user'] = $username;
        header('Location:../Vue/profil.php');

    }

    else{ // Sinon

        header('Location:../Vue/connexionErreur.php');

    }

}

?>