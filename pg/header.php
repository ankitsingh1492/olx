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

  <body id= "home">
    <script src="js/wow.js"></script><script>new WOW().init(); </script>
      <div class = "page">
                  <div id="pagetop">
                        <div id="logo-top"> <a href="index.html" id="logo"> <img src="../img/logo.png"> </a> </div>  
                        <div id= "menu"> 
                   <div id="content">                      
                         <div id="searchbox">                         
                         <form class="form-search">
                      <input type ="search" class="input-xlarge search-query"  placeholder = "search for products" id="search">
                      </form>
                          </div>
                          <div id= "update"></div>                      
                          </div>
                                       
                  </div>
                </div>
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
?>
              

   <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/parallax-blur.js"></script>
    <script src ="../js/script.js"></script> 
        <script src ="../js/pro.js"></script> 
     <script type="text/javascript" src="../js/drop.js"></script>
    <script type="text/javascript" src="../js/upload.js"></script>
    <script type="text/javascript" src="../js/form.js"></script>