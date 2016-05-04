function clicked(){
	var user = document.getElementById("inputUsername");
	var pass = document.getElementById("inputPassword");

	var usr1 = "talab";
	var pss1 = "letmein";

	var usr2 = "saul";
	var pss2 = "letmein";

	var usr3 = "talab";
	var pss3 = "letmein";

	if((user.value == usr1) || (user.value == usr2) || (user.value = usr3)){
		if(pass.value == pss1 || pass.value == pss2 || pass.value == pss3){
			window.alert("You are logged in as " + user.value);
			window.location.href = 'dashboard.php';
		}else {
			window.alert("Incorrect username or password");
		}
	}
}