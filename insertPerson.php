<?php
    function insertPerson($Name, $Ssn, $PhoneNo) {
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO person(Name, Ssn, PhoneNo)
VALUES ('$Name', '$Ssn', '$PhoneNo')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New Person record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }
	
    function insertCustomer($Name, $PhoneNo, $Cust_Ssn, $Email, $Address, $Username, $Password) {
		insertPerson($Name,$Cust_Ssn, $PhoneNo);
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO customer(Cust_Ssn, Email, Address, Username, Password)
VALUES ('$Cust_Ssn', '$Email', '$Address', '$Username', '$Password')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New Customer record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }	

	function insertAuthor($Name, $PhoneNo, $A_Ssn) {
		insertPerson($Name,$A_Ssn, $PhoneNo);
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO author(A_Ssn)
VALUES ('$A_Ssn')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New Author record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }	

function insertDirector($Name, $PhoneNo, $D_Ssn) {
		insertPerson($Name,$D_Ssn, $PhoneNo);
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO director(D_Ssn)
VALUES ('$D_Ssn')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New Director record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }
	
	function insertJournalist($Name, $PhoneNo, $J_Ssn) {
		insertPerson($Name,$J_Ssn, $PhoneNo);
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO journalist(J_Ssn)
VALUES ('$J_Ssn')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New Journalist record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }	
	
	function insertStaff($Name, $PhoneNo, $S_Ssn) {
		insertPerson($Name,$S_Ssn, $PhoneNo);
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO staff(S_Ssn)
VALUES ('$S_Ssn')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New Staff record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }	
	
    function insertItem($ID, $Item_Image, $Subject, $Description, $NAME) {
        $conn = mysqli_connect("localhost", "root", "root", "project");

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL code
$sql = "INSERT INTO item(Item_ID, Item_Image, Subject, Description, NAME)
VALUES ('$ID', '$Item_Image', '$Subject', '$Description', '$NAME')";

//success or error check 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        $conn->close();
    }

?>
