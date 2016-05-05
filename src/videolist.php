<?php

require("mysqli_connect.php");

handleEvent(displayVideo($conn));

$conn->close();

function handleEvent($arr){
	//create an array with all the ISBN
	//problem is when submit button is called this needs to be called
	//echo 'Functioned Called';
	if(isset($_POST['submit'])){
		
		if(isset($_POST['videolist'])){
		
		$result = $_POST['videolist'];//contains all that have been checked right?
		//contains 
		if(!empty($result)){
			
			$count = count($result);
			foreach($_POST['videolist'] as $selected){
				
				DelQuery($selected);
				addToOrder($selected);
			}
			?>
			<script src = "jquery-1.12.3.min.js"></script>
			<script>
			jQuery(document).ready(function($){
			alert('Checkout succesfull');
			});
			</script>
			<?php
			
		}	
		}
		else{
			?>
			<script src = "jquery-1.12.3.min.js"></script>
			<script>
			jQuery(document).ready(function($){
			alert('Please Select an Item','Error');
			});
			</script>
			<?php
		}
	}
}
/**
*Deletes a digitalMedia from the Library using
*ISBN as a key 
**/

function DelQuery($ISBN){

	$host = '127.0.0.1:3306';
	$user = 'root';
	$password = 'pleaseconnect123';
	$dbName = 'shoppingcart12';
	$port = 3306;

	$conn = new mysqli($host,$user,$password,$dbName);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$query = "DELETE FROM digitallibrary WHERE ISBN = $ISBN";
	$result = $conn->query($query);
	$conn->close();
}
/*
*Creates an order and adds it to Orders
*
**/
function addToOrder($ISBN){
	$host = '127.0.0.1:3306';
	$user = 'root';
	$password = 'pleaseconnect123';
	$dbName = 'shoppingcart12';
	$port = 3306;

	$conn = new mysqli($host,$user,$password,$dbName);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$query = "INSERT INTO orders Values (DEFAULT,CURDATE(),1234,$ISBN)";
	$result = $conn->query($query);
	$conn->close();
}

function displayVideo($conn){
	$sql = "SELECT * 
		FROM mediadescription, digitallibrary 
		WHERE Type = 'Video' AND mediadescription.ISBN = digitallibrary.ISBN";//changed from digitalLibrary

	$result = $conn->query($sql);
	$counter = 0;
	if($result->num_rows > 0){
		?>
		<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
		<?php
		while($row = $result->fetch_assoc()){
			echo "<br>";
			echo "<table border=1>
			<tr>
			<th>UFC</th>
			<th>ISBN</th>
			<th>Title</th>
			<th>Type</th>
			<th>Category</th>
			<th>Year</th>
			<th>Author</th>
			<th>Cost</th>
			</tr>";
			?>
			
			<input type = "checkbox" name = "videolist[]" value = "<?php echo $row['UFC'];?>">Add To Cart</input>
			</form>
			<?php
			echo "<tr>";
			echo "<td>" . $row['UFC'] . "</td>";
			echo "<td>" . $row['ISBN'] . "</td>";
			global $isbnArr;
			$isbnArr[$counter] = $row['ISBN'];
			echo "<td>" . $row['Title'] . "</td>";
			echo "<td>" . $row['Type'] . "</td>";
			echo "<td>" . $row['Category'] . "</td>";
			echo "<td>" . $row['Year'] . "</td>";
			echo "<td>" . $row['Author'] . "</td>";
			echo "<td>" . $row['Cost'] . "</td>";
			echo "</tr>";
			?>
			<?php
			echo "</table>";
			++$counter;
		}
	}
	//used to be isbnArr
	//creative here this the problem
	return $isbnArr;
}



?>
