<?php
include ("header.php");
//echo "welcome " ." ". $user;
//echo "<br>would you like to logout <a href= 'logout.php'>logout </a>";
?>

<div class= "questionwall">
<h2>Trending 50 !!! </h2>
</div>



<div class= space>
<?php
// stores the fetch query
$getposts = mysqli_query($db,"SELECT * FROM posts ORDER BY id DESC LIMIT 50") or die(mysqli_error());
// stores the associative array

while ($row = mysqli_fetch_assoc($getposts)){

	                $id = $row['id'];
	                $body = $row['body'];
	                $date_added = $row['date_added'];
	                $added_by = $row['added_by'];
	                $user_posted_to = $row['user_posted_to'];
      
                  
                    
                 ?>
                     <script language="javascript">
                     function toggle<?php echo $id;?>(){
                     var ele = document.getElementById("toggleAnswer<?php echo $id;?>");
                     var text = document.getElementById("displayAnswer<?php echo $id;?>");
                     if (ele.style.display == "block"){
                     ele.style.display = "none";
                 }
                 else {
                 	ele.style.display ="block";
            	 }
                 }
                     </script>
<?php 
                   // display  
	               $post= " <div id= roll >  <a href='../profile/".$added_by."'>$added_by</a> - $date_added   \n '$body'\n <br> <br> 
	               <div class=options> 
	               
  				   <a href='javascript:;' onClick='javascript:toggle$id() '> Show Replies</a>
	                
	               	<div id='toggleAnswer$id' style='display:none;'>
	               	<br> 
	               	<iframe src='cmnt.php?id=$id' style='height: auto; border:none; width:100%; min-height:10px;'></iframe></div>
	               </div></div>";
	               echo $post;


}
?>
</div>