<?php
session_start();
// nous pourrions créer ici les variables de session
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt. 7 exercice_2</title>
  </head>
  <body>
    <?php
    $_SESSION['island'] = 'Île d\'Oléron';
    $_SESSION['seashell'] = 'coquille';
    echo 'J\'aimerais trouver une ' . $_SESSION['seashell'] . ' de palourde sur l\'' . $_SESSION['island'] . '.';
    ?>
  </body>
</html>
