<?php
session_start();
if (!isset($_SESSION['username'])) { header('Location: http://'.$_SERVER['SERVER_NAME'].'/php/form1/login.php'); }  

include_once 'db.php';

// escape variables for security
$namaperusahaan = mysqli_real_escape_string($con, $_POST['namaperusahaan']);
$id_users       = mysqli_real_escape_string($con, $_POST['id_users']);
$npwp           = mysqli_real_escape_string($con, $_POST['npwp']);
$nomorpkp       = mysqli_real_escape_string($con, $_POST['nomorpkp']);
$alamat         = mysqli_real_escape_string($con, $_POST['alamat']);
$propinsi       = mysqli_real_escape_string($con, $_POST['propinsi']);
$kota           = mysqli_real_escape_string($con, $_POST['kota']);
$kodepos        = mysqli_real_escape_string($con, $_POST['kodepos']);
$telepon        = mysqli_real_escape_string($con, $_POST['telepon']);
$fax            = mysqli_real_escape_string($con, $_POST['fax']);
$mobilephone    = mysqli_real_escape_string($con, $_POST['mobilephone']);
$email          = mysqli_real_escape_string($con, $_POST['email']);
$website        = mysqli_real_escape_string($con, $_POST['website']);
$kantorcabang   = mysqli_real_escape_string($con, $_POST['kantorcabang']);
$websiteutama   = mysqli_real_escape_string($con, $_POST['websiteutama']);

// optional
$alamatutama    = (isset($_POST['alamatutama'])) ? mysqli_real_escape_string($con, $_POST['alamatutama']) : '';
$teleponutama   = (isset($_POST['teleponutama'])) ? mysqli_real_escape_string($con, $_POST['teleponutama']) : '';
$faxutama       = (isset($_POST['faxutama'])) ? mysqli_real_escape_string($con, $_POST['faxutama']) : '';
$emailutama     = (isset($_POST['emailutama'])) ? mysqli_real_escape_string($con, $_POST['emailutama']) : '';


$sql="INSERT INTO tbl_utama_perusahaan (namaperusahaan,id_users,npwp,nomorpkp,alamat,propinsi,kota,kodepos,telepon,fax,mobilephone,email,website,kantorcabang,websiteutama,alamatutama,teleponutama,faxutama,emailutama)
VALUES ('$namaperusahaan','$id_users','$npwp','$nomorpkp','$alamat','$propinsi','$kota','$kodepos','$telepon','$fax','$mobilephone','$email','$website','$kantorcabang','$websiteutama','$alamatutama','$teleponutama','$faxutama','$emailutama')";
$msg= "1 record added<br>";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

header('Location: http://uji.tst/php/form1/perusahaan2.php?id_utama='.mysqli_insert_id($con));
echo $msg;
echo "<a href=\"perusahaan1.html\">Kembali (data utama)</a> | <a href=\"perusahaan2.html\">Berikutnya (akta perusahaan)</a> ";

mysqli_close($con);
?>