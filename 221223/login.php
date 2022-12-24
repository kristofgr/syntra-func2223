<?php
  $errors = [
    "foutje",
    "niet rechtstreeks naar auth surfen aub!",
    "velden mogen niet leeg zijn",
    "username en password zijn niet juist"
  ];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Login</h1>
    <?php
    if (isset($_GET["error"])) {
      print $errors[$_GET["error"]];
    }
    ?>
    <form method="post" action="auth.php">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>  
</body>

</html>