function clicked(){
	var user = document.getElementById("inputUsername");
	var pass = document.getElementById("inputPassword");

	var usr1 = "mike666";
	var pss1 = "master";

	var usr2 = "saul123";
	var pss2 = "sauceman";

	var usr3 = "talabhh";
	var pss3 = "bossMan";

	if((user.value == usr1) || (user.value == usr2) || (user.value = usr3)){
		if(pass.value == pss1 || pass.value == pss2 || pass.value == pss3){
			window.alert("You are logged in as " + user.value);
			window.location.href = 'dashboard.php';
		}else {
			window.alert("Incorrect username or password");
		}
	}
}
