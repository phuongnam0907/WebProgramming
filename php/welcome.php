<?php
session_start();
   include('session.php');
?>
<html">
   
   <head>
      <title>Assignment 2 </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "../php/logout.php">Sign Out</a></h2>
   </body>
   
</html>