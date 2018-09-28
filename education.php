<?php
  include 'conn.php';
  session_start();
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
      <?php include 'education-header.php'; ?>
   
      <?php include 'education-menu.php'; ?>
  </header>
  <div class="container-fluid"> 
    <?php include 'education-logo.php'; ?>
    <div class="row business_head_sec">
      <div class="business_overlay">
        <div class="col-md-12">
          <center>
            <h1 class="welcome_educ">Welcome To</h1>
            <h3 class="welcome_sub_educ"><strong class="welcome_jito">Agrawal Federation &nbsp;</strong>Administrative Training Foundation</h3>
          </center>
        </div>
      </div>
    </div>
    <br>
    <div class="row" style="background-color: rgba(4, 145, 220, 0.02);">
      <section id="about4">
      <div class="container mt-0 pt-0">
        <div class="section-content">
          <div class="row mt-50">
            <div class="col-sm-12 col-md-5 wow fadeInLeft animation-delay4" style="border:1px solid rgba(216, 195, 195, 0.38); border-left: 4px solid #d92519;">
              <h3 class="text-uppercase line-bottom mt-0">Get <span class="text-theme-colored">Register</span></h3>
              <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
                <p class="mb-10 mt-15"><strong>"Agrawal Federation" </strong>wishes to Empower the Education, facilitate <br> and strengthen the process
                of preparing deserving <br> youth for joining Civil and Banking services.</p>
                <p>
                <br>
                  <a href="education-registration.php" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10"><span style="font-size: 12px;">Registration for CET/BEAT</span></a>
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 wow fadeInRight animation-delay;">
              <div class="col-md-10 col-md-offset-1">
                  <h3 class="text-uppercase  line-bottom mt-0 letter-space-2">Latest <span class="text-theme-colored">News</span></h3>
                <div class="bxslider" data-count="3">
                  <!-- LATEST NEWS -->
                  <?php
                    $query = "SELECT * FROM `educ_news` ORDER BY `educ_news_id` DESC";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                        $aa = explode('/', $row['educ_news_date']);
                        $day = $aa[0];
                        $month = $aa[1];
                  ?>
                  <article class="post media-post clearfix pb-0 mb-15">
                      <a class="post-thumb mr-20">
                       <div class="col-md-12 latest_news_date">
                         <div class="row latest_news_day">
                            <center>
                              <h3 class="news_date_stl"><?php echo $day; ?></h3>
                            </center>
                         </div>
                         <div class="row latest_news_month">
                           <center>
                              <h4 class="news_month_stl"><?php echo $month; ?></h4>
                            </center>
                         </div>
                       </div>
                      </a>
                      <div class="post-right">
                        <h4 class="mt-0 mb-5"><?php echo $row['educ_news_title']; ?></h4>
                        <ul class="list-inline font-12 mb-5">
                        </ul>
                        <p class="mb-0 font-13"><?php echo $row['educ_news_desc']; ?></p>
                      </div>
                  </article>
                  <?php } ?>
                  <!-- END LATEST NEWS -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </div>
    <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
