<?php
	
$host = '127.0.0.1:3306';
$user = 'root';
$password = 'pleaseconnect123';
$dbName = 'shoppingcart12';
$port = 3306;

$conn = new mysqli($host,$user,$password,$dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
displayVideo($conn);

$conn->close();

function displayVideo($conn){
	$sql = "SELECT * FROM orders ,customers WHERE Ord1.CID = C1.CID";

	$result = $conn->query($sql);

	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<table border=1>
			<tr>
			<th>OrderID</th>
			<th>Date</th>
			<th>CID</th>
			</tr>";
			echo "<tr>";
			echo "<td>" . $row['OrderID'] . "</td>";
			echo "<td>" . $row['Date'] . "</td>";
			echo "<td>" . $row['Type'] . "</td>";
			echo "<td>" . $row['CID'] . "</td>";
			echo "</tr>";
			echo "</table>";
		}
	}
}



?>
