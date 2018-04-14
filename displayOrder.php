<html>
	<body>
		<?php //post data
			include('connection.php');
			$conn = getConnection();

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
					$id = $_POST["get_order_id"];
					$sql = "SELECT *
					FROM orders O JOIN item I ON O.Item_ID=I.Item_ID JOIN customer C ON O.Cust_ID=C.IDno
					WHERE Order_ID=$id;";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
	            // output data of each row
	            while($row = $result->fetch_assoc()) {
	                echo "Customer: " . $row["Username"] .  "<br>";
									echo "Name: " . $row["NAME"] . "<br />";
									echo "Subject " . $row["Subject"] . "<br />";
									echo "Payment Option: " . $row["Payment_Option"] . "<br />";
									echo "Price: " . $row["Price"] . "<br />";
	            }
	        } else {
	            echo "0 results" . "<br>";
	        }
		?>

	<br/>

		<?php include('goToHome.php');?>
<!-- orders_ibfk_1 -->
<!-- ALTER TABLE orders DROP PRIMARY KEY, ADD Order_ID INT(9) NOT NULL AUTO_INCREMENT PRIMARY KEY; -->
	</body>
</html>
