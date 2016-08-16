<?php
include ("connection.php");
session_start();
if (isset($_SESSION['user_login'])){
	$user = $_SESSION['user_login'];
}
else {
	$user = "";
}



$post= $_POST['post'];
if($post != ""){
	$date_added = date("Y-m-d");
	$added_by = $user ;
	$user_posted_to = "username";

	$sql = "INSERT INTO posts VALUES ('','$post','$date_added','$added_by','$user_posted_to')";
	$result= mysqli_query($db,$sql) or die (mysql_error());
	echo "<meta http-equiv=\"refresh\" content=\"0; url= http://localhost/bca/profile/profile.php\">";
	exit();
}
else{

	echo "please enter something to post...";
}

?>