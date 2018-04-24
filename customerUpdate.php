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
					$nowFormat = date('Y-m-d H:i:s');
					$ssn = $_POST["cust_ssn"];
					$id = $_POST["cust_id"];
					$email = $_POST["cust_email"];
					$address = $_POST["cust_address"];
					$user = $_POST["cust_user"];
					$pass = $_POST["cust_pass"];
					$sql = "INSERT INTO `customer` (`Cust_Ssn`, `IDno`, `Email`, `Address`, `Created_date`, `Username`, `Password`) VALUES ('$ssn', '$id', '$email', '$address', '$nowFormat', '$user', '$pass');";
					if ($conn->query($sql) === TRUE) {
    				echo "New record created successfully!";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
		?>

	Welcome <?php echo $_POST["cust_user"]; ?><br>
	Your email address is: <?php echo $_POST["cust_email"]; ?>
	<br/>

		<?php include('goToHome.php');?>


	</body>
</html>
