<?php
session_start();
include_once 'config.php';

$id = @$_POST['id'];
$table = @$_POST['table'];
$rate = @$_POST['rate'];

  if(isset($_SESSION['id'])){
    mysqli_query($db,"UPDATE $table SET rate='$rate' WHERE id='$id'");
  }
?>