<?php
include './class/include.php';
$STUDENT = new Activities(NULL);
$type = $_GET['type'];
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="We arrange large number of activities to devolop the the esthetic skills and  the logical thinking factor of our childerns.We will make your child  a smart and a talented individual in each and every factor with guidence of our experienced and tallented staff." />
        <meta name="keywords" content="thomas gall international school,thoams gall,international schools in galle,english medium preschool,english medium schools galle,primary school galle,secondary school galle,international language academy,private schools galle,best international school,schools in galle,best private schools galle,language acedemy galle,primary education,secondary education" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Thomas Gall School | Activities</title>
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
                        <h1>Student Life</h1>
                        <ul class="bread-crumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Student Life</li>

                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <section class="classes-section">
                <div class="auto-container">                  

                    <div class="row clearfix">

                        <!--News Style Two-->
                        <?php
                        foreach ($STUDENT->allActiviesByType($type) as $studentlife) {
                            ?>
                            <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <!--Image Column-->
                                    <div class="image-column">
                                        <div class="image">
                                            <a href="view-student-life.php?id=<?php echo $studentlife['id'] ?>">
                                                <img src="upload/activity/<?php echo $studentlife['image_name'] ?>" alt="" />
                                            </a>

                                            <div class="overlay-layer">
                                                <a href="view-student-life.php?id=<?php echo $studentlife['id'] ?>">
                                                    <span class="icon flaticon-unlink"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column">
                                        <div class="inner" style="padding: 15px 15px">
                                            <center>
                                                <h3>
                                                    <a href="view-student-life.php?id=<?php echo $studentlife['id'] ?>">
                                                        <?php echo $studentlife['title'] ?></a>
                                                </h3>
                                            </center>
                                            <center>
                                            <a href="view-student-life.php?id=<?php echo $studentlife['id'] ?>" class="theme-btn btn-style-one">View More</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>


                    </div>


                </div>
            </section>



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
        <script src="js/script.js"></script>
    </body>

</html>

