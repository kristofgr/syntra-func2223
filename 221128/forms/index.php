<?php
  $errors = [];
  
  if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $errors[] = "Only letters and white space allowed";
    }
  }
  if (!empty($_POST['mail'])) {
    $mail = $_POST['mail'];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid email format";
    }
  }
  print '<pre>';
  var_dump($_POST);
  print '</pre>';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nieuwsbrief formulier</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
</head>

<body>
  <div class="container">
    <h1>Nieuwsbrieven</h1>
    <?php 
      if (count($errors) > 0) {
        echo "<div class=\"alert alert-danger\" role=\"alert\"><ul>";
        foreach ($errors as $error) {
          print "<li>$error</li>";
        }
        echo "</ul></div>";
      }
    ?>
    <form method="post" action="index.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Naam</label>
        <input type="text" class="form-control <?php echo (isset($name) ? 'is-invalid ' : ''); ?>" id="exampleInputName" name="name" value="<?php echo (isset($name) ? $name : ''); ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>  
</body>

</html>