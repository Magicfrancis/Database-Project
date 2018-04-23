<?php
    function displayInfo() {
        include('connection.php');

        $conn = getConnection();

		//ITEM
		$sql = "SELECT name, item_ID, subject, description, quantity, Cost FROM item GROUP BY name;";
        $result = $conn->query($sql);
?>
		<html>
		<body>
		<h1>Item</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>ItemID</th>
		<th>Subject</th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Cost</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['item_ID'] . "</td>";
			echo "<td>" . $row['subject'] . "</td>";
			echo "<td>" . $row['description'] . "</td>";
			echo "<td>" . $row['quantity'] . "</td>";
			echo "<td>" . "$" . $row['Cost'] . "</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//BOOK
		$sql = "SELECT name, item_ID, subject, description, quantity, Cost FROM item I JOIN book B ON I.Item_ID = B.ID GROUP BY name;";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Book</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>ItemID</th>
		<th>Subject</th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Cost</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['item_ID'] . "</td>";
			echo "<td>" . $row['subject'] . "</td>";
			echo "<td>" . $row['description'] . "</td>";
			echo "<td>" . $row['quantity'] . "</td>";
			echo "<td>" . "$" . $row['Cost'] . "</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//Periodical
		$sql = "SELECT name, item_ID, subject, description, quantity, Cost FROM item I JOIN periodical P ON I.Item_ID = P.ID GROUP BY name;";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Periodical</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>ItemID</th>
		<th>Subject</th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Cost</th>		
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['item_ID'] . "</td>";
			echo "<td>" . $row['subject'] . "</td>";
			echo "<td>" . $row['description'] . "</td>";
			echo "<td>" . $row['quantity'] . "</td>";
			echo "<td>" . "$" . $row['Cost'] . "</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//Movie
		$sql = "SELECT name, item_ID, subject, description, quantity, Cost FROM item I JOIN movie M ON I.Item_ID = M.ID GROUP BY name;";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Movie</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>ItemID</th>
		<th>Subject</th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Cost</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['item_ID'] . "</td>";
			echo "<td>" . $row['subject'] . "</td>";
			echo "<td>" . $row['description'] . "</td>";
			echo "<td>" . $row['quantity'] . "</td>";
			echo "<td>" . "$" . $row['Cost'] . "</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//PERSON
        $sql = "SELECT name, Ssn, PhoneNo FROM person GROUP BY name;";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Person</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>SSN</th>
		<th>PhoneNo</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['Ssn'] ."</td>";
			echo "<td>" . $row['PhoneNo'] ."</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//CUSTOMER
        $sql = "SELECT name, IDno, Ssn, PhoneNo, email, address, Created_date, username, password FROM person P JOIN customer C ON P.Ssn=C.Cust_Ssn GROUP BY name;";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Customer</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>CustomerID</th>
		<th>SSN</th>
		<th>PhoneNo</th>
		<th>Email</th>
		<th>Address</th>
		<th>CreatedDate</th>
		<th>Username</th>
		<th>Password</th>		
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['IDno'] ."</td>";
			echo "<td>" . $row['Ssn'] ."</td>";
			echo "<td>" . $row['PhoneNo'] ."</td>";
			echo "<td>" . $row['email'] ."</td>";
			echo "<td>" . $row['address'] ."</td>";
			echo "<td>" . $row['Created_date'] ."</td>";
			echo "<td>" . $row['username'] ."</td>";
			echo "<td>" . $row['password'] ."</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//DIRECTOR
        $sql = "SELECT name, Ssn, PhoneNo FROM person P JOIN director D ON P.Ssn=D.D_Ssn GROUP BY name";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Director</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>SSN</th>
		<th>PhoneNo</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['Ssn'] ."</td>";
			echo "<td>" . $row['PhoneNo'] ."</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//STAFF
        $sql = "SELECT name, Ssn, PhoneNo FROM person P JOIN staff S ON P.Ssn=S.S_Ssn GROUP BY name";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Staff</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>SSN</th>
		<th>PhoneNo</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['Ssn'] ."</td>";
			echo "<td>" . $row['PhoneNo'] ."</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//AUTHOR
		$sql = "SELECT name, Ssn, PhoneNo FROM person P JOIN author A ON P.Ssn=A.A_Ssn GROUP BY name";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Author</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>SSN</th>
		<th>PhoneNo</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['Ssn'] ."</td>";
			echo "<td>" . $row['PhoneNo'] ."</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//JOURNALIST
        $sql = "SELECT name, Ssn, PhoneNo FROM person P JOIN journalist J ON P.Ssn=J.J_Ssn GROUP BY name";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Journalist</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>SSN</th>
		<th>PhoneNo</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['Ssn'] ."</td>";
			echo "<td>" . $row['PhoneNo'] ."</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php
        } else {
            echo "0 results" . "<br>";
        }
		//PUBLISHER
        $sql = "SELECT name, p_id, Ssn, PhoneNo FROM person P JOIN publisher Pub ON P.Ssn=Pub.P_Ssn GROUP BY name";
        $result = $conn->query($sql);
		?>
		<html>
		<body>
		<h1>Publisher</h1>
		<hr>
		<table border = '2'>
		<tr>
		<th>Name</th>
		<th>PubID</th>
		<th>SSN</th>
		<th>PhoneNo</th>
		</tr>
		<?php		
        if ($result->num_rows > 0) {
		// output data of each row

			while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row['name'] ."</td>";
			echo "<td>" . $row['p_id'] ."</td>";
			echo "<td>" . $row['Ssn'] ."</td>";
			echo "<td>" . $row['PhoneNo'] ."</td>";
			echo "</tr>";
            }
		?>
		</table>
		</body>
		</html>
		<?php

        } else {
            echo "0 results" . "<br>";
        }
        $conn->close();
    }	
?>
