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
					$id = $_POST["delete_cust_id"];
					$sql = "DELETE FROM customer WHERE IDno=$id";
					if ($conn->query($sql) === TRUE) {
    				echo "Customer Deleted";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
		?>

	<br/>

		<?php include('goToHome.php');?>


	</body>
</html>
