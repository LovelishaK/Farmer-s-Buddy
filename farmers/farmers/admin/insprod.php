<?php  
session_start();  
  
?>
<?php
    include('config.php');
    $file = rand(1000,10000000)."-".$_FILES['file']['name'];
         $file_loc = $_FILES['file']['tmp_name'];
	     $file_size = $_FILES['file']['size'];
	     $file_type = $_FILES['file']['type'];
	     $folder="images/";
	
	    // new file size in KB
	    $new_size = $file_size/1024;  
	    // new file size in KB
	
	    // make file name in lower case
	    $new_file_name = strtolower($file);
	    // make file name in lower case
	
	    $final_file=str_replace(' ','-',$new_file_name);
	
	    if(move_uploaded_file($file_loc,$folder.$final_file))
	    {
            $result = mysqli_query($bd,"SELECT * FROM tb_prefix where Transactiontype='products'");    
        	$i=0;
        	while($row = mysqli_fetch_array($result)) {
        	extract($row);
            $prefix = $row['prefix'];
            $startno = $row['startno'];
            }
            $regtic = $prefix.$startno; 
            $today = date("Y-m-d H:i:s");
        	$name = $_POST['name'];
        	$price = $_POST['price'];
        	$description = $_POST['description'];
            $shipping = $_POST['exper'];
        	$ddlcat = $_POST['ddlcat'];
            
           
        	$brand = $_POST['ddlbrand'];
           
            $save=mysqli_query($bd,"INSERT INTO product(product_code,product_name,pro_cat,product_price,description,shipping_time,image1,brand) VALUES('$regtic','$name','$ddlcat','$price','$description','$shipping','$final_file','$brand')");
        	
            $result = mysqli_query($bd,"SELECT * FROM tb_prefix where Transactiontype='products'");    
        	$i=0;
        	while($row = mysqli_fetch_array($result)) {
        	extract($row);
            $startno1 = $row['startno'];
            }
            $sub = $startno1 + 1;
            $save=mysqli_query($bd,"Update tb_prefix set startno='$sub' WHERE Transactiontype='products'");
                 
            header("location: product.php");
        	exit();	
      }
	    else
	    {
		    ?>
		    <script>
		    alert('error while uploading file');
            window.location.href='top.php?fail';
            </script>
		    <?php
	    }	
?>
