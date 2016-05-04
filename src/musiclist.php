<!DOCTYPE html>
<html>
<?php
//global variable
function handleEvent($arr){
	//create an array with all the ISBN
	//problem is when submit button is called this needs to be called
	echo 'Functioned Called';
	if(isset($_POST['submit'])){
		echo 'in button';
		
		$result = $_POST['musiclist'];//contains all that have been checked right?
		//contains 
		if(!empty($result)){
			echo 'we in';
			$count = count($result);
			foreach($_POST['musiclist'] as $selected){
				echo $selected . "<br>";
				DelQuery($selected);
			}
		}	
		/*
		$arrSize = count($arr);
		for($y = 0; $y < $arrSize; $y++){
			echo $arr[$y] . "<br>";
			DelQuery($arr[$y],$conn);
		}
		*/
	}
}

function DelQuery($ISBN){

	$host = '127.0.0.1:3306';
	$user = 'root';
	$password = 'pleaseconnect123';
	$dbName = 'shoppingcart12';
	$port = 3306;

	$conn = mysql_connect($host,$user,$password,$dbName);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$query = "DELETE FROM digitallibrary WHERE ISBN = $ISBN";
	echo $query;
	
	$result = mysql_query($query,$conn);
	
	if(!$result){
		die("Could not delete data" . mysql_error());
	}
	mysql_close($conn);
}

$host = '127.0.0.1:3306';
$user = 'root';
$password = 'pleaseconnect123';
$dbName = 'shoppingcart12';
$port = 3306;

$conn = new mysqli($host,$user,$password,$dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
handleEvent(displayVideo($conn));

$conn->close();

function displayVideo($conn){
	$sql = "SELECT * FROM mediadescription WHERE Type = 'Music'";//changed from digitalLibrary
	echo $sql;
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
			<th>ISBN</th>
			<th>Title</th>
			<th>Type</th>
			<th>Category</th>
			<th>Year</th>
			<th>Author</th>
			<th>Cost</th>
			</tr>";
			?>
			
			<input type = "checkbox" name = "musiclist[]" value = "<?php echo $row['ISBN'];?>">Add To Cart</input>
			</form>
			<?php
			echo "<tr>";
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
</html>