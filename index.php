
<?php
include './class/include.php';
$STUDENTLIFE1 = new Activities(NULL);
$ACTIVITY1 = $STUDENTLIFE1->allActiviesByType(1);
$ACTIVITY2 = $STUDENTLIFE1->allActiviesByType(2);
$ACTIVITY3 = $STUDENTLIFE1->allActiviesByType(3);
$ACTIVITY4 = $STUDENTLIFE1->allActiviesByType(4);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="description" content="Thomas Gall International is the most leading international school in galle area.We got healthy and suitable learning enviroment which helps keep your child safe and to devolop their skills.We will offer your child a higherly Standard Primary and Secondary education in English medium with a talented and experienced teacher and staff.We also maintain an international language academy to build up strong foundation to gain a supurior skill in English " />
        <meta name="keywords" content="thomas gall international school,thoams gall,international schools in galle,english medium preschool,english medium schools galle,primary school galle,secondary school galle,international language academy,private schools galle,best international school,schools in galle,best private schools galle,language acedemy galle,primary education,secondary education" />
        <meta name="author" content="Synotec Holdings Private Limited" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Thomas Gall School</title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/revolution-slider.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">

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

            <!--Main Slider-->
            <?php include './slider.php'; ?>
            <!--End Main Slider-->

            <!--Classes News-->
            <section class="classes-news-section">
                <div class="auto-container">

                    <div class="row clearfix">

                        <!--News Style Two-->
                        <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <!--Image Column-->
                                <?php $PRIMARY=new Page(5);?>
                                <div class="image-column">
                                    <div class="image">
                                        <a href="#"><img src="upload/page/<?php echo $PRIMARY->image_name?>" alt="" /></a>

                                        <div class="overlay-layer">
                                            <a href="#"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                                                <div class="content-column">
                                    <div class="inner">
                                
                                        <h3><a href="#"><?php echo $PRIMARY->title?></a></h3>
                                        <div class="text"><?php echo substr($PRIMARY->description,0,70)."..."?></div>
                                        <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--News Style Two-->
                        <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <!--Image Column-->
                                <?php $SECONDARY=new Page(6)?>
                                <div class="image-column">
                                    <div class="image">
                                        <a href="#"><img src="upload/page/<?php echo $SECONDARY->image_name?>" alt="" /></a>

                                        <div class="overlay-layer">
                                            <a href="#"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                
                                <div class="content-column">
                                    <div class="inner">

                                        <h3><a href="#"><?php echo $SECONDARY->title?></a></h3>
                                        <div class="text"><?php echo substr($SECONDARY->description,0,70)."..."?></div>
                                        <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--News Style Two-->
                        <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                                    <?php $LANGUAGE_ACEDEMY=new Page(7) ?>
                            <div class="inner-box">
                                <!--Image Column-->
                                <div class="image-column">
                                    <div class="image">
                                        <a href="learning.php"><img src="upload/page/<?php echo $LANGUAGE_ACEDEMY->image_name?>" alt="" /></a>

                                        <div class="overlay-layer">
                                            <a href="#"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column">
      
                                    <div class="inner">

                                        <h3><a href="#"><?php echo $LANGUAGE_ACEDEMY->title?></a></h3>
                                        <div class="text"><?php echo substr($LANGUAGE_ACEDEMY->description,0,70)."..."?></div>
                                        <a href="#" class="theme-btn btn-style-one">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--End Classes News-->



            <!--Featured Section-->
            <section class="featured-section style-two">
                <div class="auto-container">

                    <!--Sec Title-->
                    <div class="sec-title centered">
<!--                        <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>-->
                        <h2>Welcome to Thomas Gall School</h2>
                        <div class="title">About Our Thomas Gall School</div>
                        <div class="dark-text">Learning for self,  society and a sustainable future</div>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
                        <a href="#" class="theme-btn btn-style-one">Read More</a>
                    </div>
                    <!--End Sec Title-->

                    <div class="row clearfix">
                        <!--Column/ Pull Left-->
                        <div class="column pull-left col-md-4 col-sm-6 col-xs-12">
                            <!--Feature Block-->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-book"></span>
                                    </div>
                                    <h3><a href="#">Funny and Happy</a></h3>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                </div>
                            </div>

                            <!--Feature Block-->
                            <div class="feature-block">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-football"></span>
                                    </div>
                                    <h3><a href="#">Fulfill With Love</a></h3>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                </div>
                            </div>

                        </div>
                        <!--Column / Pull Right-->
                        <div class="column pull-right col-md-4 col-sm-6 col-xs-12">
                            <!--Feature Block Two-->
                            <div class="feature-block-two">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-paint-palette-and-brush"></span>
                                    </div>
                                    <h3><a href="#">Professional Teaching</a></h3>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                </div>
                            </div>

                            <!--Feature Block Two-->
                            <div class="feature-block-two">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-graduation-cap"></span>
                                    </div>
                                    <h3><a href="#">Fully Equiped</a></h3>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                </div>
                            </div>

                        </div>

                        <div class="image-column col-md-4 col-sm-12 col-xs-12">
                            <figure class="image wow fadeInUp">
                                <img src="images/resource/welcome-2.png" alt="" />
                            </figure>
                        </div>

                    </div>

                </div>
            </section>
            <!--End Featured Section-->

            <!--Call To Action-->
            <section class="call-to-action" style="background-image:url(images/background/2.jpg);">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Column-->
                        <div class="content-column pull-right col-md-8 col-sm-12 col-xs-12">
                            <h3><span>Get Enroll, </span>How to Enroll Your Child <br> to a Class?</h3>
                            <div class="text">We are group of teachers who really love childrens and eaching and playing with our students.enjoy every and playing with our students.</div>
                            <a href="contact.php" class="theme-btn btn-style-one">Contact Now</a>
                        </div>
                        <!--Image Column-->
                        <div class="image-column pull-left col-md-4 col-sm-12 col-xs-12">
                            <figure class="image wow fadeInUp">
                                <img src="images/resource/baby.png" alt="" />
                            </figure>
                        </div>

                    </div>

                </div>
            </section>
            <!--End Call To Action-->





            <!--Blog Section-->
            <section class="blog-section">
                <div class="auto-container">
                    <!--Sec Title-->
                     <div class="sec-title centered">
<!--                        <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt="" /></div>-->
                        <h2>Student Life</h2>
                        <div class="title">Time Line & Ativities</div>
                        <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                    </div></center>
                    <div class="row clearfix">

                        <div class="tab-column col-md-12 col-sm-12 col-xs-12">

                            <!--Product Info Tabs-->
                            <div class="product-info-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#education" class="tab-btn active-btn">Student Support & Wellbeing</li>
                                        <li data-tab="#activity" class="tab-btn">Charity And Community</li>
                                        <li data-tab="#painting" class="tab-btn">Curricular Activities</li>
                                        <li data-tab="#games" class="tab-btn">Cultural Event</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="education">
                                            <div class="content">

                                                <?php foreach ($ACTIVITY1 as $Studentsnw)
                                                    
                                                    ?>
                                                <!--Tab Boxed-->
                                                <div class="tab-boxed">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <img src="upload/activity/thumb/<?php echo $Studentsnw['image_name'] ?>" alt="" />
                                                        </div>
                                                        <h3><?php echo $Studentsnw['title'] ?></h3>
                                                        <div class="text"><?php echo $Studentsnw['description'] ?> </div>
                                                    </div>
                                                </div>
                                                <?php ?>


                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="activity">
                                            <div class="content">

                                                <?php foreach ($ACTIVITY2 as $charity)
                                                    
                                                    ?>
                                                <!--Tab Boxed-->
                                                <div class="tab-boxed">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <img src="upload/activity/thumb/<?php echo $charity['image_name'] ?>" alt="" />
                                                        </div>
                                                        <h3><?php echo $charity['title'] ?></h3>
                                                        <div class="text"><?php echo $charity['description'] ?> </div>
                                                    </div>
                                                </div>
                                                <?php ?>


                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="painting">
                                            <div class="content">

                                                <?php foreach ($ACTIVITY3 as $cirricular)
                                                    
                                                    ?>
                                                <!--Tab Boxed-->
                                                <div class="tab-boxed">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <img src="upload/activity/thumb/<?php echo $cirricular['image_name'] ?>" alt="" />
                                                        </div>
                                                        <h3><?php echo $cirricular['title'] ?></h3>
                                                        <div class="text"><?php echo $cirricular['description'] ?> </div>
                                                    </div>
                                                </div>
                                                <?php ?>


                                            </div>
                                        </div>

                                        <!--Tab-->
                                        <div class="tab" id="games">
                                            <div class="content">

                                                <?php foreach ($ACTIVITY4 as $cultural)
                                                    
                                                    ?>
                                                <!--Tab Boxed-->
                                                <div class="tab-boxed">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <img src="upload/activity/thumb/<?php echo $cultural['image_name'] ?>" alt="" />
                                                        </div>
                                                        <h3><?php echo $cultural['title'] ?></h3>
                                                        <div class="text"><?php echo $cultural['description'] ?> </div>
                                                    </div>
                                                </div>
                                                <?php ?>


                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--End Product Info Tabs-->

                        </div>
                    </div>
                </div>
            </section>
            <!--End Blog Section-->



            <!--Testimonial Section-->

            <section class="testimonial-section" style="background-image:url(images/background/pattern-1.png);">

                <div class="auto-container">
                    <div class="sec-title centered">
                        <div class="title-icon"><img src="images/icons/sec-title-icon-1.png" alt=""></div>
                        <h2>TESTIMONIALS</h2>
                    </div>
                    <!--Client Testimonial Carousel-->
                    <div class="client-testimonial-carousel owl-carousel owl-theme">

                        <?php
                        $COMMENT = new Comments(NULL);

                        foreach ($COMMENT->all() as $comment) {
                            ?>                 <!--Testimonial Block Two-->
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
                                    <div class="text"><?php echo $comment['comment']; ?>...</div>
                                </div>
                            </div>
                        <?php }
                        ?>


                    </div>

                    <!--Product Thumbs Carousel-->
                    <div class="client-thumb-outer">
                        <div class="client-thumbs-carousel owl-carousel owl-theme">
                            <?php
                            $COMMENT = new Comments(NULL);

                            foreach ($COMMENT->all() as $comment) {
                                ?>
                                <div class="thumb-item">
                                    <figure class="thumb-box"><img src="upload/comments/<?php echo $comment['image_name']; ?>" alt=""></figure>
                                    <div class="thumb-content">
                                        <h3><?php echo $comment['name']; ?></h3>
                                        <div class="designation">Parents</div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>


                </div>
            </section>
            <!--End Testimonial Section-->


            <!--Main Footer-->
            <?php include './footer-index.php'; ?>
            <!--End Main Footer-->

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/revolution.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>