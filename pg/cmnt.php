<?php
session_start();
if(!isset($_SESSION['user_login'])){
 //echo "false";
	$user="";
}else
{
  $user = $_SESSION['user_login'];
}
?>

<style >
*{
	font-family: raleway;

}
a {
	color: white;
}

</style>

<script language="javascript">
                     function toggle(){
                     var ele = document.getElementById("toggleAnswer");
                     var text = document.getElementById("displayAnswer");
                     if (ele.style.display == "block"){
                     ele.style.display = "none";
                 }
                 else {
                 	ele.style.display ="block";
            	 }
                 }
                     </script>

<?php
include ('connection.php');
$get_id=$_GET['id'];
?>
 
 <?php
    $postan=@$_POST['postAnswer'. $get_id. ''];

	if($postan!= ""){
	$answer= $_POST['postans'];
	$posted_to = "David";
	$insertans= mysqli_query($db,"INSERT INTO post_ans VALUES ('','$answer','$posted_to', '$user','0','$get_id')");
    
} 
 ?>

<a href='javascript:;' onClick="javascript:toggle()"><div style='float: right; display: inline;'>Post Reply</div></a>
<div id='toggleAnswer' style='display:none;'>
<form action="cmnt.php?id=<?php echo $get_id;?>" method="POST" name="postAnswer<?php echo $get_id;?>">
	<textarea rows="3" cols="50" placeholder="COMMENT HERE !!!" name="postans"></textarea>
  <input type="submit" name="postAnswer<?php echo $get_id;  ?>" value="reply">
</form>

</div>

<?php
 // fetching the replies
 $get_ans = mysqli_query($db,"SELECT * FROM post_ans WHERE post_id ='$get_id' ORDER BY id DESC ");
    
$count = mysqli_num_rows($get_ans);
    if($count!=0)
{
              while ( $ans= mysqli_fetch_assoc($get_ans)){                 
                     $answer = $ans['answer'];
                     $posted_to = $ans['posted_to'];
                     $posted_by= $ans['added_by'];
                     $remove = $ans['remove']; 

                     echo "$posted_by said: <br>".$answer."<hr><br>";
                 }}

    else{

    	echo "No Replies !!!!";
    }             

    ?>             