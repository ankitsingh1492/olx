<?php
session_start();

include ('../pg/connection.php'); 

$Title = mysqli_real_escape_string($db, $_POST['title']);
$Category = mysqli_real_escape_string($db, $_POST['category']);
$Rate = mysqli_real_escape_string($db, $_POST['rate']);
$Name = mysqli_real_escape_string($db, $_POST['name']);
$Email = mysqli_real_escape_string($db, $_POST['email1']);
$Phone = mysqli_real_escape_string($db, $_POST['Phone']);

if ( $Title && $Category && $Rate && $Name && $Email && $Phone) {
         $sql="INSERT INTO product_update ( Title,Category ,Rate, Name, Email, Phone)
				VALUES ('$Title' , '$Category' ,'$Rate', '$Name', '$Email', '$Phone')";
				if (!mysqli_query($db,$sql)) {
			    die('Error: ' . mysqli_error($db));}
			  	
			  	echo "Thankyou ";

			  	$_SESSION['Phone'] = $Phone;
			  	$_SESSION['Title'] = $Title;
		        header("location: upload.php");
		        exit();
		    }


?>