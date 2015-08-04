<?php

print("
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='mystyle.css'>");

print('
<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

var maxImage = 100;//100 can be changed as max number of image change
function load(pos) {
	if (pos <= maxImage){ 
		for (var i = pos; i < pos+6; i++) { 
			if (i <= maxImage){
				var variableToSend = ""+i;
				var getdata = "";
				$.post( 
					"database.php",
					{ variable: variableToSend },
			 
					function(data) {
						getdata = data;
						$("#container").append(\'<img src="\'+getdata+\'"  class="myimage"  />\');
					}
				);
				
			}
		}
		localStorage.setItem(\'pos\', (pos+6).toString());
	}
}');

print("\r\n");

print("$(function() {
	localStorage.setItem('pos', '1');
	load(1);

	window.onscroll = function() {
		if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
			load(parseInt(localStorage.getItem('pos')));
		}

	};
	window.onscroll();
	window.onscroll();
	window.onscroll();

});");
print("\r\n");
print('</script>');

print("
</head>
<body>
<div id=\"container\" ></div>
</body>");

print("\r\n");
print('</html>');
?>