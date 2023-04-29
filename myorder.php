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
        <?php include('header.php'); ?>
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
									<h1>Dashboard</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

                     

            <section id="section-cars" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="images/profile/1.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                        <?php echo $uname; ?>                                             
                                            <span class="profile_username text-gray"><?php echo $uemail; ?> </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href="profile.php"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="myorder.php" class="active"><i class="fa fa-calendar"></i>My Orders</a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-9">

                            

                            <div class="card p-4 rounded-5 mb25">
                                <h4>Completed Orders</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Car Type</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Location</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Station Name</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Date Of Booking</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Slot Of Booking</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Price</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Contact Number</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                        <?php
                                          $sql = "SELECT * FROM book WHERE c_email = '$uemail'";
                                          $srest = mysqli_query($con, $sql) or die( mysqli_error($con));
                                          while($row=mysqli_fetch_array($srest))
                                          {
                                        ?>
                                      <tr>
                                        <td><span class="d-lg-none d-sm-block">Car Type</span><div class="badge bg-gray-100 text-dark"><?php echo $row['ctype']; ?></div></td>
                                        <td><span class="d-lg-none d-sm-block">Car Name</span><span class="bold"><?php echo $row['location']; ?></span></td>
                                        <td><span class="d-lg-none d-sm-block">Type Booking</span><?php echo $row['station']; ?></td>
                                        <td><span class="d-lg-none d-sm-block">Date Of Booking</span><?php echo $row['bdate']; ?></td>
                                        <td><span class="d-lg-none d-sm-block">Slot Of Booking</span><?php echo $row['bslot']; ?></td>
                                        <td><span class="d-lg-none d-sm-block">Payment</span><?php echo $row['price']; ?> INR</td>
                                        <td><div class="badge rounded-pill bg-success"><?php echo $row['mobile']; ?></div></td>
                                      </tr>
                                      <?php } ?>

                                  </tbody>
                                </table>
                            </div>

                           
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

</body>


</html>