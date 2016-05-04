<?php
	$host = '127.0.0.1:3306';
	$user = 'root';
	$password = 'pleaseconnect123';
	$dbName = 'shoppingcart12';
	$port = 3306;
	$conn = new mysqli($host, $user, $password, $dbName);
	if($conn->connect_error){
			die("Connection Failed! " . mysqli_connect_error());
	}
	else{
	//	echo "Connected to database {$dbName}";
	}
	displayVideo($conn);	
	mysqli_close($conn);

	function displayVideo($conn){
		$sql="SELECT * FROM orders, customer ";
		$res=$conn->query($sql);
		if($res->num_rows > 0){
		while ($row=mysqli_fetch_assoc($res)) {
				echo "<table border=1>
				<tr>
				<th>OrderID</th>
				<th>Date</th>
				<th>CID</th>
				<th>Email</th>
				<th>PhoneNumber</th>
				<th>FirstName</th>
				<th>Middlename</th>
				<th>LastName</th>
				<th>Address</th>
				</tr>";
				echo "<tr>";
				echo "<td>" . $row['OrderID'] . "</td>";
				echo "<td>" . $row['Date'] . "</td>";
				echo "<td>" . $row['CID'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "<td>" . $row['PhoneNumber'] . "</td>";
				echo "<td>" . $row['FirstName'] . "</td>";
				echo "<td>" . $row['Middlename'] . "</td>";
				echo "<td>" . $row['LastName'] . "</td>";
				echo "<td>" . $row['Address'] . "</td>";
				echo "</tr>";
				echo "</table>";
				echo "<br>";
		}
		mysqli_free_result($res);
	}
	}
?>
