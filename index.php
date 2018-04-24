<!DOCTYPE html>
<html>
	<header>
	  <meta charset="utf-8">
	  <title> DB Project </title>
	</header>
	<body>

		<h1>Database Project</h1>


		<a href="customerForm.php">New Customer</a>
		<br/>
		<a href="itemForm.php">New Item</a>
		<br/>
		<a href="orderForm.php">Place an Order</a>
		<br/>
		<a href="getOrderForm.php">Retrieve Order Details</a>
		<br/>
		<a href="getPurchasedForm.php">Retrieve Customer Purchased Details</a>
		<br/>		
		<a href="deleteCustomerForm.php">Delete a Customer</a>
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
