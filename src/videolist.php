<?php
require("mysqli_connect.php");

displayVideo($conn);

$conn->close();

function displayVideo($conn){
	$sql = "SELECT * FROM mediadescription WHERE Type = 'Video'";//changed from digitalLibrary

	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<table border=1>
			<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Type</th>
			<th>Category</th>
			<th>Year</th>
			<th>Author</th>
			<th>Cost</th>
			</tr>";
			echo "<tr>";
			echo "<td>" . $row['ISBN'] . "</td>";
			echo "<td>" . $row['Title'] . "</td>";
			echo "<td>" . $row['Type'] . "</td>";
			echo "<td>" . $row['Category'] . "</td>";
			echo "<td>" . $row['Year'] . "</td>";
			echo "<td>" . $row['Author'] . "</td>";
			echo "<td>" . $row['Cost'] . "</td>";
			echo "</tr>";
			echo "</table>";
		}
	}
}



?>
