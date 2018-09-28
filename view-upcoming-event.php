<?php
  include 'conn.php';
  session_start();
  if (isset($_GET['upc_event_id'])) {
      $upc_id = $_GET['upc_event_id'];
  }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include "link.php"; ?>
</head>

<body class="" style="padding-right: 0px !important;">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/Home/11.gif" class="flaticon-charity-shelter font-60 text-theme-colored floating">
      <br>
      <h5 class="line-height-50 font-18">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <header id="header" class="header">
    <!-- Header -->
      <?php include 'header.php'; ?>
    <!-- End of Header -->

    <!-- menu -->
      <?php include 'menu.php'; ?>
    <!-- End of menu --> 
  </header>
  
  
  <!-- Start main-content -->
  <div class="main-content">
    <div class="container-fluid">
      <div class="row" style=" height: 80vh;">
        <div class="col-md-8 col-md-offset-2">
            <?php 
                  $query="select * from event";
                  $result=mysqli_query($conn, $query);
                  $row=mysqli_fetch_array($result);
            ?>
            <div class="panel panel-info" style="margin-top: 50px;">
              <div class="panel-heading">
                <h4><b>UPCOMING EVENT OF AGRAWAL FEDERATION</b></h4>
              </div>
              <div class="panel-body">
                <div class="row"> 
                  <div class="col-md-6">
                    <img alt="" src="images/Home/Upcoming_Event/<?php echo $row['event_img']; ?>" height="350" width="350">
                  </div>
                  <div class="col-md-6">
                    <br>
                    <h4>Event Title </h4>
                    <p><?php echo $row['event_name']; ?></p>
                    <h4>Event Date</h4>
                    <p><?php echo $row['event_date']; ?></p>
                    <h4>Event Venue </h4>
                    <p><?php echo $row['event_venue']; ?></p>
                    <h4>Event</h4>
                    <p><?php echo $row['event_category']; ?></p>
                    <a href="index.php">
                      <button class="btn btn-info" style="float: right;"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>  
    </div>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
    <?php include"footer.php"; ?>
  <!-- End of Footer -->

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 
</body>
</html>
