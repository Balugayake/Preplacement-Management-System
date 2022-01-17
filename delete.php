<?php

	session_start();
	

	include('functions.php');
	$id = base64_decode($_GET['id']);
	$delete_query = new func();
	$sql = $delete_query->delete($id);
	if($sql){ 
	  header('location: disp_all.php');
	}
	else{
		echo "ERROR : " .mysqli_error($db);
	}
?>