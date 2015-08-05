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

<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="../bootstrap.css">
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->

<script src="../bootstrap.js"></script>
 <style type="text/css">
    div.gsc-control-cse form.gsc-search-box {
      width: 20%;
	  position: absolute;
	  right: 8px;
    }
  </style>



</head>

<script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">

var maxImage = 100;//100 can be changed as max number of image change

function load(pos) {
	//var usnm = window.opener.thisIsAnObject;
	
	if (pos <= maxImage){ 
		for (var i = pos; i < pos+6; i++) { 
			if (i <= maxImage){
				var variableToSend = ""+i;
				
				
				var getdata = '';
				$.post( 
                  "database.php",
                  { variable: variableToSend },
				 
                  function(data) {
                     getdata = data;
					 //$("#container").append('<img src="'+getdata+'"  class="myimage"  />');
					 $("#container").append('<a class="myimage" href="'+getdata+'" data-lightbox="piture1"><img class="myimage" src="'+getdata+'" alt="image-1" /></a>');
                  }
               );
				
			}
	
		}
		localStorage.setItem('pos', (pos+6).toString());
	}
}

$(function() {
	<?php
	echo 'var wel = '.$_SESSION["username"];
	?>
	//var wel = sessionStorage.getItem("theuser");
	$("#user").append(wel);
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

});
</script>

<script>
function logout() {
    window.open('index.php', "_self");
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
<div  id= "welcome" align="center" class = "startpage">Welcome, </div >

<div id= "user" class = "startpage"></div>

<button class="signout" onclick="logout()" class = "startpage">Sign Out</button>

<div style="float:left; margin-top:-20px"><gcse:search></gcse:search></div>
</div>


</div>

<body bgcolor="#FFFFFF">

<!--<script src="../test/js/lightbox-plus-jquery.min.js"></script>-->

<!--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>-->

<div class="navigationbar" >
<img class= "navlogo"  id ="logo"  src="logo.jpg" alt="HTML5 Icon" />
<p class= "navcompany" align="center"> Bearberry Gallery</p>
<ul>
  <!--<li><img align="left" id ="logo"  src="logo.jpg" alt="HTML5 Icon" /><p> Bearberry </p></li>-->
  <li><a class="navcontent" href="#home">Home</a></li>
  <li><a class="navcontent" href="/profile.php">Profile</a></li>
  <li><a class="navcontent" href="/artist.php">Artist</a></li>
  <li><a class="navcontent" href="#about">About</a></li>
</ul>
</div>

<div id="container" class="container" align="center" ></div>

<!--<div id="footer">
Enjoy your gallery tour!
</div>-->
 
</body>
</html>

