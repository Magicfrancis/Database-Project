<?php
    function insertData() {
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `person`(`Ssn`, `Fname`, `Lname`, `PhoneNo`)
VALUES ('TEST', 'TEST', 'TEST', 'TEST')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }

?>
