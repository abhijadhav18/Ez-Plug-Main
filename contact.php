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
        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['message'];
        
            $sql = "INSERT INTO contact (name,email,message,mobile,date)
            VALUES ('$name','$email','$message','$mobile','$cdate')";

            $run = mysqli_query($con,$sql);

            if($run)
            {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Thank you for connecting with us.');
            window.location.href='contact.php';
            </script>");
            }
        else 
            {
                echo "Error: record not Added " ;
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
									<h1>Contact Us</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

                     

            <section aria-label="section">
                <div class="container">
						<div class="row g-custom-x">
							
							<div class="col-lg-8 mb-sm-30">

							 <h3>Do you have any question?</h3>
							
        						<form name="contactForm" id="contact_form" class="form-border" method="post" action="">
                                        <div class="row">
                                            <div class="col-md-4 mb10">
                                                <div class="field-set">
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb10">
                                                <div class="field-set">
                                                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb10">
                                                <div class="field-set">
                                                    <input type="text" name="mobile" id="phone" class="form-control" placeholder="Your Phone" required>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="field-set mb20">
                                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                        <div id='submit' class="mt20">
                                            <input type='submit' name='submit' id='send_message' value='Send Message' class="btn-main">
                                        </div>

                                        <div id="success_message" class='success'>
                                            Your message has been sent successfully. Refresh this page if you want to send more messages.
                                        </div>
                                        <div id="error_message" class='error'>
                                            Sorry there was an error sending your form.
                                        </div>
                                    </form>
						</div>
						
						<div class="col-lg-4">

							<div class="de-box mb30">
								<h4>US Office</h4>
								<address class="s1">
									<span><i class="id-color fa fa-map-marker fa-lg"></i>EZ-Plug 08 W 36th St, New York, NY 10001</span>
									<span><i class="id-color fa fa-phone fa-lg"></i>+91-1234567890</span>
									<span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
									
								</address>
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