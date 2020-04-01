    <section class="main-slider" data-start-height="600" data-slide-overlay="yes">

                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
<?php              $SLIDER = new Slider(NULL);

            foreach ($SLIDER->all() as $key => $slider) {

                if ($key == 0) {

                    ?>
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="upload/slider/<?php echo $slider['image_name']?>"  data-saveperformance="off"  data-title="Awesome Title Here">
                                <img src="upload/slider/<?php echo $slider['image_name']?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                                <div class="overlay-slide"></div>

                                <div class="tp-caption sft sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-180"
                                     data-speed="1500"
                                     data-start="0"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/content-image-1.png" alt=""></figure> </div>

                                <div class="tp-caption sft sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="-70"
                                     data-speed="1500"
                                     data-start="500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><div class="styled-text">welcome to our school</div></div>

                                <div class="tp-caption sfb sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="25"
                                     data-speed="1500"
                                     data-start="1000"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><div class="border-heading"><?php echo $slider['title']?></div></div>

                                <div class="tp-caption sfb sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="115"
                                     data-speed="1500"
                                     data-start="1500"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><div class="text">See Our Thomas Gall School Special Features!</div></div>

                                <div class="tp-caption sfb sfb tp-resizeme"
                                     data-x="center" data-hoffset="0"
                                     data-y="center" data-voffset="175"
                                     data-speed="1500"
                                     data-start="2000"
                                     data-easing="easeOutExpo"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-elementdelay="0.01"
                                     data-endelementdelay="0.3"
                                     data-endspeed="1200"
                                     data-endeasing="Power4.easeIn"><a href="admission.php" class="theme-btn btn-style-one">Join Us</a></div>

                            </li>
                <?php   }else{?>
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="upload/slider/<?php echo $slider['image_name']?>"  data-saveperformance="off"  data-title="Awesome Title Here">
                                <img src="upload/slider/<?php echo $slider['image_name']?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                            </li>


            <?php
            
                } 
            
            }
            
            
            ?>
                        </ul>

                    </div>
                </div>

            </section>