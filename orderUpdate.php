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
					$id = $_POST["order_id"];
					$c_id = $_POST["order_cust_id"];
          $date = date('Y-m-d');
					$payment = $_POST["order_payment"];
					$price = $_POST["order_price"];
					$sql = "INSERT INTO `orders` (`Item_ID`, `Cust_ID`, `Order_date`, `Payment_Option`, `Price`) VALUES ('$id', '$c_id', '$date', '$payment', '$price');";
					if ($conn->query($sql) === TRUE) {
    				echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
		?>

	<br/>

		<?php include('goToHome.php');?>


	</body>
</html>
