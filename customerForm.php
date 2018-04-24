<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</html>



<html>
	<body>
  <h3>New Customer Form</h3>
    <form action="customerUpdate.php" method="post">
      Customer SSN: <input type="text" name="cust_ssn"><br>
      ID: <input type="text" name="cust_id"><br>
      E-mail: <input type="text" name="cust_email"><br>
      Address: <input type="text" name="cust_address"><br>
      Username: <input type="text" name="cust_user"><br>
      Password: <input type="text" name="cust_pass"><br>
      <input type="submit">
    </form>
		<?php //form info

		 ?>
		<?php include('goToHome.php');?>


	</body>
</html>



