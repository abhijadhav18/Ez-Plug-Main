<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
include("header.php");
if(isset($_GET['type11']))
{
	$sno = $_GET['did'];
	$type = $_GET['type11'];
	$sql = "DELETE FROM `station` WHERE sno='$sno'";

	if (mysqli_query($con, $sql))
	{
		echo ("<script LANGUAGE='JavaScript'>
		window.location.href='product?type=$type';
		</script>");
	} else {
	echo "Error deleting record: " . mysqli_error($conn);
	}
}
if(isset($_GET['type22']))
{
	$sno = $_GET['did'];
	$type = $_GET['type22'];
	$sql = "DELETE FROM `station` WHERE sno='$sno'";

	if (mysqli_query($con, $sql))
	{
		echo ("<script LANGUAGE='JavaScript'>
		window.location.href='product?type1=$type';
		</script>");
	} else {
	echo "Error deleting record: " . mysqli_error($conn);
	}
}
if(isset($_GET['type']))
{
	$ss = $_GET['type'];
	$cat=mysqli_query($con,"select * from `station` WHERE ctype='$ss' ORDER BY sno DESC");
}
else
{
	$ss = $_GET['type1'];
	$cat=mysqli_query($con,"select * from `station` WHERE ctype='$ss' ORDER BY sno DESC");
}
?>		
		
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<?php if(isset($_GET['type'])) { ?>
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Manage EV Station's</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Manage EV Station's</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<?php } else { ?>
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Manage CNG Station's</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Manage CNG Station's</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<?php } ?>
					<!-- /Title -->
					
					<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
										<div class="row">
												<div class="col-sm-4">
													
														</div>
														<div class="col-sm-4">
															</div>
										<?php if(isset($_GET['type'])) { ?>
											<div class="col-sm-4">
											<a href="product_add?type=EV"><button class="btn btn-default btn-block" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true"></i> Add New EV Station</button></a>
											</div>
										<?php } else { ?>
											<div class="col-sm-4">
											<a href="product_add?type=CNG"><button class="btn btn-default btn-block" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true"></i> Add New CNG Station</button></a>
											</div>
										<?php }?>
										
										</div>
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>S.No</th>
														<th>Car Type</th>
														<th>Location</th>
														<th>Station</th>
														<th>Image</th>
														<th>Detail</th>
														<th>Price</th>
														<th>Action</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>S.No</th>
														<th>Car Type</th>
														<th>Location</th>
														<th>Station</th>
														<th>Image</th>
														<th>Detail</th>
														<th>Price</th>
														<th>Action</th>
													</tr>
												</tfoot>
												<tbody>
                                                    <?php
														$i=1;
							                            while($row=mysqli_fetch_array($cat))
                                                         { 
													?>
													
                                                    <tr>
														<td><?php echo $i; ?></td>
														<td><?php echo $row['ctype'];?></td>
														<td><?php echo $row['location'];?></td>
														<td><?php echo $row['station'];?></td>
														<td>
															<img src='<?php echo "../img/".$row['image']?>'height="80px" width="80px" align="">
														</td>
														<td><?php echo $row['detail'];?></td>
														<td><?php echo $row['price'];?></td>
														<?php if(isset($_GET['type'])) { ?>
														<td>
															<a class='edit btn btn-sm btn-primary' href='./product?did=<?php echo $row['sno']; ?>&type11=<?php echo $ss; ?>' onclick='return checkdelete()'>Delete</a>
														</td>
														<?php } else { ?>
														<td>
															<a class='edit btn btn-sm btn-primary' href='./product?did=<?php echo $row['sno']; ?>&type22=<?php echo $ss; ?>' onclick='return checkdelete()'>Delete</a>
														</td>
														<?php } ?>
													</tr>
													<?php
													$i++;
													}
													?>	
													
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
					
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
		
		<!-- Data table JavaScript -->
			<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
			<script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
			<script src="vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
			<script src="vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
			
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
			<script src="dist/js/export-table-data.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<!-- <script src="dist/js/jquery.slimscroll.js"></script> -->
	
		<!-- Fancy Dropdown JS -->
		<!-- <script src="dist/js/dropdown-bootstrap-extended.js"></script> -->
		
		<!-- Owl JavaScript -->
		<!-- <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> -->
	
		<!-- Switchery JavaScript -->
		<!-- <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script> -->
		
			<!-- Filter -->

		<!-- <link href="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"> -->

		<!-- <script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.js"></script> -->
		<!-- <script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.dataTables.js"></script> -->

		<script>

		$(document).ready(function() {
			var table = $('#example').DataTable();
		
			$("#example tfoot th").each( function ( i ) {
				var select = $('<select><option value=""></option></select>')
					.appendTo( $(this).empty() )
					.on( 'change', function () {
						table.column( i )
							.search( $(this).val() )
							.draw();
					} );
		
				table.column( i ).data().unique().sort().each( function ( d, j ) {
					select.append( '<option value="'+d+'">'+d+'</option>' )
				} );
			} );
		} );

		</script>
		<script>
			function checkdelete()
			{
				return confirm('Are You Sure You Want To Delete This Record.');
			}
		</script>

		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>