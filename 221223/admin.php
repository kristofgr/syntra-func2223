<?php
  session_start();

  if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    header("Location: login.php");
    exit;
  }
?>

<h1>hallo <?= $_SESSION["firstname"] ?></h1>
<a href="logout.php">uitloggen</a>