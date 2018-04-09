<?php
    function insertPerson($Name, $Ssn, $PhoneNo) {
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO `person`(`Name`, `Ssn`, `PhoneNo`)
VALUES ('$Name', '$Ssn', '$PhoneNo')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }

?>
