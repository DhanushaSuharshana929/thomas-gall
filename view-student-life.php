<?php
include './class/include.php';
$id = $_GET['id'];
$STUDENT = new Activities($id);
$STUDENTLIFEPHOTOS = new ActivitiesPhoto(null);
?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from t.commonsupport.xyz/saratov/classes-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:54:51 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | View Student Life</title>
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
                        <h1>View Student Life</h1>
                        <ul class="bread-crumb">
                            <li><a href="./">Home</a></li>
                            <li>Student Life</li>
                            <li>View Student Life</li>
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
                                    <div class="classes-carousel">
                                        <div class="carousel-outer">

                                            <ul class="image-carousel owl-carousel owl-theme">
                                                <?php foreach ($STUDENTLIFEPHOTOS->getActivitiesPhotosById($id) as $image) { ?>
                                                    <li><a href="upload/activity/gallery/<?php echo $image['image_name'] ?>" class="lightbox-image" title="<?php echo $image['caption'] ?>"><img src="upload/activity/gallery/<?php echo $image['image_name'] ?>" alt=""></a></li>
                                                <?php } ?>
                                            </ul>

                                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                                <?php foreach ($STUDENTLIFEPHOTOS->getActivitiesPhotosById($id) as $image) { ?>
                                                    <li><a href="upload/activity/gallery/thumb/<?php echo $image['image_name'] ?>" class="lightbox-image" title="<?php echo $image['caption'] ?>"><img src="upload/activity/gallery/thumb/<?php echo $image['image_name'] ?>" alt=""></a></li>
                                                <?php } ?>                                            </ul>                                  

                                        </div>
                                    </div>
                                    <!--Lower Box-->
                                    <div class="lower-content">
                                        <!--Upper Box-->
                                        <div class="upper-box">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <h3><?php echo $STUDENT->title ?></h3>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Lower Box-->
                                        <div class="lower-box">
                                            <div class="text">
                                                <p><?php echo $STUDENT->description ?> </p>                                       
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
                                        <h3>Student Life</h3>
                                    </div>
                                    <ul>        
                                        <?php
                                        $ACTIVITYNAV = new ActivityType(Null);

                                        foreach ($ACTIVITYNAV->all() as $st) {
                                            ?>
                                            <li><a href="student-life.php?type=<?php echo $st['id'] ?>"><?php echo $st['name'] ?></a></li>
                                        <?php } ?>  
                                    </ul>
                                </div>

                            </aside>
                        </div>

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

    <!-- Mirrored from t.commonsupport.xyz/saratov/classes-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Feb 2020 08:55:06 GMT -->
</html>