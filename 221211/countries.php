<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'funcprog';
$db_port = 8889;


// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_db, $db_port);
// Check connection 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, population, squarekm FROM test_countries";
$result = $conn->query($sql);

$countries = [];
if ($result && $result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $countries[] = $row;
  }
}
$conn->close();
?>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Country</th>
          <th scope="col">Population</th>
          <th scope="col">Surface Area</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $counter = 1;
        foreach ($countries as $key => $country) {
        ?>

          <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $country['name'] ?></td>
            <td><?= number_format($country['population'], 0, ',', ' '); ?></td>
            <td><?php echo $country['squarekm'] ?></td>
          </tr>

        <?php
          $counter++;
        }
        ?>

      </tbody>
    </table>
  </div>
</body>

</html>