
<?php 
include ( "../pg/header.php" );

//echo $user_login;
?>
<?php 
    $senddata = @$_POST['senddata'];

    //declaration of variables
    $old_password= @$_POST['oldpassword'];
    $new_password = @$_POST['newpassword'];
    $repeat_password= @$_POST['newpassword2'];
    if ($senddata)
    {
        $pass= mysqli_query($db,"SELECT * FROM register WHERE Username= '$user_login' ");
        while ($row = mysqli_fetch_assoc($pass)){
            $db_pass = $row['password'];
            // hash the old password
            $old_password_md5 = md5($old_password);
            // check the old password equals the $db_pass
            if ($old_password_md5 == $db_pass){
                // check for new passwords to match
                 $new_password_md5 = md5($new_password);
                if($new_password == $repeat_password){
                 $pass_update= mysqli_query($db,"UPDATE register SET password='$new_password_md5' WHERE username= '$user_login'");
                  echo '<script language="javascript">';
					echo 'alert("successfully updated")';
					echo '</script>';
                }
                else{
                	echo '<script language="javascript">';
					echo 'alert("ERROR !! Passwords dont match")';
					echo '</script>';
                    
                }
            }else{
            	echo '<script language="javascript">';
					echo 'alert("Old password is incorrect")';
					echo '</script>';
                
            }
           
        }
        }

        else{
           // echo "please update first ";
        }

?>  

<?php 
       
        $cnfrm = @$_POST['vehicle'];
        $del = @$_POST['del'];
        if ($cnfrm == 1){
        if ($del){
         $sql = "DELETE FROM register WHERE Username= '$user_login'";

			if (mysqli_query($db, $sql)) {
			    echo '<script language="javascript">';
					echo 'alert( "your a/c is deleted successfully")';
					echo '</script>';
			        echo "<meta http-equiv=\"refresh\" content=\"0; url= http://localhost/olx/home.php\"`	>";
 			exit();
			} else {
			    echo "Error deleting record: " . mysqli_error($conn);
			}}}
?>

<div class="account_s">
<div class="acc">
<h3> Change Password: </h3><br>
<form action="account_setting.php" method="POST">
<input type="password" name="oldpassword" id="oldpassword" size="30" placeholder="Old Password:"/><br><br>
<input type="password" name="newpassword" id="newpassword" size="30" placeholder="New Password:"/><br><br>
<input type="password" name="newpassword2" id="newpassword2" size="30" placeholder="Repeat Password:"/><br><br>
 <button class="btnExample" name="senddata" type="submit" value="UPDATE"/>UPDATE</button><br><br>
</form>
</div>

<div class="acc-del">
	<h3>Delete account </h3><br><br>

<form action="account_setting.php" method="POST">
	<input type="checkbox" name="vehicle" value="1"> yes delete my account <br><br>
	 <button class="btnExample" name="del" type="submit" value="del_acc"/>DELETE A/C</button><br><br>
</form>
</div>
</div>