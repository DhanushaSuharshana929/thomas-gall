<?php
include './class/include.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | Early Years</title>
        <meta name="description" content="Thomas Gall International is the most leading international school in galle area.Lets come and have good look at  what the parents say about our teaching procedure.You can have a draft idea about our school by reading those. " />
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
                        <h1>Testimonials</h1>
                        <ul class="bread-crumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="learning.php">Learning</a></li>
                            <li>Testimonials</li>
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
                        <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <!--Comments Area-->
                            <div class="comments-area">

                                <!--Comment Box-->


                                <?php
                                $COMMENT = new Comments(NULL);

                                foreach ($COMMENT->all() as $key => $comment) {
                                    if ($key % 2 == 0) {
                                        ?>
                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb">
                                                    <div class="image">
                                                        <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="">
                                                    </div>
                                                    <div class="author-name"><?php echo $comment['name']; ?></div>
                                                </div>


                                                <div class="comment-inner">
                                                    <div class="comment-info"><div class="comment-time">Mar 7, 2017</div></div>
                                                    <div class="text"><?php echo $comment['comment']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="comment-box reply-comment">
                                            <div class="comment">
                                                <div class="author-thumb">
                                                    <div class="image">
                                                        <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="">
                                                    </div>
                                                    <div class="author-name"><?php echo $comment['name']; ?></div>
                                                </div>
                                                <div class="comment-inner">
                                                    <div class="comment-info clearfix"><div class="comment-time">Mar 10, 2017</div></div>
                                                    <div class="text"><?php echo $comment['comment']; ?></div>
                                                </div>
                                            </div>

                                        </div>

                                        <?php
                                    }
                                }
                                ?>


                            </div>
                            <!--End Comments Area-->

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

</html>