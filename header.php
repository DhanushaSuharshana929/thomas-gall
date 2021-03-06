<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">
            <!--Top Left-->
            <div class="top-left pull-left">
                <ul class="links-nav clearfix">
                    <li><span class="icon fa fa-envelope-o"></span><a href="#">admin@thomasgallschool.com</a></li>
                    <li><span class="icon fa fa-phone"></span><a href="#">+94 91 5633958</a></li>
                </ul>
            </div>

            <!--Top Right-->
            <div class="top-right pull-right">
                <ul class="links-nav clearfix">
                    <li><span class="icon fa fa-map-marker"></span><a href="#">364A, Morris Road, Ambalanwaththa, Galle, Sri Lanka.</a></li>
<!--                    <li class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">En &ensp;<span class="icon fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                            <li><a href="#">English</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Arabic</a></li>
                            <li><a href="#">Hindi</a></li>
                        </ul>
                    </li>-->



                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">

            <div class="logo-outer">
                <div class="logo hidden-xs" ><a href="./"><img src="images/logo.jpg" alt="" title=""></a></div>
            </div>

            <div class="nav-outer clearfix">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->      
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <!--Left Nav-->
                        <ul class="navigation left-nav clearfix">
                            <li><a href="index.php">HOME</a></li>
                            <li class="dropdown"><a href="about.php">ABOUT TGS</a>
                                <ul>

                                    <li><a href="about.php#welcome">Founders Welcome</a></li>
                                    <li><a href="about.php#vision">Vision, Mission & Core Value</a></li>
                                    <li><a href="about.php#people">People (Directors/Staff)</a></li>

                                </ul>
                            </li>

                            <li class="dropdown"><a href="learning.php">LEARNING</a>
                                <ul>
                                    
                                    <li><a href="early-years.php">Early years</a></li>
                                    <li><a href="primary.php">Primary</a></li>
                                    <li><a href="secondary.php">Secondary</a></li>
                                    <li><a href="language.php">International Language Academy</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="student-life.php">STUDENT LIFE</a>
                                <ul>
                                    <?php 
                                    $ACTIVITYNAV=new ActivityType(Null);
                                    
                                    foreach($ACTIVITYNAV->all() as $st ){?>
                                    <li><a href="student-life.php?type=<?php echo $st['id']?>"><?php echo $st['name']?></a></li>
                                    <?php  }?>  
                                </ul>
                            </li>

                        </ul>
                        <!--Right Nav-->
                        <ul class="navigation right-nav clearfix">
                            <li class="dropdown"><a href="#">ADMISSION</a>
                                <ul>
                                    <li><a href="age-chart.php">Age Chart</a></li>
                                    
                                    <li><a href="term-dates.php">Term Dates</a></li>
                                    <li><a href="years-group-guide.php">Years Group Guide</a></li>
                                    <li><a href="school-fees.php">School Fees</a></li> 
                                    <li><a href="application.php">Applications</a></li> 
                                    <li><a href="online-admissions.php">Online Admissions</a></li> 
                                </ul>
                            </li>

                            <li><a href="gallery.php">GALLERY</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                    </div>
                </nav>


            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col alignh">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->      
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="index.php">HOME</a></li>
                            <li class="dropdown"><a href="about.php">ABOUT TGS</a>
                                <ul>

                                    <li><a href="about.php#welcome">Founders Welcome</a></li>
                                    <li><a href="about.php#vision">Vision, Mission & Core Value</a></li>
                                    <li><a href="about.php#people">People (Directors/Staff)</a></li>

                                </ul>
                            </li>

                            <a href="learning.php"><li class="dropdown">LEARNING
                                <ul>
                                    <li><a href="age-chart.php">Age Chart</a></li>
                                    <li><a href="early-years.php">Early years</a></li>
                                    <li><a href="primary.php">Primary</a></li>
                                    <li><a href="secondary.php">Secondary</a></li>
                                    <li><a href="language.php">International Language Academy</a></li>
                                    <li><a href="testimonials.php">Testimonials</a></li>
                                </ul>
                            </li></a>

                            <li class="dropdown"><a href="student-life.php">STUDENT LIFE</a>
                                <ul>
                                        <?php 
                                    $ACTIVITYNAV=new ActivityType(Null);
                                    
                                    foreach($ACTIVITYNAV->all() as $st ){?>
                                    <li><a href="student-life.php?type=<?php echo $st['id']?>"><?php echo $st['name']?></a></li>
                                    <?php  }?>  
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#">ADMISSION</a>
                                <ul>
                                    
                                    <li><a href="term-dates.php">Term Dates</a></li>
                                    <li><a href="years-group-guide.php">Years Group Guide</a></li>
                                    <li><a href="school-fees.php">School Fees</a></li> 
                                    <li><a href="application.php">Applications</a></li> 
                                    <li><a href="online-admissions.php">Online Admissions</a></li> 
                                </ul>
                            </li>

                            <li><a href="gallery.php">GALLERY</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>