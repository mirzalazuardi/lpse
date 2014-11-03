<?php
include_once 'conf/db.php';

// escape variables for security
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));
$email = mysqli_real_escape_string($con, $_POST['email']);


$sql="INSERT INTO tbl_users
(username, `password`, email)
VALUES('$username','$password','$email')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

$page = <<<PAGE
		<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <title>Daftar berhasil</title> <link rel="stylesheet" 
		href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css"> </head> <body> <div 
		class="container-fluid"> <div class="row"> <div class="col-md-2 col-lg-2"/></div> <div class="col-xs-12 
		col-sm-12 col-md-8 col-lg-8"/> <h2>Data sudah di rekam.</h2> <a href="login.php" class="btn btn-link">Kembali ke Login</a> 
		</div> <div class="col-md-2 col-lg-2"/></div> </div> </div> </body> </html>
PAGE;

echo $page;

mysqli_close($con);
?>