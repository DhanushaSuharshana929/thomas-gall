<?php
include './class/include.php';
$LANGUAGE = new Page(7);
?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from t.commonsupport.xyz/saratov/classes-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:54:51 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | Primary School</title>
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
                        <h1>International Language Academy</h1>
                        <ul class="bread-crumb">
                            <li><a href="./">Home</a></li>
                            <li><a href="learning.php">Learning</a></li>
                            <li>International Language Academy</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            
            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side-->
                        <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <!--Blog-->
                            <section class="blog-classic">

                                <!--News Style Four-->
                                  <div class="news-style-four">
                                    <div class="inner-box">
                                        <!--Image Column-->
                                        <div class="image">
                                            <a href="learning.php"><img src="upload/page/<?php echo $LANGUAGE->image_name?>" alt="" /></a>
                                        </div>
                                        <!--Content Column-->
                                        <div class="content-column">
                                            <div class="inner">

                                                <h3><a href="learning.php"><?php echo $LANGUAGE->title?></a></h3>

                                                <div class="text"><?php echo $LANGUAGE->description?></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <!--Sidebar-->
                        <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <aside class="sidebar">

                                <!--Our learnings Category Widget-->
                                <div class="sidebar-widget category-widget">
                                    <div class="sidebar-title">
                                        <h3>Our Learnings</h3>
                                    </div>
                                    <ul>
                                        <li><a href="early-years.php">Early Years<span></span></a></li>
                                        <li><a href="primary.php">Primary School<span></span></a></li>
                                        <li><a href="secondary.php">Secondary school<span></span></a></li>
                                        <li><a href="language.php">International Language Academy<span></span></a></li>                             
                                    </ul>
                                </div>
                                <!--Our learnings Category Widget-->

                            </aside>
                        </div>
                        <!--End Sidebar-->
                        
                    </div>
                </div>
            </div>

            <!--Main Footer-->
            <?php include './footer.php'; ?>
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

    <!-- Mirrored from t.commonsupport.xyz/saratov/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:55:10 GMT -->
</html>