
<?php session_start();?>
<?php include("header.php") ?>
<?php include("mainhead.php") ?>
    <div class="head-bread">
	<div class="container">
		<ol class="breadcrumb">
			<li>
				<a href="index.php">Home</a>
			</li>
			<li class="active">
				PRODUCTS
			</li>
		</ol>
	</div>
</div>
<div class="products-gallery">
	<div class="container">
		<div class="col-md-12 grid-gallery">
		<table class="table tab-content" style="width:100%">
									<tr id="listTableHeader" style="background-color:orange; color: white;">
										<td>
											Crops name
										</td>
                                        <td>
											Weight
										</td>
										<td>
										  Expected price
										</td>
                                        <td>
										  status
										</td>
										
                                        
									</tr>
									<?php 
									include( 'dbconnection.php'); 
									$uid = $_SESSION['email'];
									$result=mysqli_query($bd, "SELECT * FROM sell where uid='$uid'"); 
									$i=0; 
									while($row=mysqli_fetch_array($result)) 
									{ 
										extract($row); 
										if ($i%2) 
										{ $class='row1'; } 
										else { $class='row2'; } 
										$i +=1;
									?>
										<tr class="" style="height:25px;">
											<td>
												<?php echo ($crops); ?>
											</td>
                                            <td>
												<?php echo ($weight); ?>
											</td>
											<td>
												<?php echo ($eprice); ?>
											</td>
											<td>
												<?php echo ($status); ?>
											</td>
										</tr>
										<?php } // end while ?>
								</table>
			<div class="clearfix">
			</div>
		</div>
	</div>
</div>
 <?php include("footer.php") ?>   