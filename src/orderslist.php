<?php
require("mysqli_connect.php");
displayVideo($conn);	
mysqli_close($conn);

	function displayVideo($conn){
		//HardCoded to diplay Results only for Cusomter whose CID is 1234
		//assuming that they are logged in 
		//QUERY customer ISBN
		//SELECT ISBN FROM mediadescription WHERE isbn = 
		//$sql = "SELECT * FROM orders Ord1, customer C1 WHERE Ord1.CID = 1234 AND C1.CID
		//= 1234";
		$query = "SELECT * FROM orders WHERE CID = 1234";
		//$subquery = 
		$res=$conn->query($query);
		if($res->num_rows > 0){
		while ($row=mysqli_fetch_assoc($res)) {
				echo "<table border=1>
				<tr>
				<th>OrderID</th>
				<th>Date</th>
				<th>CID</th>
				<th>ISBN</th>
				</tr>";
				echo "<tr>";
				echo "<td>" . $row['OrderID'] . "</td>";
				echo "<td>" . $row['Date'] . "</td>";
				echo "<td>" . $row['CID'] . "</td>";
				echo "<td>" . $row['ISBN'] . "</td>";
				//echo "<td>" . $row['Email'] . "</td>";
				//echo "<td>" . $row['PhoneNumber'] . "</td>";
				//echo "<td>" . $row['FirstName'] . "</td>";
				//echo "<td>" . $row['Middlename'] . "</td>";
				//echo "<td>" . $row['LastName'] . "</td>";
				//echo "<td>" . $row['Address'] . "</td>";
				//echo "</tr>";
				//echo "</table>";
				//echo "<br>";
		}
		mysqli_free_result($res);
	}
	}
?>
