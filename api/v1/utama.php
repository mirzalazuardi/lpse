<?php
// get configs
// include_once '../../conf/db.php';
include_once '../../conf/db_object.php';
include_once '../../members/cek_session_user.php';

// get input
$dt = file_get_contents('php://input');
$arr = explode(',', $dt); 
if(count($arr)==17) {
	list($namaperusahaan, $npwp, $nomorpkp, $alamat, $propinsi, $kota, $kodepos, $telepon, $fax, $mobilephone, $email, $website, $kantorcabang, $alamatutama, $teleponutama, $faxutama, $emailutama) = explode(',', $dt);
} elseif(count($arr)==13) {
	list($namaperusahaan, $npwp, $nomorpkp, $alamat, $propinsi, $kota, $kodepos, $telepon, $fax, $mobilephone, $email, $website, $kantorcabang) = explode(',', $dt);
}	
unset($arr,$dt);

// get data pake pattern regex ini, JANGAR MANEH BIKINNYA
$realdata_pattern = '/\{?\s*\"[\w-]*\"\s*:\s*\"?([\w\s\/:.@-]*)\"?\s*\}?/';

// store
$namaperusahaan   = preg_replace($realdata_pattern, '$1',$namaperusahaan);
$npwp             = preg_replace($realdata_pattern, '$1',$npwp);
$nomorpkp         = preg_replace($realdata_pattern, '$1',$nomorpkp);
$alamat           = preg_replace($realdata_pattern, '$1',$alamat);
$propinsi         = preg_replace($realdata_pattern, '$1',$propinsi);
$kota             = preg_replace($realdata_pattern, '$1',$kota);
$kodepos          = preg_replace($realdata_pattern, '$1',$kodepos);
$telepon          = preg_replace($realdata_pattern, '$1',$telepon);
$fax              = preg_replace($realdata_pattern, '$1',$fax);
$mobilephone      = preg_replace($realdata_pattern, '$1',$mobilephone);
$email            = preg_replace($realdata_pattern, '$1',$email);
$website          = preg_replace($realdata_pattern, '$1',$website);
$kantorcabang     = preg_replace($realdata_pattern, '$1',$kantorcabang);
$data             = array('namaperusahaan'=> $namaperusahaan, 'npwp'=> $npwp, 'nomorpkp'=> $nomorpkp, 'alamat'=> $alamat, 'propinsi'=> $propinsi, 'kota'=> $kota, 'kodepos'=> $kodepos, 'telepon'=> $telepon, 'fax'=> $fax, 'mobilephone'=> $mobilephone, 'email'=> $email, 'website'=> $website, 'kantorcabang'=> $kantorcabang);
$flds             = '`id_users`, `namaperusahaan`, `npwp`, `nomorpkp`, `alamat`, `propinsi`, `kota`, `kodepos`, `telepon`, `fax`, `mobilephone`, `email`, `website`, `kantorcabang`';
$isi 			  = "$_SESSION[id], '$namaperusahaan', '$npwp', '$nomorpkp', '$alamat', '$propinsi', '$kota', '$kodepos', '$telepon', '$fax', '$mobilephone', '$email', '$website', $kantorcabang";
unset($namaperusahaan,$npwp,$nomorpkp,$alamat,$propinsi,$kota,$kodepos,$telepon,$fax,$mobilephone,$email,$website,$realdata_pattern);

// store data kantor utama
if($kantorcabang=='1') {
	$alamatutama  = preg_replace($realdata_pattern, '$1',$alamatutama);
	$teleponutama = preg_replace($realdata_pattern, '$1',$teleponutama);
	$faxutama     = preg_replace($realdata_pattern, '$1',$faxutama);
	$emailutama   = preg_replace($realdata_pattern, '$1',$emailutama);
	$datatambahan = array('alamatutama'=> $alamatutama, 'teleponutama'=> $teleponutama, 'faxutama'=> $faxutama, 'emailutama'=> $emailutama);
	$flds         .= ' ,`alamatutama`, `teleponutama`, `faxutama`, `emailutama`';
	$isi          .= " ,'$alamatutama', '$teleponutama', '$faxutama', '$emailutama'";
	unset($alamatutama,$teleponutama,$faxutama,$emailutama);
}
unset($kantorcabang);

// store to db
$sql  = "INSERT INTO `tbl_utama_perusahaan` ($flds) VALUES ($isi)";
if (!$conn->query($sql)) {
  die('Error: ' . $conn->error);
}
unset($sql);

// create dir
$akta = mkdir("/srv/http/prj/lpse/members/uploaded_files/$conn->insert_id/akta/", 0777, true);
$ijin = mkdir("/srv/http/prj/lpse/members/uploaded_files/$conn->insert_id/ijin/", 0777, true);

// store message
$msg = array('info'=> 'Data berhasil di rekam', 'id'=> $conn->insert_id, 'folder_akta'=> $akta, 'folder_ijin'=> $ijin );

// show json
header('Content-Type: application/json');
echo json_encode($msg);
unset($msg);
?>