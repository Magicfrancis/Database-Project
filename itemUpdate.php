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
					$id = $_POST["item_id"];
					$image = $_POST["item_image"];
					$subject = $_POST["item_subject"];
					$address = $_POST["item_subject"];
					$description = $_POST["item_description"];
					$name = $_POST["item_name"];
					$sql = "INSERT INTO `item` (`Item_ID`, `Item_Image`, `Subject`, `Description`, `NAME`) VALUES ('$id', '$image', '$subject', '$description', '$name');";
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
