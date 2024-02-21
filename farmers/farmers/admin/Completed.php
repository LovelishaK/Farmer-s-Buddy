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


    <?php   include('head.php');   ?>

     <div class="sidebar-nav">
    <?php   include('menu.php');   ?>
    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">Attahed Services</h1>
                    <ul class="breadcrumb">
            <li><a href="home.php">Home</a> </li>
            <li class="active">Tickets</li>
        </ul>

        </div>
        <div class="main-content">
            

<table class="table">
   <form action="" method="post"  name="frmListUser" id="frmListUser">
  <table class="table">
    <tr id="listTableHeader">
      <td width="100">Ticket No1</td>
      <td width="250">Name</td>
      <td width="150">Phone</td>
      <td width="150">Email</td>
      <td width="150">Total</td>
      <td width="150">Status</td>
      <td width="150">Date </td>
      <td></td>
    </tr>
    <?php
    include('config.php');
    $result = mysqli_query($bd,"SELECT * FROM orderdetails where Status='delivered'");    
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	extract($row);
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;">
      <td><?php echo ucwords($orderno); ?></td>
      <td><?php echo ucwords($name); ?></td>
      <td><?php echo ucwords($items); ?></td>
      <td><?php echo ucwords($email); ?></td>
      <td><?php echo ucwords($totalamount); ?></td>
      <td><?php echo ucwords($status); ?></td>
      <td><?php echo ucwords($bookeddate); ?></td>
           
    </tr>
    <?php
	} // end while
	?>
    
  </table>
</form>
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
