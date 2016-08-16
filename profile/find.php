<?php
session_start();
// establish connection to database
$db=mysqli_connect('localhost', 'Ankit', 'ankit', "my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

      
            $search_term = @$_POST['search_term'];
          if (isset($_POST["search_term"]))
         {
              if(!empty($search_term)){

              $search_n = mysqli_query($db,"SELECT * FROM product_update WHERE Title like '%$search_term%' limit 5 ");
              $result_count = mysqli_num_rows($search_n);
              
              $string = ''; 
              $string = '<ul class= "searchresults">' ; 
              while ($results_row = mysqli_fetch_assoc($search_n)){
                    $Title = $results_row['Title'];
                    $_SESSION['Title']=$Title;
                     $string .= '<li>';
                     $string .= '<h3><a href="prod.php">' .$results_row['Title']. '</a></h3>';
                     $string .= '</li>'; 
              }
               $string .= '</ul>';
               echo $string ;
              } 
          
          }
?>
