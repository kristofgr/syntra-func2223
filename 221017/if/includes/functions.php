<?php
date_default_timezone_set("Europe/Brussels");

function getHello($firstname, $name, $sex = "x")
{
  $hour = (int)date("H");
  $firstname = ucfirst(strtolower($firstname));
  $name = ucfirst(strtolower($name));

  // Begroeting
  $hello = "Goedenavond";
  if ($hour <= 5) {
    $hello = "Goedenacht";
  } elseif ($hour <= 10) {
    $hello = "Goedemorgen";
  } elseif ($hour <= 16) {
    $hello = "Dag";
  }

  //Title
  // $title = "";
  // if ($sex == "f") {
  //   $title = "mevrouw";
  // }
  // if ($sex == "m") {
  //   $title = "meneer";
  // }
  switch ($sex) {
    case 'f':
      $title = "mevrouw";
      break;
    case 'm':
      $title = "meneer";
      break;
    default:
      $title = "";
      break;
  }

  return "$hello $title $name,";
}
?>