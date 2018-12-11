<?php
	session_start();
	include_once 'config.php';

	$getcmt = @$_POST['cmt'];
	$getid = @$_POST['id'];
	$table = @$_POST['table'];

	$rowq = @mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM $table WHERE id='$getid'"));
	$cm = $rowq['comment'];

	if($getcmt!='') {
	  $r = "<b>".@$_SESSION['login_username'].":</b> ".$getcmt."<br>".$cm;
	  $rowa = @mysqli_fetch_assoc(mysqli_query($db,"UPDATE $table SET comment='$r' WHERE id='$getid'"));
	}
	$row = @mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM $table WHERE id='$getid'"));
	echo $row['comment'];
?>