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
					$sale = $_POST["sale"];
					$calculate = (100 - $sale)/100;

					$sql = "UPDATE item I SET I.Cost = (I.Cost * $calculate);";
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
