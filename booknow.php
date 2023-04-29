<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>EZ-Plug</title>
    
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body onload="initialize()">
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include('header.php'); 
         if(isset($_GET['dsubmit']))
         {
            $ctype = $_GET['ctype'];
            $location_code = $_GET['location'];
            $mobile = $_GET['mobile'];
            $station = $_GET['station'];
            $bdate = $_GET['bdate'];
            $bslot = $_GET['bslot'];
            $oql = "SELECT * FROM station WHERE station = '$station' LIMIT 1";
            $swrest = mysqli_query($con, $oql) or die( mysqli_error($con));
            while($reow=mysqli_fetch_array($swrest))
            {
                $location = $reow['location'];
                $price = $reow['price'];
            }
            $qu=mysqli_query($con,"SELECT * from book WHERE ctype='$ctype' AND location='$location' AND station='$station' AND bdate='$bdate' AND bslot='$bslot'")or die(mysqli_error());
            $cnt=mysqli_num_rows($qu);
            if($cnt>0)
            {
                unset($_SESSION['wr']);
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Booking Already Exit.');
                window.location.href='booknow.php';
                </script>");
            }
            else
            {
                $sql = "INSERT INTO book (ctype,c_email,station,mobile,date,bdate,bslot,price,location)
                VALUES ('$ctype','$uemail','$station','$mobile','$cdate','$bdate','$bslot','$price','$location')";
    
                $run = mysqli_query($con,$sql);
    
                if($run)
                {
                    unset($_SESSION['wr']);
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Thank you for Booking.');
                window.location.href='booknow.php';
                </script>");
                }
                else 
                {
                    echo "Error: record not Added " ;
                }
            }
         }
        ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Book Now</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

                     

            <section aria-label="section">
                <div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h3>Book Now</h3>
                            
							<div class="spacer-10"></div>
							
							<form  class="form-border" action='' method="GET">

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sel1">Select Car Type:</label>
                                            <select class="form-control" name='ctype' id="loadd"  onchange="ty()" required>
                                            <?php if(isset($_SESSION['wr'])) { $ccty = $_SESSION['wr'];?>
                                                <option><?php echo $ccty; ?></option>
                                            <?php } else { ?>
                                                <option></option>
                                            <?php } ?>
                                            <option>EV</option>
                                            <option>CNG</option>
                                            
                                            </select>
                                          </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sel1">Select Your Location:</label>
                                            
                                            <select id="loadcity_id"  onchange="loadcity()" class="form-control" name="location" required>
                                            <option></option>
                                            <?php if(isset($_SESSION['wr'])) { $ccty = $_SESSION['wr'];
                                                $sql = "SELECT * FROM `station` WHERE ctype='$ccty' group by location ";
                                                $srest = mysqli_query($con, $sql) or die( mysqli_error($con));
                                             } else { 
                                                $sql = "SELECT * FROM `station` group by location ";
                                                $srest = mysqli_query($con, $sql) or die( mysqli_error($con));
                                             }
                                            while($row=mysqli_fetch_array($srest))
                                            {
                                            ?>
                                            <option value='<?php echo $row['location_code']; ?>'><?php echo $row['location']; ?></option>
                                            <?php } ?>
                                            </select>
                                          </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sel1">Select Your Station:</label>
                                            <select class="form-control" id="sub_category_id" name="station" onchange="price()">
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sel1">Station Price:</label>
                                            <select class="form-control" id="price_id" >
                                            </select>
                                          </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="field-set">
                                            <label>Date:</label>
                                            <input type='date' name='bdate' id='username' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sel1">Avilable Slot:</label>
                                            <select class="form-control" id="sel1" name='bslot'>
                                              <option>10AM-11AM</option>
                                              <option>12AM-01PM</option>
                                            </select>
                                          </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Phone:</label>
                                            <input type='text' name='mobile' id='phone' class="form-control">
                                        </div>
                                    </div>

                                    
                                    <!-- <h4 style="margin-top:10px;margin-bottom: 10px;">Pay & Book 400 INR</h4> -->


                                    <div class="col-md-12">

                                        <div class="pull-left">
                                            <button type='submit' name='dsubmit' class="btn-main color-2">Book Now</button>
                                        </div>

                                        

                                    </div>

                                </div>
                            </form>
							
						</div>
                    </div>
				</div>
            </section>

           

            

            

           

            <section id="section-call-to-action" class="bg-color-2 pt60 pb60 text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-1">
                            <h2 class="s2">Call us for further information. EZ-Plug customer care is here to help you anytime.</h2>
                        </div>

                        <div class="col-lg-5 text-lg-center text-sm-center">
                            <div class="phone-num-big">
                                <i class="fa fa-phone"></i>
                                <span class="pnb-text">
                                    Call Us Now
                                </span>
                                <span class="pnb-num">
                                    1 200 333 800
                                </span>
                            </div>
                            <a href="contact.php" class="btn-main">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <?php include('footer.php'); ?>
        <!-- footer close -->
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>
        
        <script>
			function loadcity(){
				var tegory_id=jQuery('#loadcity_id').val();
				console.log('ggg', tegory_id);
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'POST',
					data:'cegory_id='+tegory_id,
					success:function(response){
                        console.log("Respond was: ", response);
            						jQuery('#sub_category_id').html(response);
            						price();
            					},
                      error: function (request, status, error) {
                          console.log("There was an error: ", request.response);
                      }
				});
			}
		</script>
        <script>
			function ty(){
				var tegory_id=jQuery('#loadd').val();
				console.log('ggg', tegory_id);
				jQuery.ajax({
					url:'get_sub_ctype.php',
					type:'POST',
					data:'cegory_id='+tegory_id,
					success:function(response){
                        console.log("Respond was: ", response);
                        document.location.reload();
            					},
                      error: function (request, status, error) {
                          console.log("There was an error: ", request.response);
                      }
				});
			}
		</script>
		<script>
			function price(){
				var tegory_id=jQuery('#sub_category_id').val();
				console.log('ggg', tegory_id);
				jQuery.ajax({
					url:'get_price.php',
					type:'POST',
					data:'cegory_id='+tegory_id,
					success:function(response){
                        console.log("Respond was: ", response);
            						jQuery('#price_id').html(response);
            					},
                      error: function (request, status, error) {
                          console.log("There was an error: ", request.response);
                      }
				});
			}
		</script>
        
</body>


</html>