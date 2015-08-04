<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//$variable = $_POST['variable'];
if( $_REQUEST['variable'] )
{
   $variable = $_REQUEST['variable'];
   //echo (" whooray variable is ". $variable);
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, imagesource FROM myimage WHERE id =".$variable;
$result = $conn->query($sql);


//if ($result->num_rows > 0) {
    // output data of each row
    //($row = $result->fetch_assoc()) {
		$row = $result->fetch_assoc();
		$rowimgscr = $row["imagesource"];
		//echo json_encode(array("value" => "".$rowimgscr));
		echo $rowimgscr;
		//print("<img id = '".$rowid. "'"."class='myimage' src='".$rowimgscr."'"."alt='Mountain View' style='' />");
    
//} else {
	//	echo "0 results";
//}
	

?>