<?php


$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'editcust' :
		editcustomer();
	break;
	
	case 'assignworkers' :
		editassign();
	break;
	
	case 'totalamt' :
		totalamt();
	break;
	
	case 'edituser' :
		edituser();
	break;
	
	case 'editworker' :
		editworker();
	break;

     case 'editsell' :
		editsell();
	break;
	
	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: home.php');
}
  function editcustomer()
  {require_once 'config.php';
    if(isset($_POST['btnLogin']))
    {   
        $today = date("Y-m-d H:i");
	     $workername = $_POST['workername'];
         $ticket = $_POST['ticket'];
         $save=mysqli_query($bd,"Update orderdetails set worker='$workername',status='delivered' WHERE orderno='$ticket'");
         header("location: tickets.php");
	     exit();
    }
    else
    {        
         $ticket = $_POST['ticket'];
         $save=mysqli_query($bd,"delete from orderdetails WHERE orderno='$ticket'");
         header("location: tickets.php");
	     exit();
    }
  }
   function editassign()
   {require_once 'config.php';
         $sparecharge = $_POST['sparecharge'];
         $sparedesc = $_POST['sparedesc'];
         $ticket = $_POST['ticket'];
         $save=mysqli_query($bd,"Update tb_regser set Sdesc='$sparedesc',spcharge='$sparecharge',Status='Attached' WHERE Ticketno='$ticket'");
         header("location: assignedticket.php");
	     exit();
   }
  function totalamt()
  {require_once 'config.php';
         $today = date("Y-m-d H:i:s");
         $totalamount = $_POST['totalamount'];
         $ticket = $_POST['ticket'];
         $labour = $_POST['labourcharge'];
         $totwrk = $_POST['txttotalwork'];
         $save=mysqli_query($bd,"Update tb_regser set total='$totalamount',labour='$labour',workdate='$totwrk',Status='Completed',completeddate='$today' WHERE Ticketno='$ticket'");
         header("location: completion.php");
	     exit();
}
 function edituser()
   { //edit user
     require_once 'config.php';
   if(isset($_POST['btn-upload']))
    {     $userID = $_POST['userid'];
          $save=mysqli_query($bd,"Update users set isActive='0' WHERE userID='$userID'");
          header("location: users.php");
	      exit();
    }
    else
    {
         $today = date("Y-m-d H:i:s");
	     $fullName = $_POST['fullname'];
         $username = $_POST['username'];
         $password = $_POST['password'];
         $passwordForDB = MD5($password);
         $userID = $_POST['userid'];
         $save=mysqli_query($bd,"Update users set userFullName='$fullName',username='$username',password='$passwordForDB',isActive='1',lastUpdatedOn='$today' WHERE userID='$userID'");
         header("location: users.php");
	     exit();
     }
}  

function editsell()
   { //edit user
     require_once 'config.php';
     $userID = $_POST['ticket'];
     $stat = $_POST['workername'];
     $save=mysqli_query($bd,"Update sell set status='$stat' WHERE id='$userID'");
     header("location: listsell.php");
      exit();
    
} 

function editworker()
   { //edit user
     require_once 'config.php';
   if(isset($_POST['btn-upload']))
    {     $userID = $_POST['userid'];
          $save=mysqli_query($bd,"Update tb_workers set status='blocked' WHERE id='$userID'");
          header("location: workers.php");
	      exit();
    }
    else
    {
         $today = date("Y-m-d H:i:s");
	     $name = $_POST['name'];
	     $phone = $_POST['phone'];
	     $exp = $_POST['exper'];
         $address = $_POST['address'];
         $userID = $_POST['userid'];
         $category = $_POST['ddlcat'];
         $save=mysqli_query($bd,"Update tb_workers set name='$name',phone='$phone',experience='$exp',address='$address',category='$category' WHERE id='$userID'");
         header("location: workers.php");
	     exit();
     }
} 
         
?>