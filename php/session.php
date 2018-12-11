<?php
session_start();
   include('config.php');
   
   $user_check = $_SESSION['login_username'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];
   
   $type_sql = mysqli_query($db,"select type from admin where username = '$user_check' ");
   $t = mysqli_fetch_array($type_sql,MYSQLI_ASSOC);
   $check_type = $t['type'];

   $id_sql = mysqli_query($db,"select id from admin where username = '$user_check' ");
   $ssid = mysqli_fetch_array($id_sql,MYSQLI_ASSOC);
   $_SESSION['id'] = $ssid['id'];

   $_SESSION['type'] = $t['type'];

   switch ($check_type) {
   	case 'admin':
         header("Location: ../php/privateadmin.php");
   		break;
   	case 'user':
   		header("Location: ../php/privatepage.php");
   		break;
   	default:
   		break;
   }

   if(!isset($_SESSION['login_username'])){
      header("location:../php/signin.php");
   }
?>