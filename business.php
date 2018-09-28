<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<?php include"link.php"; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>  
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<style type="text/css">
  .business-logo-effct:hover{
      box-shadow: 5px 5px 5px #888888;
      -webkit-transition-duration: 0.3s; /* Safari */
    transition-duration: 0.3s;
  }
</style>
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <!-- <div id="preloader">
    <div id="spinner">
      <i class="flaticon-charity-shelter font-60 text-theme-colored floating"></i>
      <h5 class="line-height-50 font-18">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> -->

  <header id="header" class="header">
    <!-- Header -->
        <?php include 'header.php'; ?>
    <!-- End of Header -->

    <!-- menu -->
      <?php include 'business-menu.php'; ?>
    <!-- End of menu --> 
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Business module start  -->
    <div class="container-fluid" >
    <!-- searching-header start  -->
      <?php include "searching-header.php";?>
    <!-- searching-header end  -->
      <div class="row jb_top_margin">
        <div class="col-md-8 col-md-offset-1">
          <br><br>
          <div id="txt"></div>
        <!-- <img src="images/business-img1.jpg" alt="img1"> -->
            <div id="resultdata"></div>
          </div>
          <div class="col-md-9 hide1" style="background-image: url('images/business/bg3.jpg');" ><br>
                <div class="row">
                   <?php 
                            $sql = "SELECT * FROM buisness_category";
                            $result = mysqli_query($conn, $sql);
                            while ($row_cat=mysqli_fetch_array($result)) { 
                  ?>
                  <div class="col-md-3" style="height:220px;">
                     <center>
                           <a href="business-category.php?category=<?php echo $row_cat['cat_id']; ?>">
                             <img src="images/business/<?php echo $row_cat['cat_img'] ?>" class="img-circle business-logo-effct" alt="Cinque Terre" width="130" height="130"> 
                           </a>
                             <p style="font-size: 12px;"><strong><?php echo $row_cat['cat_name']; ?></strong></p>
                          <br><br>
                     </center>
                  </div>
                   <?php }?>
              </div> <br>
            <div class="row">
              <button type="button" class="btn btn-danger">City</button>
            </div><br>
            <div class="row">
                <div class="col-md-3">
                    <center>
                      <a href="Mumbai.php">
                       <img src="images/business/mumbai.png" class="img-circle business-logo-effct jb_business_img" alt="Cinque Terre" width="120" height="120" > 
                          <h5><strong>Mumbai</strong></h5>
                         <!-- <p><b>Mumbai</b></p> -->
                      </a>
                    </center>
                </div>
                <div class="col-md-3">
                    <center>
                      <a href="Pune.php">
                       <img src="images/business/pune.png" class="img-circle business-logo-effct jb_business_img" alt="Cinque Terre" width="120" height="120"> 
                        <h5><strong>Pune</strong></h5>
                         <!-- <p><b>Pune</b></p> -->
                      </a>
                    </center>
                </div>
                <div class="col-md-3">
                    <center>
                      <a href="Delhi.php">
                       <img src="images/business/delhi.png" class="img-circle business-logo-effct jb_business_img" alt="Cinque Terre" width="120" height="120" > 
                          <h5><strong>Delhi</strong></h5>
                         <!-- <p><b>Delhi</b></p> -->
                      </a>
                    </center>
                </div>
                
            </div><br>
            <div class="row">
              <div class="col-md-12">
                <div class="jb_advertise_box1">
                  <center><h6 class="jb_advertise_box">YOUR ADVERTISE WILL BE PLACE HERE SIZE - 752 X 90</h6></center> 
                  </div>
                </div>
              </div><br>
            </div> 
            <div class="row">
              
            <?php include 'business-ad.php'; ?>
            </div>
            <!-- <div class="business_Side_img4">
              <div class="business_innerSide_img4">
                 <center>
                   <h6>YOUR ADVERTISE<br> WILL BE<br> PLACE HERE <br>SIZE - 180 X 150</h6>
                 </center>  
              </div>
            </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- business module end -->
</div><br>


  <!-- end main-content -->
  <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  

</div>
</body>
</html>