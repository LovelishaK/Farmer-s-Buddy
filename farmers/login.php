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
							Sign In
						</li>
					</ol>
				</div>
			</div>
			<div class="login-page">
				<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
					<h3 class="title">
						SignIn
						<span>
						</span>
					</h3>
				</div>
				<div class="widget-shadow">
					<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
						<h4>
							
							Not a Member?
							<a href="register.php">  Register Now >></a>
						</h4>
					</div>
					<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
						<form method="post" action="actionlogin.php">
							<input type="text" class="user"  placeholder="Enter your email" required="" name="txtusername">
							<input type="password"  class="lock" placeholder="Password" name="txtpassword">
							<input type="submit" name="Sign In" value="Sign In">
							
						</form>
					</div>
				</div>
			</div>
						<?php include( "footer.php") ?>