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
					$id = $_POST["item_type"];
					$day = $_POST["day"];
					$sql = "SELECT SUM(PRICE)
                  FROM ORDERS O JOIN $id I ON O.Item_ID=I.ID
                  WHERE Order_date='2018-04-14';";

          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "Sum price on $day for $id: $" . $row["SUM(PRICE)"] .  "<br>";
  				}
          } else {
              echo "0 results" . "<br>";
          }
		?>

	<br/>

		<?php include('goToHome.php');?>


	</body>
</html>
