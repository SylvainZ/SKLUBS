<!DOCTYPE html>
<html>

  <head>
        <title> Locataire/Propriétaire</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_locprop.css">

  </head>

  <body >
    
    <figure>
    <img src="Images/homemate2.png">

    </figure>


    <div id="bloc">    

      <h1 class="center">Locataire/Propriétaire</h1>

      <section id="blocs">
        <div>
      <form action='Accueil.html' method="post">    
        <label for="logement">
        Numéro de logement<br>
        <input type="text" name="num_logement" placeholder="Ex : 165" size="40"> 
        </label><br>
        Adresse du bâtiment <br>
        <input type="text" size="40" name="adresse_batiment"><br/> 
        Complément d'adresse <br/>
        <input type="text" name="Complément" size="40" width="50"><br>
        </form>
        </div>

        <div id="blocs">
          <form action='Accueil.html' method="post">
          Etage<br/>
          <input type="text" name="Etage" size="40"> <br>
          Code postal <br/>
          <input type="text" name="Code postal" size="40"><br>
          Ville <br/>
          <input type="text" name="Ville" size="40" /><br>
          </form>
        </div>
      </section>
      <p class="center"> <input type="submit" value="Valider" class="Valider" size="1000">
      <br> 
    </p>

     
    </div>


  </body>

</html>