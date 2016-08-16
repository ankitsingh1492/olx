<?php

include ('../pg/connection.php'); 
// starting session
session_start();
$user_login= $_SESSION['Username'];
?>

<?php
$Title = mysqli_real_escape_string($db, $_POST['title']);
$Category = mysqli_real_escape_string($db, $_POST['category']);
$Rate = mysqli_real_escape_string($db, $_POST['rate']);
$Email = mysqli_real_escape_string($db, $_POST['email1']);
$Phone = mysqli_real_escape_string($db, $_POST['Phone']);


  

if ( $Title && $Category && $Rate  && $Email && $Phone) {

	  if (ctype_digit($Rate)) {
      
      if (ctype_digit($Phone) && strlen($Phone)==10){
            $sql="INSERT INTO product_update ( Title,Category ,Rate, Name, Email, Phone)
				VALUES ('$Title' , '$Category' ,'$Rate', '$user_login', '$Email', '$Phone')";
				if (!mysqli_query($db,$sql)) {
			    die('Error: ' . mysqli_error($db));}
			  	
			  	echo "Thankyou ";
                $_SESSION['Title']=$Title;
			    header("location: submit.php");
		        exit();
		    }
		    else 
		    	{echo "enter correct phone number";}

           	}	

           	else { echo "enter rate in numerics";	}}


		    else { echo "kindly fill all fields";}


?>