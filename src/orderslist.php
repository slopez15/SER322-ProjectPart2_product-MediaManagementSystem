<?php
	$host = '127.0.0.1:3306';
	$user = 'root';
	$password = 'pleaseconnect123';
	$dbName = 'shoppingcart12';
	$port = 3306;
	$conn=mysqli_connect($host, $user, $password, $dbName);
	if(mysqli_connect_errno()){
			die("Connection Failed! " . mysqli_connect_error());
	}
	else{
	//	echo "Connected to database {$dbName}";
	}
	displayVideo($conn);	
	mysqli_close($conn);

	function displayVideo($conn){
		$sql="SELECT * FROM orders, customer";
		$res=mysqli_query($conn,$sql);
		if(!$res){
			die("Query Failed!");
		}
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
?>
