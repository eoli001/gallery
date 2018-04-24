<?php
// Start the session
if(session_id() == '') {
    session_start();
}
?>
<?php
// Start the session
if( $_REQUEST['sessionstatus']){
	
	if($_REQUEST['sessionstatus']=="off"){
		session_destroy();
		
		echo "destroyed";
	}
}
else{
	echo $_REQUEST['sessionstatus'];
}
 
?>

