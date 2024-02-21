
<?php
	include("dbconnection.php");
	//include("Admin/Functions.php");
	$displayImages = null;
	   $sqlSelProd = mysqli_query($bd,"select * from product where pro_cat='Fertilizers'") or die(mysql_error());
		while($getProdInfo = mysqli_fetch_array($sqlSelProd)){
			$prodNo = $getProdInfo["product_code"];
			$prodname = $getProdInfo["product_name"];
			$prodimg = $getProdInfo["image1"];
			$prodPrice = $getProdInfo["product_price"];
			
			$displayImages .= '<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="new-top">
                        <a href="view.php?custID='.$prodNo.'"><img src="admin/images/'.$prodimg.'" class="img-responsive" alt="" /></a>
                        <div class="new-text">
                            <ul>
                                <li><a href="view.php?custID='.$prodNo.'">Quick View </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="new-bottom">
                        <h5><a class="name" href="single.html">'.$prodname.'</a></h5>
                        
                        <div class="ofr">
                            <p>&#8377; <span class="item_price">'.$prodPrice.'</span></p>
                        </div>
                    </div>
                </div>';
		
	}
	
?>
<?php session_start();?>
<?php include("header.php") ?>
<?php include("mainhead.php") ?>
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Fertilizers</li>
            </ol>
        </div>
    </div>
<div class="products">
        <div class="container">
            <div class="col-md-12 ">
			<?php echo $displayImages; ?>
			<div class="clearfix">
			</div>
		</div>
	</div>
</div>
 <?php include("footer.php") ?>    