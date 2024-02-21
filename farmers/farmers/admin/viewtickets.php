<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Online - Admin Panel</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

    

    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Online Services - Admin Panel</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> Admin
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                
                
                <li><a tabindex="-1" href="index.php">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
        <?php   include('menu.php');   ?>
    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">View - Ticket Details</h1>
                    <ul class="breadcrumb">
            <li><a href="home.php">Home</a> </li>
             <li><a href="">Tickets</a> </li>
            <li class="active">View</li>
        </ul>

        </div>
        <div class="main-content">
            
<div class="btn-toolbar list-toolbar">
  
</div>

   

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<?php 
require_once 'config.php';
$cid = $_GET['custID'];
//echo $cid;
$sql= "Select * from orderdetails where Status='' and orderno = '$cid'";
$result = mysqli_query($bd,$sql);
while($data = mysqli_fetch_array($result)){
extract($data);

?>  
<form action="edit.php?action=editcust" method="post"  name="frmListUser" id="frmListUser">
                <h3 style="text-decoration:underline">Customer Details</h3>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 75%;"><div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control span12" readonly="true"  id="CustomerName"  name="CustomerName"  value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label>Phone No</label>
                    <input type="text" class="form-control span12" readonly="true" name="areaname"  id="areaname" value="<?php echo $items; ?>">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="text" class="form-control span12" readonly="true" name="areaname"  id="areaname" value="<?php echo $email; ?>">
                </div></td>
                                         
                    </tr>
                </table>

                <hr>
                 <h3 style="text-decoration:underline">Assign Workers</h3>
                 <div class="form-group">
                    <label>Worker Name</label>
                    <select  class="form-control span12" name="workername"  id="workername">
                        <?php
                        include('config.php');
                        $cid = $_GET['custID'];
                        //echo $cid;
                        $sql= mysqli_query($bd,"Select * from orderdetails where orderno = '$cid'");
                        while($row = mysqli_fetch_array($sql)) {
	                    extract($row);
                        $cat = $row['Category']; 
                        $sql = mysqli_query($bd,"SELECT name FROM tb_workers where status='active'");
                        while ($row = mysqli_fetch_array($sql)){
                        echo "<option>" . $row['name'] . "</option>";
                        }
                        ?>
                        </select>
                    <input type="text" style="display:none">
                </div>
                
                <input type="button" value="Cancel Order" id="btncancel" name="btncancel" class="btn btn-primary" />&nbsp;
                <input name="btnLogin"  class="btn btn-primary pull-right" type="submit" id="btnLogin" onclick="MM_validateForm('CustomerName','','R','Email','','RisEmail','Mobile','','R','Address','','R','Password','','R');return document.MM_returnValue" value="Submit">   &nbsp; &nbsp;  &nbsp; &nbsp; 
                <input type="hidden" name="ticket" value="<?php echo $orderno; ?>" />

</form>
<?php }} ?>



            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                <p>© 2014 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
            </footer>
        </div>
    </div>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>
