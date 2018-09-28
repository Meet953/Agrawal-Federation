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
        <div class="col-md-10 col-md-offset-1">
          <article class="post clearfix mb-30 pb-30">
             <div class="panel-group-edu-stl" id="accordion"><!-- Panel Start -->
                  <div class="panel panel-info" style="margin-top: 50px;">
                    <div class="panel-heading">
                      <h4 style="font-weight: 900">FAQ &nbsp; [Frequently Asked Question]</h4>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                          <?php 
                          $query="SELECT * FROM `faq`";
                          $result=mysqli_query($conn, $query);
                          static $n=1;
                          while($row=mysqli_fetch_array($result)){
                          ?>
                          <div class="panel panel-info panel-default-edu-stl"><!-- Data Start Here -->
                            <div class="panel-heading panel-heading-edu-stl">
                              <h4 class="panel-title-edu-stl">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $n; ?>">
                                <strong><?php echo $n; ?> . </strong>&nbsp; 
                                <?php echo $row['faq_que']; ?>
                                </a>
                              </h4>
                            </div>
                            <div id='collapse<?php echo $n; ?>' class="panel-collapse collapse">
                              <div class="panel-body">
                                <strong>&nbsp; &nbsp;&nbsp; &nbsp;Ans : </strong>&nbsp;
                                <?php echo $row['faq_ans']; ?>
                              </div>
                            </div>
                          </div>
                          <?php $n++; } ?>
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
    <?php include"footer.php"; ?>  <!-- End of Footer -->

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div> 
</body>
</html>
