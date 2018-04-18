<!DOCTYPE html>
<html>
	<header>
	  <meta charset="utf-8">
	  <title> DB Project </title>
	</header>
	<body>

		<h1>Database Project</h1>


		<a href="customerForm.php">Customer Update</a>
		<br/>
		<a href="itemForm.php">Item Update</a>
		<br/>
		<a href="orderForm.php">Create order</a>
		<br/>
		<a href="getOrderForm.php">Get Order Details</a>
		<br/>
		<a href="getPurchasedForm.php">Get Customer Purchased Details</a>
		<br/>		
		<a href="deleteCustomerForm.php">Delete Customer</a>
		<br/>
		<a href="getPriceOnDay.php">Get Item Price on specific day</a>
		<br/>
		<a href="updatePriceForm.php">Make all item on sale</a>
		<br/>
		<?php
			include('displayData.php');
			displayInfo();

			// echo "<form action="customerUpdate.php" method="post">";
	    //   echo "Name: <input type="text" name="name"><br>";
	    //   echo "E-mail: <input type="text" name="email"><br>";
	    //   echo "<input type="submit">";
	    // echo "</form>";

		?>

	</body>
</html>
