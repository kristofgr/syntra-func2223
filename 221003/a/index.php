<?php
// Dit zijn mijn variabelen...
$voornaam = "kristof";
$achternaam = "grenson";
$getal1 = 5;
$getal2 = 7;
$getal3 = $getal1 + 1;
$getal3 = $getal3 + 1;
$getal3 += 3;
$getal3++;
$getal3 = NULL;
//$sum = $getal1 + $getal2;

function solution($str)
{
  $pairs = [];
  $chars = str_split($str);
  $pair = '';
  while (count($chars) > 0) {
    $el = array_shift($chars);
    $pair .= $el;
    if ((strlen($pair) == 1) && (count($chars) == 0)) {
      $pair .= '_';
    }
    print $pair . '<br />';
    if (strlen($pair) == 2) {
      array_push($pairs, $pair);
      $pair = '';
    }
  }
  return $pairs;
}

$solution = solution('abcdefg');
var_dump($solution);
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>
  <?php
  echo '<h2>' . ucfirst($achternaam) . '</h2>';
  echo "<h3>" . $getal3 . "</h3>";
  echo "<h1>Hallo " . $voornaam . " " . $achternaam . ",</h1>";
  echo "<h1>$getal1 + $getal2</h1>";
  echo "<h1>" . ($getal1 + $getal2) . "</h1>";
  ?>
</body>

</html>