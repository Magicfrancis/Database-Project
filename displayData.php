<?php
    function displayInfo() {
        include('connection.php');

        $conn = getConnection();
        
        $sql = "SELECT Name FROM person P JOIN customer C ON P.Ssn=C.Cust_Ssn;";
        $result = $conn->query($sql);

        echo 'Customers'. "<br>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] .  "<br>";
            }
        } else {
            echo "0 results" . "<br>";
        }

        $sql = "SELECT Name FROM person P JOIN director D ON P.Ssn=D.D_Ssn;";

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

        $sql = "SELECT Name, FROM person P JOIN staff S ON P.Ssn=S.S_Ssn";
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
		
		$sql = "SELECT Name FROM person P JOIN author A ON P.Ssn=A.A_Ssn";
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

        $sql = "SELECT Name FROM person P JOIN journalist J ON P.Ssn=J.J_Ssn";
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
		
        $sql = "SELECT Name FROM person P JOIN publisher Pub ON P.Ssn=Pub.P_Ssn";
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
