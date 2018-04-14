<html>
	<body>
    <form action="itemUpdate.php" method="post">
      ID: <input type="text" name="item_id"><br>
      Image: <input type="text" name="item_image"><br>
      Subject: <input type="text" name="item_subject"><br>
      description: <textarea name="item_description" cols="40" rows="5"></textarea>
      <br/>
      <!-- description: <input type="text" name="item_description"><br> -->
      Name: <input type="text" name="item_name"><br>
      <input type="submit">
    </form>
		<?php include('goToHome.php');?>


	</body>
</html>
