<?php
<?php
    
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    header('Location:../Vue/connexionErreur.php');
}
session_start();
        $_SESSION['user'] = $username;
        header('Location:../Vue/profil.php');

/*$username = "USER";

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

}*/

?>
