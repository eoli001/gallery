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

/*// sql to create table
$sql = "CREATE TABLE myimage (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
imagename VARCHAR(30) NOT NULL,
imagesource VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table myimage created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

for($i=1; $i <= 100; $i++){
	$imgname = "'p".$i."'";
	$imgpart =  "'/test/images/p".$i;
	$imgscr = $imgpart.".jpg'";
	$sql = "INSERT INTO myimage (id, imagename, imagesource)
	VALUES ($i, $imgname, $imgscr)";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}*/
/*
// sql to create table
$sql = "CREATE TABLE myusers (
username VARCHAR(30) NOT NULL PRIMARY KEY,
password VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table myusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

	$uname = "'aa'";
	$pword =  "'bb'";
	$sql = "INSERT INTO myusers ( username, password)
	VALUES ($uname, $pword)";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}



/*$sql = "DROP TABLE myusers";

if ($conn->query($sql) === TRUE) {
    echo "Table myusers drop successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

$conn->close();
?>