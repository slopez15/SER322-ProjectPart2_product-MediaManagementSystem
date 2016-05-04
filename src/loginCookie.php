<?php

if(isset($_POST['submit'])){
	echo "HELLO";
}

function test(){
	echo "<b><h1>TEST PASS </h1/></b>";
}

function setCookie(){
$name="user";
$value="{$email}";
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
	echo $_COOKIE['user'];	
}

?>
	

</body>
</html>