<?php session_start(); 
include( 'dbconnection.php'); 
if(isset($_POST[ 'continue'])) 
{ $name=$_POST[ 'name']; $email=$_POST[ 'email']; $contact=$_POST[ 'contact']; $password=$_POST[ 'pwd']; $cpassword=$_POST[
'cpwd']; $res1=mysqli_query($bd, "select * from user_details where email='$email'"); $count=mysqli_num_rows($res1); if($count!=0) { echo "<script>alert('You Have Already Registered Please Login..');</script>"; }
else { $query="insert into user_details values('','$name','$email','$contact','$password')"; $result=mysqli_query($bd,$query); if($result) { header( 'location:login.php'); } } } ?>


<?php include("header.php") ?>
<script type="text/javascript">
				
				

function validate()

{

	if (document.form1.name.value=="")

	{
		alert("Name Is Required!");
		document.form1.name.focus();
		return false;
		}

		if(document.form1.email.value=="")

		{ alert("Email Is Required");

		document.form1.email.focus();

		return false;

		}

		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))  

  {  

  }  

   else

   {

	    alert("Invalid email address!")  

		document.form1.email.focus();

    	return (false);

 	}

	



		

		

		if(document.form1.contact.value=="")

		{ alert("Contact No Is Required");

		document.form1.contact.focus();

		return false;

		}

	

		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.contact.value))

		{

		}

		else

		{

		 alert("Invalid Contact number")  

		document.form1.contact.focus();

    	return (false);

		}

		

					if(document.form1.pwd.value=="")

					{

						alert("Password Is Required");

						document.form1.pwd.focus();

						return false;

						}

						

						

						if(document.form1.cpwd.value != document.form1.pwd.value )

						{

							alert("password doesnot match!!");

							document.form1.cpwd.focus();

							return false;

							}

		

		

	}

	 
			
			</script>
<?php include("mainhead.php") ?>
<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
    <div class="login-page">
        <div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
            <h3 class="title">Register<span> Form</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
        </div>
        <div class="widget-shadow">
            <div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
                <h4>Already have an Account ?<a href="signin.html">  Sign In �</a> </h4>
            </div>
            <div class="login-body">
                <form class="wow fadeInUp animated" data-wow-delay=".7s"  name="form1" method="post" onSubmit="return validate();">
                    <input type="text" placeholder="First Name" required=""  name="name">
                    <input type="text" placeholder="Phone Number" required="" name="contact">
                    <input type="text" class="email" placeholder="Email Address" required="" name="email">
                    <input type="password"  class="lock" placeholder="Password" name="pwd">
                    <input type="password" value="" class="lock" placeholder="Confirm Password" name="cpwd">
                    <input type="submit" value="Register" name="continue">
                </form>
            </div>
        </div>
    </div>

 <?php include("footer.php") ?>   