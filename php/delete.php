<?php
session_start();
	include_once 'config.php';

  	if (isset($_GET['delete']) && $_GET['delete'] == true && isset($_GET['file']) && !empty($_GET['file'])){
    $directory = 'uploads/'.$_GET['file'];
    $id = $_GET['file'];
    @unlink($directory);
    $query=mysqli_query($db,"DELETE FROM tbl_uploads WHERE file='$id'");
    if($query){
        if (@$_SESSION['type'] == "admin") @header("Location: view.php");
        else @header("Location: view-user.php");
    }else{
        echo "An error occured";
    }
}
?>