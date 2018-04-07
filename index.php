<!DOCTYPE html>
<html>
<header>
  <meta charset="utf-8">
  <title> DB Project </title>
</header>
<body>

<h1>Database Project</h1>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "root", "company");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fname, lname FROM employee";
$result = $conn->query($sql);

echo 'Customers'. "<br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
