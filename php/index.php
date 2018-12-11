<?php
function validate_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($_POST['id']))
{
	$id = validate_input($_POST['id']);
	$id = filter_var($id, FILTER_VALIDATE_INT);
}

if (isset($_POST['username']))
{
	$username = validate_input($_POST['username']);
	$username = (strlen($username) > 3 && strlen($username) < 40)?$username: NULL;
}

if (isset($_POST['email']))
{
	$email = validate_input($_POST['email']);
	$email = (strlen($email) > 1 && strlen($email) < 50)?$email: NULL;
}

$type = validate_input($_POST['type']);
switch ($type) {
	case 'admin':
		$type = 'admin';
		break;
	case 'user':
		$type = 'user';
		break;
	default:
		$type = NULL;
		break;
}
$option = validate_input($_POST['option']);

$servername = "localhost";
$usernamedb = "root";
$password = "";
$dbname = "database";
$sql = "";

$conn = mysqli_connect($servername, $usernamedb, $password, $dbname);

switch ($option)
{
case "insert":
	$count = 0;

	$sql_count = "SELECT COUNT(*) FROM admin WHERE id='$id'";
	$result1 = mysqli_query($conn, $sql_count);
	$row1 = mysqli_fetch_assoc($result1);
	$count += $row1['COUNT(*)'];

	$sql_count_a = "SELECT COUNT(*) FROM admin WHERE username='$username'";
	$result2 = mysqli_query($conn, $sql_count_a);
	$row2 = mysqli_fetch_assoc($result2);
	$count += $row2['COUNT(*)'];

	if($count == 0){
		if (($username != NULL) && ($type != NULL)) $sql = "INSERT INTO admin (id,username,passcode,type,email) VALUES ('$id','$username','1234','$type','$email')";
		mysqli_query($conn, $sql);
	} else die("Exit in database");
	break;
case "edit":
	if ($username != NULL && $type != NULL && $email != NULL)	$sql = "UPDATE admin SET username='$username',type='$type',email='$email' WHERE id=$id";
	else if ($username != NULL && $type != NULL) $sql = "UPDATE admin SET username='$username',type='$type' WHERE id=$id";
	else if ($username != NULL && $email != NULL) $sql = "UPDATE admin SET username='$username',email='$email' WHERE id=$id";
	else if ($email != NULL && $type != NULL) $sql = "UPDATE admin SET email='$emal',type='$type' WHERE id=$id";
	else if ($username != NULL) $sql = "UPDATE admin SET username='$username' WHERE id=$id";
	else if ($type != NULL)	$sql = "UPDATE admin SET type='$type' WHERE id=$id";
	else if ($email != NULL)	$sql = "UPDATE admin SET email='$email' WHERE id=$id";
	mysqli_query($conn, $sql);
	break;
case "delete":
	$sql = "DELETE FROM admin WHERE id=$id";
	mysqli_query($conn, $sql);
	break;
default:
	break;
}

$sql = "SELECT * FROM admin ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
$car = array();
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$car[] = $row;
	}
}
$JSON = json_encode($car);
echo $JSON;

mysqli_close($conn);

?>
