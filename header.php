<?php
include('config.php');
ob_start();
session_start();
if(isset($_SESSION['client']))
{ 
  $yemail=$_SESSION['client'];
                      
  $ql = "SELECT * FROM user WHERE email = '$yemail'";
  $rest = mysqli_query($con, $ql) or die( mysqli_error($con));
  while($jjw=mysqli_fetch_array($rest))
  {
    $user_id=$jjw['sno'];
    $uname=$jjw['name'];
    $uemail=$jjw['email'];
    $umobile=$jjw['mobile'];
    $upassword=$jjw['password'];
  }
}
?>

    <header class="transparent scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+91-1234567890</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>info@domain.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
                        </div>
                    </div>
                
                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>  
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.php">
                                            <h4 style="font-size:25px;">Ez-Plug</h4>
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="index.php">Home</a></li>
                                    <li><a class="menu-item" href="about.php">About Us</a></li>
                                    <?php if(isset($_SESSION['client'])) { ?>
                                    <li><a class="menu-item" href="booknow.php">Book Now</a></li>
                                    <?php } else { ?>
                                        <li><a class="menu-item" href="login.php">Book Now</a></li>
                                    <?php } ?>
                                    <li><a class="menu-item" href="contact.php">Contact</a></li>
                                    <?php if(isset($_SESSION['client'])) { ?>
                                    <li><a class="menu-item" href="#">My Account</a>
                                        <ul>
                                            <li><a class="menu-item" href="dashboard.php">Dashboard</a></li>
                                            <li><a class="menu-item" href="profile.php">My Profile</a></li>
                                            <li><a class="menu-item" href="myorder.php">My Orders</a></li>
                                            
                                        </ul>
                                    </li>
                                    <?php } else { ?>
                                        <li><a class="menu-item" href="register.php">Register</a></li>
                                    <?php } ?>
                                    <li><a class="menu-item" href="evlocation.php">EV Location</a></li>
                                    <li><a class="menu-item" href="cnglocation.php">CNG Location</a></li>
                                   
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                            <?php if(isset($_SESSION['client'])) { ?>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="logout.php" class="btn-main">Logout</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="login.php" class="btn-main">Log In</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>