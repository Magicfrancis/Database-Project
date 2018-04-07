<?php
    function displayInfo() {
        include('connection.php');

        $conn = getConnection();
        
        $sql = "SELECT Fname, Lname FROM person P JOIN customer C ON P.Ssn=C.Cust_Ssn;";
        $result = $conn->query($sql);

        echo 'Customers'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Fname"] . " " . $row["Lname"] . "<br>";
            }
        } else {
            echo "0 results";
        }

        $sql = "SELECT Fname, Lname FROM person P JOIN director D ON P.Ssn=D.D_Ssn;";

        $result = $conn->query($sql);
        echo "<br>";
        echo 'Directors'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Fname"] . " " . $row["Lname"] . "<br>";
            }
        } else {
            echo "0 results";
        }

        $sql = "SELECT Fname, Lname FROM person P JOIN staff S ON P.Ssn=S.S_Ssn";
        $result = $conn->query($sql);
        echo "<br>";
        echo 'Staff'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Fname"] . " " . $row["Lname"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

?>
