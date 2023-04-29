
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login.php');
}
$id = $_GET['id'];
$cat=mysqli_query($con,"select * from `order_detail` WHERE order_id='$id'");
while($row=mysqli_fetch_array($cat))
{ $email = $row['c_email'];
	$order_status = $row['order_status'];
}

if(isset($_POST['usubmit']))
{
	$hotel_name = $_POST['high1'];
	$oid = $_POST['oid'];
    
    $sql = "UPDATE `order_detail` SET 
    order_status='$hotel_name' WHERE order_id ='$oid'";
	
    $run = mysqli_query($con,$sql);
	
	if($run)
	{
		echo ("<script LANGUAGE='JavaScript'>
		window.location.href='index';
		</script>");   
	} else {
		echo "Error: record not Updated " ;
	}
}

include('header.php');

?>
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Update Order Status</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active"><span>Update Order Status</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Update Order Status</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="POST" enctype="multipart/form-data">
											<div class="form-group">
                                                
												<label for="sel1">Select Status From The Dropdown:</label>
												<select name='high1' class="form-control" required>
  													<?php if($order_status=='0') { ?>
														<option value="0">Pending</option>
													<?php } elseif($order_status=='1') {?>
														<option value="1">Process</option>
													<?php } elseif($order_status=='2') {?>
														<option value="2">Shipped</option>
													<?php } elseif($order_status=='3') {?>
														<option value="3">Delivered</option>
													<?php } ?>
                                                        <option value="0">Pending</option>
                                                        <option value="1">Process</option>
                                                        <option value="2">Shipped</option>
                                                        <option value="3">Delivered</option>
                                                </select><br>
														<input type='hidden' name='oid' value='<?php echo $id; ?>'>
												<button type="submit" name="usubmit" class="btn btn-primary btn-block">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
							<p>2022 &copy; Vy Softwares. Pampered by VY Softwares</p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>