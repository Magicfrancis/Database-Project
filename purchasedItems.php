<?php
    function purchasedItems() {
        $conn = mysqli_connect("localhost", "root", "root", "project");

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

        $sql = "SELECT Cust_ID, Item_Image FROM orders O join customer C on O.Cust_ID=C.Cust_ID";
        $result = $conn->query($sql);

        echo 'Purchased Items'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Customer ID: " . $row["Cust_ID"] . "<br>";
                echo "Purchased Items: " . $row["Item_Image"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

?>
