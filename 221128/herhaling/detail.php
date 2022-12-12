<?php
  require("data.php");
  $id = 0;
  if (!empty($_GET["id"])) {
    $id = $_GET["id"];
  }

  $movie = $movies[0];
  if (isset($movies[$id])) {
    $movie = $movies[$id];
  }


?>
<html>
  <body>
    <div>
      <img src="<?php echo $movies[$id][2]; ?>" width="100" />
    </div>
    <h1><?php echo $movie[0]; ?></h1>
    <h7>(<?php echo $movie[1]; ?>)</h7>
  </body>
</html>