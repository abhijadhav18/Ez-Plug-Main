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
        ob_start();
        if(isset($_REQUEST['submit']))
        {
        $name=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $qu=mysqli_query($con,"select * from user where email='".$name."' AND password='".$password."' AND status='0'")or die(mysqli_error());
        
        $cnt=mysqli_num_rows($qu);
        if($cnt>0)
        {
          $_SESSION['client']=$_REQUEST['email'];
          
          echo ("<script LANGUAGE='JavaScript'>
            window.alert('Login Successfully');
            window.location.href='index.php';
            </script>");
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Invalid Credentials');
            window.location.href='login.php';
            </script>");
            
        $_SESSION['error']='Invalid login';
        }
        }
        ?>
        <!-- header close -->
       <!-- content begin -->
       <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="jarallax">
            <img src="images/background/2.jpg" class="jarallax-img" alt="">
            <div class="v-center">
                <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 offset-lg-4">
                                <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                    <h4>Login</h4>
                                    <div class="spacer-10"></div>
                                    <form id="form_register" class="form-border" method="post">
                                        <div class="field-set">
                                            <input type="email" name="email" id="name" class="form-control" placeholder="Please Enter Email Id" />
                                        </div>
                                        <div class="field-set" style="margin-top:10px;">
                                            <input type="password" name="password" id="name" class="form-control" placeholder="Please Enter Password" />
                                        </div>
                                        <div id="submit">
                                            <input type="submit" name='submit' id="send_message" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
                                        </div>
                                    </form>
                                    <p style="margin-top:15px;text-align: center;margin-bottom: 0px;"><a href="register.php">Dont Have Register Account Click Here To Register</a></p>
                                    
                                </div>
                            </div>
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