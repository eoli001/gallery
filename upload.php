<?php
// Start the session
if(session_id() == '') {
    session_start();
}
?>

<?php
$target_dir = "/wamp/www/test/profilepictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$notempty = 1;
$message="";
$reloadpage = "false";
$space="  ";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	if($_FILES['fileToUpload']['error']==4){
		//echo "No image is selected to be uploaded.";
		$message = "No image is selected to be uploaded.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		$notempty = 0;
	}
		
	else{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
		$message = $message.$space." File is not an image.";
		//echo "<script type='text/javascript'>alert('$message');</script>";
        $uploadOk = 0;
    }
	}
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/

if($notempty==1){
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    //echo "Sorry, your file is too large.";
	$message = $message.$space."Sorry, your file is too large.";
	//echo "<script type='text/javascript'>alert('$message');</script>";
    $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$message = $message.$space."Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	//echo "<script type='text/javascript'>alert('$message');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
	$message = $message.$space."Sorry, your file was not uploaded.";
	//echo "<script type='text/javascript'>alert('$message');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$message = $message.$space."The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$profileimgname = "'".basename( $_FILES["fileToUpload"]["name"])."'";
		$_SESSION["profileimgname"] = $profileimgname;
		$reloadpage = "true";
		//echo "<script type='text/javascript'>alert('$message');</script>";
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
		$message = $message. $space."Sorry, there was an error uploading your file.";
		//echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
echo "<script type='text/javascript'>alert('$message');</script>";
echo $reloadpage != "true";
if($reloadpage == "true"){
		//echo "<script>location.reload();</script>";
		echo "<script>var d = new Date();";
		echo "$('#profileimg').attr('src','/test/profilepictures/", basename( $_FILES["fileToUpload"]["name"]),"?",time(),"');</script>";
		//echo "<script> $('#logo').attr('src','account.png');</script>";
}

}
?>

<?php
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

$sql = "UPDATE myusers SET profileimage=".$_SESSION["profileimgname"]." WHERE username =".$_SESSION["username"];
$result = $conn->query($sql);



	
?>