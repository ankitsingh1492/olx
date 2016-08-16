<?php
 include ( "../pg/header.php" );
include ('../pg/connection.php'); 

session_start();
$Title=$_SESSION['Title'];
$user_login=$_SESSION['Username'];
//echo $Title;
//echo $user_login;
?>

<div id="prod-wrap"> 
  <?php
         $sql = "SELECT * from product_update where Title = '$Title' ORDER BY Id DESC";
         $result= mysqli_query($db,$sql) or die (mysql_error());
         while ($row = mysqli_fetch_assoc($result)){

	               // $Title = $row['Title'];
	                $Rate = $row['Rate'];
	                $Name = $row['Name'];
	                $Email = $row['Email'];
	                $Phone = $row['Phone'];
	                $Image =$row['Image'];

	               echo' <div id="wrap"> 
       <div id ="individual">
         <h3> '.$Title.' </h3>
         <div id="total"><div id="rate"><h4> Rate: &nbsp; '.$Rate.'</h4></div>
         <div id="name_pro"><h4> Uploaded By: &nbsp;'.$Name.'</h4></div>
         <div id="Email"><h4> Email: &nbsp;'.$Email.'</h4></div>
         <div id="Phone_pro"><h4> Phone:&nbsp;'.$Phone.'</h4></div></div>
       <div id ="img_home">
          <img src="'.$Image.' ">
       </div>
       	</div>
	</div>
	 <div id="msg_p"> <a href="mailto:'.$Email.'?subject=Mail from Resale regarding your Ad"> Email, '.$Name.' </a></div>';
	                
}  
	?>

</div>
</body>
</html>