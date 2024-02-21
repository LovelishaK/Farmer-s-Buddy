<?php  
session_start();  
  
?>
<?php
            include('dbconnection.php');
            $result = mysqli_query($bd,"SELECT * FROM tb_prefix where Transactiontype='ticket'");    
        	$i=0;
        	while($row = mysqli_fetch_array($result)) {
        	extract($row);
            $prefix = $row['prefix'];
            $startno = $row['startno'];
            }
            $regtic = $prefix.$startno; 
            $today = date("Y-m-d H:i:s");
        	$name = $_POST['txtname'];
        	$add = $_POST['txtadd'];
            $email = $_POST['txtemail'];
        	$items = $_POST['txtitem'];
        	$totalamt = $_POST['txttotalamount'];
            $save=mysqli_query($bd,"INSERT INTO orderdetails(orderno,name,email,address,items,totalamount,bookeddate) VALUES('$regtic','$name','$email','$add','$items','$totalamt','$today')");
        	
            $result = mysqli_query($bd,"SELECT * FROM tb_prefix where Transactiontype='ticket'");    
        	$i=0;
        	while($row = mysqli_fetch_array($result)) {
        	extract($row);
            $startno1 = $row['startno'];
            }
            $sub = $startno1 + 1;
            $save=mysqli_query($bd,"Update tb_prefix set startno='$sub' WHERE Transactiontype='ticket'");
            $save=mysqli_query($bd,"Update shopping_cart set txn_status='order' WHERE email='$email'");     
            header("location: orderconfirm.php?custID=$regtic");
        	exit();		
?>
