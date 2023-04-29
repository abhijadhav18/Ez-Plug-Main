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
                                    <li><a href="profile.php" class="active"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="myorder.php"><i class="fa fa-calendar"></i>My Orders</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card p-4  rounded-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php
                                        if(isset($_POST['usubmit']))
                                        {
                                            $name=$_POST['name'];
                                            $email=$_POST['email'];
                                            $mobile=$_POST['mobile'];
                                            $password=$_POST['password'];
                                            
                                            $sql = "UPDATE `user` SET 
                                            name='$name',email='$email',mobile='$mobile',password='$password' WHERE sno ='$user_id'";
                                            
                                            $run = mysqli_query($con,$sql);
                                            
                                            if($run)
                                            {
                                                echo ("<script LANGUAGE='JavaScript'>
                                                window.location.href='profile.php';
                                                </script>");   
                                            } else {
                                                echo "Error: record not Updated " ;
                                            }
                                        }
                                        ?>
                                        <form id="form-create-item" class="form-border" method='POST' action="">
                                        <div class="de_tab tab_simple">
                                        
                                            <ul class="de_nav">
                                                <li class="active"><span>Profile</span></li>
                                                
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Name</h5>
                                                            <input type="text" name="name" value='<?php echo $uname; ?>' id="Name" class="form-control" placeholder="Enter username" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Email Address</h5>
                                                            <input type="text" name="email" value='<?php echo $uemail; ?>' id="email_address" class="form-control" placeholder="Enter email" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Phone</h5>
                                                            <input type="number" name="mobile" value='<?php echo $umobile; ?>' id="Phone" class="form-control" placeholder="********" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Password</h5>
                                                            <input type="password" name="password" value='<?php echo $upassword; ?>' id="user_password" class="form-control" placeholder="********" />
                                                        </div>
                                                        
                                                                                      
                                                    </div>
                                                </div>

                                               

                                            </div>
                                        </div>

                                        <input type="submit" name='usubmit' id="submit" class="btn-main" value="Update profile">
                                        </form>
                                    </div>
                                </div>
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