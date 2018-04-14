<html>
	<body>
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
