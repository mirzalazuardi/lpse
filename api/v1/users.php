<?php
include_once 'db.php';
include_once '../../members/cek_session_user.php';

if($_SERVER['REQUEST_METHOD']==='GET') {

	// real query
	$select = "SELECT * FROM `tbl_users`";
	if (isset($_GET['id'])) {
		$sql = $select." WHERE `id`='".urldecode($_GET['id'])."'";
	} else {
		$sql = $select;
	}
	$result = mysqli_query($con,$sql);
	if (!$result) {die('Error: ' . mysqli_error($con)); }	// if error

	// store to array
	$all = $result->fetch_all();
	$fields = $result->fetch_fields();
	$rows = $all;

	$i=0;
	foreach ($rows as $v) {
		$j=0;
		foreach ($fields as $value) {
			$data[$i][$value->name] = $v[$j];
			$j++;
		}
		$i++; 
	}	
	mysqli_free_result($result);

} elseif($_SERVER['REQUEST_METHOD']==='POST') {

	// get raw data
	$inputdata = file_get_contents('php://input');

	// store inputted to vars
	list($username,$password,$email) = explode(',', $inputdata);
	$realdata_pattern = '/\{?\s*\"[\w-]*\"\s*:\s*\"([\w\s.@-]*)\"\s*\}?/';
	$username = preg_replace($realdata_pattern, '$1',$username);
	$password = preg_replace($realdata_pattern, '$1',$password);
	$email = preg_replace($realdata_pattern, '$1',$email);

	// store to db
	$sql = "INSERT INTO `tbl_users`(username,password,email) VALUES ('".$username."','".$password."','".$email."')";
	$result = mysqli_query($con,$sql);
	if (!$result) {die('Error: ' . mysqli_error($con)); }	// if error

	// message
	$data = array('info'=>'data added');
} elseif($_SERVER['REQUEST_METHOD']==='PUT') {
	
	// get raw data
	$inputdata = file_get_contents('php://input');

	list($username,$password,$email) = explode(',', $inputdata);
	$realdata_pattern = '/\{?\s*\"[\w-]*\"\s*:\s*\"([\w\s.@-]*)\"\s*\}?/';
	$username = preg_replace($realdata_pattern, '$1',$username);
	$email = preg_replace($realdata_pattern, '$1',$email);

	//
	$sql = "UPDATE `tbl_users` SET email='".$email."' WHERE username='".$username."'";
	$result = mysqli_query($con,$sql);
	if (!$result) {die('Error: ' . mysqli_error($con)); }	// if error

	// message
	$data = array('info'=>'data updated');

	// var_dump($inputdata);

}

// parse to json
header('Content-Type: application/json');
echo json_encode($data);

mysqli_close($con);
?>