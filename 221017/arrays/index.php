<?php
// $txt = "dit is een tekst";
// $num = 123;
// var_dump($txt);
// echo "<br />";
// var_dump($num);

// $fruits = ["kiwi", "appel", "banaan"];
// $fruits[3] = "mango";
// $fruits[1] = "peer";
// $fruits[4] = 5;

$kristof = ["kristof", "grenson", "m"];
$evelien = ["Evelien", "Hofmans", "f"];
$david = ["David", "Verhulst", "m"];
$karim = ["Karim", "Dehbi", "m"];

$users = [$kristof, $evelien, $david];
$users[300] = $karim;
$users = array_values($users);

// echo "<pre>";
// print_r($users);
// echo "</pre>";

// for ($i=0; $i < count($fruits); $i++) { 
//   echo $fruits[$i];
//   echo "<br />";
// }

// foreach ($fruits as $key => $value) {
//   echo "$value ($key)";
//   echo "<br />";
// }

?>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Voornaam</th>
        <th scope="col">Naam</th>
        <th scope="col">Geslacht</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $counter = 1;
      foreach ($users as $key => $person) {
        ?>

        <tr>
          <td><?php echo $counter; ?></td>
          <td><?php echo $person[0] ?></td>
          <td><?php echo $person[1] ?></td>
          <td><?php echo $person[2] ?></td>
        </tr>

        <?php
        $counter++;
      }
      ?>

      <?php 
        for ($i=0; $i < count($users); $i++) { 
          ?>
          
            <tr>
              <td><?php echo $i+1; ?></td>
              <td><?php echo $users[$i][0]; ?> </td>
              <td><?php echo $users[$i][1]; ?> </td>
              <td><?php echo $users[$i][2]; ?> </td>
            </tr>
          
          <?php
        }
      ?>



    </tbody>
  </table>
</body>

</html>