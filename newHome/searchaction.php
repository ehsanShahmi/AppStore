<?php
session_start();
include_once "../dbhelper.php";

if(!isset($_SESSION['user']))
{
	header("Location: ../index.php");	//go back to previous directory
}
$data = $_POST['bar'];
echo "search " . $data;
	$row = $db->getAppInfo($data);
		
	if($row!=0)
	{	
		echo $row['app_price'];

		$_SESSION['name'] = $row['app_name'];
		$_SESSION['image'] = $row['image'];
		$_SESSION['price'] = $row['app_price'];
		$_SESSION['company'] = $row['app_company'];
		$_SESSION['rating'] = $row['rating'];
		$_SESSION['description'] = $row['description'];
		$_SESSION['os'] = $row['app_os'];
		$_SESSION['type'] = $row['app_type'];


		header("Location: single.php");
	}
	
?>
