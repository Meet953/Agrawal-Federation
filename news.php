<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include "link.php"; ?>
</head>
<body class="" style="padding-right: 0px !important;">
<div id="wrapper">
  <?php include 'preloaders.php'; ?>
  <header id="header" class="header">
      <?php include 'header.php'; ?>
      <?php include 'menu.php'; ?>
  </header>
  <div class="main-content">
    <!DOCTYPE html>
      <div class="container">
        <div class="row" style="background-color: rgba(4, 145, 220, 0.01);">
          <div class="col-md-8 col-md-offset-2">
            <article class="post clearfix mb-30 pb-30">
              <div class="panel-group-edu-stl" id="accordion"><!-- Panel Start -->
                <div class="panel panel-info" style="margin-top: 50px;">
                  <div class="panel-heading">
                    <h4 style="font-weight: 900">Agrawal Federation's Latest News</h4>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                        <?php
                          $query="SELECT * FROM latest_news ORDER BY news_id DESC LIMIT 10";
                          $result=mysqli_query($conn, $query);
                          while($rownews=mysqli_fetch_array($result)){
                        ?>
                        <div class="row">
                          <div class="col-md-4">
                            <center>
                              <img src="images/news/<?php echo $rownews['news_img']; ?>" height="150" width="150">
                            </center>
                          </div>
                          <div class="col-md-8">
                            <h4><b><?php echo $rownews['news_title']; ?></b></h4>
                            <p><?php echo $rownews['news_desc']; ?></p>
                            <p style="font-size: 15px; float: right;"><?php echo $rownews['news_date']; ?></p>
                          </div>
                        </div><hr><!-- END RECORD 1 -->
                        <?php } ?>
                      </div>
                  </div>
                </div>
              </div>
              </div><!-- Panel End -->
            </article>
          </div>
        </div>
      </div>
  </div>
  <?php include"footer.php"; ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</body>
</html>
