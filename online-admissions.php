<!DOCTYPE html>
<html>

    <!-- Mirrored from t.commonsupport.xyz/saratov/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:55:19 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | Online Admission</title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="registration-form/style.css" rel="stylesheet" type="text/css"/>
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
                        <h1>Online Admissions</h1>
                        <ul class="bread-crumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Online Admissions</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <!--Contact Section-->
            <section class="contact-section">
                <div class="auto-container">
                    <div class="form-section">
                        <div class="row clearfix">
                            <!--Form Column-->
                            <div class="form-column col-md-8 col-sm-12 col-xs-12">
                                <!-- contact Form -->
                                <div class="contact-form">
                                    <!--contact Form-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Full Name</label>
                                            <div class="form-group">
                                                <input type="text" id="txtFullName" name="fullname" placeholder="Name in Full *" required>
                                            </div>
                                            <span id="spanFullName"></span>
                                        </div>

                                        <div class="col-md-12">
                                            <label>Birthday</label>
                                            <div class="form-group">
                                                <input type="date" id="txtBirthday" name="bday" placeholder="Birthdate *" required>
                                            </div>
                                            <span id="spanBirthday"></span>
                                        </div>
                                        
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select name="gender" id="txtGender" >
                                                    <option>-- *Select Gender* -- </option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                                <span id="spanGender"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label>Nationality</label>
                                            <div class="form-group">
                                                <input type="text" id="txtNationality"name="nationality" placeholder="Nationality *" required>
                                            </div>
                                            <span id="spanNationality"></span>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label>Email</label>
                                            <div class="form-group">
                                                <input type="email" id="txtEmail"name="email" placeholder="Email *" required>
                                            </div>
                                            <span id="spanEmail"></span>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label>Contact No</label>
                                            <div class="form-group">
                                                <input id="txtPhone" type="text" name="contact" placeholder="Contact No *" required>
                                            </div>
                                            <span id="spanPhone"></span>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <div class="form-group">
                                                <input type="text" id="txtAddress"name="address" placeholder="Address *" required>
                                            </div>
                                            <span id="spanAddress"></span>
                                        </div>
                                        
                                        <div class="col-md-5">
                                            <label>Captcha Code</label>
                                            <div class="form-group">
                                                <input type="text" id="captchacode" name="captcha" placeholder="Captcha Code" required>
                                            </div>
                                            <span id="capspan"></span>
                                        </div>
                                        
                                        <div class="col-md-3 col-sm-3 col-xs-3 "style="margin-top: 28px;">
                                            <div class="form-group">
                                                <center> <?php include './registration-form/captchacode-widget.php'; ?>
                                                </center>

                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-4 col-xs-4" style="margin-top: 28px;">

                                            <div class="form-group">
                                                <button class="theme-btn btn-style-one" id="btnSubmit" type="submit" name="submit-form">Send Application</button>            
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <img src="./booking-form/img/checking.gif"   alt="checking" id="checking"/>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="dismessage" align="center"></div>
                                        </div>

                                    </div>
                                </div>
                                <!--End Contact Form -->
                            </div>

                            <!--Sidebar-->
                            <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <aside class="sidebar">

                                    <!--Services Category Widget-->
                                    <div class="sidebar-widget category-widget">
                                        <div class="sidebar-title">
                                            <h3>Admission</h3>
                                        </div>
                                        <ul>
                                            <li><a href="arrange-a-visit.php">Arrange a Visit</a></li>
                                            <li><a href="term-dates.php">Term Dates</a></li>
                                            <li><a href="years-group-guide.php">Years Group Guide</a></li>
                                            <li><a href="school-fees.php">School Fees</a></li> 
                                            <li><a href="application.php">Applications</a></li> 
                                            <li><a href="online-admissions.php">Online Admissions</a></li> 
                                        </ul>
                                    </div>

                                </aside>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <!--End Contact Section-->


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
        <script src="registration-form/scripts.js" type="text/javascript"></script>
        <!--Google Map APi Key-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
        <script src="js/map-script.js"></script>
        <!--End Google Map APi-->

    </body>

    <!-- Mirrored from t.commonsupport.xyz/saratov/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:55:19 GMT -->
</html>