<!DOCTYPE html>
<html>
	<header>
	  <meta charset="utf-8">
	  <title> DB Project </title>
	</header>
	<body>

		<h1>Database Project</h1>

		<form action="customerUpdate.php" method="post">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
		</form>
		
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


		?>

	</body>
</html>
