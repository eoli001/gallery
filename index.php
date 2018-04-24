<?php
// Start the session
if(session_id() == '') {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Latest compiled and minified CSS -->
<!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
</head>
<link rel="stylesheet" href="../bootstrap.css">
<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<div align="center" id="header">

<img  src="logo.jpg" class= "centerlogo" alt="HTML5 Icon" />
</div>
<body bgcolor="#FFFFFF">

<h1 align="center">Welcome to Bearberry Gallery</h1>
<h2 align="center">Please login</h2>
<div class="formcontent">
<form id="content" width="100%" name="login" bgcolor="#FFFFFF" style="text-align:center">
 Username<br><input type="text" name="userid" class ="login"/><br><br>
 Password<br><input type="password" name="pswrd" class ="login"/><br><br>
<input type="button" class ="loginbutton" onclick="checkit(this.form)" value="Login"/>
<input type="reset" class ="loginbutton" value="Cancel"/>
<input type="button" class ="loginbutton" onclick="register(this.form)" value="Sign Up"/>
</form>
</div>

<script language="javascript">
    function checkit(form) { /*function to check userid & password*/
        /*the following code checkes whether the entered userid and password are matching*/
		if(form.userid.value == ""){
			alert("Please enter the user name.");
		}
		else if(form.pswrd.value == ""){
			alert("Please enter the password.");
		}
		else{
		$.post( 
                  "getuserdatabase.php",
                  { username: form.userid.value, password: form.pswrd.value},
				   
                  function(data) {
					var getdata = data;
					var getdata = getdata.replace(/(\r\n|\n|\r)/gm,"").trim();
                     if(getdata == "Password"){
						alert("The password is incorrect, please try again.");
					 }
					 else if(getdata == "Username"){
						alert("The username is not exist, please sign up.");
					 }
					 else{
						//sessionStorage.setItem("theuser", data);
						window.open('test.php',"_self");
					 }
                  }
               );
		}
		
		
}
</script>
<script language="javascript">
	function register(form) {
		window.open('signup.php',"_self");
}

</script>


<div id="container" align = "center"></div>
 
</body>
</html>
