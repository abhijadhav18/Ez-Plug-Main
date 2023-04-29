
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
if(isset($_POST['submit'])){
    $cat_name = $_POST['cat_name'];
    $name = $_POST['name'];
    $ig = $_FILES['image']['name'];
	$date= date('Y-m-d-H-i');
	$image = $date.$ig;

	$sql = "SELECT * FROM categeory WHERE name = '$cat_name'";
    $result = mysqli_query($con, $sql);
    while($sub_row = mysqli_fetch_assoc($result)) 
       {$cat_code = $sub_row['code'];}
    $cate_code = $cat_code;
	function random_str(
		int $length = 64,
		string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
	): string {
		if ($length < 1) {
			throw new \RangeException("Length must be a positive integer");
		}
		$pieces = [];
		$max = mb_strlen($keyspace, '8bit') - 1;
		for ($i = 0; $i < $length; ++$i) {
			$pieces []= $keyspace[random_int(0, $max)];
		}
		return implode('', $pieces);
	}
	$result = random_str(9, 'abcdefghijklmnopqrstuvwxyz');
	$r = rand(100000,1000000);
	
	$cat=mysqli_query($con,"select * from `sub_categeory` ORDER BY sno DESC LIMIT 1");
	while($row=mysqli_fetch_array($cat))
	{$sno = $row['sno'];}

	$sql = "INSERT INTO sub_categeory (cat_name,cat_code,name,image,code)
    VALUES ('$cat_name','$cate_code','$name','$image','$result$r$sno')";

    $run = mysqli_query($con,$sql);

	if($run)
	{
		move_uploaded_file($_FILES['image']['tmp_name'],'../img/'.$image);
		echo ("<script LANGUAGE='JavaScript'>
 				window.location.href='sub_cate';
 			 </script>");
	}
else 
	{
		echo "Error: record not Added " ;
	}
}
include("header.php");
?>
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Add New Sub Categeory's</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li><a href="sub_cate"><span>Sub Categeory's</span></a></li>
							<li class="active"><span>Add New Sub Categeory's</span></li>
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
										<h6 class="panel-title txt-dark">Add New Sub Categeory's</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="post" enctype="multipart/form-data">
											<div class="form-group">
                                                
												<label for="sel1">Select Categeory From The Dropdown:</label>
												<select name='cat_name' class="form-control" id="sel1">
														<?php
															$sql = "SELECT * FROM Categeory";
															$result = mysqli_query($con, $sql);
																while($row = mysqli_fetch_assoc($result)) 
																{
														?>
															<option><?php echo $row['name'];?></option>
														<?php } ?>
												</select>
											   
											</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Sub Categeory's<span class="help"></span></label>
													<input type="text" class="form-control" name="name" placeholder="Please Enter Brand's">
												</div>
												
													<div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Upload Image</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select Image</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="image">
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div>
												
											
												<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Footer -->
				<?php include('footer.php'); ?>
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