<!DOCTYPE html>
<html>
<head>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../bootstrap.css">
<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
</head>


<div align="center" id="header">

<img  src="logo.jpg" class= "centerlogo" alt="HTML5 Icon" />
</div>
<body bgcolor="#FFFFFF">

<h1 align="center" >Welcome to Bearberry Gallery</h1>
<h2 align="center" >Sign Up Page</h2>

<div class="formcontent">
<form id="registerform" width="100%" name="login" bgcolor="#464646"  type= "text-align:center">
 Username <br>  <input type="text" name="userid" class ="login"/> <br><br>
 Password <br> <input type="password" name="pswrd" class ="login"/> <br><br>
<input type="button" class ="loginbutton" onclick="register(this.form)" value="Get the Account Now!"/>
<input type="reset" class ="loginbutton" value="Cancel"/>
</form>
</div>

<script language="javascript">
    function register(form) {
		$.post( 
                  "userdatabase.php",
                  { username: form.userid.value, password:  form.pswrd.value},
				 
                  function(data) {
					if(data == "Successfully"){
						alert("The account has been successfully created.")
						window.open('index.html',"_self");
					}
                    else{
						alert("The user name has already exist.")
					}
                  }
               );
}
</script>

</body>
</html>