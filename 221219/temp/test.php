<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'functioneelprogrammeren';
$db_port = 8889;

$mysqli = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db,
  $db_port
);

if ($mysqli->connect_error) {
  echo 'Errno: ' . $mysqli->connect_errno;
  echo '<br>';
  echo 'Error: ' . $mysqli->connect_error;
  exit();
}

if (!empty($_GET['markdone'])) {
  $sql = "UPDATE todos SET completed_at = NOW() WHERE id=" . $_GET['markdone'];
  $mysqli->query($sql);
}


if (!empty($_POST['newtask'])) {
  var_dump($_POST);
  print $sql = "INSERT INTO todos(task) VALUES ('" . $_POST["newtask"] . "')";
  $mysqli->query($sql);
}



$sql = "SELECT id, task, created_at, completed_at FROM todos";
$result = $mysqli->query($sql);
$todos = $result->fetch_all(MYSQLI_ASSOC);

$mysqli->close();
?>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #7e40f6;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right,
          rgba(126, 64, 246, 1),
          rgba(80, 139, 252, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right,
          rgba(126, 64, 246, 1),
          rgba(80, 139, 252, 1));
    }

    .mask-custom {
      background: rgba(24, 24, 16, 0.2);
      border-radius: 2em 2em 0 0;
      backdrop-filter: blur(25px);
      background-clip: padding-box;
      box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }

    .mask-custom-2 {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 0 0 2em 2em;
      backdrop-filter: blur(25px);
      background-clip: padding-box;
      box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }
  </style>
</head>

<body>

  <section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-10">

          <div class="card mask-custom">
            <div class="card-body p-4 text-white">

              <div class="text-center pt-3 pb-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Check" width="60">
                <h2 class="my-4">Task List</h2>
              </div>

              <table class="table text-white mb-0">
                <thead>
                  <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Datum</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($todos as $todo) { ?>

                    <tr class="fw-normal">
                      <td class="align-middle">
                        <span><?= $todo["task"] ?></span>
                      </td>
                      <td class="align-middle">
                        <span><?= date('j M. Y', strtotime($todo["created_at"])) ?></span>
                      </td>
                      <td class="align-middle">
                        <?php if ($todo["completed_at"] > 0) { ?>
                          <span><?= "Completed " . date('j M. Y', strtotime($todo["created_at"])) ?></span>
                        <?php } else { ?>
                          <a href="?markdone=<?= $todo["id"] ?>">
                            <button type="button" class="btn btn-warning">Mark as done</button>
                          </a>
                        <?php } ?>

                      </td>
                    </tr>

                  <?php } ?>

                </tbody>
              </table>


            </div>
          </div>


          <div class="card mask-custom-2">
            <div class="card-body p-4 text-white">
              <div class="text-center pt-3 pb-2">
                <form method="post" action="index.php">
                  <div class="mb-3">
                    <input type="text" class="form-control" id="newtask" name="newtask" value="" placeholder="Add new task">
                    
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</body>

</html>