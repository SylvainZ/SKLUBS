<?php
session_start();
session_destroy();
header('Location:../Vue/pageDaccueil.php');
?>