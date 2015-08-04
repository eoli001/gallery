<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//$variable = $_POST['variable'];
if( $_REQUEST['username'] && $_REQUEST['password'])
{
   $uname = $_REQUEST['username'];
   $pword = $_REQUEST['password'];
   //echo (" whooray variable is ". $variable);
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$usname = "'".$uname."'";
$paword = "'".$pword."'";

$sql = "INSERT INTO myusers ( username, password)
	VALUES ($usname, $paword)";

if ($conn->query($sql) === TRUE) {
		echo "Successfully";
	} else {
		echo "Error";
	}
	

?>