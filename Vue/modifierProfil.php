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
            <input type="text" name="nom" placeholder="nom" id="champ"/>
            <input type="text" name="prenom" placeholder="prénom" id="champ"  /><br/>
            <select name="statut" id="champ">
                <option value="proprietaire">proprietaire</option>
                <option value="locataire">locataire</option>
            </select><br /><br/>
            Adresse complète:<br/>
            <input type="text" name="numAppartement" placeholder="numéro d'appartement" id="champ"/>
            <input type="text" name="numEtage" placeholder="numéro d'étage" id="champ" /><br />
            <input type="text" name="numRue" placeholder="numéro de rue" id="champ"/>
            <input type="checkbox" name="numBis" value="bis"/><label for="bis">bis</label>
            <select name="prefixRueBdAve" id="champ">
                <option value="rue">rue</option>
                <option value="bd">boulevard</option>
                <option value="ave">avenue</option>
                <option value="imp">impasse</option>
                <option value="pond">pond</option>
            </select>

            <input type="text" name="nomRueBdAve" placeholder="nom de rue, boulevard ou avenue" id="champ" /><br/>
            <input type="text" name="departement" placeholder="département" id="champ"  />
            <input type="text" name="ville" placeholder="ville" id="champ" /></span><br/><br/>
            Mail:<br/>
            <input type="text" name="email" placeholder="email" id="champ"/><br/><br/>
            Numéro de téléphone:<br/>
            <input type="text" name="numTel" placeholder="numéro de téléphone" id="champ" /><br /><br/>
            <input type="submit" value="Envoyer les modifications" class="boutonEnvoyerModification"  /><br />
            <input type="button" value="Annuler">
        </p>
    </form>

    <div/>
</body>
</html>