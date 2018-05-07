<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="miseEnPageProfil.css" />
    <title>Modifier votre profil</title>
</head>

<body>
<br />
<img src="images/logo.png" class="logo" alt="image du logo" href="pageDAccueil.php"/>

<img src="images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" href="pageDAccueil.php"/> <span class="profil">Profil</span>

<img src="images/iconeDeconnection.png" class="boutonDeconnection" alt="bouton de déconnection" href="pageDAccueil.php"/>

<div class="rectangle">
    <form action="../Modele/modifieProfil.php" method="post" enctype="multipart/form-data">
        <p>
            Nom, Prénom, Statut: <br/>
            <input type="text" name="nom" placeholder="nom" value= <?php echo $_SESSION['nom'];?> />
            <input type="text" name="prenom" placeholder="prénom" value= <?php echo $_SESSION['prenom'];?> /><br/>
			<?php //valeur par défaut ?>
            <select name="statut">
                <option value="proprietaire">proprietaire</option>
                <option value="locataire">locataire</option>
                <option value="gestionnaire">gestionnaire</option>
            </select><br /><br/>
            Adresse complète:<br/>
            <input type="text" name="numLogement" placeholder="numéro d'appartement" value=<?php echo $_SESSION['numLogement'];?> />
            <input type="text" name="numEtage" placeholder="numéro d'étage" value= <?php echo $_SESSION['numEtage'];?> /><br />
            <input type="text" name="numRue" placeholder="numéro de rue" value=<?php echo $_SESSION['numRue'];?> />
            <input type="checkbox" name="numBis" value="bis"/><label for="bis">bis</label>
            <select name="prefixeRueBdAve">
                <option value="rue">rue</option>
                <option value="bd">boulevard</option>
                <option value="ave">avenue</option>
                <option value="imp">impasse</option>
                <option value="pond">pond</option>
            </select>

            <input type="text" name="nomRueBdAve" placeholder="nom de rue, boulevard ou avenue"  value=<?php echo $_SESSION['nomRueBdAve'];?> /><br/>
            <input type="text" name="codePostal" placeholder="département"  value=<?php echo $_SESSION['codePostal'];?> />
            <input type="text" name="ville" placeholder="ville" value=<?php echo $_SESSION['ville'];?> /></span><br/>
            Mail:<br/>
            <input type="text" name="email" placeholder="email" value=<?php echo $_SESSION['email'];?> /><br/>
            Numéro de téléphone:<br/>
            <input type="text" name="numTel" placeholder="numéro de téléphone" value=<?php echo $_SESSION['numTel'];?> /><br />
            <input type="submit" value="Envoyer les modifications" class="boutonEnvoyerModification"/><br />
            <a href="profil.php" >annuler</a>
        </p>
    </form>

    <div/>
</body>
</html>