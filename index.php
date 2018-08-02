<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4/5</title>
  </head>
  <body>
    <p>
      <?php
        //Création du tableau $months
        $months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        //Modification de l'index 7
        $months[7] = 'août';
        //Affichage de l'index 7
        echo $months[7];
      ?>
    </p>
  </body>
</html>
