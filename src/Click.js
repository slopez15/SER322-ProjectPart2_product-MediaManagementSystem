$document.ready(function(){
	$('.button').click(function(){
		var btnVal = $(this).val();
		var ajaxURL = "HandleEvent.php";
		data = {'action':btnVal};
		$.post(ajaxURL,data,function (response){
		
			alert("got it?");
		});
	
	});
});

/*
<script type = "text/javascript" src = "jquery-1.12.3.min">
function callPHP(){

	var result = "<?php handleEvent();?>" 
	alert(result);
	return false;
	
	
/*
	var callPHP = function{

	//var result = "<?php handleEvent()?>";
		$.ajax({
			url:'musiclist.php',
			type: 'POST',
			data  {'handleEvent':arr},
			success: 
		
		
		});
	}
	
}
</script>
*/