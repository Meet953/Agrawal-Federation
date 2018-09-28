<?php
session_start();
include 'conn.php';
 $edu_sess = $_SESSION['edu-user'];
 $query1 ="SELECT `pd_id` FROM `educ_persdetail_register` WHERE sess='$edu_sess'";
 $result1=mysqli_query($conn, $query1);
 $row1=mysqli_fetch_array($result1);
 $ed_id =$row1[0];
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
</head>

<body class="">
<div id="wrapper">
 <?php include"preloaders.php"; ?>
  <header id="header" class="header">
      <?php include 'education-header.php'; ?>
      <?php include 'education-menu.php'; ?>
  </header>
  <div class="container-fluid"> 
    <?php include 'education-logo.php'; ?>
     <div class="row register_header">
        <center>
          <h2 class="reg_heading">Profile</h2>
        </center>
     </div><br>
    <?php 
      $query="SELECT distinct * FROM 
educ_persdetail_register AS a 
INNER JOIN educ_otherdetail_reg AS b ON b.fkid = a.pd_id
 INNER JOIN educ_refdetail_reg AS c ON c.fkid = a.pd_id
  INNER JOIN educ_familydetail_reg AS d ON d.fkid = a.pd_id
   INNER JOIN educ_examsubdetail_reg AS e ON e.fkid = a.pd_id
   INNER JOIN educ_detail_reg AS f ON f.fkid = a.pd_id
   INNER JOIN educ_cetdetail_reg AS g ON g.fkid = a.pd_id WHERE a.pd_id='$ed_id'";
      $result=mysqli_query($conn, $query);
      while($row=mysqli_fetch_array($result)){
    ?>
    <div class="row edu_profile_main">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-3">
                <div class="row edu_prof_pic">
                    <center>
                      <img class="img img-circle edu_pd_pic" src="images/education/img.png" height="100" width="100">
                      <h4>welcome <strong><?php echo $row['pd_fname']; ?></strong></h4>
                      <h4></h4>
                    </center>
                </div>
                <div class="row edu_prof_update_ms">
                  <center><h4 class="edu_pd_updatems_head">Update Your Marksheets</h4></center>
                  <div class="col-md-6">
                    <img class="img img-thumbnail edu_pd_pic edu_pd_pic_resp" src="images/education/img.png" height="140" width="140">
                  </div>
                  <div class="col-md-6">
                    <center>
                      <p>You can update your marksheets by clicking the link below.</p>
                      <a href="education-profile-edit.php" class="animate bounce infinite" style="color:red; font-weight: 600;">Click Here</a>
                     </center>
                  </div>
                </div>
              </div>

              <div class="col-md-8">
                <div class="row edu_pd_main">
                  <div class="alert alert-success edu_pd_head_alert">
                    PERSONAL DETAILS
                  </div>
                  <div class="row edu_pd_detail">
                      <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                        <br>
                          <div class="col-md-7">
                            <div class="row">
                              <div class="col-md-5">
                                <label><strong>First Name :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_fname']; ?></label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">
                                <label><strong>Last Name :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_lname']; ?></label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">
                                <label><strong>Father Name :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_father_name']; ?></label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">
                                <label><strong>Mother Name :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_mother_name']; ?></label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">
                                <label><strong>Address :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_addr']; ?></label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                             <div class="row">
                              <div class="col-md-5">
                                <label><strong>Email :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_email']; ?></label>
                              </div>
                            </div>

                             <div class="row">
                              <div class="col-md-5">
                                <label><strong>Mobile :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_mob2']; ?></label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">
                                <label><strong>City :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_city']; ?></label>
                              </div>
                            </div>

                             <div class="row">
                              <div class="col-md-5">
                                <label><strong>DOB :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_dob']; ?></label>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">
                                <label><strong>State :</strong> </label>
                              </div>
                              <div class="col-md-7">
                                <label><?php echo $row['pd_state']; ?></label>
                              </div>
                            </div>
                          </div>
                        </div>
                     </div>
                  </div><br>
                  <div class="alert alert-success edu_pd_head_alert edu_pd_head_alert2">
                    <a href="education-appl-form.php?apl_form=<?php echo $edu_sess; ?>" class="edu_pd_click_appl">CLICK HERE TO VIEW YOUR APPLICATION FORM</a>
                  </div>
                </div>

                
                <div class="row edu_pd_main edu_pd_main2">
                  <div class="alert alert-success edu_pd_head_alert">
                    IMPORTANT NOTIFICATIONS 
                     <?php 
                            if($row['ed_prof_ssc_marksheet'] == '0' OR
                               $row['ed_prof_hsc_marksheet'] == '0' OR 
                               $row['ed_prof_gd_marksheet'] == '0' OR
                               $row['ed_prof_pg_marksheet'] == '0' OR
                               $row['ed_prof_other_cert'] == '0' OR
                               $row['ed_prof_scan_sign'] == '0')
                            {
                              echo '<p style="float: right;">
                              <i class="fa fa-bell" class="animate bounce infinite">&nbsp; <span style="font-size: 15px; font-weight: 900;">1</span></i>
                                </p>';
                            }
                            else
                            {
                             } 
                        ?>
                  </div>
                  <div class="row edu_pd_detail">
                    
                      <div class="row">
                        <br>
                        <div class="col-md-10 col-md-offset-1">
                         
                          <?php 
                            if($row['ed_prof_ssc_marksheet'] == '0' OR
                               $row['ed_prof_hsc_marksheet'] == '0' OR 
                               $row['ed_prof_gd_marksheet'] == '0' OR
                               $row['ed_prof_pg_marksheet'] == '0' OR
                               $row['ed_prof_other_cert'] == '0' OR
                               $row['ed_prof_scan_sign'] == '0')
                            {
                              echo '<a href="education-profile-edit.php">
                                <p style="font-size: 15px; color:gray;">
                                  <i class="fa fa-edit"></i> &nbsp;&nbsp; Provide Your Marksheets.</p></a>';
                            }
                            else
                            {
                              echo 'No Notification';
                            }

                        
                          ?>
                           
                         
                        </div>
                     </div>
                  </div><br>
                </div><br><br> 
              </div>
            </div>
        </div>
    </div>
    <?php } ?>
  </div>
  </div>
    <?php include"footer.php"; ?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div></body>
</html>
