<?php
    $code=$_GET['code'];
	include 'config.php';

	$query="delete from  product where product_code='".$code."'";

	$rs=mysqli_query($bd,$query);

	if($rs)

	{

		header('location:product.php' );

	}

?>