<!DOCTYPE html>
<html>

  <head>
        <title> Inscription : echo</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="inscription.css">

  </head>

    <body >
     <p >
      

    </p>

    <form action='inscription.Php' method="post">
      <h1>Créer un nouveau compte</h1>
      <div class="br">NOM <br/> <input type="text" name="nom">
      Prenom <input type="text" name="prenom"><div> <br/> 
      
     <div class="br"> Email <input type="Email" name="mail">
      Nouveau <input type="password" name="pwd"> 
    </div>
      <p>Êtes-vous ? :
     <input type="radio" name="CSS" value="Gestionnaire" id="Gestionnaire" checked="checked" />
     <label for="Gestionnaire" class="inline"> Gestionnaire</label>
     <br/>
     <input type="radio" name="CSS" value="Locataire" id="Locataire" />
     <label for="Locataire" class="inline">Locataire</label>
      </p>

       
      
      <input type="submit" value="Connexion" >
      <br/> 
     

    </form>

    </body>

</html>