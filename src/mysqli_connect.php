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
// else{
// 	echo "Connected to database {$dbName}";
// }

/*
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
*/
?>