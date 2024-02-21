<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
		<script src="lib/jquery-1.11.1.min.js" type="text/javascript">
		</script>
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
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
			</script>
		<![endif]-->
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="../assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		<!--[if lt IE 7 ]>
			<body class="ie ie6">
			<![endif]-->
			<!--[if IE 7 ]>
				<body class="ie ie7 ">
				<![endif]-->
				<!--[if IE 8 ]>
					<body class="ie ie8 ">
					<![endif]-->
					<!--[if IE 9 ]>
						<body class="ie ie9 ">
						<![endif]-->
						<!--[if (gt IE 9)|!(IE)]>
							<!-->
						<!--<![endif]-->
						<?php include( 'head.php'); ?>
							<div class="sidebar-nav">
								<?php include( 'menu.php'); ?>
							</div>
							<div class="content">
								<div class="header">
									<h1 class="page-title">
										Add - Product Details
									</h1>
									<ul class="breadcrumb">
										<li>
											<a href="home.php">Home</a>
										</li>
										<li>
											<a href="workers.php">Workers</a>
										</li>
										<li class="active">
											Add
										</li>
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
									<form action="insprod.php" method="post" enctype="multipart/form-data" name="addroom">
                                    <input type="hidden" class="form-control span12" id="userfullname" name="ddlbrand" required>
                                                       
										<table style="width: 100%;">
											<tr>
												<td>
													<div class="form-group">
														<label>
															Name
														</label>
														<input type="text" class="form-control span12" id="userfullname" name="name" required>
													</div>
                                                     
													<div class="form-group">
														<label>
															Price
														</label>
														<input type="number" class="form-control span12" name="price" id="phone" required>
													</div>
                                                   
													<div class="form-group">
														<label>
															Description
														</label>
														<input type="text" class="form-control span12" id="userfullname" name="description" required>
													</div>
													<div class="form-group">
														<label>
															Crops Shipping Time
														</label>
														<input type="text" class="form-control span12" id="userfullname" name="exper" required>
													</div>
                                                   
													<div class="form-group">
														<label>
															Category
														</label>
														<select name="ddlcat" class="form-control span12">
															<option>
															  Seeds
															</option>
															<option>
																Fertilizers
															</option>
															<option>
																Guide
															</option>
															
														</select>
													</div>
												</td>
												<td style="padding-left: 50px;">
													<input type="file" accept="image/*" onchange="loadFile(event)" name="file">
													<h2>
														Upload Image
													</h2>
													<div style="width: 220px; height: 180px; border-radius: 5px; border: 1px solid gray;
													margin-bottom: 5px">
														<img id="output" style="width: 100%; height: 100%;
														object-fit: contain; padding: 5px" />
													</div>
													<script>
														
                                  var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                  };
                                
													</script>
												</td>
											</tr>
										</table>
										<input type="submit" name="Submit" value="Submit" id="button1" class="btn btn-primary pull-right" />
									</form>
									<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														�
													</button>
													<h3 id="myModalLabel">
														Delete Confirmation
													</h3>
												</div>
												<div class="modal-body">
													<p class="error-text">
														<i class="fa fa-warning modal-icon">
														</i>
														Are you sure you want to delete the user?
														<br>
														This cannot be undone.
													</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
														Cancel
													</button>
													<button class="btn btn-danger" data-dismiss="modal">
														Delete
													</button>
												</div>
											</div>
										</div>
									</div>
									<footer>
										<hr>
										<!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
										<p class="pull-right">
											A
											<a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a>
											by
											<a href="http://www.portnine.com" target="_blank">Portnine</a>
										</p>
										<p>
											� 2014
											<a href="http://www.portnine.com" target="_blank">Portnine</a>
										</p>
									</footer>
								</div>
							</div>
							<script src="lib/bootstrap/js/bootstrap.js">
							</script>
							<script type="text/javascript">
								
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    
							</script>
						</body>

</html>