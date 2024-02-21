<?php
session_start();
    $hostname = 'localhost';
    $dbname   = 'farmer';
    $username = 'root'; 
    $password = '';
    $bd=mysqli_connect($hostname, $username, $password,$dbname) or DIE('Connection to host isailed, perhaps the service is down!');
    //mysql_select_db($dbname) or DIE('Database name is not available!');

    $userName=mysqli_real_escape_string($bd,$_POST['txtusername']); 
    $passWord=mysqli_real_escape_string($bd,$_POST['txtpassword']); 
    $pwd = md5($passWord) ;
    $query = "SELECT userID FROM users WHERE username='$userName' and  password='$pwd'";
    $res = mysqli_query($bd,$query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
        $_SESSION['userName'] = $_POST['username'];
        header("Location: home.php");
    }
    else 
    {
        $_SESSION['message'] = 'Wrong Username or Password.';
    if($_POST['ru'] != '')
		  header('location: index.php');
    else
      header('location: index.php');
        // TODO - replace message with redirection to login page
        //  header("Location: securedpage.php");
    }
    ?>