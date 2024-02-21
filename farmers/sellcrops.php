<?php session_start(); 
include( 'dbconnection.php'); 
if(isset($_POST[ 'continue'])) 
{ 
    if(!isset($_SESSION[ 'email']) ||(!isset($_SESSION[ 'pwd']))) 
        { 
            header( 'Location:login.php'); 
        } 
        else 
        {
            $uid = $_SESSION['email'];
            $crop=$_POST['crop']; 
            $weight=$_POST['weight']; 
            $price=$_POST['price'];
            $res1=mysqli_query($bd, "select * from sell where uid='$uid' and crops='$crop'"); 
            $count=mysqli_num_rows($res1); 
            if($count!=0) 
            { 
                echo "<script>alert('You Have Already Registered Please Login..');</script>"; 
            }
            else 
            { 
                $query="insert into sell values('','$uid','$crop','$price','$weight','Posted')"; 
                $result=mysqli_query($bd,$query); 
                if($result) 
                { 
                    header( 'location:list.php'); 
                } 
            } 
        }
   
        } 
        ?>


<?php include("header.php") ?>
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
            <h3 class="title">Sell<span> Corps</span></h3>
        </div>
        <div class="widget-shadow">
            <div class="login-body">
                <form class="wow fadeInUp animated" data-wow-delay=".7s"  name="form1" method="post">
                    <input type="text" placeholder="Corp Type" required=""  name="crop" required>
                    <input type="text" placeholder="Weight" required="" name="weight" required>
                    <input type="text" placeholder="Price Expected" required="" name="price" required>
                    <input type="submit" value="Submit" name="continue">
                </form>
            </div>
        </div>
    </div>

 <?php include("footer.php") ?>   