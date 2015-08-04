<?php
// Start the session
if(session_id() == '') {
    session_start();
}
?>

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

//$uname = "'aa'";//$_REQUEST['username'];
//$pword = "'cc'";//$_REQUEST['password'];

$usname = "'".$uname."'";
$sql = "SELECT password FROM myusers WHERE username =".$usname;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //($row = $result->fetch_assoc()) {
		$row = $result->fetch_assoc();
		$rowpword = $row["password"];
		if($rowpword == $pword){
			$_SESSION["Authenticated"] = "true";
			$_SESSION["username"] = $usname;
			echo $uname;
		}
		else{
			echo "Password";
		}
	}
else {
		//echo "User name not exist, please sign up.";
		echo "Username";
}
	

?>