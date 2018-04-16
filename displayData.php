<?php
    function displayInfo() {
        include('connection.php');

        $conn = getConnection();

		//ITEM
		$sql = "SELECT name, quantity, Cost FROM item GROUP BY name;";
        $result = $conn->query($sql);

        echo "<br />";
        echo "<br>". 'Item'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"] ." Quantity: " . $row["quantity"] ." Cost: $" . $row["Cost"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//BOOK
		$sql = "SELECT name, subject, quantity, Cost FROM item I JOIN book B ON I.Item_ID = B.ID GROUP BY name;";
        $result = $conn->query($sql);

        echo "<br />";
        echo "<br>". 'Book'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"] ." Subject: " . $row["subject"] ." Quantity: " . $row["quantity"] ." Cost: $" . $row["Cost"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//Periodical
		$sql = "SELECT name, subject ,quantity, Cost FROM item I JOIN periodical P ON I.Item_ID = P.ID GROUP BY name;";
        $result = $conn->query($sql);

        echo "<br />";
        echo "<br>". 'Periodical'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"] ." Subject: " . $row["subject"] ." Quantity: " . $row["quantity"] ." Cost: $" . $row["Cost"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//Movie
		$sql = "SELECT name, subject, quantity, Cost FROM item I JOIN movie M ON I.Item_ID = M.ID GROUP BY name;";
        $result = $conn->query($sql);

        echo "<br />";
        echo "<br>". 'Movie'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"] ." Subject: " . $row["subject"] ." Quantity: " . $row["quantity"] ." Cost: $" . $row["Cost"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//PERSON
        $sql = "SELECT name FROM person GROUP BY name;";
        $result = $conn->query($sql);

        echo "<br />";
        echo "<br>". 'People'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//CUSTOMER
        $sql = "SELECT Name FROM person P JOIN customer C ON P.Ssn=C.Cust_Ssn GROUP BY name;";
        $result = $conn->query($sql);

        echo "<br>". 'Customers'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//DIRECTOR
        $sql = "SELECT Name FROM person P JOIN director D ON P.Ssn=D.D_Ssn GROUP BY name;";

        $result = $conn->query($sql);
        echo "<br>";
        echo 'Directors'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] .  "<br>";
				}
        } else {
            echo "0 results" . "<br>";
        }
		//STAFF
        $sql = "SELECT Name FROM person P JOIN staff S ON P.Ssn=S.S_Ssn GROUP BY name";
        $result = $conn->query($sql);
        echo "<br>";
        echo 'Staff'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//AUTHOR
		$sql = "SELECT Name FROM person P JOIN author A ON P.Ssn=A.A_Ssn GROUP BY name";
        $result = $conn->query($sql);
        echo "<br>";
        echo 'Author'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//JOURNALIST
        $sql = "SELECT Name FROM person P JOIN journalist J ON P.Ssn=J.J_Ssn GROUP BY name";
        $result = $conn->query($sql);
        echo "<br>";
        echo 'Journalist'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }
		//PUBLISHER
        $sql = "SELECT Name FROM person P JOIN publisher Pub ON P.Ssn=Pub.P_Ssn GROUP BY name";
        $result = $conn->query($sql);
        echo "<br>";
        echo 'Publisher'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] .  "<br>";
            }

        } else {
            echo "0 results" . "<br>";
        }
        $conn->close();
    }

?>
