<?php 
  include 'conn.php';
  session_start();
  $sess= $_SESSION['user-login'];
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
  <?php 
    $query="select * from user_registration where user_email='$sess' or user_phone='$sess'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
  ?>
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
      <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row">
                  <article class="post clearfix mb-30 pb-30">
                    <div class="row">
                        <div class="col-md-9">
                          <h2 class="medical_detail_head">Profile</h2>
                        </div>
                        <div class="col-md-3">
                          <a href="medical.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="medical_det_section col-md-10 col-md-offset-1">
                        <br>
                        <ul class="nav nav-tabs top_nav_tab">
                          <li class="active"><a class="top_tab_head"  data-toggle="tab" href="#home">Personal Detail</a></li>
                          <a href="do-user-prof-edit.php?id=<?php echo $row[0]; ?>"> 
                            <li style="float: right;"> 
                                <button class="btn btn-success">Edit</button>
                            </li>
                          </a>
                        </ul>
                        <div class="tab-content top_tab">
                          <div id="home" class="tab-pane fade in active">
                            <div class="row">
                            <br>
                              <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                  <label>
                                    <strong>Membership Type :</strong>
                                  </label>
                                </div>
                                <div class="col-md-6">
                                  <label style="font-weight: 600;"><?php echo $row['user_membertype']; ?></label>
                                </div>
                              </div>
                            </div><hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>First Name :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_fname']; ?></label>
                                  </div> 
                              </div>
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>Last Name :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_lname']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>Email :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_email']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                            
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>Mobile :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_phone']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>Residential Address :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_addr1']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>Permanent Address :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_addr2']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>City :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_city']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>State :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_state']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>Country :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_country']; ?></label>
                                  </div> 
                              </div>
                             
                            </div>
                             <hr style="margin-top: 5px;">
                             <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        <strong>Gender  :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_gender']; ?></label>
                                  </div> 
                              </div>
                            </div>
                      </div>
                    </div><br>
                  </article>
                </div>
              </div>
            </div>
          </div>
                  <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Archives</h5>
                <ul class="list-divider list-border list check">
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Advertise</h5>
                <div class="widget-image-carousel">
                  <div class="item">
                    <img src="https://placehold.it/365x230" alt="">
                    <h4 class="title">This is a Demo Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </section> 
    </div>
      <br>
    </div>
  </div>
    <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>