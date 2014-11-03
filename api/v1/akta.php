<?php
// get configs
// include_once '../../conf/db.php';
include_once '../../conf/db_object.php';
include_once '../../members/cek_session_user.php';

// get input
$dt = file_get_contents('php://input');
	list($tanggal1, $tanggal2, $nomorakta1, $notaris1, $nomorakta2, $notaris2 ) = explode(',', $dt);
unset($dt);

// get data pake pattern regex ini, JANGAR MANEH BIKINNYA
$realdata_pattern = '/\{?\s*\"[\w-]*\"\s*:\s*\"?([\w\s\/:.@-]*)\"?\s*\}?/';

// store
$tanggal1       = preg_replace($realdata_pattern, '$1',$tanggal1);
$tanggal2       = preg_replace($realdata_pattern, '$1',$tanggal2);
$nomorakta1     = preg_replace($realdata_pattern, '$1',$nomorakta1);
$notaris1       = preg_replace($realdata_pattern, '$1',$notaris1);
$nomorakta2     = preg_replace($realdata_pattern, '$1',$nomorakta2);
$notaris2       = preg_replace($realdata_pattern, '$1',$notaris2);
$data           = array('tanggal1'=> $tanggal1, 'tanggal2'=> $tanggal2, 'nomorakta1'=> $nomorakta1, 'notaris1'=> $notaris1, 'nomorakta2'=> $nomorakta2, 'notaris2'=> $notaris2 );
$flds           = '`tanggal1`, `tanggal2`, `nomorakta1`, `notaris1`, `nomorakta2`, `notaris2`';
$isi            = "'$tanggal1', '$tanggal2', '$nomorakta1', '$notaris1', '$nomorakta2', '$notaris2'";
unset($tanggal1, $tanggal2, $nomorakta1, $notaris1, $nomorakta2, $notaris2, $realdata_pattern);

// store to db
$sql  = "INSERT INTO `tbl_akta_perusahaan` ($flds) VALUES ($isi)";
if (!$conn->query($sql)) {
  die('Error: ' . $conn->error);
}
unset($sql);

// store message
$msg = array('info'=> 'Data berhasil di rekam', 'id'=> $conn->insert_id );

// show json
header('Content-Type: application/json');
echo json_encode($msg);
unset($msg);
?>