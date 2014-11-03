<?php
include_once 'db.php';

//set var
$offset    = 0;
$row_count = 10;

// get total
$result = mysqli_query($con,"SELECT COUNT(*) FROM `tbl_users`");
if (!$result) {die('Error: ' . mysqli_error($con)); }	// if error
$total  = $result->fetch_all();
$total  = (int) $total[0][0];
mysqli_free_result($result);

// real query
$select = "SELECT * FROM `tbl_users`";
$limit  = ($offset==null) ? " LIMIT ".$row_count : " LIMIT ".$offset.",".$row_count ;
if (isset($_GET['username'])) {
	$sql = $select." WHERE `username`='".urldecode($_GET['username'])."'";
} else {
	$sql = $select.$limit;
}
$result = mysqli_query($con,$sql);
if (!$result) {die('Error: ' . mysqli_error($con)); }	// if error

// store to array
$meta = array('num_rows'=> $result->num_rows,'total'=> $total,'offset'=>$offset,'row_count'=>$row_count);
$all = $result->fetch_all();
$data['meta'] = $meta;
$data['fields'] = $result->fetch_fields();
$data['data'] = $all;

// parse to json
header('Content-Type: application/json');
echo json_encode($data);
// return $data;

mysqli_free_result($result);
mysqli_close($con);
?>