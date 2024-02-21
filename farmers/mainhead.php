<div class="header">
<?php if(isset($_SESSION[ 'email'])&&isset($_SESSION[ 'pwd'])) { ?>
					<?php 
          include 'dbconnection.php'; 
          if(isset($_SESSION[ 'email'] )&& isset($_SESSION[ 'pwd'])) 
          { 
            $email=$_SESSION[ 'email']; 
            $query="select * from user_details where email='$email'"; 
            $result=mysqli_query($bd,$query);
					  while($row=mysqli_fetch_array($result)) 
            { ?>
        <div class="top-header navbar navbar-default" style="background-color: orange;">
            <!--header-one-->
            <div class="container">
                <div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
                    <p>Welcome to Farmer Buddy <a style="font-weight: bold; text-transform: capitalize;"><?php echo $row[ 'name'];?></a> 
                    <a style="color: white;" href="list.php">List Crops</a>
                    <a style="color: white;" href="logout.php">Logout</a>
                    
                </p>
                </div>
                
                <div class="clearfix"> </div>
            </div>
        </div>
        <?php } } ?>
        <?php include 'dbconnection.php'; if(isset($_SESSION[ 'email'] )&& isset($_SESSION[ 'pwd'])) { $email=$_SESSION[ 'email']; $query="SELECT COUNT(ser_no) as ser, SUM(price) AS su FROM shopping_cart where email='$email' and  txn_status=''";
							$result=mysqli_query($bd,$query); while($row=mysqli_fetch_array($result)) { ?>
        <div class="header-two navbar navbar-default">
            <!--header-two-->
            <div class="container">
                <div class="nav navbar-nav header-two-left">
                    <ul>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@pet.com">mail@example.com</a></li>
                    </ul>
                </div>
                <div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
                    <h1><a href="index.php">Farmers <b>Buddy</b><span class="tag">Everything farmer need </span> </a></h1>
                </div>
                <div class="nav navbar-nav navbar-right header-two-right">
                    <div class="header-right my-account">
                        <a href="contact.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>
                    </div>
                    <div class="header-right cart">
                        <a href="checkout.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                        <h4>
                            <a href="checkout.php">
                                <span> Rs:<?php echo $row[ 'su'];?></span> (<span> <?php echo $row[ 'ser'];?> </span>)
                            </a>
                        </h4>
                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <?php } } ?>
        <?php } else { ?>
        <div class="top-header navbar navbar-default" style="background-color: orange;">
            <!--header-one-->
            <div class="container">
                <div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
                    <p>Welcome to Farmers Buddy <a href="register.php" style="color: white;">Register </a> Or <a style="color: white;" href="login.php">Sign In </a></p>
                </div>
                
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="header-two navbar navbar-default">
            <!--header-two-->
            <div class="container">
                <div class="nav navbar-nav header-two-left">
                    <ul>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@pet.com">mail@example.com</a></li>
                    </ul>
                </div>
                <div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
                    <h1><a href="index.php">Farmers   <b>Buddy</b><span class="tag">Everything farmer need </span> </a></h1>
                </div>
                <div class="nav navbar-nav navbar-right header-two-right">
                    
                    <div class="header-right cart">
                        <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                        <h4>
                            <a href="">
                                <span> $0.00 </span> (<span> 0 </span>)
                            </a>
                        </h4>
                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <?php } ?>
        <div class="top-nav navbar navbar-default">
            <!--header-three-->
            <div class="container">
                <nav class="navbar" role="navigation">
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav top-nav-info">
                            <li><a href="index.php" class="active">Home</a></li>
                            
                            <li class="dropdown">
							<a href="seeds.php">Seeds</a>
						
						</li>
						<li class="dropdown">
							<a href="acc.php">Fertilzers</a>						
						</li>
                        <li class="dropdown">
							<a href="guide.php">Farming Guide</a>						
						</li>
                        <li class="dropdown">
							<a href="sellcrops.php">Sell Crops</a>						
						</li>
                        </ul>
                        <div class="clearfix"> </div>
                        
                    </div>
                    <!--//navbar-header-->
                </nav>
                
            </div>
        </div>
    </div>

