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

$sql = "SELECT id, name, jersey FROM players";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - " . $row["jersey"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
