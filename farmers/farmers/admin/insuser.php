<?php
    include('config.php');
    $today = date("Y-m-d H:i:s");
	$userfullname = $_POST['userfullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $passwordForDB = MD5($password);
    $save=mysqli_query($bd,"INSERT INTO users(userFullName,username,password,userRole,isActive,lastUpdatedOn) VALUES('$userfullname','$username','$passwordForDB','user',1,'$today')");
	header("location: users.php");
	exit();		
?>
