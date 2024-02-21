<?php session_start();?>
	<?php include( "header.php") ?>
		<?php include( "mainhead.php") ?>
			<div class="breadcrumbs">
				<div class="container">
					<ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
						<li>
							<a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
						</li>
						<li class="active">
							Order Confirmation
						</li>
					</ol>
				</div>
			</div>
			<div class="login-page">
				<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
					<h3 class="title">
						Order Confirmation
						<span>
						</span>
					</h3>
				</div>
				<div class="widget-shadow">
                      <?php 
                require_once 'dbconnection.php';
                $cid = $_GET['custID'];
                //echo $cid;
                $sql= "Select * from orderdetails where orderno = '$cid'";
                $result = mysqli_query($bd,$sql);
                while($data = mysqli_fetch_array($result)){
                extract($data);                  
                ?> 
                 <div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
						<h4>							
							Order No :<?php echo $orderno; ?></a>
						</h4>
                        <h4>							
							Order Total :<?php echo $totalamount; ?></a>
						</h4>
                        <h4>							
							Order Date :<?php echo $bookeddate; ?></a>
						</h4>
                        <br /><br />
                        <h2>Person Details</h2>
                       Name: <?php echo $name; ?><br />
                           Mail:  <?php echo $email; ?><br />
                         Shipping Details:   <?php echo $address; ?><br />
					</div>   
                 <?php } ?>
					
					
				</div>
			</div>
						<?php include( "footer.php") ?>