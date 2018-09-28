<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include "link.php"; ?>
  <style type="text/css">
      .feedback .owl-item img, .testimonial-carousel-style2 .owl-item img {
      max-width: 100px;
      height: 100px;
      }
  </style>
</head>

<body class="" style="padding-right: 0px !important;">
    <div id="wrapper">
      <?php include 'preloaders.php'; ?><!-- preloader -->
      <header id="header" class="header">
          <?php include 'header.php'; ?><!-- Header -->
          <?php include 'menu.php'; ?> <!-- menu -->
      </header>
      
      <!-- Start main-content -->
      <div class="main-content">
        <section id="home">
          <div class="container-fluid p-0">
              <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                  <ul>
                    <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/Home/Slider/medical1.jpg" data-rotate="0" data-saveperformance="off" data-title="Medical" data-description="">
                        <img src="images/Home/Slider/medical1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    </li>
                    <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/Home/Slider/matrimony.jpg" data-rotate="0" data-saveperformance="off" data-title="Matrimony" data-description="">
                        <img src="images/Home/Slider/matrimony.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    </li>
                    <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/Home/Slider/business.jpg" data-rotate="0" data-saveperformance="off" data-title="Business" data-description="">
                        <img src="images/Home/Slider/business.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    </li>
                  
                   <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/Home/Slider/education1.jpg" data-rotate="0" data-saveperformance="off" data-title="Education" data-description="">
                          <img src="images/Home/Slider/education1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                   </li>
                      <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/Home/Slider/social.jpg" data-rotate="0" data-saveperformance="off" data-title="Social Refurn" data-description="">
                        <img src="images/Home/Slider/social.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    </li>
                    </li>

                  </ul>
                </div><!-- end .rev_slider -->
              </div><!-- end .rev_slider_wrapper -->
              
              <script>
                $(document).ready(function(e) {
                  $(".rev_slider").revolution({
                    sliderType:"standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                      arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                        left: {
                          h_align:"left",
                          v_align:"center",
                          h_offset:30,
                          v_offset:0
                        },
                        right: {
                          h_align:"right",
                          v_align:"center",
                          h_offset:30,
                          v_offset:0
                        }
                      },
                      bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"metis",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                      }
                    },
                    responsiveLevels: [1240, 1024, 778],
                    visibilityLevels: [1240, 1024, 778],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [600, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        origo: "slidercenter",
                        speed: 1000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                        type: "scroll"
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                  });
                });
              </script>
          </div>
        </section>
       
        <section>
          <div class="container-fluid p-0 p-sm-15">
            <div class="section-content">
              <div class="row equal-height-inner home-boxes">
                <div class="module_gap col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                  <div class="sm-height-auto" style="background-color: rgba(34, 22, 28, 0.85);">
                    <div class="p-30">
                      <center>
                          <a href="medical.php">
                            <img src="images/Home/Module/medical.png" class="module1_logo">
                          </a>
                          <br>
                          <h3 class="module1_head text-uppercase text-white mt-0">Medical</h3>
                          <a href="medical.php" class="module1_view btn btn-border btn-circled btn-transparent btn-xs mt-5">View</a>
                      </center>
                    </div>
                    <i class="flaticon-charity-shaking-hands-inside-a-heart bg-icon"></i>
                  </div>
                </div>
                <div class="module_gap col-sm-12 col-md-2 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                  <div class="sm-height-auto" style="background-color: #d9251c">
                    <div class="p-30">
                      <center>
                      <img src="images/Home/Module/matrimony.png" style="margin-bottom: 2px;">
                      <br>
                      <h3 class="module2_head text-uppercase text-white mt-0">Matrimony</h3>
                      <a href="matrimony/matrimony-index.php" class="module2_view btn btn-border btn-circled btn-transparent btn-xs mt-5">View</a>
                      </center>
                    </div>
                    <i class="flaticon-charity-home-insurance bg-icon"></i>
                  </div>
                </div>
                <div class="module_gap col-sm-12 col-md-2 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                  <div class="sm-height-auto" style="background-color: rgba(4, 145, 220, 0.75);">
                    <div class="p-30">
                      <center>
                      <img src="images/Home/Module/jatf.png">
                      <br>
                      <h3 class="text-uppercase text-white mt-0" style="margin-top: -5px !important;">Business</h3>
                      <a href="business.php" class="module3_view btn btn-border btn-circled btn-transparent btn-xs mt-5" style="margin-top: -1px !important;" >View</a>
                      </center>
                    </div>
                    <i class="flaticon-charity-home-insurance bg-icon"></i>
                  </div>
                </div>
                <div class="module_gap col-sm-12 col-md-2 pl-0 pr-0 pl-sm-15 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                  <div class="sm-height-auto" style="background: rgba(20, 86, 50, 0.86);">
                    <div class="p-30">
                      <center>
                      <img src="images/Home/Module/education2.png">
                      <br>
                      <h3 class="text-uppercase text-white mt-0">Education</h3>
                      <a href="education.php" class="btn btn-border btn-circled btn-transparent btn-xs mt-5" style="margin-top: 2px !important;">View</a>
                      </center>
                    </div>
                    <i class="flaticon-charity-make-an-online-donation bg-icon"></i>
                  </div>
                </div>
                <div class="module_gap col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                  <div class="sm-height-auto" style="background: rgba(105, 13, 61, 0.88);">
                    <div class="p-30">
                      <center>
                      <img src="images/Home/Module/trade.png">
                      <br>
                      <h3 class="text-white mt-0 mb-5" style="margin-top: 5px !important;">SOCIAL REFURN</h3>
                      <a href="social-refurn.php" class="module4_view btn btn-border btn-circled btn-transparent btn-xs mt-5" >View</a>
                      </center>
                    </div>
                    <i class="fa fa-mobile bg-icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> <!-- End of Module -->
       
        <!-- HIDE BLOG HERE -->
        <!-- HIDE events HERE -->

        <section id="gallery" class="bg-lighter">
          <div class="container">
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                  <div class="container">
                    <ul class="event_tab nav nav-tabs">
                       <li  class="active"><a class="li_head li_head1_responsive" data-toggle="tab" href="#home1">Chairman</a></li>
                      <li><a class="li_head li_head2_responsive"  data-toggle="tab" href="#menu11">President</a></li>
                      <li><a class="li_head li_head3_responsive" data-toggle="tab" href="#menu21">CEO Diary</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Chairman -->
                        <div id="home1" class="tab-pane fade in active">
                          <div class="container">
                            <div class="row">
                              <?php
                                $query="select * from compny_founder where cmp_foudr_desig='Chairman'";
                                $result=mysqli_query($conn, $query);
                                while($row=mysqli_fetch_array($result)){
                                $img_val = $row['cmp_foudr_img']; 
                              ?>
                              <div class="col-md-2">
                                  <img src="images/Home/Founder/<?php echo $row['cmp_foudr_img']; ?>" class="head_img chairman_responsiv">
                                  <br>
                                  <center>
                                    <h4 class="head_stl"><?php echo $row[1]; ?></h4>
                                  </center>
                              </div>
                              <div class="col-md-9">
                                  <h3><strong><?php echo $row[2]; ?></strong></h3>
                                  <?php echo $row[4]; ?>
                              </div>
                              <?php } ?>
                            </div> 
                          </div>
                        </div><!-- End Of Chairman -->
                         <!-- President -->
                        <div id="menu11" class="tab-pane fade">
                           <div class="container">
                            <div class="row">
                               <?php
                                $query="select * from compny_founder where cmp_foudr_desig='President'";
                                $result=mysqli_query($conn, $query);
                                while($row=mysqli_fetch_array($result)){
                              ?>
                              <div class="col-md-2">
                                  <img src="images/Home/Founder/<?php echo $row['cmp_foudr_img']; ?>" class="head_img president_responsiv">
                                  <br>
                                  <center>
                                    <h4 class="head_stl"><?php echo $row[1]; ?></h4>
                                  </center>
                              </div>
                              <div class="col-md-9">
                                  <h3><strong><?php echo $row[2]; ?></strong></h3>
                                  <?php echo $row[4]; ?>
                              </div>
                              <?php } ?>
                            </div> 
                          </div>
                        </div> <!-- End Of President-->
                        <!-- CEO Diary -->
                      <div id="menu21" class="tab-pane fade">
                          <div id="home1" class="tab-pane fade in active">
                          <div class="container">
                            <div class="row">
                              <?php
                                $query="select * from compny_founder where cmp_foudr_desig='CEO diary'";
                                $result=mysqli_query($conn, $query);
                                while($row=mysqli_fetch_array($result)){

                              ?>
                              <div class="col-md-2">
                                  <img src="images/Home/Founder/<?php echo $row['cmp_foudr_img']; ?>" class="head_img ceo_responsiv">
                                  <br>
                                  <center>
                                    <h4 class="head_stl"><?php echo $row[1]; ?></h4>
                                  </center>
                              </div>
                              <div class="col-md-9">
                                  <h3><strong><?php echo $row[2]; ?></strong></h3>
                                  <?php echo $row[4]; ?>
                              </div>
                              <?php } ?>
                            </div> 
                          </div>
                        </div>
                      </div><!-- End  CEO Diary -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> <!-- head_detail -->

        <section id="about4">
          <div class="container mt-0 pt-0">
            <div class="section-content">
              <div class="row mt-50">
                <div class="col-sm-12 col-md-5 wow fadeInUp animation-delay4">
                 <h3 class="line-bottom mt-0 letter-space-2" style="color: #143154;">Become a <span style="color: #069243 ;">Part Of Us</span></h3>
                  <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
                    <div class="fluid-video-wrapper">
                      <iframe src="http://player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" height="310"  title="Volunteer policy" allowfullscreen></iframe>
                    </div>
                    <p class="mb-10 mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo, dolorum iste molestias.</p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp animation-delay4">
                  <h3 class="line-bottom mt-0 letter-space-2" style="color: #143154;">Upcoming<span style="color: #069243 ;"> Event</span></h3>
                  <div class="bxslider" data-count="3">
                    <?php
                      $query="select * from event order by `event_id` desc";
                      $result=mysqli_query($conn, $query);
                      while($row=mysqli_fetch_array($result)){
                    ?>
                    <article class="post media-post clearfix pb-0 mb-15">
                        <a class="post-thumb mr-20"><img alt="" src="images/Home/Upcoming_Event/<?php echo $row[2]; ?>" height="100" width="100">
                        </a>
                        <div class="post-right">
                          <h4 class="mt-0 mb-5"><a href="view-upcoming-event.php?upc_event_id=<?php echo $row['event_id']; ?>" style="color: #143154;"><?php echo $row[1]; ?></a></h4>
                          <ul class="list-inline font-12 mb-5">
                            <li class="pr-0"><i class="fa fa-calendar mr-5"></i><?php echo $row[3]; ?></li>
                          </ul>
                          <p class="mb-0 font-13">Venue - <?php echo $row[4]; ?></p>
                          <p class="mb-0 font-13">Event - <?php echo $row[5]; ?></p>
                        </div>
                    </article>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- upcoming_event -->

        <section id="services" class="bg-lighter">
          <div class="container pb-60">
          <h3 class="line-bottom mt-0 letter-space-2" style="color: #143154;">Photo <span style="color: #0291db;" >Gallery</span></h3>
            <div class="row mtli-row-clearfix">
              <?php 
                $query="SELECT * FROM gallery ORDER BY `gallery_id` DESC LIMIT 6";
                $result=mysqli_query($conn, $query);
                while ($row=mysqli_fetch_array($result)) {
              ?>
              <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="service-block">
                  <div class="thumb">
                    <img src="images/Home/Photo_Gallery/<?php echo $row[1]; ?>" class="gallery_stl img-fullwidth" alt="">
                    <div class="desc">
                      <p class="text-white"><?php echo $row[2]; ?></p>
                      <p class="text-white"><?php echo $row[3]; ?></p>
                    </div>
                  </div>
                </div>          
              </div>
              <?php } ?>
            </div>
          </div>
        </section><!-- photo_gallery.php -->

        <section class="divider parallax layer-overlay  overlay-white-5" data-stellar-background-ratio="0.2" data-bg-img="images/Home/bg10.jpg">  
          <div class="container pt-0 pb-0">
              <br>
             <h3 class="line-bottom mt-0 letter-space-2">Our <span class="text-theme-colored">Testimonial</span></h3>
            <div class="row equal-height">
              <div class="col-md-7">
                <div class="display-table-parent pr-90 pl-90">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <div class="clients text-center pt-30 pb-20 bg-lightest-transparent">
                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-4">
                            <img src="images/Home/Client/1.png" alt="" width="100" class="mb-10">
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-4">
                            <img src="images/Home/Client/2.png" alt="" width="100" class="mb-10">
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-4">
                            <img src="images/Home/Client/3.png" alt="" width="100" class="mb-10">
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-4">
                            <img src="images/Home/Client/4.png" alt="" width="100" class="mb-10">
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-4">
                            <img src="images/Home/Client/5.png" alt="" width="100" class="mb-10">
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-4">
                            <img src="images/Home/Client/6.png" alt="" width="100" class="mb-10">
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>                  
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 bg-light-transparent">
                <div class="pt-50 pb-50 pl-20 pr-20">
                  <div class="testimonial-carousel owl-nav-top feedback">
                    <?php 
                            $query="select * from testinomial order by test_id desc limit 6";
                            $result=mysqli_query($conn, $query);
                            while ($row=mysqli_fetch_array($result)) {
                    ?>
                    <div class="item">
                      <div class="text-center">
                        <div class="thumb">
                        <img class="img-circle" alt="" src="images/Home/testimonials/<?php echo $row['test_img']; ?>" style="width: 200px !important;"></div>
                        <div class="content pt-10">
                          <p><?php echo $row[2]; ?></p>
                          <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                          <h5 class="author text-theme-colored mb-0"><?php echo $row[3]; ?></h5>
                          <h6 class="title text-gray mt-0 mb-15"><?php echo $row[4]; ?></h6>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- testinomial.php -->
      </div>
      <?php include"footer.php"; ?>
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
</body>
</html>
