<?php
session_start();
    $hostname = 'localhost';
    $dbname   = 'farmer';
    $username = 'root'; 
    $password = '';
    $cn = mysqli_connect($hostname, $username, $password,$dbname) or DIE('Connection to host isailed, perhaps the service is down!');
    //mysql_select_db() or DIE('Database name is not available!');

    $userName=mysqli_real_escape_string($cn,$_POST['txtusername']); 
    $passWord=mysqli_real_escape_string($cn,$_POST['txtpassword']); 
    $query = "SELECT * FROM user_details WHERE email='$userName' and password='$passWord'";
    $res = mysqli_query($cn,$query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
        $_SESSION['email']="$userName";
        $_SESSION['pwd']="$passWord";
        header("Location: index.php");
    }
    else 
    {?>
        <script>
		    alert('Invalid Username or Password');
            window.location.href='Login.php';
            </script>
            <?php
      
    }
    ?>