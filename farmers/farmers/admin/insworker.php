<?php
    include('config.php');
    $today = date("Y-m-d");
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$exp = $_POST['exper'];
    $address = $_POST['address'];
    $category = $_POST['ddlcat'];
    $save=mysqli_query($bd,"INSERT INTO tb_workers(name,phone,experience,category,address,status,date) VALUES('$name','$phone','$exp','$category','$address','active','$today')");
	header("location: workers.php");
	exit();		
?>
