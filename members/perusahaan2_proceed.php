<?php
session_start();
if (!isset($_SESSION['username'])) { header('Location: http://'.$_SERVER['SERVER_NAME'].'/php/form1/login.php'); }  

include_once 'db.php';

// escape variables for security
$id_users = mysqli_real_escape_string($con, $_POST['id_users']);
$nomorakta1 = mysqli_real_escape_string($con, $_POST['nomorakta1']);
$tanggal1 = mysqli_real_escape_string($con, $_POST['tanggal1']);
$notaris1 = mysqli_real_escape_string($con, $_POST['notaris1']);
$nomorakta2 = mysqli_real_escape_string($con, $_POST['nomorakta2']);
$tanggal2 = mysqli_real_escape_string($con, $_POST['tanggal2']);
$notaris2 = mysqli_real_escape_string($con, $_POST['notaris2']);
$fileakta1 = mysqli_real_escape_string($con, $_POST['fileakta1']);
$fileakta2 = mysqli_real_escape_string($con, $_POST['fileakta2']);


$sql="INSERT INTO tbl_akta_perusahaan
(id_users, nomorakta1, tanggal1, notaris1, nomorakta2, tanggal2, notaris2, fileakta1, fileakta2)
VALUES($id_users, $nomorakta1, $tanggal1, $notaris1, $nomorakta2, $tanggal2, $notaris2, $fileakta1, $fileakta2);fg
";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added<br>";
echo "<a href=\"perusahaan1.html\">Kembali (data utama)</a> | <a href=\"perusahaan2.html\">Berikutnya (akta perusahaan)</a> ";

mysqli_close($con);
?>