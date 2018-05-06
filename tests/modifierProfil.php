/**
 * Created by IntelliJ IDEA.
 * User: Mialisoa S
 * Date: 06/05/2018
 * Time: 12:44
 */

<!DOCTYPE html>
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
    <form action="../Modèle/modifieProfil.php" method="post" enctype="multipart/form-data">
        <p>
            Nom, Prénom, Statut: <br/>
            <input type="text" name="nom" placeholder="nom"/>
            <input type="text" name="prenom" placeholder="prénom" /><br/>
            <select name="statut">
                <option value="proprietaire">proprietaire</option>
                <option value="locataire">locataire</option>
                <option value="gestionnaire">gestionnaire</option>
            </select><br /><br/>
            Adresse complète:<br/>
            <input type="text" name="numAppartement" placeholder="numéro d'appartement" />
            <input type="text" name="numEtage" placeholder="numéro d'étage"/><br />
            <input type="text" name="numRue" placeholder="numéro de rue"/>
            <input type="checkbox" name="numBis" value="bis"/><label for="bis">bis</label>
            <select name="prefixRueBdAve">
                <option value="rue">rue</option>
                <option value="bd">boulevard</option>
                <option value="ave">avenue</option>
                <option value="imp">impasse</option>
                <option value="pond">pond</option>
            </select>

            <input type="text" name="nomRueBdAve" placeholder="nom de rue, boulevard ou avenue" /><br/>
            <input type="text" name="departement" placeholder="département" />
            <input type="text" name="ville" placeholder="ville"/></span><br/>
            Mail:<br/>
            <input type="text" name="email" placeholder="email"/><br/>
            Numéro de téléphone:<br/>
            <input type="text" name="numTel" placeholder="numéro de téléphone"/><br />
            <input type="submit" value="Envoyer les modifications" class="boutonEnvoyerModification"/><br />
            <a href="profil.php" >annulé</a>
        </p>
    </form>

    <div/>
</body>
</html>