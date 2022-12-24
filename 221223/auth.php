<?php
// Wordt er rechtstreeks naar auth.php gesurft?
if (!isset($_POST["username"], $_POST["password"])) {
  header("Location: login.php?error=1");
  exit;
}

// Zijn alle velden ingevuld?
if (empty($_POST["username"]) || empty($_POST["password"])) {
  header("Location: login.php?error=2");
  exit;
}

$username = $_POST["username"];
$password = $_POST["password"];

// is het de juiste login?
require("db.php");

$sql = "SELECT id, firstname 
  FROM users 
  WHERE username = '" . strtolower($username) . "' 
  AND password= MD5('" . $password . "')
  LIMIT 1";

$result = $mysqli->query($sql);
if ($result && $result->num_rows > 0) {
  // Ja, het is de juiste
  $user = $result->fetch_assoc();

  session_start();
  session_regenerate_id();
  $_SESSION["loggedin"] = TRUE;
  $_SESSION["username"] = $username;
  $_SESSION["id"] = $user["id"];
  $_SESSION["firstname"] = $user["firstname"];

  header("Location: admin.php");
  exit;
}

// Nee, login was fout
header("Location: login.php?error=3");
exit;
