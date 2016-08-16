<?php 


include ('../pg/connection.php'); 
// starting session
session_start();
$user_login= $_SESSION['Username'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resale</title>
                <link href="../css/bootstrap.min.css" rel="stylesheet">
                <link href="../css/home.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="../css/animate.css">
    
  </head>

  <body id = "home">
       <div id="home_pro"><div id="logo-top"> <a href="index.html" id="logo"> <img src="../img/logo.png"> </a> </div> 
    <div id = "upload1">
    	<div id = "upload2">
    		<div id ="upl">
    		 <?php
             if (!$user_login){

                echo'<div id = "drp">
               <div style="margin:50px;">
  
  <div class="dropdown">
  <a class="account" >
  <span>My Account</span>
  </a>
  <div class="submenu" style="display: none; ">

    <ul class="root">
   <li >
        <a href="../home.php#img2" >Register</a>
      </li>

        <li >
        <a href="../home.php#space2" >Log in</a>
      </li>
     
    </ul>
  </div>
  </div>
  
  </div></div>';}
  else{
     echo'<div id = "drp">
                <div style="margin:50px;">
  
  <div class="dropdown">
  <a class="account" >
  <span>'.$user_login.'</span>
  </a>
  <div class="submenu" style="display: none; ">

    <ul class="root">
   
   <li >
        <a href="home.php" >Home</a>
      </li>

   <li >
        <a href="submit.php" >Submit AD</a>
      </li>

       <li >
        <a href="account_setting.php" >Settings</a>
      </li>

        <li >
        <a href="Logout.php" >Log Out</a>
      </li>
     
    </ul>
  </div>
  </div>
  
  </div></div>';
  }
?></div>
    		<div id = "upload3">
            
           <h2 > Submit Ad </h2>
              			
    			<form action ="upload_ad_pro.php" id="myForm2" method="POST">
                                      <label for="title">Title*:</label>
                               <input type="text" id="title" name="title"><br></br>
    			<div id = "upload4">
                              <label for="category">Select Category*:</label>
                               <select id="category" name="category">     
					          <optgroup label="Please select">
					            <option value="1">Electronics</option>
					            <option value="2">Cars</option>
					            <option value="3">Baby Product</option>
					            <option value="4"> Furniture</option>
					            <option value="5">Books</option>
					            <option value="6">Mobile</option>
					          </optgroup>
					      </select> <br></br>
    			</div>
    			    <label for="Rate">Rate*:</label>
                               <input type="text" id="rate" name="rate"><br></br>
                               <label for="email">Email*:</label>
                               <input type="text" id="email1" name="email1"><br></br>
                               <label for="phone">Phone*:</label>
                               <input type="text" id="Phone" name="Phone"><br></br>
                               <button class="btnExample" name="xyz" type="submit" value="Submit"/>Submit Ad</button>
    			    </form>  
                <div id= "wholeimg">  <div id="imgupload">
              <form action="iupload_pro.php" method="post" id = "myForm" enctype="multipart/form-data">
    <h3>Select image for ad to upload:</h3>
    <input type="file" name="fileToUpload" id="fileToUpload">
   <button class="btnExample" name="abc" type="submit" value="Submit"/>upload</button>
</form> </div>
            <div class="iimage"> 
            
            </div></div>      
    		</div>
    	</div>	
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script type="text/javascript" src="../js/drop.js"></script>
    <script type="text/javascript" src="../js/upload.js"></script>
   
  </body>
  </html>