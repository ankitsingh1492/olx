<?php 
include ('../pg/connection.php'); 
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
  	<div id="top">
       <div id="logo-top"> <a href="../index.html" id="logo"> <img src="../img/logo.png"> </a> </div> 
    
    		<div id ="upl">
    		 <div style='margin:50px'>
	
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
	
	</div></div></div> 
<div id = "prod_homep"> <div class = "zoomIn "> <h2> Books </h2> </div> <br>  
	<?php
         $sql = "SELECT * from product_update where Category = '5' ORDER BY Id DESC";
         $result= mysqli_query($db,$sql) or die (mysql_error());
         while ($row = mysqli_fetch_assoc($result)){

	                $Title = $row['Title'];
	                $Rate = $row['Rate'];
	                $Name = $row['Name'];
	                $Email = $row['Email'];
	                //$Phone = $row['Phone'];
	                $Image =$row['Image'];

	               echo' <div id="wrap"> 
       <div id ="individual">
         <h3> '.$Title.' </h3>
         <div id="total"><div id="rate"><h4> Rate: &nbsp; '.$Rate.'</h4></div>
         <div id="name_pro"><h4> Uploaded By: &nbsp;'.$Name.'</h4></div>
         <div id="Email"><h4> Email: &nbsp;'.$Email.'</h4></div>
        <div id="Phone_pro"><h4> Phone:&nbsp;*********</h4></div></div>
       <div id ="img_home">
          <img src="'.$Image.' ">
       </div>
       	</div>
	</div>';
	                
}  
	?>
</div>
	

	<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script type="text/javascript" src="../js/drop.js"></script>
    <script type="text/javascript" src="../js/upload.js"></script>
    <script type="text/javascript" src="../js/form.js"></script>
  </body>
  </html>