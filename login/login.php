<?php
   session_start();
  include ('../pg/connection.php'); 


  // user login 

  if (isset($_POST["username"]) && isset($_POST["password"])) {
  	  $user_login = mysql_real_escape_string($_POST['username']); // filter all characters but numbers and letters
    $password_login =  mysql_real_escape_string($_POST['password']); //filter all characters but numbers and letters
    
    
    //query db for user
    $result= mysqli_query($db," SELECT * FROM Register WHERE Username='$user_login' AND password= '$password_login' LIMIT 1");
    
    // check for user
    $usercount = mysqli_num_rows($result);
    if ($usercount == 1){
      while($row = mysqli_fetch_array($result)){
          $id = $row["user_id"];
          $Username = $row["Username"];
      }
          $_SESSION['Username'] = $user_login;
        header("location: ../profile/home.php");
        exit();
     }    

     else{
      echo "the information is incorrect , try again";
            } }
     
 include ('../pg/connectionclose.php'); 

   
    
?>