<!DOCTYPE html>
<?php
include './class/include.php';
$FOUNDERS_WELCOME = new Page(1);

$VISION = new Page(2);

$MISSION = new Page(3);
?>
<html>

    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | About TGS</title>
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

    <body>
        <div class="page-wrapper">


            <!-- Main Header-->
            <?php include './header.php'; ?>
            <!--End Main Header -->

            <!--Page Title-->
            <section class="page-title" style="background-image:url(images/background/5.jpg);">
                <div class="auto-container">
                    <div class="inner-box">
                        <h1>About TGS</h1>
                        <ul class="bread-crumb">
                            <li><a href="index.php">Home</a></li>
                            <li>About TGS</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <!--Founders Welcome Section-->

            <section class="welcome-section" id="welcome">
                <div class="auto-container">

                    <!--Start Sec Title-->
                    <div class="sec-title centered">
<!--                        <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>-->
                        <h2>Founders Welcome</h2>
                        <div class="title">Learning for self,  society and a sustainable future</div>
                    </div>
                    <!--End Sec Title-->
                    <div class="row">
                        <div class="col-md-5">
                            <img src="upload/page/<?php echo $FOUNDERS_WELCOME->image_name ?>">
                        </div>
                        <div class=" col-md-7">
                            <p text-align="justify"><?php echo $FOUNDERS_WELCOME->description ?></p>
                        </div>
                    </div>

                </div>
            </section>

            <!--End Welcome Section-->


            <!--Classes News-->

            <section class="classes-news-section" id="vision">
                <div class="auto-container">

                    <!--Sec Title-->
                    <div class="sec-title centered">
<!--                        <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>-->
                        <h2>Our vission, Mission & Core values</h2>
                        <div class="title">Learning for self,  society and a sustainable future</div>

                    </div>
                    <!--End Sec Title-->
                    <div class="sec-title centered">


                    </div>
                    <div class="row clearfix">


                        <!--News Style Two-->
                        <div class="news-style-two col-md-6 col-sm-12 col-xs-12">
                            <div class="inner-box">
                                <!--Image Column-->
                                <div class="image-column">
                                    <div class="image">
<!--                                        <a href="#"><img src="upload/page/<?php echo $VISION->image_name ?>" alt="" /></a>-->

                                        <div class="overlay-layer">
                                            <a href="#"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column" style="background: #FFF;">
                                    <div class="inner">

                                        <center> <h3><a href="#">Our Vision</a></h3></center>
                                        <div class="text"><?php echo $VISION->description ?></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--News Style Two-->
                        <div class="news-style-two col-md-6 col-sm-12 col-xs-12">
                            <div class="inner-box">
                                <!--Image Column-->
                                <div class="image-column">
                                    <div class="image">
<!--                                        <a href="#"><img src="upload/page/<?php echo $MISSION->image_name ?>" alt="" /></a>-->

                                        <div class="overlay-layer">
                                            <a href="#"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column" style="background: #FFF;">
                                    <div class="inner">

                                        <center><h3><a href="#">Our Mission</a></h3></center> 
                                        <div class="text"><?php echo $MISSION->description ?></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!--End Classes News-->

            <!--values Section-->

            <section class="featured-section">
                <div class="auto-container">
                    <!--Sec Title-->
                    <div class="sec-title centered">
<!--                        <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>-->
                        <h2>TGS Values</h2>
                        <div class="title">CREW</div>
                       
                    </div>
                    <!--End Sec Title-->

                    <div class="section-icon"><img src="images/icons/icon-1.png" alt="" /></div>
                    <div class="section-icon one"><img src="images/icons/icon-2.png" alt="" /></div>
                    <div class="section-icon two"><img src="images/icons/icon-3.png" alt="" /></div>
                    <div class="section-icon three"><img src="images/icons/icon-4.png" alt="" /></div>
                    <div class="row clearfix">
                        <!--Column/ Pull Left-->
                        <div class="column pull-left col-md-4 col-sm-6 col-xs-12">
                            <!--Feature Block-->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span>C</span>
                                    </div>
                                    <h3><a href="#">Communicate politely</a></h3>
                                    <!--                                    <div class="text">We are group of teachers who really love childrens and enjoy every mo-</div>-->
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span>R</span>
                                    </div>
                                    <h3><a href="#">Respect others and property</a></h3>
                                    <!--                                    <div class="text">We are group of teachers who really love childrens and enjoy every mo-</div>-->
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span>R</span>
                                    </div>
                                    <h3><a href="#">Responsible choices at all times</a></h3>
                                    <!--                                    <div class="text">We are group of teachers who really love childrens and enjoy every mo-</div>-->
                                </div>
                            </div>

                        </div>
                        <!--Column / Pull Right-->
                        <div class="column pull-right col-md-4 col-sm-6 col-xs-12">
                            <!--Feature Block Two-->
                            <div class="feature-block-two">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span>U</span>
                                    </div>
                                    <h3><a href="#">Use time wisely</a></h3>
                                    <!--                                    <div class="text">We are group of teachers who really love childrens and enjoy every mo-</div>-->
                                </div>
                            </div>

                            <!--Feature Block Two-->
                            <div class="feature-block-two">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span>W</span>
                                    </div>
                                    <h3><a href="features.html">Work and play safely</a></h3>
                                    <!--                                    <div class="text">We are group of teachers who really love childrens and enjoy every mo-</div>-->
                                </div>
                            </div>



                        </div>

                        <div class="image-column col-md-4 col-sm-12 col-xs-12">
                            <figure class="image wow fadeInUp">
                                <img src="images/resource/feature-img.png" alt="" />
                            </figure>
                        </div>

                    </div>
                </div>
            </section>
        </a>
        <!--End values Section-->



        <!--Teachers Section-->
        <section class="teachers-section no-padding-btm" id="people">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title centered">
<!--                    <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>-->
                    <h2>Our Staff</h2>
                    <div class="title">Our Great Team</div>

                </div>

                <div class="three-item-carousel owl-carousel owl-theme">

                    <?php
                    $PEOPLE = new Attraction(null);
                    foreach ($PEOPLE->all() as $people) {
                        ?>
                        <div class="teacher-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="upload/attraction/<?php echo $people['image_name'] ?>" alt="" />
                                </div>
                                <h3><?php echo $people['title'] ?></h3>
                                <h4><?php echo $people['short_description'] ?></h4>
                                <div class="designation"><?php echo $people['description'] ?></div>

                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>

        </section>
        <!--End Teachers Section-->


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