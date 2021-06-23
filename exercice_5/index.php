<?php
if (isset($_POST['pseudo']) && isset($_POST['login'])) {
  setcookie('pseudo', $_POST['pseudo'], time()+365*24*3600, null, null, false, true);
  setcookie('login', $_POST['login'], time()+365*24*3600, null, null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt. 7 exercice_5</title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <label for="pseudo">Pseudo :</label>
      <input id="pseudo" type="text" name="pseudo" placeholder="pseudo">
      <label for="login">Login :</label>
      <input id="login" type="text" name="login" placeholder="login">
      <button type="submit" name="button">Valider</button>
    </form>
    <?php
      if (!empty($_POST['pseudo']) && !empty($_POST['login'])) {
        echo "Your pseudo is: " . $_COOKIE['pseudo'] . "<br>";
        echo "Votre login est: " . $_COOKIE['login'] . "<br>";
      } else {
        echo "Cookies are not set";
      }
    ?>
  </body>
</html>
