<?php
	header("Access-Control-Allow-Origin: *");
	include($_SERVER["DOCUMENT_ROOT"] . "/connection/cmaster.php");
	
	$position = $_POST['position'];
	$posObj = json_decode($position);
	$posArr = (array) $posObj;
	
	$pos_id = $posArr['id'];
	
	$remove_sql = "delete from position_master where id=$pos_id";
	mysql_query($remove_sql);
	
	$resp = array();
	$resp['status_code'] = 'SUCCESS';
	$resp['status_msg'] = 'Position removed successfully';
	$resp['ret_obj'] = $position;
?>