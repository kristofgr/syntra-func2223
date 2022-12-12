<?php
  require("data.php");
?>
<html>
  <body>
    <h1>Movies</h1>
    <ul>
      <?php 
        foreach ($movies as $key => $movie) {
          echo "<li><a href=\"detail.php?id=$key\">$movie[0]</a> ($movie[1])</li>";
        }
      ?>
    </ul>
  </body>
</html>