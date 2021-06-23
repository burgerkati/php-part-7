<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pt. 7 exercice_3</title>
  </head>
  <body>
    <?php
    $_SESSION['surname'] = 'Schmidt';
    $_SESSION['name'] = 'Julia';
    $_SESSION['age'] = 45;
    $newPage = fopen('user.php', 'a+');
    fclose($newPage);
    ?>
    <a href="user.php">Link to user page</a>
  </body>
</html>
