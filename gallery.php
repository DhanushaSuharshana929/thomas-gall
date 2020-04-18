<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html>

    
    <head>
        <meta charset="utf-8">
        <title>Thomas Gall School | Gallery</title>
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
                        <h1>Our Gallery</h1>
                        <ul class="bread-crumb">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->

            <!--Gallery Section-->
            <section class="gallery-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <?php
                        $GALLERY = new AlbumPhoto(NULL);
                        foreach ($GALLERY->all() as $gallery) {
                            ?>
                            <!--Gallery Item-->
                            <div class="gallery-item col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box"><img src="upload/photo-album/gallery/thumb/<?php echo $gallery['image_name']; ?>" alt="">
                                        <div class="overlay-box">
                                            <div class="content">
                                                <a class="lightbox-image" href="upload/photo-album/gallery/<?php echo $gallery['image_name']; ?>" title="<?php echo $gallery['caption']; ?>" data-fancybox-group="example-gallery"><span class="icon flaticon-plus"></span></a>
                                            </div>
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
            <!--End Gallery Section-->



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
        <script src="js/script.js"></script>
    </body>

</html>