
<!DOCTYPE html>
<html>
	<title>Admin Panel</title>
	<head>
		
		<link type="text/css" rel="stylesheet" href="css/login.css"/>
		<link type='text/css' href='css/redmond/jquery-ui-1.7.1.custom.css' rel='stylesheet' />
		<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
		<script type='text/javascript' src='js/jquery-ui-1.7.1.custom.min.js'></script>
		<link rel='stylesheet' type='text/css' href='css/application.css' /></head>
		<script type='text/javascript' src='js/jquery.validate.pack.js'></script>
		<script type='text/javascript' src='js/jquery.metadata.js'></script>
	</head>
<body >
<div >
		
	<div class="loginmiddle" style="margin-top: 210px;background-color: beige;">
		<div class="login_title">
			Admin Login Panel
		</div>
		<div class="contain-div">
			<script type='text/javascript'>
				$(document).ready(function() {
					$('#LoginForm').validate();
				});
			</script>
			<div class="pad5">
				<?php if(isset($_SESSION['message'])):?>
					<div class='msg_error'>
						<?php echo $_SESSION['message'];?>
						<?php unset($_SESSION['message']);?>
					</div>
				<?php endif;?>
			</div>
			<div class="login-div">
			<div class="shadow_img_left"></div>
				<div class="shadow_img_mid">
					<form  id="LoginForm" name='LoginForm' method='post' action='action.login.php'>
						<input type='hidden' name='ru' value="<?php echo(isset($_GET['ru']) ? $_GET['ru'] : '');?>"/>
						<table align="center">
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" id="txtusername" name="txtusername" style="width: 250px" class="{required:true} common_txt w255" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" id="txtpassword" name="txtpassword" style="width: 250px" class="{required:true} common_txt w255" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 15px" align="right">
                        <input id="button" type="submit" name="submit" value="Login" />
                    </td>
                </tr>
                </table>
					</form>
				</div>
				<div class="shadow_img_right"></div>
				<div class="cb"></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>