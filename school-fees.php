<?php
include './class/include.php';

$SCHOOL_FEES = new Page(12);

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | School Fees</title>
        <meta name="description" content="Thomas Gall International is the most leading international school in galle area.We got healthy and suitable learning enviroment which helps keep your child safe and to devolop their skills.We will offer your child a higherly Standard Primary and Secondary education in English medium with a talented and experienced teacher and staff.We also maintain an international language academy to build up strong foundation to gain a supurior skill in English " />
        <meta name="keywords" content="thomas gall international school,thoams gall,international schools in galle,english medium preschool,english medium schools galle,primary school galle,secondary school galle,international language academy,private schools galle,best international school,schools in galle,best private schools galle,language acedemy galle,primary education,secondary education" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!--Favicon-->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="css/responsive.css" rel="stylesheet">
    </head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border: 1px black;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

/*        tr:nth-child(even) {
            background-color: #dddddd;
        }*/
    </style>
    <body>
        <div class="page-wrapper">



            <!-- Main Header-->
            <?php include './header.php'; ?>
            <!--End Main Header -->

            <!--Page Title-->
            <section class="page-title" style="background-image:url(images/background/5.jpg);">
                <div class="auto-container">
                    <div class="inner-box">
                        <h1>School Fees</h1>
                        <ul class="bread-crumb">
                            <li><a href="./">Home</a></li>
                            <li>Admission</li>
                            <li>School Fees</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <!--Sidebar Page-->
            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side-->
                        <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <!--Classes Single-->
                            <section class="classes-single">
                                <div class="inner-box">
                                    <!--Lower Box-->
                                    <div class="lower-content">
                                        <!--Upper Box-->
                                        <div class="upper-box">
                                            <div class="clearfix">
<!--                                                <div class="pull-left">
                                                    <h3>School Fees</h3>
                                                </div>-->

                                            </div>
                                        </div>
                                        <!--Lower Box-->
                                        <div class="lower-box">
                                            <div class="text">
                                                
                                                    <div>
                                                        <p><?php echo $SCHOOL_FEES->description; ?></p>
                                                    </div>
                                                                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>                

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

            <!--Main Footer-->
            <?php include './footer-index.php'; ?>
            <!--End Main Footer-->


        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/script.js"></script>

    </body>

</html>