<?php
session_start();
?>
<?php
  if (isset($_POST['userName']) && isset($_POST['password'])) {
    $_SESSION['userName'] = $_POST['userName'];
    $_SESSION['password'] = $_POST['password'];
  }
echo 'Your username is: ' . $_SESSION['userName'] . ' and your password is: ' . $_SESSION['password'];
?>
