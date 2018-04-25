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
<!--<div id="header" align="center" >

<img id ="logo"  src="logo.jpg" class= "centerlogo" alt="HTML5 Icon" />

</div>-->

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

<h1 style="font-family:sans-serif float:left">About me</h1>

<p>
<div>
<img id ="me" class="meprofileimage" style="float:left" id="artist21" src="/test/profilepictures/me.jpg" alt="artist" width="100" name="artist">
</div>
<p class="meprofiledetail" style="font-family:sans-serif">
<strong><em>Yolanda He</strong></em><br><br> (2010-2015) A new graduate student from University of Waterloo.<br>
Trying to build a professional website using PHP, Javascript, CSS, and HTML. <br>
Aim to be a full stack developer.
</p>
</p>
<h2 style="font-family:sans-serif">My Paintings</h2>

<div class="paitingbackground" bgcolor="#464646">
<a class="paitingframe" href="/mypaintings/mp1.JPG" data-lightbox="piture1"><img class="paitingframe" src="/mypaintings/mp1.JPG" alt="image-1" /></a>
<a class="paitingframe" href="/mypaintings/mp2.JPG" data-lightbox="piture1"><img class="paitingframe" src="/mypaintings/mp2.JPG" alt="image-1" /></a>
<a class="paitingframe" href="/mypaintings/mp3.JPG" data-lightbox="piture1"><img class="paitingframe" src="/mypaintings/mp3.JPG" alt="image-1" /></a>
<a class="paitingframe" href="/mypaintings/mp4.JPG" data-lightbox="piture1"><img class="paitingframe" src="/mypaintings/mp4.JPG" alt="image-1" /></a>
</div>
<h2 style="font-family:sans-serif">My Objective</h2>
<p style="font-family:sans-serif">
● Develop software in a junior position working hard to be a very helpful contributor and teammate while learning new skills and gaining new experience
</p>
<h2 style="font-family:sans-serif">My Skills</h2>
<p style="font-family:sans-serif">
● Languages: C, C++, Java, Python, SQL and Scheme<br>
● Frameworks and Tools: Xcode, Eclipse, Visual Studio and Django<br>
● Platform: Windows, Linux, OS X, iOS and Android<br>
● Familiar with Object­Oriented Software Development<br>
● Working knowledge of computer science, mathematics, business, and economics
</p>

<h2 style="font-family:sans-serif">My Resume</h2>
<a style="font-family:sans-serif" href="myresume.pdf">View my full version of resume here.</a>

<h2 style="font-family:sans-serif">Contact me</h2>
<p style="font-family:sans-serif">If you have any questions, please contact through my email eoli001@hotmail.com.</p>
</body>
</html>
