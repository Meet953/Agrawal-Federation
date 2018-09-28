<?php
  session_start();
  include  'conn.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
</head>
<body class="">
  <div id="wrapper">
    <?php include 'preloaders.php'; ?>
    <header id="header" class="header">
        <?php include 'header.php'; ?>
         <?php
          if(isset($_GET['medical'])){
              include 'medical-menu.php';
          }
          elseif(isset($_GET['business'])){
              include 'business-menu.php';
          }
          elseif(isset($_GET['education'])){
              include 'education-menu.php';
          }
          else{
              include 'menu.php';
          }
        ?>
    </header>
    <?php 
        $query ="SELECT * FROM `about_us`";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container-fluid"> 
      <div class="row">
        <section class="contact_bg inner-header divider parallax  overlay-white-8" 
          data-bg-img="images/Home/About-Us/<?php echo $row['abtus_banner_img']; ?>" style="background-attachment: fixed; background-position: fixed;" >
          <div class="container pt-60 pb-60">
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 text-center">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="row">
        <section> 
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-7">
                <div class="owl-carousel-1col" data-dots="true">
                    <?php
                       $slider_img = $row['abtus_sldr_img'];
                        $explode = explode(",", $slider_img);
                        $count =  count($explode);
                        $x = 0; 

                        while($x < $count) { ?>
                            <div class="item">
                              <div class="thumb">
                                <img src="images/Home/About-Us/<?php echo $explode[$x]; ?>" alt="">
                              </div>
                            </div>
                            <?php $x++;
                        } 
                    ?>  
                </div>
              </div>
              <div class="col-sm-12 col-md-5">
                <h3 class="text-theme-colored text-uppercase mt-0">About Us</h3>
                <p><?php echo $row['abtus_pt'];?></p>
              </div>
          </div>
        </section>
      </div>
      </div>
    </div>
    <?php include"footer.php"; ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</body>
</html>
