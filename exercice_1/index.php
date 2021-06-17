<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt.7 exercice_1</title>
  </head>
  <body>
    <?php
      echo "<p>Bonjour et bienvenue sur le serveur : " . $_SERVER['SERVER_NAME'] . "</p>" . "<p>Votre adresse IP est : " . $_SERVER['SERVER_ADDR'] . "</p>" . "<p>Voici le user-agent string : " . $_SERVER['HTTP_USER_AGENT'];
    ?>
  </body>
</html>
