<?php
   session_start();
   
   session_destroy();

   if(!isset($_SESSION['id'])){
      header("location:../php/signin.php");
   } else {
    session_destroy();
    header("location:../php/signin.php");
   }

?>