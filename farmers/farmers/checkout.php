
<?php session_start(); if(!isset($_SESSION[ 'email']) ||(!isset($_SESSION[ 'pwd']))) { header( 'location:login.php'); } $email=$_SESSION[ 'email']; $pwd=$_SESSION[ 'pwd']; ?>
	<?php
	include("dbconnection.php");
	//include("Admin/Functions.php");
	$displayImages = null;
	   $sqlSelProd = mysqli_query($bd,"select * from shopping_cart where email='".$email. "' and txn_status=''") or die(mysqli_error());
		while($getProdInfo = mysqli_fetch_array($sqlSelProd)){
			$prodid = $getProdInfo["ser_no"];
            $prodqty = $getProdInfo["quantity"];
			$prodname = $getProdInfo["product_name"];
			$prodimg = $getProdInfo["image1"];   
			$prodPrice = $getProdInfo["price"];
			
			$displayImages .= '<div class="cart-header">
							<div class="close1">
								<a href="cartdel.php?code2='.$prodid.'>" style="text-decoration:none; font-size: 25px; color: red;">X</a>
							</div>
							<div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									<img src="admin/images/'.$prodimg.'" class="img-responsive" alt=""/>
								</div>
								<div class="cart-item-info">
									<ul class="qty">
										<li>
											<p>
												'.$prodname.'
											</p>
										</li>
										<li>
											<p>
												Qty : '.$prodqty.'
											</p>
										</li>
										<li>
											<p>
												Price each : '.$prodPrice.'
											</p>
										</li>
									</ul>
									<div class="delivery">
										
										<span>
											Delivered in 2-3 bussiness days
										</span>
										<div class="clearfix">
										</div>
									</div>
								</div>
								<div class="clearfix">
								</div>
							</div>
						</div>';
		
	}
	
?>
    <?php include( "header.php") ?>
    <script type="text/javascript">
				
				

function validate()

{

	if (document.form1.txtname.value=="")

	

	{

		alert("Name Is Required!");

		document.form1.txtname.focus();

		return false;

		}
        if (document.form1.txtemail.value=="")

	

	{

		alert("Email Is Required!");

		document.form1.txtemail.focus();

		return false;

		}
        if (document.form1.txtitem.value=="")

	{

		alert("Phone Is Required!");

		document.form1.txtitem.focus();

		return false;

		}
        if (document.form1.txtadd.value=="")

	{

		alert("Address Is Required!");

		document.form1.txtadd.focus();

		return false;

		}
        if (document.form1.txttotalamount.value=="0")

	{

		alert("Cart is Empty");

		document.form1.txttotalamount.focus();

		return false;

		}
        }
        </script>
		<?php include( "mainhead.php") ?>
			<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Check Out page</li>
			</ol>
		</div>
	</div>
			<!-- check-out -->
            <form name="form1" method="post" onSubmit="return validate();" action="ins.php">
			<div class="check">
				<div class="container">
					<div class="col-md-3 cart-total">
						<a class="continue" href="#">Continue to basket</a>
						<div class="price-details">
							<h3>
								Price Details
							</h3>
						</div>
						<hr class="featurette-divider">
						<ul class="total_price">
							<li class="last_price">
								<h4>
									TOTAL
								</h4>
							</li>
							<li class="last_price">
								<span>
                                    <?php include( 'dbconnection.php'); $query="select * from shopping_cart where email='".$email. "' and txn_status=''"; 
                                    $result=mysqli_query($bd,$query); 
                                    $i=1; $amt=0; while($row=mysqli_fetch_array($result))
									{ $price=$row[ 'price']*$row[ 'quantity']; ?>
										
								<?php $i=$i+1; $amt=$amt+$price; $_SESSION[ 'amt']=$amt; } ?>
									<input type="text" value="<?php echo ''.$amt;?>" name="txttotalamount" id="txttotalamount"  style="display: none;" />
									<?php echo 'Rs '.$amt;?>
								</span>
							</li>
							<div class="clearfix">
							</div>
						</ul>
						<div class="clearfix">
						</div>
                        <br /><br />
                        <div class="price-details">
							<h3>
								Shipping Details
							</h3>
						</div>
						<hr class="featurette-divider">
                        <?php include 'dbconnection.php'; if(isset($_SESSION[ 'email'] )&& isset($_SESSION[ 'pwd'])) { $email=$_SESSION[ 'email']; $query="select * from user_details where email='$email'"; $result=mysqli_query($bd,$query);
						while($row=mysqli_fetch_array($result)) { ?>
							
                            <table>
                                <tr>
                                    <td>Name:&nbsp;</td>
                                    <td><input type="text" name="txtname" style="border: none;" id="txtname" value="<?php echo $row[ 'name'];?>" readonly /></td>
                                </tr>
                                <tr>
                                    <td>Email:&nbsp;</td>
                                    <td><input type="text" name="txtemail" style="border: none;" width="300px" id="txtemail" value="<?php echo $row[ 'email'];?>" readonly /></td>
                                </tr>
                                <tr>
                                    <td>Phone:&nbsp;</td>
                                    <td><input type="text" name="txtitem" style="border: none;" width="300px" id="txtitem" value="<?php echo $row[ 'contact'];?>" readonly /></td>
                                </tr>
                            </table>
									<br /><br />
										<p style=" color:#484848;  font-size:14px;">
											
												 Enter Shipping Address:<br />
												<font style=" font-size:14px;">
													&nbsp;
													<input type="text" name="txtadd" id="txtadd"  width="450px" />
												</font>
											
										</p>
									
                            
							<?php } } ?>
							<div class="clearfix">
							</div>
                            <br />
                            <input  class="order1" type="submit" name="submit" value="Place Order">
						
					</div>
					<div class="col-md-9 cart-items">
						<h1>
							Shopping Cart
						</h1>
						<?php echo $displayImages; ?>
						
					</div>
					<div class="clearfix">
					</div>
				</div>
			</div>
            </form>
			<?php include( "footer.php") ?>