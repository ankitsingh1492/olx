<?php

include ('../pg/connection.php');

$emailErr = "";
$username = mysqli_real_escape_string($db, $_POST['username']);
$pass = mysqli_real_escape_string($db, $_POST['password']);
$email = mysqli_real_escape_string($db, $_POST['email']);


//form validation
//check if all the fields are filled
//if (strlen($username)==6 && strlen($pass)==6){
if ($username && $pass && $email){

	//check length for username and password

	if (strlen($username)<=6 && strlen($pass)<=6) {


		 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
       
    // check the user if it already exists
    $u_check = mysqli_query($db,"SELECT Username FROM Register where Username = '$username'");
    $check = mysqli_num_rows($u_check);
    if ($check == 0){
    	// check the email if it already exists
    	    $e_check = mysqli_query($db,"SELECT Email FROM Register where Email = '$email' ");
		     $em_check = mysqli_num_rows($e_check);
		    if ($em_check == 0){
		    		// insert values in table
				$pass = md5($pass);
				$sql="INSERT INTO Register ( Username, password, Email)
				VALUES ('$username', '$pass', '$email')";
				if (!mysqli_query($db,$sql)) {
			    die('Error: ' . mysqli_error($db));}
			  	
			  	echo "Thankyou for Registration!!. Please <a href='../home.php#space2'> LOGIN </a>back to continue";
		    }else{
		    	echo "sorry !! That Email is already registered, Please <a href='../home.php#img2'> Go Back </a>to continue";
		    }
    }else{
    	echo "We are sorry !! That Username is taken , Please <a href='../home.php#img2'> Go Back </a>to continue";
    }
}

else {

	$emailErr = "Invalid email format";
       echo $emailErr;
}
}

  else {echo "USERNAME AND PASSWORD IN BETWEEN 6 CHARACTER" ;}
}

else {
	echo "Please enter all values , Please <a href='../home.php#img2'> Go Back </a>to continue";
}
 //else 
//{ echo "username & password cant be more than 6 characters";}
//close the database
mysqli_close($db);

?>