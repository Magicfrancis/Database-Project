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
    <h3>Place an Order</h3>
    <form action="orderUpdate.php" method="post">
      Item ID: <input type="text" name="order_id"><br>
      Customer ID: <input type="text" name="order_cust_id"><br>
      Payment Option: <input type="text" name="order_payment"><br>
      Price: <input type="text" name="order_price"><br>
      <br/>
      <!-- description: <input type="text" name="item_description"><br> -->
      <input type="submit">
    </form>
		<?php include('goToHome.php');?>


	</body>
</html>
