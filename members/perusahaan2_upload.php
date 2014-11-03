<?php
include_once 'cek_session_user.php';

//set destination (saved file)
$tdir = $_SERVER['DOCUMENT_ROOT'].'/members/uploaded_files/';
    $target_dir = $tdir;                //SEMENTARA
// $target_dir = $tdir. $_SESSION['id'].'/akta/';
if (!is_dir($target_dir) && !mkdir($target_dir)){
  die("Error creating folder $target_dir");
}

$fl =  $_SESSION['id'].'_'.basename( $_FILES["file"]["name"]);  // <<< uploaded file

//get type
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES["file"]["tmp_name"]);
finfo_close($finfo);
$typefile = $mime;   //<<<< this the type of file

//exist ?
$exist = false;
/*if (file_exists($target_dir . $_FILES["file"]["name"])) {
    exit("Maaf, file ini sudah ada.");
    $exist = true;
}*/

// Check file size
$oversized = false;
/*if ($_FILES["file"]["size"] > 500000) {
    exit("Maaf, file terlalu besar dari 500KB.");
    $oversized = true;
}*/


// Only allowed file types
$notallowedtype = false;
$imgtypes = array('image/jpeg', 'image/pjpeg', 'image/pjpeg', 'image/gif', 'image/png');
$doctypes = array('application/msword', 'text/plain', 'application/pdf', 'application/rtf', 'application/x-rtf', 'text/richtext', 'application/excel', 'application/mspowerpoint', 'application/powerpoint', 'application/vnd.ms-powerpoint', 'application/x-mspowerpoint');
$compresstypes = array('application/x-rar-compressed', 'application/x-compressed', 'application/x-zip-compressed', 'application/zip', 'multipart/x-zip');
if (!in_array($typefile, $imgtypes)) {
    exit("Maaf, hanya file gambar yg diperbolehkan.");
    $notallowedtype = true;
}

$ok = ((!$exist)&&(!$oversized)&&(!$notallowedtype)) ? true : false;

if(!$ok) {
    echo "Maaf, proses upload file gagal, karena ada ketidakseuaian standar file(tidak valid).";
} else {
	//move tmp to destination
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$fl)) {
	    echo "File ". basename( $_FILES["file"]["name"]). " telah berhasil di upload. $fl";
	} else {
	    echo "Maaf, proses upload file gagal, karena ada error.";
	}
}
?>