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

<h1 style="font-family:sans-serif"> Artists Biographies</h1> 

<div>

<main>

<article>

<header>

</header>
<section>
<p style="font-family:sans-serif">A list of artist biographies.</p>

<p>
<div>
<img class="bibimageframe" style="float:left" id="artist21" src="http://www.biographyonline.net/wp-content/uploads/2014/05/leonardo-da-vinci1.jpg" alt="artist" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>Leonardo Da Vinci</strong></em> (1452 – 1519) Italian Renaissance painter, scientist, inventor, and polymath. Da Vinci is one of most famous painters for his iconic Mona Lisa and Last Supper.
</p>
</p>

<p>
<div>
<img class="bibimageframe" style="float:left" id="artist" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Bernini.jpg" alt="bernini" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>Bernini</em></strong> (1598 – 1680) Italian Baroque sculptor and painter. Bernini is credited with creating the modern Baroque style of sculptor. His most famous commission was St. Peter’s Basilica, and the Piazza San Pietro in front of the Basilica.
</p>
</p>

<p>
<div>
<img class="bibimageframe" style="float:left" id="artist2" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Blake-William-150.jpg" alt="Blake" width="100" height="186" name="artist">
</div>
<p class="bibdetail">
<strong><em>William Blake</strong></em> (1757 – 1827) English poet, painter and printmaker. Blake is considered an early romantic poet and painter, but with his very own unique style of drawings.
</p>
</p>

<p>
<div>
<img class="bibimageframe" style="float:left" id="artist3" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Sandro_Botticelli1.jpg" alt="Botticelli" width="100" height="267" name="artist">
</div>
<p class="bibdetail">
<strong><em>Botticelli</strong></em> (1445 – 1510) Italian, early renaissance painter. 
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist10" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Michelangelo-1501.jpg" alt="michelangelo" width="100" height="161" name="artist">
</div>
<p class="bibdetail">
<strong><em>Michelangelo</strong></em> (1475 – 1564) Renaissance sculptor, painter and architect. Famous works include the ceiling of the Sistine chapel and the statue of David.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist15" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/raphael-1501.jpg" alt="Raphael" width="100" height="188" name="artist">
</div>
<p class="bibdetail">
<strong><em>Raphael</strong></em> (1483 – 1520) Italian painter, with Da Vinci and Michelangelo, make up the high Renaissance trinity.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist16" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Rembrandt1501.jpg" alt="Rembrandt" width="100" height="168" name="artist">
</div>
<p class="bibdetail">
<strong><em>Rembrandt</strong></em> (1606 – 1669) Dutch Master from the Dutch Golden Age. One of greatest painters, admired for his vivid realism and empathy with the human condition. Rembrandt’s greatest works include: Belshazzar’s Feast (1635), The Night Watch, (1642), and Bathsheba at Her Bath, (1654).
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist4" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Caravaggio-1501.jpg" alt="Caravaggio" width="100" height="167" name="artist">
</div>
<p class="bibdetail">
<strong><em>Caravaggio</strong></em> (1571– 1610) Italian Baroque painter. Caravaggio painted many portraits noted for their naturalism, highlighted by the innovative use of chiaroscuro (contrast of light and shadow). Notable works include: 
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist20" src="http://www.biographyonline.net/wp-content/uploads/2014/05/jan-vermeer-1501.jpg" alt="artist" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>Jan Vermeer</strong></em> (1632 – 1675) Dutch painter, who specialised in genre painting – especially vivid depictions of still life. Notable works include 
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" class="alignnone size-full wp-image-12981" src="http://www.biographyonline.net/wp-content/uploads/2015/03/Francisco_de_Goya.jpg" alt="Francisco_de_Goya" width="100">
</div>
<p class="bibdetail">
<strong><em>Francisco José de Goya</strong></em> (1746 – 1828) divish romantic painter. De Goya combined the classical style of the Old Masters with a new realism, ambiguity and imagination. Notable works include: 
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist18" src="http://www.biographyonline.net/wp-content/uploads/2014/05/John-Turner-150.jpg" alt="artist" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>John M.W. Turner</strong></em> (1775 – 1851) British landscape artist. Known as the painter of light. Turner was an artistic figure from the Romantic period and one of precursors to impressionism.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist6" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/john-constable-150.jpg" alt="Constable" width="100" height="187" name="artist">
</div>
<p class="bibdetail">
<strong><em>John Constable</strong></em> (1776 – 1837) English romantic painter. Constable was noted for his landscape paintings of Dedham Vale – such as Wivenhoe Park (1816), Dedham Vale (1802) and The Hay Wain (1821) – offering an idealised view of the countryside.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" class="alignnone size-full wp-image-12982" src="http://www.biographyonline.net/wp-content/uploads/2015/03/Eugene_Delacroix.jpg" alt="Eugene_Delacroix" width="100">
</div>
<p class="bibdetail">
<strong><em>Eugène Delacroix</strong></em> (1798 – 1863) French romantic painter. Delacroix was influential for pioneering an expressive use of colour, movement and romantic content. He was an influential artist for the later impressionists.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist" src="http://www.biographyonline.net/wp-content/uploads/2014/05/camille-Pissarro-portrait1.jpg" alt="artist" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>Camille Pissarro</strong></em> (1830–1903) Impressionist and post-impressionist painter. A very influential figure for both impressionists and the new generation of post impressionist painters.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist3" src="http://www.biographyonline.net/wp-content/uploads/2014/05/edouard_Manet1.jpg" alt="artist" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>Édouard Manet</strong></em> (1832–1883) Manet contributed to the schools of ‘Realism’ and ‘Impressionism’ – playing a key role in the transformation to impressionism and modern art.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist5" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Cezanne_1501.jpg" alt="Cezanne" width="100" height="167" name="artist">
</div>
<p class="bibdetail">
<strong><em>Paul Cezanne</strong></em> (1839-1906) French post-impressionist painter. Cezanne emerged from impressionism, developing styles known as cubism. Notable works include Rideau, Cruchon et Compotier (1893–1894), The Card Players (1890-1895) and The Bathers (1898–1905)
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist11" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Claude_Monet1501.jpg" alt="monet" width="100" height="184" name="artist">
</div>
<p class="bibdetail">
<strong><em>Claude Monet</strong></em> (1840 – 1926) French impressionist painter. It was Monet’s painting – Impression, soleil levant (Impression, Sunrise), that led to the title of the impresionist movement. Monet painted many open air scenes, such as his own garden in Giverny.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist17" src="http://www.biographyonline.net/wp-content/uploads/2014/05/renoir-1501.jpg" alt="artist" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>August Renoir</strong></em> (1841–1919) French painter, one of the early pioneers of impressionism. Also influenced by Italian renaissance. Renoir’s paintings often celebrated city life, and also feminine sensuality. Notable works include: Dance At The Moulin De La Galette, Luncheon of the Boating Party, 1880 and Nude, 1910
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist8" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Paul_Gauguin1501.jpg" alt="Guaguin" width="100" height="179" name="artist">
</div>
<p class="bibdetail">
<strong><em>Paul Gauguin</strong></em> (1848 – 1903) French post-impressionist painter, sculptor and ceramics. Gauguin experimented with many styles including ‘primitivist’, pastoral and creating a synthesis style which became a hallmark of modern art.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist19" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Van_Gogh-1501.jpg" alt="artist" width="100" name="artist">
</div>
<p class="bibdetail">
<strong><em>Vincent Van Gogh</strong></em> (1853 – 1890). Dutch post-impressionist painter, who spent many years in France. Despite turbulent mental state, Van Gogh produced some of the greatest works of all time –  Starry Night, Sunflowers, Bedroom in Arles, Van Gogh’s chair and The Cafe Terrace.
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist13" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Edvard_Munch150.jpg" alt="munch" width="100" height="293" name="artist">
</div>
<p class="bibdetail">
<strong><em>Edvard Munch</strong></em> (1863 – 1944) Norwegian expressionist and avant-garde painter, whose works were often on highly psychological themes . Painted ‘The Scream’ (1893).
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist14" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/picasso1501.jpg" alt="Picasso" width="100" height="158" name="artist">
</div>
<p class="bibdetail">
<strong><em>Pablo Picasso</strong></em> (1881 – 1973) divish, modern ‘cubist’ painter. Notable works include: Birds of Peace, Guernica (1937) and the The Weeping Woman (1937) 
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist12" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Henry_Moore150.jpg" alt="henry moore" width="100" height="150" name="artist">
</div>
<p class="bibdetail">
<strong><em>Henry Moore</strong></em> (1898 – 1986) British sculptor. Best known for his reclining sculptors based on the human form, Moore contributed to a modernist style of sculptor. 
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist7" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/Salvador-Dali1.jpg" alt="Dali" width="100" height="168" name="artist">
</div>
<p class="bibdetail">
<strong><em>Salvidor Dali</strong></em> (1904 – 1989) divish surrealist painter, who was an imaginative and innovative painter. His works stretched across many genres, such as surrealism, cubism and dadism. Notable works include The Persistence of Memory (1931)
</p>
</p>

<p>
<div class="bibimage">
<img class="bibimageframe" style="float:left" id="artist9" class="alignnone" src="http://www.biographyonline.net/wp-content/uploads/2014/05/David-Hockney-1501.jpg" alt="hockney" width="100" height="150" name="artist">
</div>
<p class="bibdetail">
<strong><em>David Hockney</strong></em> (1937 – ) English modern painter. Contributed to pop art movement of 1960s.
</p>
</p>

</article>

</main>

</div>

</body>
</html>