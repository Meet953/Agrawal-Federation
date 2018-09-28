<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
</head>

<body class="">
<div id="wrapper">
  <!-- preloader -->
  <?php include 'preloaders.php'; ?>

  <header id="header" class="header">
    <!-- Header -->
      <?php include 'education-header.php'; ?>
    <!-- End of Header -->

    <!-- menu -->
      <?php include 'education-menu.php'; ?>
    <!-- End of menu --> 
  </header>
  
  
  <!-- Start main-content -->
  <div class="container-fluid"> 
    <!-- Section 1 -->
    <?php include 'education-logo.php'; ?>
    <!-- End of Section 1 -->
   
   <!-- Section 2 -->
     <div class="row register_header">
        <center>
          <h2 class="reg_heading">More Scheme</h2>
        </center>
     </div><br>
     <!-- End of Section 2 -->

     <!-- Section 3 -->
     <div class="row">
       <div class="col-md-10 col-md-offset-1">
         <article class="post clearfix mb-30 pb-30">
                       <ul class="nav nav-tabs top_nav_tab">
                          <li class="active"><a class="edu_tab_head"  data-toggle="tab" href="#home" style="margin-top: 21px;">SEED SCHOLARSHIP</a></li>
                          <li><a  class="edu_tab_head edu_tab top_tab_head_left" data-toggle="tab" href="#menu1" >EDUCATION LOAN PROGRAM</a></li>
                        </ul>
                        <div class="tab-content top_tab">
                          <div id="home" class="tab-pane fade in active">
                            <center>
                              <strong>
                                  <br><h4>SEED – SCHOLARSHIP( INTEREST FREE LOAN) <br> 
                                  GUIDELINES FOR GRANTING SCHOLARSHIP (INTEREST FREE LOAN) TO NEEDY STUDENTS w.e.f Sep.2014.</h4><br>
                              </strong>
                            </center>
                            <?php 
                                  $query="select * from education_faq where cet_type='MORE_SCHEME' and cet_tab='SEED SCHOLARSHIP'";
                                  $result=mysqli_query($conn, $query);
                                  while($row=mysqli_fetch_array($result)){
                            ?>
                            <p class="scheme-det"><?php echo $row[3]; ?></p>
                            <?php  } 
                              ?>
                          </div>
                          <div id="menu1" class="tab-pane fade">
                            <center>
                                <strong>
                                  <br><h4>JELP</h4>
                                  <h5>GUIDELINES FOR GRANTING INTEREST SUBSIDY TO NEEDY STUDENTS W.E.F. 1ST September 2014.</h5><br>
                                </strong>
                            </center>
                             <?php 
                                  $query="select * from education_faq where cet_type='MORE_SCHEME' and cet_tab='EDUCATION LOAN PROGRAM'";
                                  $result=mysqli_query($conn, $query);
                                  while($row=mysqli_fetch_array($result)){
                            ?>
                            <p class="scheme-det"><?php echo $row[3]; ?></p>
                          <?php  } ?>
                          </div>
                      </article>
       </div>
     </div>
                    
     <!-- End of Section 3 -->
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
