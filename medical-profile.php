<?php 
  include 'conn.php';
  session_start();
  $user_id=$_SESSION['user_id'];
  $med_sess=$_SESSION['user-login'];
  $status='1';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>


</head>
<body class="">
<div id="wrapper">
  <?php include 'preloaders.php'; ?>
  <header id="header" class="header">
      <?php include 'header.php'; ?>
      <?php include 'medical-menu.php'; ?>
  </header>
  <div class="container-fluid"> 
    <?php include 'medical-logo.php'; ?>
     <div class="row register_header">
        <center>
          <h2 class="reg_heading">Profile</h2>
        </center>
     </div>
      <div class="main-content">
        <div class="container-fluid">
            <section>
              <div class="row jm_dash_top">
                  <div class="col-md-10 col-md-offset-1">
                      <div class="row">
                            <div class="col-md-3">
                                <div class="row jm_dash_user">
                                    <center><h4 class="jm_dash_username">Posting Details</h4></center>
                                </div>
                                <div class="row jm_dash_logo">
                                    <img src="images/medical/welcome.png">
                                </div>
                                <br>
                                <div class="row">
                                   <div class="panel-group panel-group-stl" id="accordion">
                                      <div class="panel panel-default">
                                        <div class="panel-heading panel-heading-stl">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                              <i class="fa fa-user"></i>&nbsp;&nbsp;View Posting</a>
                                          </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse in">
                                          <ul class="list-group jm_dash_menu">
                                            <a style="cursor: pointer;">
                                              <li class="list-group-item jm_dash_menulist" id="view_med"><i class="fa fa-eye"></i>&nbsp;&nbsp; Medical Posting</li>
                                            </a>
                                            <a style="cursor: pointer;">
                                                <li class="list-group-item jm_dash_menulist" id="view_hosp"><i class="fa fa-eye"></i>&nbsp;&nbsp; Hospital Posting</li>
                                            </a>
                                            <a style="cursor: pointer;">
                                                <li class="list-group-item jm_dash_menulist" id="view_dr"><i class="fa fa-eye"></i>&nbsp;&nbsp; Doctor Posting</li>
                                            </a>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading panel-heading-stl">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-external-link"></i>&nbsp;&nbsp;Posting</a>
                                          </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                          <ul class="list-group jm_dash_menu">
                                                <a style="cursor: pointer;">
                                                  <li class="list-group-item jm_dash_menulist" id="reg_post"><i class="fa fa-medkit"></i>&nbsp;&nbsp; Medical Detail</li>
                                                </a>
                                                <a style="cursor: pointer;">
                                                  <li class="list-group-item jm_dash_menulist" id="reg_post"><i class="fa fa-stethoscope"></i>&nbsp;&nbsp; Doctor Detail</li>
                                                </a>
                                                <a style="cursor: pointer;">
                                                  <li class="list-group-item jm_dash_menulist" id="reg_post"><i class="fa fa-briefcase"></i>&nbsp;&nbsp; Hospital Detail</li>
                                                </a>
                                              </ul>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading panel-heading-stl">
                                          <h4 class="panel-title">
                                            <a  href="logout.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
                                          </h4>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-9" id="med_reg_post">
                            <form id="uploadForm" action="do-medical-reg.php" method="post">
                                <div class="row jm_dash_profile">
                                  <div class="col-md-10 col-md-offset-1"> 
                                      <div class="row">
                                          <div class="col-md-9">
                                            <h2 class="medical_detail_head jm_dash_profile_head">Posting</h2>
                                          </div>
                                          <div class="col-md-3">
                                            <a href="medical.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <article class="post clearfix mb-30 pb-30">
                                          <div class="row">
                                            <div class="col-md-12 reg_sec_border">
                                              <div class="row">
                                                <div class="col-md-9">
                                                    <h4 class="medical_name reg_sub_heading">Basic Details</h4>
                                                </div>
                                              </div>
                                              <hr>
                                               <div class="col-md-12">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Type*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                           <select class="form-control" id="med_type" name="med_type">
                                                            <option value="">Select Type</option>
                                                            <option value="Hospital">Hospital</option>
                                                            <option value="Doctor">Doctor</option>
                                                            <option value="Medical">Medical</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Name : *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Medical/Hospital/Doctor Name" id="med_name" name="med_name">
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Landmark*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <textarea class="form-control " id="textautocomplete" rows="2" id="comment" name="addrr" placeholder="Enter Address" ></textarea>
                                                          <label id="lblresult"  name="lblresult" style="display: none;"></label>
                                                        </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Address*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <textarea class="form-control " id="med_address" rows="2" name="med_address" placeholder="Enter Address"></textarea>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Pincode *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                         <input type="text" class="form-control" placeholder="Enter Pincode" id="med_pincode" maxlength="6" minlength="6"  name="med_pincode" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Country *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select class="form-control jb_input-box-height" id="med_country" name="med_country" onChange="getState(this.value);">
                                                              <option value="">Select Country</option>
                                                                     <?php include 'conn.php';
                                                                                  $sql = "SELECT * FROM countries";
                                                                                  $result = mysqli_query($conn, $sql);
                                                                                  while ($row=mysqli_fetch_array($result)) { 
                                                                               ?>
                                                                      <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>                
                                                            </select>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">State : *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <select class="form-control jb_input-box-height" id="med_state" name="med_state" onChange="getcity(this.value);">
                                                          <option value="">State</option>
                                                        </select>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="col-md-4 form-group">
                                                            <label for="usr">City : *</label>
                                                          </div>
                                                          <div class="col-md-8 form-group">
                                                             <select class="form-control jb_input-box-height" id="med_city" name="med_city" onchange="showUser(this.value)">
                                                              <option value="">City</option>
                                                            </select>   
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">About Us*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                           <textarea class="form-control" rows="2" id="med_about"  name="med_about" placeholder="Enter Medical"></textarea>
                                                        </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Mobile No. *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter Mobile No." id="med_phone"  name="med_phone" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                                         <!--  <span id="med_mob_span"></span> -->
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Education *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter Education" id="med_educ"  name="med_educ">
                                                        </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                         <div class="col-md-4 form-group">
                                                          <label for="usr">Website*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter Website" id="med_website"  name="med_website">
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Open Time: </label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter Opne Time" id="med_open"  name="med_open">
                                                        </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Close Time:</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter Close Time" id="med_close"  name="med_close">
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                           <label for="usr">Medical Image*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="targetLayer">
                                                          <input type="file" id="med_logo" name="med_logo" class="btn btn-defualt btn-block">
                                                        </div>
                                                      </div>
                                                  </div>
                                               </div>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class="col-md-12 reg_sec_border">
                                              <h4 class="medical_name reg_sub_heading">Contact Person</h4>
                                              <hr>
                                               <div class="col-md-12">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Name*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Contact Person Name" id="med_cont_name"  name="med_cont_name">
                                                        </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Mobile No.*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Contact Person Phone"  id="med_cont_phone"  name="med_cont_phone"  maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                                                        <!--   <span id="med_mob_span2"></span> -->
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Email*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Contact Person Email"  id="med_cont_email"  name="med_cont_email">
                                                         <!--  <span id="med_err_email" style="display: none; color: red;">Invalid Email</span> -->
                                                        </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Designation *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Designation"  id="med_cont_desig"  name="med_cont_desig">
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Contact Details *</label>
                                                        </div>
                                                        <div class="col-md-8 form-group" >
                                                          <input type="radio"  id="med_cont_secure"  name="med_cont_secure" value="Show">&nbsp;Show</label>&nbsp;
                                                          <input type="radio"  id="med_cont_secure"  name="med_cont_secure" value="Hide" checked="checked">&nbsp;Hide</label>
                                                        </div>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class="col-md-12 reg_sec_border">
                                              <h4 class="medical_name reg_sub_heading">Others</h4>
                                              <hr>
                                               <div class="col-md-12">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Facebook Page URL*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter Facebook Page URL"  id="med_cont_fb"  name="med_cont_fb">
                                                        </div>
                                                      </div>
                                                       <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">Twitter Page URL*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter Twitter Page URL"  id="med_cont_twitter"  name="med_cont_twitter">
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="col-md-4 form-group">
                                                          <label for="usr">LinkedIn Page URL*</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                          <input type="text" class="form-control" placeholder="Enter LinkedIn Page URL"  id="med_cont_linkin"  name="med_cont_linkin">
                                                        </div>
                                                      </div>
                                                  </div>
                                               </div>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <div class="col-md-12 reg_sec_border">
                                               <div class="col-md-12">
                                                  <br>
                                                 <div class="row">
                                                    <input type="checkbox" name="accept" class="accept">&nbsp;
                                                    <a href="#" style="font-weight: 600;">I Accept Term and Condition</a>
                                                    <br>
                                                    <p class="cet_que" style="display: none;">I, hereby, declare that all statements and entries made in this application form are true, complete and correct to the best of my knowledge and belief. I understand that in the event of any information being found false or ineligibility being detected any time, action can be taken against me by Management.
                                                    I, confirm that I will follow all the rules & regulations prescribed by Agrawal Federation Administrative Training Foundation and in case of any violation of any of the rules and misconduct, management would have absolute right to take disciplinary action against me.
                                                    I, confirm that all decision will be final by Agrawal Federation Academic committee in case of any dispute.</p>
                                                  </div>
                                                <BR>
                                                 <button type="submit" value="Submit" class="btn btn-warning" id="med_submit" name="med_submit">Register</button>
                                                 <div id="med_reg_result"></div>
                                                 <br><br>
                                               </div>
                                            </div>
                                          </div>
                                        </article>
                                      </div>
                                  </div>
                              </div>
                            </form>
                           </div>
                          <div id="med_post" class="col-md-9" style="display: none;">
                            <div class="row jm_dash_profile">
                                <div class="col-md-10 col-md-offset-1"> 
                                    <div class="row">
                                        <div class="col-md-9">
                                          <h3 class="medical_detail_head jm_dash_profile_head">View Medical Posting</h3>
                                        </div>
                                        <div class="col-md-3">
                                          <a href="medical.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php
                                        $med_query="SELECT * FROM `medical` WHERE med_sess='$med_sess' and med_type='Medical'";
                                         $result=mysqli_query($conn, $med_query);
                                         $data=mysqli_num_rows( $result);
                                        if($data==0){ ?>
                                          <h4 style="color:red;">Sorry !!  Medical Posting Not Available...</h4>
                                        <?php }
                                        else{ 
                                          while($row=mysqli_fetch_array($result)){ ?>
                                               <!-- Medical's Record -->
                                              <div class="row">
                                                <div class="col-md-12 jm_view_detail">
                                                    <h4 class="jm_view_detail_head"><i class="fa fa-medkit"></i>&nbsp;&nbsp; Medical Name : <?php echo $row['med_name']; ?></h4>
                                                </div>
                                                <div class="col-md-12 jm_view_user_stl">
                                                  <br>
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">Website :</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_website']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Mobile No. :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_phone']; ?></label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Open Time :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_open_time']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Close Time :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_close_time']; ?></label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                          <label  class="jm_view_head_wt">
                                                            Address :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                          <label><?php echo $row['med_addr']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label  class="jm_view_head_wt">
                                                            Contact Person Name :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <label><?php echo $row['med_cont_name']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label  class="jm_view_head_wt">
                                                            Contact Person Phone :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <label><?php echo $row['med_cont_phone']; ?></label>
                                                        </div>
                                                      </div>
                                                   
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                        </div>
                                                        <div class="col-md-7">
                                                         <a href="medical-edit-profile.php?update=<?php echo $row['med_id']; ?>">
                                                          <button class="btn btn-danger" style="float: right;">Edit</button>
                                                        </a><br><br><br>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              </div><br><!-- End of Medical's Record -->
                                          <?php }
                                       } ?>
                                </div>
                            </div>
                          </div>
                         <div id="hosp_post" class="col-md-9" style="display: none;">
                            <div class="row jm_dash_profile">
                                <div class="col-md-10 col-md-offset-1"> 
                                    <div class="row">
                                        <div class="col-md-9">
                                          <h3 class="medical_detail_head jm_dash_profile_head">View Hospital Posting</h3>
                                        </div>
                                        <div class="col-md-3">
                                          <a href="medical.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php
                                        $med_query="SELECT * FROM `medical` WHERE med_sess='$med_sess' and med_type='Hospital'";
                                         $result=mysqli_query($conn, $med_query);
                                         $data=mysqli_num_rows( $result);
                                        if($data==0){ ?>
                                           <h4 style="color:red;">Sorry !!  Hospital Posting Not Available...</h4>
                                        <?php }
                                        else{ 
                                         while($row=mysqli_fetch_array($result)){ ?>
                                               <!-- Medical's Record -->
                                              <div class="row">
                                                <div class="col-md-12 jm_view_detail">
                                                    <h4 class="jm_view_detail_head"><i class="fa fa-medkit"></i>&nbsp;&nbsp; Hospital Name : <?php echo $row['med_name']; ?></h4>
                                                </div>
                                                <div class="col-md-12 jm_view_user_stl">
                                                  <br>
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">Website :</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_website']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Mobile No. :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_phone']; ?></label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Open Time :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_open_time']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Close Time :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_close_time']; ?></label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                          <label  class="jm_view_head_wt">
                                                            Address :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                          <label><?php echo $row['med_addr']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label  class="jm_view_head_wt">
                                                            Contact Person Name :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <label><?php echo $row['med_cont_name']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label  class="jm_view_head_wt">
                                                            Contact Person Phone :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <label><?php echo $row['med_cont_phone']; ?></label>
                                                        </div>
                                                      </div>
                                                   
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                        </div>
                                                        <div class="col-md-7">
                                                         <a href="medical-edit-profile.php?update=<?php echo $row['med_id']; ?>">
                                                          <button class="btn btn-danger" style="float: right;">Edit</button>
                                                        </a><br><br><br>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              </div><br><!-- End of Medical's Record -->
                                          <?php }
                                         }?>
                                </div>
                            </div>
                          </div> 
                        <div id="dr_post" class="col-md-9" style="display: none;">
                            <div class="row jm_dash_profile">
                                <div class="col-md-10 col-md-offset-1"> 
                                    <div class="row">
                                        <div class="col-md-9">
                                          <h3 class="medical_detail_head jm_dash_profile_head">View Doctor Posting</h3>
                                        </div>
                                        <div class="col-md-3">
                                          <a href="medical.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php
                                        $med_query="SELECT * FROM `medical` WHERE med_sess='$med_sess' and med_type='Doctor'";
                                         $result=mysqli_query($conn, $med_query);
                                         $data=mysqli_num_rows( $result);
                                        if($data == 0){ ?>
                                          <h4 style="color:red;">Sorry !!  Doctor Posting Not Available...</h4>
                                        <?php }
                                        else{ 
                                          while($row=mysqli_fetch_array($result)){ ?>
                                               <!-- Medical's Record -->
                                              <div class="row">
                                                <div class="col-md-12 jm_view_detail">
                                                    <h4 class="jm_view_detail_head"><i class="fa fa-medkit"></i>&nbsp;&nbsp; Doctor Name : <?php echo $row['med_name']; ?></h4>
                                                </div>
                                                <div class="col-md-12 jm_view_user_stl">
                                                  <br>
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">Website :</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_website']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Mobile No. :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_phone']; ?></label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Open Time :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_open_time']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                          <label  class="jm_view_head_wt">
                                                            Close Time :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-7">
                                                          <label><?php echo $row['med_close_time']; ?></label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                          <label  class="jm_view_head_wt">
                                                            Address :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                          <label><?php echo $row['med_addr']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label  class="jm_view_head_wt">
                                                            Contact Person Name :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <label><?php echo $row['med_cont_name']; ?></label>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label  class="jm_view_head_wt">
                                                            Contact Person Phone :
                                                          </label>
                                                        </div>
                                                        <div class="col-md-8">
                                                          <label><?php echo $row['med_cont_phone']; ?></label>
                                                        </div>
                                                      </div>
                                                   
                                                      <div class="row">
                                                        <div class="col-md-5">
                                                        </div>
                                                        <div class="col-md-7">
                                                         <a href="medical-edit-profile.php?update=<?php echo $row['med_id']; ?>">
                                                          <button class="btn btn-danger" style="float: right;">Edit</button>
                                                        </a><br><br><br>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              </div><br><!-- End of Medical's Record -->
                                          <?php }
                                        }?>
                                </div>
                            </div>
                          </div><!-- End Of Doctor Profile -->
                      </div>
                  </div>
            </section>
        </div>
      </div>
     <!-- End of Section 3 -->
  </div>
    <?php include"footer.php"; ?>
    <?php include 'validation.php'; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
<script type="text/javascript">
  // I Agree all terms n condition
      $('.accept').change(function()
      {
        $('.cet_que').slideToggle();
      });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#view_med").click(function(){
        $("#med_post").show();
        $("#hosp_post").hide();
        $("#dr_post").hide();
        $("#med_reg_post").hide();
    });
     $("#view_hosp").click(function(){
        $("#med_post").hide();
        $("#hosp_post").show();
        $("#dr_post").hide();
        $("#med_reg_post").hide();
    });
     $("#view_dr").click(function(){
        $("#med_post").hide();
        $("#hosp_post").hide();
        $("#dr_post").show();
        $("#med_reg_post").hide();
    });
     $("#reg_post").click(function(){
        $("#med_post").hide();
        $("#hosp_post").hide();
        $("#dr_post").hide();
        $("#med_reg_post").show();
    });
});
</script>
 <script type="text/javascript">
        function getState(val) {
                  $.ajax({
                  type: "POST",
                  url: "get_state.php",
                  data:'cid='+val,
                  success: function(data){
                      $("#med_state").html(data);
                  }
                  });
              }

        function getcity(val) {
            $.ajax({
            type: "POST",
            url: "get_city.php",
            data:'sid='+val,
            success: function(data){
                $("#med_city").html(data);
            }
            });
        }

        function showUser(str) {
            var d="9";
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else { 
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","getBanking.php?q="+str+"&a="+d,true);
                xmlhttp.send();
            }
        }
</script>
<script type="text/javascript">
$(document).ready(function (e) {
  /*$("#uploadForm").on('submit',(function(e) {
    var med_sess = "<?= $med_sess; ?>";
    var user_id = "<?= $user_id; ?>";
    var status = "<?= $status; ?>";
    var lblresult = $('#lblresult').html();
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('med_sess', med_sess);
    formData.append('user_id', user_id);
    formData.append('status', status);
    formData.append('lblresult', lblresult);
    $.ajax({
      url: "do-medical-reg.php",
      type: "POST",
      data: formData,
      contentType: false,
          cache: false,
      processData:false,
      success: function(data)
        {
          $("#med_reg_result").html(data);
        },
        error: function() 
        {
        }           
     });
  }));*/
  $(function()
    {
      $('#med_logo').change(function(){
        {
          var reader=new FileReader();
          reader.onload=imageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function imageIsLoaded(e){
      $('#targetLayer').attr('src', e.target.result);
      $('#targetLayer').attr('width', '200px');
      $('#targetLayer').attr('height', '150px');
    };
});
</script>

  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>

 <script type="text/javascript">
        $(document).ready(function() {
            $('#uploadForm').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        med_type: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please enter your Member Type'
                                }
                            }
                        },
                        med_name: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your First Name'
                                }
                            }
                        },
                       addrr: {
                            validators: {
                              
                                notEmpty: {
                                    message: 'Please enter your Landscape'
                                }
                            }
                        },
                        med_address: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please enter your Address'
                                }
                            }
                        },
                         med_pincode: {
                            validators: {
                                stringLength: {
                                    min: 6,
                                    max: 6,
                                    
                                },
                                notEmpty: {
                                        message: 'Please enter your Pincode.'
                                    }
                                
                            }
                        },

                        
                        
                        
                         med_phone: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                    
                                },
                                notEmpty: {
                                        message: 'Please enter your Contact No.'
                                    }
                                
                            }
                        },
             med_country: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your Country'
                                }
                            }
                        },
             med_state: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your State'
                                }
                            }
                        },
             med_city: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your City'
                                }
                            }
                        },
                        
                       med_educ: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your Education'
                                }
                            }
                        },
                         med_open: {
                            validators: {
                                     notEmpty: {
                                    message: 'Please enter your Education'
                                }
                            }
                        },
                         med_close: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please enter your Education'
                                }
                            }
                        },
                         med_logo: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please select your Imagere'
                                }
                            }
                        },
                       
                        accept: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please accept Terms & Conditions'
                                }
                            }
                        },

                         med_cont_phone: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                    
                                }
                            }
                        },

                         med_cont_email: {
                validators: {
                  
           regexp: {
                        regexp: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/,
                        message: 'The email address is not valid'
                    }
                }
            },


                          
                        
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                   

         var med_sess = "<?= $med_sess; ?>";
    var user_id = "<?= $user_id; ?>";
    var status = "<?= $status; ?>";
    var lblresult = $('#lblresult').html();
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('med_sess', med_sess);
    formData.append('user_id', user_id);
    formData.append('status', status);
    formData.append('lblresult', lblresult);

                $.ajax({
                    url: "do-medical-reg.php",
                    type: "POST",
                     data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                     $("#med_reg_result").html(data);
                    },
                    error: function() {}
                });

                 $('#uploadForm').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);
                    
                  
                    var bv = $form.data('bootstrapValidator');

                 
                });
        });

    </script>