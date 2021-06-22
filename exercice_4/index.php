<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt. 7 exercice_4</title>
  </head>
<!-- Créez un formulaire demandant un nom d'utilsateur et un mot de passe.
Au clic sur le bouton "envoyer", affichez le pseudo et mot de passe sur une autre page. -->
  <body>
    <form class="" action="login.php" method="post">
      <label for="userName">Nom d'utilisateur :</label>
      <input id="userName" type="text" name="userName" placeholder="Nom d'utilisateur">
      <label for="password">Password :</label>
      <input id="password" type="password" name="password" placeholder="Mot de passe">
      <button type="submit" name="button">Valider</button>
    </form>

  </body>
</html>
