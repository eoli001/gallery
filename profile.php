<?php
// Start the session
if(session_id() == '') {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="../bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style type="text/css">
    div.gsc-control-cse form.gsc-search-box {
      width: 20%;
	  position: absolute;
	  right: 8px;
    }
  </style>

<script type="text/javascript">

$(function() {
	<?php
	echo 'var wel = '.$_SESSION["username"];
	?>
	//var wel = sessionStorage.getItem("theuser");
	$("#user").append(wel);
	
});
</script>

<script type="text/javascript">
function logout() {
	$.post( 
        "destroysession.php",
        { sessionstatus: "off" },
        function(data) {
			var getdata=data.replace(/(\r\n|\n|\r)/gm,"").trim();
			if(getdata == "destroyed"){
				alert("You have successfully loged out.");
				window.open('index.php', "_self");
			
			}
			
        }
    );
    
}
</script>


<script>
  (function() {
    var cx = '017085084134616890852:muus2r741lg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<div class="userwelcome">
<div  id= "welcome" style="font-family:sans-serif" align="center" class = "startpage">Welcome, </div >

<div id= "user" style="font-family:sans-serif" class = "startpage"></div>

<button class="signout" onclick="logout()" style="font-family:sans-serif" class = "startpage">Sign Out</button>

<div style="float:left; margin-top:-20px"><gcse:search></gcse:search></div>
</div>

</head>
<body>
<div class="navigationbar" >
<img class= "navlogo"  id ="logo"  src="logo.jpg" alt="HTML5 Icon" />
<p class= "navcompany" style="font-family:sans-serif" align="center"> Bearberry Gallery</p>
<ul>
  <!--<li><img align="left" id ="logo"  src="logo.jpg" alt="HTML5 Icon" /><p> Bearberry </p></li>-->
  <li><a class="navcontent" style="font-family:sans-serif" href="/test.php">Home</a></li>
  <li><a class="navcontent" style="font-family:sans-serif" href="/profile.php">Profile</a></li>
  <li><a class="navcontent" style="font-family:sans-serif" href="/artist.php">Artist</a></li>
  <li><a class="navcontent" style="font-family:sans-serif" href="/aboutme.php">About me</a></li>
</ul>
</div>

<!--<div id="header" align="center" >

<img id ="logo"  src="logo.jpg" class= "centerlogo" alt="HTML5 Icon" />

</div>-->

<h1 align="center" style="font-family:sans-serif">Welcome to Bearberry Gallery</h1>
<h2 align="center" style="font-family:sans-serif">Personal Profile Page</h2>

<div align="center">
<div align="center" class="profilebackground">
<?php  //set profileimage, if no record in database,set to account.png.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT profileimage FROM myusers WHERE username =".$_SESSION["username"];
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    //($row = $result->fetch_assoc()) {
		$row = $result->fetch_assoc();
		$rowprofileimgscr = $row["profileimage"];
		if(!empty($rowprofileimgscr)){
		//echo json_encode(array("value" => "".$rowimgscr));
		echo '<img id="profileimg"  src="/test/profilepictures/'.$rowprofileimgscr.'" class= "profileimage"/>';
		//print("<img id = '".$rowid. "'"."class='myimage' src='".$rowimgscr."'"."alt='Mountain View' style='' />");
		}
		else{
			echo '<img id="profileimg"  src="account.png" class= "profileimage"/>';
		}
} else {
		echo "0 results";
}
?>


<form id="uploadFile" action="upload.php" method="post" class="uploadimgform"
enctype="multipart/form-data" target="resultFrame">
<label for="file">Filename:</label>
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" name="submit" value="Submit">
</form>
<div class="putresult" style="display:none"></div>
</div>
</div>

<script>
$('#uploadFile').submit(function()
{
  event.preventDefault();
  $("#updiv").fadeOut();
  $.ajax(
  { 
    url: "upload.php",
    type: 'POST',
    data: new FormData(this),
    contentType: false,
    processData: false,
    success: function(data)
    {
      $('.putresult').html(data);    
      $('.putresult').show();    
      $("#updiv").fadeIn();
    }
  });

});


</script>

</body>
</html>