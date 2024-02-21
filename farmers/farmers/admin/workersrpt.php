<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
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
            
            <h1 class="page-title">Workers Report</h1>
                    <ul class="breadcrumb">
            <li><a href="home.php">Home</a> </li>
            <li class="active">Workers Report</li>
        </ul>

        </div>
        <div class="main-content">
            

<table class="table">
 <form action="workersrpt.php" method="post"  name="frmListUser" id="frmListUser">
 <select  class="form-control span12" name="workername"  id="workername">
            <?php
            include('config.php');                         
            $sql = mysql_query("SELECT name FROM tb_workers");
            while ($row = mysql_fetch_array($sql)){
            echo "<option>" . $row['name'] . "</option>";
            }
            ?>
    </select>
    <input name="btnLogin"  class="btn btn-primary pull-right" type="submit" id="btnLogin" value="Submit">   &nbsp; &nbsp;  &nbsp; &nbsp; 
                
  <table class="table">
    <tr id="listTableHeader">
      <td width="100">Ticket No</td>
      <td width="250">Customer Name</td>
      <td width="150">Category</td>
      <td width="150">Date</td>
      <td width="150">Labour</td>
      <td width="150">Total</td>
      <td></td>
    </tr>
    
</form>
<?php
if(isset($_POST['btnLogin']))
    {
    include('config.php');
    $workername = $_POST['workername'];
    $result = mysql_query("SELECT * FROM tb_regser where Status='Completed' AND worker='$workername'");
    
	$i=0;
	while($row = mysql_fetch_array($result)) {
	extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;">
      <td><?php echo ucwords($Ticketno); ?></td>
      <td><?php echo ucwords($name); ?></td>
      <td><?php echo ucwords($Category); ?></td>
      <td><?php echo ucwords($date); ?></td>
      <td><?php echo ucwords($labour); ?></td>
      <td><?php echo ucwords($total); ?></td>
    </tr>
    <?php
	}
} // end while
	?>
    
  </table>
</table>
           
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
