<?php 
require_once("mysqli_connect.php");

if(isset($_POST['sign_in']))
{
//check if login info exists in loginInfo table, else print "not in database, added you to database using entered email and password"
  $str=$_POST['sign_in'];
  echo $str;  
  //email
  if (empty($POST['inputEmail'])){
  		echo "email missing<br/>";
  		$data_missing[] = 'Email';
  }
  else {
  	echo "got email<br/>";
	$stre=trim($_POST['email']);
	echo $stre;  
  }
  //email
  if (empty($POST['password'])){
  	$data_missing[] = 'Password';
  }
  else {
	$strp=trim($_POST['password']);
	echo $strp;  
  }
  if(empty($data_missing)){
  	require_once('mysqli_connect.php');
  	$query = "";
  }
  else{
  	//tell user to input all info
  	//foreach($data_missing as $missing){echo "{$missing}<br/>"}
  }




  echo printIt("inside--called by event");

}
  echo printIt("outside--called anyways via loginCookie.php");
  echo "<br><br><br><br><br>string";

mysqli_close($conn);	





function printIt($str){
	$str .= "<br/>";
	return $str;
}

class loginCookie {
	function makeCookie(){
	$name="user";
	$value="sarah";//{$email}";
	$expire=time() + 60*60*24*7;
	setcookie($name,$value,$expire);
	}

	function removeCookie(){
	$name="user";
	$value="{$email}";
	$expire=time() + 1;
	setcookie($name,$value,$expire);
	}

	function getCookie(){
		//errors if cookie not exist
		echo $_COOKIE['user'] or die ('could not find cookie');
	}
}
?>
