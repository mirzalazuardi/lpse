<?php
include_once 'conf/db_object.php';
include_once 'conf/vars.php';

$username = $conn->escape_string($_POST['username']);
$password = $conn->escape_string(md5($_POST['password']));

$sql = "SELECT * FROM `tbl_users` WHERE `username`='".$username."' AND `password`='".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
	$row = $result->fetch_assoc();

    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $row['email'];

    header('Location: '.$base_url.'/members/');
} else {
	// $error = array('error' => 'salah password');
    // json_encode($error);
    header('Location: '.$base_url.'/login');
}
mysqli_free_result($result);
$conn->close();
?>