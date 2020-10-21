<?php
include './class/include.php';
$id = $_GET['id'];
$STUDENT = new Activities($id);
$STUDENTLIFEPHOTOS = new ActivitiesPhoto(null);
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="We arrange large number of activities to devolop the the esthetic skills and  the logical thinking factor of our childerns.We will make your child  a smart and a talented individual in each and every factor with guidence of our experienced and tallented staff." />
        <meta name="keywords" content="thomas gall international school,thoams gall,international schools in galle,english medium preschool,english medium schools galle,primary school galle,secondary school galle,international language academy,private schools galle,best international school,schools in galle,best private schools galle,language acedemy galle,primary education,secondary education" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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