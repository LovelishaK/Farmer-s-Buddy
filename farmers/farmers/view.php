<?php session_start();$code=$_GET[ 'custID'];?>
	<?php 
    include( 'dbconnection.php'); 
    if(isset($_POST[ 'submit'])) 
    { 
        if(!isset($_SESSION[ 'email']) ||(!isset($_SESSION[ 'pwd']))) 
        { header( 'Location:login.php'); 
        } 
        else 
        { 
            $query="select * from product where product_code='$code'";
	        $result=mysqli_query($bd,$query); 
            while($row=mysqli_fetch_array($result)) 
            { 
                $image=$row[ 'image1']; 
                $pro_name=$row[ 'product_name']; 
                $price=$row[ 'product_price']; 
                $code=$row[ 'product_code']; 
                } 
                $email=$_SESSION['email']; 
                $quantity=$_POST[ 'quantity']; 
                /* echo "$email"; echo "$code"; echo "$pro_name"; echo "$image"; echo "$quantity"; echo "$price";*/ 
                $queryadd="insert into shopping_cart values('','$email','$code','$pro_name','$image','$quantity','$price','','')";
	            $rsadd=mysqli_query($bd,$queryadd); if($rsadd) { header( 'location:checkout.php'); 
                } 
                } 
                } 
                ?>
		<?php include( "header2.php") ?>
			<?php include( "mainhead.php") ?>
				<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Product / View</li>
            </ol>
        </div>
    </div>
				<div class="showcase-grid" style="margin: 30px;">
					<div class="container">
						<?php include ( 'dbconnection.php'); $query="select * from product where product_code='$code'"; $result=mysqli_query($bd,$query); while($row=mysqli_fetch_array($result)) { $image=$row[ 'image1']; $pro_name=$row[
						'product_name']; $price=$row[ 'product_price']; $code=$row[ 'product_code']; ?>
							<div class="col-md-8 showcase">
								<div class="flexslider">
									<ul class="slides">
										<li data-thumb="images/show.jpg">
											<div class="thumb-image">
												<img src="admin/images/<?php echo $row['image1'];?>" data-imagezoom="true" class="img-responsive">
											</div>
										</li>
									</ul>
									<div class="clearfix">
									</div>
								</div>
							</div>
							<div class="col-md-4 showcase">
								<div class="showcase-rt-top">
									<div class="pull-left shoe-name">
										<h3>
											<?php echo $row[ 'product_name'];?>
										</h3>
										<p>
                                            <br />
										</p>
                                        <h2 class="item_price">&#8377;
											<?php echo $row[ 'product_price'];?></h2>
										<h4>
											
										</h4>
									</div>
									<div class="clearfix">
									</div>
								</div>
								<hr class="featurette-divider">
								<div class="shocase-rt-bot">
									<div class="float-qty-chart">
                                    <form name="form1" method="post">
											
										<ul>
											
											<li class="qty">
												<h4>
													QTY
												</h4>
												<select class="form-control qnty-chrt" name="quantity">
													<option>
														1
													</option>
													<option>
														2
													</option>
													<option>
														3
													</option>
													<option>
														4
													</option>
													<option>
														5
													</option>
													<option>
														6
													</option>
													<option>
														7
													</option>
												</select>
											</li>
										</ul>
										<div class="clearfix">
										</div>
									</div>
									<div class="btn_form">
                       <a href="#"  class="add-cart item_add"><input type="submit" name="submit" value="ADD TO CART" style="border: none; background-color:  transparent;"></a>	
                    </div>
                                    </form>
								</div>
								<div class="showcase-last">
									<h3>
										product details
									</h3>
									Warranty:
									<?php echo $row[ 'brand'];?>
										<br />
										Shipping Time:
										<?php echo $row[ 'shipping_time'];?>
											<br />
											Description:
											<?php echo $row[ 'description'];?>
								</div>
							</div>
							<div class="clearfix">
							</div>
					</div>
				</div>
				<?php } ?>
					<?php include( "footer.php") ?>