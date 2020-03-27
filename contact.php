<!DOCTYPE html>
<html>

    <!-- Mirrored from t.commonsupport.xyz/saratov/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:55:19 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | Contact</title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
        <!--Favicon-->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>
        <div class="page-wrapper">


            <!-- Main Header-->
            <?php include './header.php'; ?>
            <!--End Main Header -->


            <!--Page Title-->
            <section class="page-title" style="background-image:url(images/background/5.jpg);">
                <div class="auto-container">
                    <div class="inner-box">
                        <h1>Contact Us</h1>
                        <ul class="bread-crumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <!--Contact Section-->
            <section class="contact-section">
                <div class="auto-container">
                    <!--Info Section-->
                    <div class="info-section">
                        <div class="row clearfix">
                            <!--Contact Info Block-->
                            <div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box wow fadeIn" data-wow-delay="0ms">
                                        <span class="icon flaticon-location-pin"></span>
                                    </div>
                                    <div class="text">364A, Morris Road, Ambalanwaththa, Galle, Sri Lanka</div>
                                </div>
                            </div>

                            <!--Contact Info Block-->
                            <div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box wow fadeIn" data-wow-delay="300ms">
                                        <span class="icon flaticon-web"></span>
                                    </div>
                                    <div class="text"><br>admin@thomasgallschool.com</div>
                                </div>
                            </div>

                            <!--Contact Info Block-->
                            <div class="contact-info-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box wow fadeIn" data-wow-delay="600ms">
                                        <span class="icon flaticon-smartphone"></span>
                                    </div>
                                    <div class="text">+94 91 5633958 <br> 0774602588</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Form Section-->
                    <div class="form-section">
                        <div class="row clearfix">
                            <!--Form Column-->
                            <div class="form-column col-md-8 col-sm-12 col-xs-12">
                                <!-- contact Form -->
                                <div class="contact-form">
                                    <!--contact Form-->


                                    <div class="form-group">
                                        <input type="text" id="txtFullName" name="username" placeholder="Name *" required>
                                        <span id="spanFullName"></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" id="txtEmail" name="email" placeholder="Email *" required>
                                        <span id="spanEmail"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="txtPhone" name="phone" placeholder="Contact No *" required>
                                        <span id="spanPhone"></span>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" id="txtMessage" placeholder="Message"></textarea>
                                        <span id="spanMessage"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-5" style="padding-left: 0px">
                                                <div class="form-group" >
                                                    <input type="text" id="captchacode" name="captcha" placeholder="Security Code *" required>
                                                    <span id="capspan"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3" >
                                                <div class="form-group" >
                                                    <?php include './contact-form/captchacode-widget.php'; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <button class="theme-btn btn-style-one" type="submit" id="btnSubmit" name="submit-form">Send Message</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                       <img src="./contact-form/img/checking.gif"   alt="checking" id="checking"/>  
                                    </div>
                                </div>
                                <!--End Contact Form -->
                            </div>
                            <!--Time Column-->
                            <div class="time-column col-md-4 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <h3>Daily Time Table</h3>
                                    <ul class="time-info">
                                        <span></span>
                                        <li class="clearfix">   
                                            <div class="day-box">Early Years Class</div><div class="time-box">8.00 am to 12.30 pm</div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="day-box">Primary Grades</div><div class="time-box">8.00 am to 1.30 pm</div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="day-box">Afternoon Class</div><div class="time-box">1.00 pm to 2.00 pm</div>
                                        </li>

                                    </ul>


                                </div>



                            </div>
                            <!--End Time Column-->
                        </div>
                    </div>

                </div>
            </section>
            <!--End Contact Section-->


            <!--Map Section-->
            <div class="sec-title centered">
                <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>
                <h2>VISIT US</h2> 
                <div class="dark-text">Learning for self,  society and a sustainable future</div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.5615421340867!2d80.22672111432247!3d6.054723495615232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173d266bf98e1%3A0x7c3488945f85b937!2sThomas%20Gall%20School!5e0!3m2!1sen!2slk!4v1582698518567!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <!--End Map Section-->

            <!-- Main footer-->
            <?php include './footer.php'; ?>
            <!--End Main footer -->

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/script.js"></script>
        <script src="contact-form/scripts.js" type="text/javascript"></script>
        <!--Google Map APi Key-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
        <script src="js/map-script.js"></script>
        <!--End Google Map APi-->

    </body>

    <!-- Mirrored from t.commonsupport.xyz/saratov/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:55:19 GMT -->
</html>