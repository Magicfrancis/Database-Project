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
		<?php
			include('displayData.php');
			displayInfo();
			include ('insertPerson.php');
			//insertItem("t", "test.png", "subject", "description", "test");
			//insertCustomer("CFrancis", "972-878-4825", "testSSN", "email@email.com", "Address", "Username", "Password");
			//insertAuthor("AFrancis", "972-123-1225", "test2SSN");
			//insertDirector("DFrancis", "872-123-1225", "test3SSN");
			//insertJournalist("JFrancis", "872-133-1225", "test4SSN");
			//insertStaff("SFrancis", "072-133-1225", "test4SSN");

			// echo "<form action="customerUpdate.php" method="post">";
	    //   echo "Name: <input type="text" name="name"><br>";
	    //   echo "E-mail: <input type="text" name="email"><br>";
	    //   echo "<input type="submit">";
	    // echo "</form>";

		?>

	</body>
</html>
