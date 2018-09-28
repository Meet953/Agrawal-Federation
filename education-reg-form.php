<?php
  session_start();
  if(isset($_GET['exam']))
  {
     $_SESSION['exam']=$exam=$_GET['exam'];
  }
?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">

    <head>
       
        <?php include"link.php"; ?>
        <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
        <style>
.not-active {
 pointer-events: none;
 cursor: default;
}
</style>
    </head>
    <script type="text/javascript" src="java script/jquery.smarvtWizard.js"></script>

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
                        <h2 class="reg_heading">Registration</h2>
                    </center>
                </div>
                <!-- End of Section 2 -->

                <!-- Section 3 -->
                <div class="row">
                    <br><br>
                    <div class="container">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step" >
                                    <a disabled="disabled" href="#step-1" type="button" class="btn btn-primary btn-circle cet_reg_no_circle not-active" onclick="return false">1</a>
                                    <p class="cet_reg_head">Personal Detail</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-2">
                                        <button class="btn btn-success btn-circle cet_reg_no_circle my-link" disabled="disabled">2</button>
                                    </a>
                                    <p class="cet_reg_head">Family Detail</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-3">
                                        <button class="btn btn-warning btn-circle cet_reg_no_circle" disabled="disabled">
                          3
                        </button>
                                        <p class="cet_reg_head" style="color: #b1b1c6;">Education Detail</p>
                                    </a>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step-4">
                                        <button class="btn btn-primary btn-circle cet_reg_no_circle" disabled="disabled">
                      4
                      </button>
                                    </a>
                                    <p class="cet_reg_head">
                                        <?php if(strcmp($_SESSION['exam'], 'CET')==0){
                            echo 'CET';
                          }
                          else{
                            echo 'BEAT';
                          }?> Detail
                                    </p>
                                </div>
                                <!--  <div class="stepwizard-step">
                      <a href="#step-4">
                        <button class="btn btn-default btn-circle cet_reg_no_circle">4</button>
                          <?php
                           //if (strcmp($_SESSION['exam'], 'CET')==0) 
                          { ?>
                               <p class="cet_reg_head"  style="color: #b1b1c6;">CET Details</p>
                          <?php } 
                          //else
                          { ?>
                             <p class="cet_reg_head"  style="color: #b1b1c6;">BEAT Details</p>
                          <?php }
                        ?>
                        
                  </div> -->
                                <?php
                     if (strcmp($_SESSION['exam'], 'CET')==0) { ?>
                                    <div class="stepwizard-step">
                                        <a href="#step-5">
                                            <button class="btn btn-default btn-circle cet_reg_no_circle" disabled="disabled">5</button>
                                            <p class="cet_reg_head" style="color: #b1b1c6;">Exam-Subject</p>
                                        </a>
                                    </div>
                                    <?php } 
                    else
                    { }
                  ?>

                                    <div class="stepwizard-step">
                                        <a href="#step-6">
                                            <button class="btn btn-success btn-circle cet_reg_no_circle" disabled="disabled">
                          <?php
                           if (strcmp($_SESSION['exam'], 'CET')==0) { ?>
                           6 <?php }
                           else { echo 5; } ?>
                        </button>
                                            <p class="cet_reg_head" style="color: #b1b1c6;">Other Detail</p>
                                        </a>

                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-7">
                                            <button class="btn btn-warning btn-circle cet_reg_no_circle" disabled="disabled">
                          <?php
                           if (strcmp($_SESSION['exam'], 'CET')==0) { ?>
                           7 <?php }
                           else { echo 6; } ?>
                        </button>
                                            <p class="cet_reg_head" style="color: #b1b1c6;">Reference</p>
                                        </a>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <form id="step1form" name="step1form" >
                            <div class="row setup-content" id="step-1">
                                <div class="col-xs-12 div_border_box">
                                    <div class="col-md-12">
                                        <h3>PERSONAL DETAILS</h3>
                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <input type="hidden" name="examtype" id="examtype" value="<?php echo $_SESSION['exam'];?>">
                                           
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label"> First Name &nbsp; <span class="star"  class="star">*</span></label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" id="pd_fname" name="pd_fname" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" />
                                            </div>
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label"> Last Name &nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" id="pd_lname" name="pd_lname" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" />
                                            </div>
                                            <!-- COLUMN 2 -->

                                            <!-- COLUMN 3 -->
                                            <div class="col-md-4 form-group">
                                               
                                                <label class="control-label">Date Of Birth (dd-mm-yyyy) &nbsp; <span  class="star">*</span></label>
                                                <div id="sandbox-container" class="input-group">
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Date Of Birth(dd-mm-yyyy)" id="pd_dob" name="pd_dob"  />
                                                </div>
                                            </div>
                                            <!-- COLUMN 3 -->
                                        </div>
                                        <br>
                                        <!-- End Of Row1 -->

                                        <!-- Row  2 -->
                                        <div class="row">
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Father Name &nbsp; <span  class="star">*</span></label>
                                                <input  type="text" required="required" class="form-control" placeholder="Enter Father Name" id="pd_father_name" name="pd_father_name" />
                                            </div>
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Mother Name &nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Mother Name" id="pd_mother_name" name="pd_mother_name" />
                                            </div>
                                            <!-- COLUMN 2 -->

                                            <!-- COLUMN 3 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Gender &nbsp;<span  class="star">*</span> </label>
                                                <select class="form-control" id="pd_gender" name="pd_gender">
                                    <option value="">Select</option>            
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                                            </div>
                                            <!-- COLUMN 3 -->
                                        </div>
                                        <br>
                                        <!-- End Of Row 2 -->

                                        <!-- Row  3 -->
                                        <div class="row">
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Mobile No. 1&nbsp; <span  class="star">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Mobile No. 1" id="pd_mob1" name="pd_mob1" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" />
                                                <span id="edu_mob_span"></span>
                                            </div>
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Mobile No. 2&nbsp; </label>
                                                <input type="text" class="form-control" placeholder="Enter Mobile No. 2" id="pd_mob2" name="pd_mob2" maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                <span id="edu_mob_span2"></span>
                                            </div>
                                            <span id="edu_mob_span"></span>
                                            <!-- COLUMN 2 -->

                                            <!-- COLUMN 3 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Email &nbsp; <span  class="star">*</span></label>
                                                <input type="text" required="required" class="form-control" placeholder="Enter Email Id" id="pd_email" name="pd_email" />
                                                <span id="edu_error_email" style="display:none;color:red;"> <input type="hidden" name="emailcheck" id="emailcheck" ></span>
                                            </div>


                                            <!-- COLUMN 3 -->
                                        </div>

                                        <br>
                                        <!-- End Of Row 3 -->

                                        <!-- Row  4 -->
                                        <div class="row">
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Address&nbsp; <span  class="star">*</span></label>
                                                <textarea cols="50" rows="2" placeholder="Enter Address" id="pd_addr" name="pd_addr"></textarea>
                                            </div>
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Pin Code&nbsp; <span  class="star">*</span></label>
                                                <input type="text" required="required" class="form-control" placeholder="Enter Pin Code" id="pd_pincode" name="pd_pincode" required maxlength="6" minlength="6" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                            </div>
                                            <!-- COLUMN 2 -->

                                            <!-- COLUMN 3 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Password &nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="password" required="required" class="form-control" placeholder="Enter Password" id="pd_pwd" name="pd_pwd" />
                                            </div>
                                            <!-- COLUMN 3 -->
                                        </div>
                                        <br>
                                        <!-- End Of Row 4 -->

                                        <!-- Row  5 -->
                                        <div class="row">
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Confirm Password &nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="password" required="required" class="form-control" placeholder="Enter Confirm Password" id="pd_cnfrm_pwd" name="pd_cnfrm_pwd" onchange="return Validate()" />
                                            </div>

                                           
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">State&nbsp; <span  class="star">*</span></label>
                                            
                                                 <select class="form-control" id="pd_state" name="pd_state"  onChange="getcity(this.value);">
                                                 <option value="">Select State</option>
                    <?php include 'conn.php';
                            $sql = "SELECT * FROM states where cid='101'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['sid'] ?>"><?php echo $row['sname']; }?></option>
                                                <!-- <select class="form-control" id="pd_state" name="pd_state">
                                  <option value="State1">State1</option>
                                  <option value="state2">state2</option>
                                </select> -->
                                                </select>
                                            </div>
                                            
                                             <div class="col-md-4 form-group">
                                                <label class="control-label">City&nbsp; <span  class="star">*</span></label>
                                                
                                                  <select class="form-control" id="pd_city" name="pd_city" onchange="showUser(this.value)">
                      <option value="">Select City</option>
                    </select>
                                            </div>
                                            <!-- COLUMN 2 -->
                                        </div>
                                        <br>
                                        <hr>
                                        <!-- End Of Row 5 -->

                                        <!-- Row 6 -->
                                        <div class="row ">
                                            <center>
                                                <button type="submit" class="btn btn-primary nextBtn btn-lg pull-right" id="pd_btn" name="pd_btn" onclick='Javascript:checkEmail();'>Next</button>
                                            </center>
                                            <div id="pd_result"></div>
                                        </div>
                                        <br>
                                        <!-- End of Row 6 -->
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form role="form" id="step2form" name="step2form">
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12 div_border_box">
                                    <div class="col-md-12">
                                        <br>
                                        <h3>FAMILY DETAILS</h3>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <h4 class="family_head">Father Details :-</h4>
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Father Occupation &nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Father Occupation" id="fd_fathr_occup" name="fd_fathr_occup" />
                                            </div>
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label"> Telephone No. &nbsp; <span  class="star">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Telephone No." id="fd_fathr_telephone" name="fd_fathr_telephone"  maxlength="15" minlength="15" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                            </div>
                                            <!-- COLUMN 2 -->

                                            <!-- COLUMN 3 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Mobile No. &nbsp; <span  class="star">*</span></label>
                                                <input required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="form-control" placeholder="Enter Mobile No." id="fd_fathr_mob" name="fd_fathr_mob" />
                                                <span id="fam_mob_span"></span>
                                            </div>
                                            <!-- COLUMN 3 -->
                                        </div>
                                        <br>
                                        <hr>
                                        <!-- End Of Row1 -->

                                        <!-- Row  2 -->
                                        <div class="row">
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label"> Designation&nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Designation" id="fd_fathr_desig" name="fd_fathr_desig" />
                                            </div>
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Annual Income(INR only)&nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="text" class="form-control" placeholder="Enter Annual Income(INR only)" id="fd_fathr_income" name="fd_fathr_income"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                            </div>
                                            <!-- COLUMN 2 -->

                                            <!-- COLUMN 3 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">PAN &nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="text"  class="form-control" placeholder="Enter PAN" id="fd_fathr_pan" name="fd_fathr_pan" />
                                            </div>
                                            <!-- COLUMN 3 -->
                                        </div>
                                        <br>
                                        <!-- End Of Row 2 -->

                                        <!-- Row  3 -->
                                        <div class="row">
                                            <h4 class="family_head">Mother Details :-</h4>
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Mother Occupation&nbsp; <span  class="star">*</span></label>
                                                <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Mother Occupation" id="fd_mothr_occup" name="fd_mothr_occup" />
                                            </div>
                                            <!-- COLUMN 1 -->

                                            <!-- COLUMN 2 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Telephone No. &nbsp; <span  class="star">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Telephone No." id="fd_mothr_telephone" name="fd_mothr_telephone"  maxlength="15" minlength="15" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                            </div>
                                            <!-- COLUMN 2 -->

                                            <!-- COLUMN 3 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Mobile No. &nbsp; <span  class="star">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Mobile No." id="fd_mothr_mob" name="fd_mothr_mob" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                <span id="moth_mob_spn"></span>
                                            </div>
                                            <!-- COLUMN 3 -->
                                        </div>
                                        <br>
                                        <!-- End Of Row 3 -->

                                        <!-- Row  4 -->
                                        <div class="row">
                                            <h4 class="family_head"> Your Religion :-</h4>
                                            <!-- COLUMN 1 -->
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Select Religion&nbsp; <span  class="star">*</span></label>
                                                <select class="form-control" id="fd_religion" name="fd_religion">
                                  <option value="">Select Religion</option>
                                  <option value="Religion1">Religion1</option>
                                </select>
                                            </div>
                                            <!-- COLUMN 1 -->
                                        </div>
                                        <br>
                                        <hr>
                                        <!-- End Of Row 4 -->

                                        <!-- Row 6 -->
                                        <div class="row">

                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" id="fd_btn" name="fd_btn">Next</button>
                                            <div id="fd_result"></div>
                                        </div>
                                        <br>
                                        <!-- End of Row 6 -->
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form role="form" id="step3form" name="step3form">
                            <div class="row setup-content" id="step-3">
                                <div class="col-xs-12 div_border_box">
                                    <div class="col-md-12">
                                        <br>
                                        <h3>EDUCATION DETAILS</h3>
                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <div class="col-md-1 ssc_div">
                                                <h4 class="ssc_head">SSC (Xth Class)</h4>
                                            </div>
                                        </div>
                                        <!-- End Of Row 1 -->

                                        <!-- Row 2 -->
                                        <div class="row educ_div_border">
                                            <div class="col-md-12">
                                                <div class="row"><br>
                                                    <!-- COLUMN 1 -->
                                                    <div class="col-md-6 form-group">
                                                        <label class="control-label">Board&nbsp; <span class="star"  class="star">*</span></label>
                                                        <select class="form-control" id="ed_ssc_board" name="ed_ssc_board">
                                        <option value="">Select Board</option>
                                        <option value="Board1">Board1</option>
                                      </select>
                                                    </div>
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">School Name &nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter School Name" id="ed_ssc_name" name="ed_ssc_name" />
                                                    </div>
                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label"> Roll No.&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Roll No." id="ed_ssc_roll" name="ed_ssc_roll" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Year&nbsp;<span  class="star">*</span></label>
                                                        <input maxlength="4" type="text" required="required" class="form-control" placeholder="Enter Year" id="ed_ssc_year" name="ed_ssc_year" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Percent(%) &nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Percent(%) Id" id="ed_ssc_percent" name="ed_ssc_percent"  onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" />
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Rank, If any &nbsp;</label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Rank, If any" id="ed_ssc_rank" name="ed_ssc_rank" />
                                                    </div>
                                                </div> <br>
                                            </div>
                                        </div>
                                        <!-- End of row 2 -->
                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <div class="col-md-1 ssc_div">
                                                <h4 class="ssc_head">HSC (XII Class)</h4>
                                            </div>
                                        </div>
                                        <!-- End Of Row 1 -->

                                        <!-- Row 2 -->
                                        <div class="row educ_div_border">
                                            <div class="col-md-12">
                                                <div class="row"><br>
                                                    <!-- COLUMN 1 -->
                                                    <div class="col-md-6 form-group">
                                                        <label class="control-label">Board&nbsp; <span class="star"  class="star">*</span></label>
                                                        <select class="form-control" id="ed_hsc_board" name="ed_hsc_board">
                                        <option value="">Select Board</option>
                                        <option value="Board1">Board1</option>
                                      </select>
                                                    </div>
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">School Name &nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter School Name" id="ed_hsc_name" name="ed_hsc_name" />
                                                    </div>
                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label"> Roll No.&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Roll No." id="ed_hsc_roll" name="ed_hsc_roll" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Year&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="4" type="text" required="required" class="form-control" placeholder="Enter Year" id="ed_hsc_year" name="ed_hsc_year" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Percent(%) &nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Percent(%) Id" id="ed_hsc_percent" name="ed_hsc_percent" onkeyup="this.value=this.value.replace(/[^0-9][.]/g,'');"/>
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Rank, If any &nbsp; </label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Rank, If any" id="ed_hsc_rank" name="ed_hsc_rank" />
                                                    </div>
                                                </div> <br>
                                            </div>
                                        </div>
                                        <!-- End of row 2 -->
                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <div class="col-md-1 ssc_div">
                                                <h4 class="ssc_head">Graduation</h4>
                                            </div>
                                        </div>
                                        <!-- End Of Row 1 -->

                                        <!-- Row 2 -->
                                        <div class="row educ_div_border">
                                            <div class="col-md-12">
                                                <div class="row"><br>
                                                    <!-- COLUMN 1 -->
                                                    <div class="col-md-6 form-group">
                                                        <label class="control-label">University&nbsp; <span class="star"  class="star">*</span></label>
                                                        <select class="form-control" id="ed_gd_university" name="ed_gd_university">
                                        <option value="">Select University</option>
                                        <option value="Board1">Board1</option>
                                      </select>
                                                    </div>
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">College & Institude&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter College & Institude" id="ed_gd_inst" name="ed_gd_inst" />
                                                    </div>
                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">Degree Name&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Degree Name" id="ed_gd_degree_name" name="ed_gd_degree_name" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Year&nbsp; <span class="star">*</span></label>
                                                        <input maxlength="4" type="text" required="required" class="form-control" placeholder="Enter Year" id="ed_gd_year" name="ed_gd_year" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Percent(%) &nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Percent(%) Id" id="ed_gd_percent" name="ed_gd_percent" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');"  />
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Rank, If any &nbsp;</label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Rank, If any" id="ed_gd_rank" name="ed_gd_rank" />
                                                    </div>
                                                </div> <br>
                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-12 form-group">
                                                        <div class="col-md-12">
                                                            <a href="#">Are You in the final year of degree ? Then please see the help menu for filling the percentage etc.</a>&nbsp;&nbsp;
                                                            <input type="radio" id="ed_gd_appear_final" name="ed_gd_appear_final" value="Yes" checked>&nbsp;&nbsp; Yes</label>
                                                            <input type="radio" id="ed_gd_appear_final" name="ed_gd_appear_final" value="No">&nbsp;&nbsp; No</label>
                                                        </div>
                                                    </div>
                                                </div> <br>
                                            </div>
                                        </div>
                                        <!-- End of row 2 -->
                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <div class="col-md-1 ssc_div">
                                                <h4 class="ssc_head">Post Graduation</h4>
                                            </div>
                                        </div>
                                        <!-- End Of Row 1 -->

                                        <!-- Row 2 -->
                                        <div class="row educ_div_border">
                                            <div class="col-md-12">
                                                <div class="row"><br>
                                                    <!-- COLUMN 1 -->
                                                    <div class="col-md-6 form-group">
                                                        <label class="control-label">University&nbsp;</label>
                                                        <select class="form-control" id="ed_pg_university" name="ed_pg_university">
                                        <option value="">Select University</option>
                                        <option value="Board1">Board1</option>
                                      </select>
                                                    </div>
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">College & Institude&nbsp;</label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter College & Institude" id="ed_pg_inst" name="ed_pg_inst" />
                                                    </div>
                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">Degree Name&nbsp;</label>
                                                        <input maxlength="100" type="text"class="form-control" placeholder="Enter Degree Name" id="ed_pg_degree_name" name="ed_pg_degree_name" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Year&nbsp;</label>
                                                        <input maxlength="4" type="text" class="form-control" placeholder="Enter Year" id="ed_pg_year" name="ed_pg_year" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Percent(%) &nbsp;</label>
                                                        <input type="text"  class="form-control" placeholder="Enter Percent(%) Id" id="ed_pg_percent" name="ed_pg_percent" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" />
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Rank, If any &nbsp;</label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Rank, If any" id="ed_pg_rank" name="ed_pg_rank" />
                                                    </div>
                                                </div> <br>
                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-12 form-group">
                                                        <div class="col-md-12">
                                                            <a href="#">Are You in the final year of degree ? Then please see the help menu for filling the percentage etc.</a>&nbsp;&nbsp;
                                                            <input type="radio" name="ed_pg_menu" id="ed_pg_menu" value="Yes" checked>&nbsp;&nbsp; Yes</label>
                                                            <input type="radio" name="ed_pg_menu" id="ed_pg_menu" value="No">&nbsp;&nbsp; No</label>
                                                        </div>
                                                    </div>
                                                </div> <br>
                                            </div>

                                        </div>
                                        <!-- End of row 2 -->

                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <div class="col-md-1 ssc_div">
                                                <h4 class="ssc_head">Professional /Other Qualification</h4>
                                            </div>
                                        </div>
                                        <!-- End Of Row 1 -->

                                        <!-- Row 2 -->
                                        <div class="row educ_div_border">
                                            <div class="col-md-12">
                                                <div class="row"><br>
                                                    <!-- COLUMN 1 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Name of Certificate&nbsp;</label>
                                                        <input maxlength="100" type="text"  class="form-control" placeholder="Enter Name of Certificate" id="ed_prof_cert_name" name="ed_prof_cert_name" />
                                                    </div>
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-2 form-group">
                                                        <label class="control-label">Year&nbsp;</label>
                                                        <input maxlength="4" type="text"  class="form-control" placeholder="Enter Year" id="ed_prof_cert_year" name="ed_prof_cert_year" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                    </div>
                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">Percent (%)&nbsp;</label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Percent (%)" id="ed_prof_cert_percent" name="ed_prof_cert_percent" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');"  />
                                                    </div>
                                                    <div class="col-md-3 form-group">
                                                        <label class="control-label">Rank, If any&nbsp;</label>
                                                        <input maxlength="100" type="text"  class="form-control" placeholder="Enter Rank, If any" id="ed_prof_cert_rank" name="ed_prof_cert_rank" />
                                                    </div>
                                                </div>
                                                <!-- 
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                     <div class="col-md-12">
                                       <a href="#" class="star">*Please keep scanned file size of each mark-sheet less than 800KB.</a>&nbsp;&nbsp;<br>
                                       <a href="#" class="star">*Marksheet File Type should be of jpg,png,jpeg formats only.</a>
                                     </div>
                                  </div>
                                </div> 
 -->
                                                <!-- <div class="row">
                                    <div class="col-md-4 form-group">
                                      <label class="control-label">SSC Marksheet&nbsp; <span class="star"  class="star">*</span></label>
                                      <input  maxlength="100" type="file" required="required" class="form-control" id="ed_prof_ssc_marksheet" name="ed_prof_ssc_marksheet"/>
                                    </div>
                                    <div class="col-md-4 form-group">
                                       <label class="control-label">HSC Marksheet&nbsp; <span  class="star">*</span></label>
                                       <input  maxlength="100" type="file" required="required" class="form-control" id="ed_prof_hsc_marksheet" name="ed_prof_hsc_marksheet"/>
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label class="control-label">Graduation Marksheet&nbsp; <span  class="star">*</span></label>
                                      <input  maxlength="100" type="file" required="required" class="form-control" id="ed_prof_gd_marksheet" name="ed_prof_gd_marksheet"/>
                                    </div>
                                </div> -->

                                                <!-- <div class="row">
                                    <div class="col-md-4 form-group">
                                      <label class="control-label">Post Graduation Marksheet&nbsp;</label>
                                      <input  maxlength="100" type="file" required="required" class="form-control" id="ed_prof_pg_marksheet" name="ed_prof_pg_marksheet"/>
                                    </div>
                                    <div class="col-md-4 form-group">
                                       <label class="control-label">Other Certification Marksheet&nbsp;</label>
                                       <input  maxlength="100" type="file" required="required" class="form-control" id="ed_prof_other_cert" name="ed_prof_other_cert"/>
                                    </div>
                                    <div class="col-md-4 form-group">
                                      <label class="control-label">Scan Signature&nbsp; <span  class="star">*</span></label>
                                      <input  maxlength="100" type="file" required="required" class="form-control" id="ed_prof_scan_sign" name="ed_prof_scan_sign"/>
                                    </div>
                                </div> -->
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">

                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" id="ed_btn" name="ed_btn">Next</button>
                                            <div id="ed_result"></div>
                                        </div><br>
                                        <!-- End of row 2 -->
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form role="form" id="step4form" name="step4form">
                            <div class="row setup-content" id="step-4">
                                <div class="col-xs-12 div_border_box">
                                    <div class="col-md-12">
                                        <br>
                                        <?php
                             if ($exam=='CET') 
                            { ?>
                                            <h3>CET DETAILS</h3>
                                            <?php } 
                            else
                            { ?>
                                            <h3>BEAT DETAILS</h3>
                                            <?php }
                          ?>

                                            <br>
                                            <div class="row">
                                                <h4 class="family_head">About
                                                    <?php
                             if (strcmp($_SESSION['exam'], 'CET')==0) 
                            { ?>
                                                        CET :-
                                                        <?php } 
                            else
                            { ?> BEAT :-
                                                        <?php }
                            ?>
                                                </h4>
                                                <a href="#" class="cet_que">Have you availed any of the facility from Agrawal Federation? <span class="star">*</span></a><br>
                                                <div class="col-md-1">
                                                    <input type="radio" name="cd_get_facility" value="Yes" id="cd_get_facility" checked>&nbsp;&nbsp; Yes</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <input type="radio" name="cd_get_facility" value="No" id="cd_get_facility">&nbsp;&nbsp; No</label>
                                                </div>
                                            </div><br>
                                            <hr>
                                            <div class="row">
                                                <a href="#" class="cet_que">From where you come to know about 
                               <?php
                             if (strcmp($_SESSION['exam'], 'CET')==0) 
                            { ?>
                                 CET
                            <?php } 
                            else
                            { ?>
                                BEAT
                            <?php }
                            ?>
                            <span class="star">*</span></a><br>
                                                <div class="col-md-2">
                                                    <input type="checkbox" name="cd_cm_from" id="cd_cm_from" value="SMS">&nbsp; SMS</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" name="cd_cm_from" id="cd_cm_from" value="Banner">&nbsp; Banner</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" name="cd_cm_from" id="cd_cm_from" value="TV Add">&nbsp;TV Add</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" name="cd_cm_from" id="cd_cm_from" value="Family Friend">&nbsp;Family Friend </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <input type="checkbox" name="cd_cm_from" id="cd_cm_from" value="Jain Magzine">&nbsp;Jain Magzine </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" name="cd_cm_from" id="cd_cm_from" value="Social Gathering">&nbsp;Social Gathering </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="checkbox" name="cd_cm_from" id="cd_cm_from" value="Internet/website">&nbsp; Internet/website</label>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="row">
                                                <!-- COLUMN 2 -->
                                                <div class="col-md-4 form-group">
                                                    <label class="control-label">Language Medium of 
                                       <?php
                                         if (strcmp($_SESSION['exam'], 'CET')==0) 
                                        { ?>
                                             CET
                                        <?php } 
                                        else
                                        { ?>
                                            BEAT
                                        <?php }
                                        ?>
                                      &nbsp;<span  class="star">*</span> </label>
                                                    <div class="col-md-6">
                                                        <input type="radio" name="cd_lang" id="cd_lang" value="English" checked>&nbsp;&nbsp; English</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="radio" name="cd_lang" id="cd_lang" value="Hindi">&nbsp;&nbsp; Hindi</label>
                                                    </div>
                                                </div>

                                                <!-- COLUMN 3 -->
                                                <div class="col-md-4 form-group">
                                                    <label class="control-label">Schedule of 
                                       <?php
                                         if (strcmp($_SESSION['exam'], 'CET')==0) 
                                        { ?>
                                             CET
                                        <?php } 
                                        else
                                        { ?>
                                            BEAT
                                        <?php }
                                        ?>
                                     &nbsp; <span  class="star">*</span></label>
                                                    <select class="form-control" id="cd_schedule" name="cd_schedule">
                                       <option value="">Select</option>
                                          <option value="CET-2017">CET-2017</option>
                                      </select>
                                                </div>

                                                <!-- COLUMN 3 -->
                                                <div class="col-md-4 form-group">
                                                    <label class="control-label">
                                      Select Examination Centre of
                                       <?php
                                         if (strcmp($_SESSION['exam'], 'CET')==0) 
                                        { ?>
                                             CET
                                        <?php } 
                                        else
                                        { ?>
                                            BEAT
                                        <?php }
                                        ?>
                                       &nbsp; <span  class="star">*</span></label>
                                                    <select class="form-control" id="cd_exam_center" name="cd_exam_center">
                                        <option value="">Select Center</option>
                                        <option value="center1">center1</option>
                                      </select>
                                                </div>
                                            </div> <br>
                                            <hr>
                                            <div class="row">

                                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" id="cd_btn" name="cd_btn">Next</button>
                                                <div id="cd_result"></div>
                                            </div><br>

                                    </div>
                                </div>
                            </div>
                        </form>

                        <form role="form" id="step5form" name="step5form">
                            <div class="row setup-content" id="step-5">
                                <div class="col-xs-12 div_border_box">
                                    <div class="col-md-12">
                                        <br>
                                        <h3>EXAM & SUBJECT</h3>
                                        <br>
                                        <div class="row">
                                            <h4 class="family_head">Name of Exam for which you want to appear</h4>
                                            <input type="checkbox" name="es_select_exam" id="es_select_exam" value="UPSC">&nbsp; UPSC</label>
                                            <input type="checkbox" class="es_select_state" name="es_select_exam" id="es_select_exam" value="STATE">&nbsp; SMS</label>
                                            <!-- <div class="col-md-2">
                                <input type="checkbox" value="UPSC" id="es_select_exam" name="es_select_exam">&nbsp; UPSC</label>
                             </div>
                              <div class="col-md-2">
                                <input type="checkbox" class="es_select_exam" value="State" id="es_select_exam" name="es_select_state">&nbsp; State</label>
                             </div> -->
                                        </div>
                                        <br>
                                        <hr>
                                        <!-- UPSC -->
                                        <div class="row" id="upsc_section" style="display: none;">
                                            <div class="col-md-12">
                                                <h4 class="family_head">
                                                    <STRONG>UPSC</STRONG>
                                                </h4>
                                                <div class="col-md-2">
                                                    <input type="radio" value="For Preliminary" id="es_upsc_exam" name="es_upsc_exam" checked>&nbsp; For Preliminary</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" value="For Mains" id="es_upsc_exam" name="es_upsc_exam">&nbsp; For Mains</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" value="Interview" id="es_upsc_exam" name="es_upsc_exam">&nbsp; Interview</label>
                                                </div><br><br>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-2">
                                                    <label class="control-label">UPSC Preliminary</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" id="es_upsc_prel_year" name="es_upsc_prel_year">
                                          <option value="">Select Year</option>
                                          <option value="2017">2017</option>
                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12"><br>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Details of Optional Subjec you would like to opt for main Exam</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea rows="2" cols="20" id="es_upsc_op_sub" name="es_upsc_op_sub"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Subjects you would like to opt for Coaching</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea rows="2" cols="20" id="es_upsc_coach_sub" name="es_upsc_coach_sub"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12"><br>
                                                <div class="col-md-3">
                                                    <label class="control-label">Language Medium of Examination<span>*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" id="es_upsc_lang" name="es_upsc_lang" value="English" checked>&nbsp; English</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" id="es_upsc_lang" name="es_upsc_lang" value="Hindi">&nbsp; Hindi</label>
                                                </div>
                                                <br>
                                                <hr>
                                            </div>
                                        </div>
                                        <!--  <br><hr> -->
                                        <!-- END OF UPSC -->

                                        <!-- STATE -->
                                        <div class="row" id="state_section" style="display: none;">
                                            <div class="col-md-12">
                                                <h4 class="family_head">
                                                    <STRONG>STATE</STRONG>
                                                </h4>
                                                <div class="col-md-2">
                                                    <input type="radio" id="es_state_exam" name="es_state_exam" value="For Preliminary" checked>&nbsp; For Preliminary</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" id="es_state_exam" name="es_state_exam" value="For Mains">&nbsp; For Mains</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" id="es_state_exam" name="es_state_exam" value="Interview">&nbsp; Interview</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12"><br>
                                                <div class="col-md-2">
                                                    <label class="control-label">State Preliminary</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" id="es_state_prel_year" name="es_state_prel_year">
                                          <option value="">Select Year</option>
                                          <option value="2017">2017</option>
                                        </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" id="es_state_prel_state" name="es_state_prel_state">
                                          <option value="">Select State</option>
                                          <option value="state1">state1</option>
                                          <option value="state2">state2</option>
                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12"><br>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Details of Optional Subjec you would like to opt for main Exam</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea rows="2" cols="20" id="es_state_op_sub" name="es_state_op_sub"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Subjects you would like to opt for Coaching</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <textarea rows="2" cols="20" id="es_state_coach_sub" name="es_state_coach_sub"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12"><br>
                                                <div class="col-md-3">
                                                    <label class="control-label">Language Medium of Examination<span>*</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" id="es_state_lang" name="es_state_lang" value="English" checked>&nbsp; English</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="radio" id="es_state_lang" name="es_state_lang" value="Hindi">&nbsp; Hindi</label>
                                                </div>
                                                <br>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- <br><hr> -->
                                        <!-- END OF STATE -->
                                        <div class="row">
                                            <h4 class="family_head">Past Detail for UPSC</h4>
                                            <div class="col-md-2">
                                                <label class="control-label">Graduation Marksheet</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" id="es_past_attn_upsc" name="es_past_attn_upsc">
                                        <option value="">Select Attempts</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                      </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">

                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" id="es_btn" name="es_btn">Next</button>
                                            <div id="es_result"></div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <form role="form" id="step6form" name="step6form">
                            <div class="row setup-content" id="step-6">
                                <div class="col-xs-12 div_border_box">
                                    <div class="col-md-12">
                                        <br>
                                        <h3>OTHER INFORMATION</h3>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label"> Extra Curriculum Activity &nbsp; </label>
                                                <input maxlength="100" type="text"  class="form-control" placeholder="Enter Extra Curriculum Activity" id="other_activity" name="other_activity" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Zonal/National/Int. Level &nbsp; </label>
                                                <input maxlength="100" type="text"  class="form-control" placeholder="Enter Zonal/National/Int. Level" id="other_national_level" name="other_national_level" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label"> Year&nbsp; </label>
                                                <input maxlength="4" type="text"  class="form-control" placeholder="Enter Year" id="other_year" name="other_year" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Position &nbsp; </label>
                                                <input maxlength="100" type="text" class="form-control" placeholder="Enter Position" id="other_pos" name="other_pos" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Any Other Achievement &nbsp; </label>
                                                <textarea cols="70" rows="5" id="other_achieve" name="other_achieve"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Hobbies &nbsp; </label>
                                                <textarea cols="70" rows="5" id="other_hobbies" name="other_hobbies"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">

                                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" id="other_btn" name="other_btn">Next</button>
                                            <div id="other_result"></div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form role="form" id="step7form" name="step7form">
                            <div class="row setup-content" id="step-7">
                                <div class="col-xs-12 div_border_box">
                                    <div class="col-md-12">
                                        <br>
                                        <h3>REFERENCE</h3>
                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <h4 class="family_head">Reference of two Person (Other than Family Member)</h4>
                                            <div class="col-md-1 ssc_div">
                                                <h4 class="ssc_head">1</h4>
                                            </div>
                                        </div>
                                        <!-- End Of Row 1 -->

                                        <!-- Row 2 -->
                                        <div class="row educ_div_border">
                                            <div class="col-md-12">
                                                <div class="row"><br>
                                                    <!-- COLUMN 1 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label"> Name &nbsp; <span class="star"  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Name" id="ref1_name" name="ref1_name" />
                                                    </div>
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Address&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Address" id="ref1_addr" name="ref1_addr" />
                                                    </div>
                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">City&nbsp; <span  class="star">*</span></label>
                                                       
                                                         <select class="form-control"id="ref1_city" name="ref1_city"   onChange="getcity(this.value);">
                                                 <option value="">Select State</option>
                    <?php include 'conn.php';
                            $sql = "SELECT * FROM cities,states where cities.sid=states.sid and states.cid='101'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name']; }?></option>
                                                <!-- <select class="form-control" id="pd_state" name="pd_state">
                                  <option value="State1">State1</option>
                                  <option value="state2">state2</option>
                                </select> -->
                                                </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Mobile No.&nbsp; </label>
                                                        <input type="text" class="form-control" placeholder="Enter Mobile No." id="ref1_mob" name="ref1_mob" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                        <span id="ref_mob_spn"></span>
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Tel. No.&nbsp;</label>
                                                        <input type="text" class="form-control" placeholder="Enter Tel. No." id="ref1_telephone" name="ref1_telephone"maxlength="15" minlength="15" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Email ID&nbsp;</label>
                                                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email ID" id="ref1_email" name="ref1_email" />
                                                        <span id="ref_email1_spn" style="display: none;">Invalid Email</span>
                                                    </div>
                                                </div> <br>
                                            </div>
                                        </div>
                                        <!-- End of row 2 -->
                                        <br>
                                        <!-- Row 1 -->
                                        <div class="row">
                                            <div class="col-md-1 ssc_div">
                                                <h4 class="ssc_head">2</h4>
                                            </div>
                                        </div>
                                        <!-- End Of Row 1 -->

                                        <!-- Row 2 -->
                                        <div class="row educ_div_border">
                                            <div class="col-md-12">
                                                <div class="row"><br>
                                                    <!-- COLUMN 1 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label"> Name &nbsp; <span class="star"  class="star">*</span></label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Name" id="ref2_name" name="ref2_name" />
                                                    </div>
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Address&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Address" id="ref2_addr" name="ref2_addr" />
                                                    </div>
                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">City&nbsp; <span  class="star">*</span></label>
                                                        <input maxlength="100" type="text"  class="form-control" placeholder="Enter City" id="ref2_city" name="ref2_city" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- COLUMN 2 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Mobile No.&nbsp; </label>
                                                        <input type="text" class="form-control" placeholder="Enter Mobile No." id="ref2_mob" name="ref2_mob" maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                        <span id="ref2_email_spn" style="display: none;">Invalid Email</span>
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Tel. No.&nbsp;</label>
                                                        <input type="text" class="form-control" placeholder="Enter Tel. No." id="ref2_telephone" name="ref2_telephone"maxlength="15" minlength="15" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
                                                    </div>

                                                    <!-- COLUMN 3 -->
                                                    <div class="col-md-4 form-group">
                                                        <label class="control-label">Email ID&nbsp;</label>
                                                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Email ID" id="ref2_email" name="ref2_email" />
                                                        <span id="ref2_email_spn2" style="display: none;">Invalid Email</span>
                                                    </div>
                                                </div> <br>
                                            </div>
                                        </div>
                                        <!-- End of row 2 -->
                                        <br>
                                        <div class="row">
                                            <input type="checkbox" id="accept" name="accept" class="accept" value="accept">&nbsp;
                                            <a href="#">I Accept Term and Condition</a>
                                            <br><br>
                                            <p class="cet_que" style="display: none;">I, hereby, declare that all statements and entries made in this application form are true, complete and correct to the best of my knowledge and belief. I understand that in the event of any information being found false or ineligibility being detected any time, action can be taken against me by Management. I, confirm that I will follow all the rules & regulations prescribed by Agrawal Federation Administrative Training Foundation and in case of any violation of any of the rules and misconduct, management would have absolute right to take disciplinary action against me. I, confirm that all decision will be final by Agrawal Federation Academic committee in case of any dispute.</p>
                                            <br>
                                            <hr>
                                        </div>

                                        <!-- End of row 3 -->
                                        <div class="row">
                                            <button class="btn btn-primary nextBtn btn-lg pull-right prev_btn" type="submit" id="ref_btn" name="ref_btn">Save</button>

                                            <div id="ref_result"></div>
                                        </div>
                                        <br>

                                    </div>
                                </div>
                                <!-- End of Section 3 -->
                            </div>
                        </form>
                    </div>
                    <!-- end main-content -->

                    <!-- Footer -->
                    <?php include"footer.php"; ?>
                    <?php include 'validation.php'; ?>
                    <!-- End of Footer -->

                    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
                </div>
                <!-- end wrapper -->
    </body>

    </html>

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js">


    </script>
 

   <script>
$(document).ready(function () {

   
   

});   
</script>
   
    <script type="text/javascript">
       

            $('#step1form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        pd_fname: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter your First Name'
                                }
                            }
                        },

                        pd_lname: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter your Last Name'
                                }
                            }
                        },

                        pd_dob: {
                            validators: {

                                notEmpty: {
                                    message: 'Please enter your DOB '
                                }
                            }
                        },

                        pd_father_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter your Father Name '
                                }
                            }
                        },

                        pd_mother_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter your Mother Name'
                                }
                            }
                        },
                        pd_mob1: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                },
                                notEmpty: {
                                    message: 'Please enter your Mobile'
                                }
                            }
                        },
                        pd_email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email address is required and cannot be empty'
                                },

                                regexp: {
                                    regexp: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/,
                                    message: 'The email address is not valid'
                                }
                            }
                        },
                        pd_addr: {
                            validators: {
                                     stringLength: {
                                    min: 4,
                                    
                                },
                                notEmpty: {
                                    message: 'Please Enter Your Address'
                                }
                            }
                        },
                        pd_pincode: {
                            validators: {
                                stringLength: {
                                    min: 6,
                                    max: 6,
                                },     
                                notEmpty: {
                                    message: 'Please Enter Your Pincode'
                                }
                            }
                        },
                          pd_city: {
                            validators: {
                                  
                                notEmpty: {
                                    message: 'Please Choose Your City'
                                }
                            }
                        },
                          pd_state: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please Choose Your State'
                                }
                            }
                        },
                        pd_gender : {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please Choose Your Gender'
                                }
                            }
                        },








                    }
                })
        
                .on('success.form.bv', function(e) {
                
                document.getElementById("pd_btn").disabled="false";
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...

                    

                    // Prevent form submission
                    e.preventDefault();
               
                    var pd_fname = $('#pd_fname').val();
                    var pd_lname = $('#pd_lname').val();
                    var pd_dob = $('#pd_dob').val();
                    var pd_father_name = $('#pd_father_name').val();
                    var pd_mother_name = $('#pd_mother_name').val();
                    var pd_gender = $('#pd_gender').val();
                    var pd_mob1 = $('#pd_mob1').val();
                    var pd_mob2 = $('#pd_mob2').val();
                    var pd_email = $('#pd_email').val();
                    var pd_addr = $('#pd_addr').val();
                    var pd_pincode = $('#pd_pincode').val();
                    var pd_city = $('#pd_city').val();
                    var pd_pwd = $('#pd_pwd').val();
                    var pd_cnfrm_pwd = $('#pd_cnfrm_pwd').val();
                    var pd_state = $('#pd_state').val();
                    var pd_btn = $('#pd_btn').val();

                    if (!pd_fname.trim() || !pd_lname.trim() || !pd_dob.trim() || !pd_father_name.trim() || !pd_mother_name.trim() || !pd_gender.trim() || !pd_mob1.trim()  || !pd_email.trim() || !pd_addr.trim() || !pd_pincode.trim() || !pd_city.trim() || !pd_pwd.trim() || !pd_cnfrm_pwd.trim() || !pd_state.trim() || pd_pwd.trim() != pd_cnfrm_pwd.trim()) {
                        alert("All field must be filled out");
                        isValid="false";
                        return false;
                    } else {
                        
                        $.ajax({
                            url: 'do_educ_reg.php',
                            type: 'POST',
                            data: {
                                pd_fname: pd_fname,
                                pd_lname: pd_lname,
                                pd_dob: pd_dob,
                                pd_father_name: pd_father_name,
                                pd_mother_name: pd_mother_name,
                                pd_gender: pd_gender,
                                pd_mob1: pd_mob1,
                                pd_mob2: pd_mob2,
                                pd_email: pd_email,
                                pd_addr: pd_addr,
                                pd_pincode: pd_pincode,
                                pd_city: pd_city,
                                pd_pwd: pd_pwd,
                                pd_cnfrm_pwd: pd_cnfrm_pwd,
                                pd_state: pd_state,
                                pd_btn: pd_btn
                            },
                            success: function(data) {
                                $('#pd_result').html(data);
                            }
                        });
                    }

                    $('#step1form').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    /* $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');*/
                });
        
          $('#step2form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        fd_fathr_occup: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter Occupation'
                                }
                            }
                        },

                        fd_fathr_mob: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                },
                                notEmpty: {
                                    message: 'Please enter your Mobile'
                                }
                            }
                        },
                      
                        fd_fathr_desig: {
                            validators: {
                                     
                                notEmpty: {
                                    message: 'Enter Designation'
                                }
                            }
                        },
                       
                          fd_mothr_occup: {
                            validators: {
                                  
                                notEmpty: {
                                    message: 'Please Enter Occupation'
                                }
                            }
                        },
                          fd_mothr_mob: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                },
                                notEmpty: {
                                    message: 'Please enter your Mobile'
                                }
                            }
                        },
                      
                          fd_religion: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please Choose Religion'
                                }
                            }
                        },








                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...



                    // Prevent form submission
                    e.preventDefault();
                document.getElementById("fd_btn").disabled="false";
                    var fd_fathr_occup = $('#fd_fathr_occup').val();
                var fd_fathr_telephone = $('#fd_fathr_telephone').val();
                var fd_fathr_mob = $('#fd_fathr_mob').val();
                var fd_fathr_desig = $('#fd_fathr_desig').val();
                var fd_fathr_income = $('#fd_fathr_income').val();
                var fd_fathr_pan = $('#fd_fathr_pan').val();
                var fd_mothr_occup = $('#fd_mothr_occup').val();
                var fd_mothr_telephone = $('#fd_mothr_telephone').val();
                var fd_mothr_mob = $('#fd_mothr_mob').val();
                var fd_religion = $('#fd_religion').val();
                var fd_btn = $('#fd_btn').val();

                if (!fd_fathr_occup.trim() ||!fd_fathr_mob.trim() || !fd_fathr_desig.trim()|| !fd_mothr_occup.trim() ||  !fd_mothr_mob.trim() || !fd_religion.trim()) {
                    alert("All field must be filled out");
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            fd_fathr_occup: fd_fathr_occup,
                            fd_fathr_telephone: fd_fathr_telephone,
                            fd_fathr_mob: fd_fathr_mob,
                            fd_fathr_desig: fd_fathr_desig,
                            fd_fathr_income: fd_fathr_income,
                            fd_fathr_pan: fd_fathr_pan,
                            fd_mothr_occup: fd_mothr_occup,
                            fd_mothr_telephone: fd_mothr_telephone,
                            fd_mothr_mob: fd_mothr_mob,
                            fd_religion: fd_religion,
                            fd_btn: fd_btn
                        },
                        success: function(data) {
                            $('#fd_result').html(data);
                        }
                    });
                  }

                    $('#step2form').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    /* $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');*/
                });
          $('#step3form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        ed_ssc_board: {
                            validators: {
                              
                                notEmpty: {
                                    message: 'Please Choose your Board'
                                }
                            }
                        },

                        ed_ssc_name: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter School Name'
                                }
                            }
                        },

                        ed_ssc_roll: {
                            validators: {

                                notEmpty: {
                                    message: 'Please enter your Roll No '
                                }
                            }
                        },

                        ed_ssc_year: {
                            validators: {
                                stringLength: {
                                    min: 4,
                                    max:4
                                },
                                notEmpty: {
                                    message: 'Please enter Year Of Completion'
                                }
                            }
                        },

                        ed_ssc_percent: {
                            validators: {
                                notEmpty: {
                                    message: 'Please enter your SSC Percentage'
                                }
                            }
                        },
                       
                        ed_hsc_board: {
                            validators: {
                              
                                notEmpty: {
                                    message: 'Please Choose your Board'
                                }
                            }
                        },

                        ed_hsc_name: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter School Name'
                                }
                            }
                        },

                        ed_hsc_roll: {
                            validators: {

                                notEmpty: {
                                    message: 'Please enter your Roll No '
                                }
                            }
                        },

                        ed_hsc_year: {
                            validators: {
                                stringLength: {
                                    min: 4,
                                    max:4
                                },
                                notEmpty: {
                                    message: 'Please enter Year Of Completion'
                                }
                            }
                        },

                        ed_hsc_percent: {
                            validators: {
                                notEmpty: {
                                    message: 'Please enter your HSC Percentage'
                                }
                            }
                        },
                        
                        ed_gd_university: {
                            validators: {
                              
                                notEmpty: {
                                    message: 'Please Choose your University'
                                }
                            }
                        },

                        ed_gd_inst: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter Name'
                                }
                            }
                        },

                        ed_gd_degree_name: {
                            validators: {

                                notEmpty: {
                                    message: 'Please enter your Degree '
                                }
                            }
                        },

                        ed_gd_year: {
                            validators: {
                                stringLength: {
                                    min: 4,
                                    max:4
                                },
                                notEmpty: {
                                    message: 'Please enter Year Of Completion'
                                }
                            }
                        },

                        ed_gd_percent: {
                            validators: {
                                notEmpty: {
                                    message: 'Please enter your Percentage'
                                }
                            }
                        },

                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...



                    // Prevent form submission
                    e.preventDefault();
                document.getElementById("ed_btn").disabled="false";
                    var ed_ssc_board = $('#ed_ssc_board').val();
                var ed_ssc_name = $('#ed_ssc_name').val();
                var ed_ssc_roll = $('#ed_ssc_roll').val();
                var ed_ssc_year = $('#ed_ssc_year').val();
                var ed_ssc_percent = $('#ed_ssc_percent').val();
                var ed_ssc_rank = $('#ed_ssc_rank').val();

                var ed_hsc_board = $('#ed_hsc_board').val();
                var ed_hsc_name = $('#ed_hsc_name').val();
                var ed_hsc_roll = $('#ed_hsc_roll').val();
                var ed_hsc_year = $('#ed_hsc_year').val();
                var ed_hsc_percent = $('#ed_hsc_percent').val();
                var ed_hsc_rank = $('#ed_hsc_rank').val();

                var ed_gd_university = $('#ed_gd_university').val();
                var ed_gd_inst = $('#ed_gd_inst').val();
                var ed_gd_degree_name = $('#ed_gd_degree_name').val();
                var ed_gd_year = $('#ed_gd_year').val();
                var ed_gd_percent = $('#ed_gd_percent').val();
                var ed_gd_rank = $('#ed_gd_rank').val();
                var ed_gd_appear_final = $('#ed_gd_appear_final:checked').val();

                var ed_pg_university = $('#ed_pg_university').val();
                var ed_pg_inst = $('#ed_pg_inst').val();
                var ed_pg_degree_name = $('#ed_pg_degree_name').val();
                var ed_pg_year = $('#ed_pg_year').val();
                var ed_pg_percent = $('#ed_pg_percent').val();
                var ed_pg_rank = $('#ed_pg_rank').val();
                var ed_pg_menu = $('#ed_pg_menu:checked').val();

                var ed_prof_cert_name = $('#ed_prof_cert_name').val();
                var ed_prof_cert_year = $('#ed_prof_cert_year').val();
                var ed_prof_cert_percent = $('#ed_prof_cert_percent').val();
                var ed_prof_cert_rank = $('#ed_prof_cert_rank').val();
                // var ed_prof_ssc_marksheet=$('#ed_prof_ssc_marksheet').val();
                // var ed_prof_hsc_marksheet=$('#ed_prof_hsc_marksheet').val();
                // var ed_prof_gd_marksheet=$('#ed_prof_gd_marksheet').val();
                // var ed_prof_pg_marksheet=$('#ed_prof_pg_marksheet').val();
                // var ed_prof_other_cert=$('#ed_prof_other_cert').val();
                // var ed_prof_scan_sign=$('#ed_prof_scan_sign').val();

                var ed_btn = $('#ed_btn').val();

                if (!ed_ssc_board.trim() || !ed_ssc_name.trim() || !ed_ssc_roll.trim() || !ed_ssc_year.trim() || !ed_ssc_percent.trim() || !ed_hsc_board.trim() || !ed_hsc_name.trim() || !ed_hsc_roll.trim() || !ed_hsc_year.trim() || !ed_hsc_percent.trim()|| !ed_gd_university.trim() || !ed_gd_inst.trim() || !ed_gd_degree_name.trim() || !ed_gd_year.trim() || !ed_gd_percent.trim() ) {
                    alert("All field must be filled out");
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            ed_ssc_board: ed_ssc_board,
                            ed_ssc_name: ed_ssc_name,
                            ed_ssc_roll: ed_ssc_roll,
                            ed_ssc_year: ed_ssc_year,
                            ed_ssc_percent: ed_ssc_percent,
                            ed_ssc_rank: ed_ssc_rank,
                            ed_hsc_board: ed_hsc_board,
                            ed_hsc_name: ed_hsc_name,
                            ed_hsc_roll: ed_hsc_roll,
                            ed_hsc_year: ed_hsc_year,
                            ed_hsc_percent: ed_hsc_percent,
                            ed_hsc_rank: ed_hsc_rank,
                            ed_gd_university: ed_gd_university,
                            ed_gd_inst: ed_gd_inst,
                            ed_gd_degree_name: ed_gd_degree_name,
                            ed_gd_year: ed_gd_year,
                            ed_gd_percent: ed_gd_percent,
                            ed_gd_rank: ed_gd_rank,
                            ed_gd_appear_final: ed_gd_appear_final,
                            ed_pg_university: ed_pg_university,
                            ed_pg_inst: ed_pg_inst,
                            ed_pg_degree_name: ed_pg_degree_name,
                            ed_pg_year: ed_pg_year,
                            ed_pg_percent: ed_pg_percent,
                            ed_pg_rank: ed_pg_rank,
                            ed_pg_menu: ed_pg_menu,
                            ed_prof_cert_name: ed_prof_cert_name,
                            ed_prof_cert_year: ed_prof_cert_year,
                            ed_prof_cert_percent: ed_prof_cert_percent,
                            ed_prof_cert_rank: ed_prof_cert_rank,
                            ed_btn: ed_btn
                        },
                        success: function(data) {
                            $('#ed_result').html(data);
                        }
                    });
                }

                    
                    $('#step3form').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    /* $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');*/
                });
        
          $('#step4form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        cd_cm_from: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please Select One'
                                }
                            }
                        },
                         cd_schedule: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please Select One'
                                }
                            }
                        },
                         cd_exam_center: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please Select One'
                                }
                            }
                        },

                      
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...



                    // Prevent form submission
                    e.preventDefault();
                document.getElementById("cd_btn").disabled="false";
                     var cd_get_facility = $('#cd_get_facility:checked').val();
                var checkValues = $('input[name=cd_cm_from]:checked').map(function() {
                    return $(this).val();
                }).get();
                var cd_lang = $('#cd_lang:checked').val();
                var cd_schedule = $('#cd_schedule').val();
                var cd_exam_center = $('#cd_exam_center').val();
                var cd_btn = $('#cd_btn').val();


                $.ajax({
                    url: 'do_educ_reg.php',
                    type: 'POST',
                    data: {
                        cd_get_facility: cd_get_facility,
                        checkValues: checkValues,
                        cd_lang: cd_lang,
                        cd_schedule: cd_schedule,
                        cd_exam_center: cd_exam_center,
                        cd_btn: cd_btn
                    },
                    success: function(data) {
                        $('#cd_result').html(data);
                    }
                });
                    

                    $('#step4form').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    /* $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');*/
                });
        
          $('#step5form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        
                          es_select_exam: {
                            validators: {
                               
                                notEmpty: {
                                    message: 'Please Choose One'
                                }
                            }
                        },
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...



                    // Prevent form submission
                    e.preventDefault();
                document.getElementById("es_btn").disabled="false";
                   var checkValues = $('input[name=es_select_exam]:checked').map(function() {
                    return $(this).val();
                }).get();
                var es_upsc_exam = $('#es_upsc_exam:checked').val();
                var es_upsc_prel_year = $('#es_upsc_prel_year').val();
                var es_upsc_op_sub = $('#es_upsc_op_sub').val();
                var es_upsc_coach_sub = $('#es_upsc_coach_sub').val();
                // var es_upsc_lang=$('#es_upsc_lang').val();
                var es_upsc_lang = $('#es_upsc_lang:checked').val();
                // var es_state_exam=$('#es_state_exam').val();
                var es_state_exam = $('#es_state_exam:checked').val();
                var es_state_prel_year = $('#es_state_prel_year').val();
                var es_state_prel_state = $('#es_state_prel_state').val();
                var es_state_op_sub = $('#es_state_op_sub').val();
                var es_state_coach_sub = $('#es_state_coach_sub').val();
                //var es_state_lang=$('#es_state_lang').val();
                var es_state_lang = $('#es_state_lang:checked').val();
                var es_past_attn_upsc = $('#es_past_attn_upsc').val();
                var es_btn = $('#es_btn').val();


                $.ajax({
                    url: 'do_educ_reg.php',
                    type: 'POST',
                    data: {
                        checkValues: checkValues,
                        es_upsc_exam: es_upsc_exam,
                        es_upsc_prel_year: es_upsc_prel_year,
                        es_upsc_op_sub: es_upsc_op_sub,
                        es_upsc_coach_sub: es_upsc_coach_sub,
                        es_upsc_lang: es_upsc_lang,
                        es_state_exam: es_state_exam,
                        es_state_prel_year: es_state_prel_year,
                        es_state_prel_state: es_state_prel_state,
                        es_state_op_sub: es_state_op_sub,
                        es_state_coach_sub: es_state_coach_sub,
                        es_state_lang: es_state_lang,
                        es_past_attn_upsc: es_past_attn_upsc,
                        es_btn: es_btn
                    },
                    success: function(data) {
                        //$('#es_result').html(data);
                        $('#other_result').html(data);
                    }
                });

                    $('#step5form').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    /* $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');*/
                });
        
         $('#step7form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        ref1_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter Name'
                                }
                            }
                        },

                        ref1_addr: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter Reference Address'
                                }
                            }
                        },

                        ref1_city: {
                            validators: {

                                notEmpty: {
                                    message: 'Please enter Reference City '
                                }
                            }
                        },

                        ref1_mob: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please enter Reference Mobile '
                                }
                            }
                        },

                     
                        ref1_email: {
                            validators: {
                                notEmpty: {
                                    message: 'Please Enter Reference 2 Email'
                                },

                                regexp: {
                                    regexp: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/,
                                    message: 'The email address is not valid'
                                }
                            }
                        },
                         accept: {
                            validators: {
                                notEmpty: {
                                    message: 'Please Accept Terms And Conditions'
                                }

                               
                            }
                        },
                     







                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...



                    // Prevent form submission
                    e.preventDefault();
                document.getElementById("ref_btn").disabled="false";
                        var ref1_name = $('#ref1_name').val();
                var ref1_addr = $('#ref1_addr').val();
                var ref1_city = $('#ref1_city').val();
                var ref1_mob = $('#ref1_mob').val();
                var ref1_telephone = $('#ref1_telephone').val();
                var ref1_email = $('#ref1_email').val();
                var ref2_name = $('#ref2_name').val();
                var ref2_addr = $('#ref2_addr').val();
                var ref2_city = $('#ref2_city').val();
                var ref2_mob = $('#ref2_mob').val();
                var ref2_telephone = $('#ref2_telephone').val();
                var ref2_email = $('#ref2_email').val();
                var ref_btn = $('#ref_btn').val();
             var check=$('#accept').val();

                if (!ref1_name.trim() || !ref1_addr.trim() || !ref1_city.trim() || !ref1_mob.trim() ||  !ref1_email.trim() ||!check) {
                    alert("All Field Must Be Filled Out.");
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            ref1_name: ref1_name,
                            ref1_addr: ref1_addr,
                            ref1_city: ref1_city,
                            ref1_mob: ref1_mob,
                            ref1_telephone: ref1_telephone,
                            ref1_email: ref1_email,
                            ref2_name: ref2_name,
                            ref2_addr: ref2_addr,
                            ref2_city: ref2_city,
                            ref2_mob: ref2_mob,
                            ref2_telephone: ref2_telephone,
                            ref2_email: ref2_email,
                            ref_btn: ref_btn
                        },
                        success: function(data) {
                            $('#ref_result').html(data);
                        }
                    });
                }                    

                    $('#step7form').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    /* $.post($form.attr('action'), $form.serialize(), function(result) {
                         console.log(result);
                     }, 'json');*/
                });

    </script>


    <script type="text/javascript">
        //SHOW DIV ACCORDING CHECK UPSC AND STATE
        $('#es_select_exam').change(function() {
            $('#upsc_section').slideToggle();
        });

        $('.es_select_state').change(function() {
            $('#state_section').slideToggle();
        });

        // I Agree all terms n condition
        $('.accept').change(function() {
            $('.cet_que').slideToggle();
        })

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
/*document.getElementById("pd_btn").disabled="true";
document.getElementById("fd_btn").disabled="true";
document.getElementById("ed_btn").disabled="true";
document.getElementById("cd_btn").disabled="true";
document.getElementById("es_btn").disabled="true";

document.getElementById("ref_btn").disabled="true";*/
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn1 = $('#pd_btn'),
            allNextBtn2 = $('#fd_btn'),
            allNextBtn3 = $('#ed_btn'),
            allNextBtn4 = $('#cd_btn'),
            allNextBtn5 = $('#es_btn'),
            allNextBtn6 = $('#other_btn'),
            allNextBtn7 = $('#ref_btn');

            allWells.hide();

            navListItems.click(function(e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);

                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });

           
            allNextBtn1.click(function() {
                    var pd_fname = $('#pd_fname').val();
                    var pd_lname = $('#pd_lname').val();
                    var pd_dob = $('#pd_dob').val();
                    var pd_father_name = $('#pd_father_name').val();
                    var pd_mother_name = $('#pd_mother_name').val();
                    var pd_gender = $('#pd_gender').val();
                    var pd_mob1 = $('#pd_mob1').val();
                    var pd_email = $('#pd_email').val();
                    var pd_addr = $('#pd_addr').val();
                    var pd_pincode = $('#pd_pincode').val();
                    var pd_city = $('#pd_city').val();
                    var pd_pwd = $('#pd_pwd').val();
                    var pd_cnfrm_pwd = $('#pd_cnfrm_pwd').val();
                    var pd_state = $('#pd_state').val();
                 var emailcheck = $('#emailcheck').val();
                 
                
                
                
                
                  var  nextStepWizard1 = $('div.setup-panel div a[href="#step-2"]'),
                    //curInputs = curStep.find("form[id='step1form]"),
                    isValid = true;

                $(".form-group").removeClass("has-error");

                if (!pd_fname.trim() || !pd_lname.trim() || !pd_dob.trim() || !pd_father_name.trim() || !pd_mother_name.trim() || !pd_gender.trim() || !pd_mob1.trim()  || !pd_email.trim() || !pd_addr.trim() || !pd_pincode.trim() || !pd_city.trim() || !pd_pwd.trim() || !pd_cnfrm_pwd.trim() || !pd_state.trim() || pd_pwd.trim() != pd_cnfrm_pwd.trim()||emailcheck=='1' ) {
                       
                    if(pd_pwd.trim() != pd_cnfrm_pwd.trim())
                        {
                            alert("Password Dont Match");
                        
                        }
                    if(emailcheck=='1'){
                        alert("Email Exists Enter Another One");
                    }
                    
                    isValid=false;
                        
                    } 
               /*  for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
 
                if (isValid)
                    nextStepWizard1.removeAttr('disabled').trigger('click');
            });

              allNextBtn2.click(function() {
                   
                 var fd_fathr_occup = $('#fd_fathr_occup').val();
                var fd_fathr_mob = $('#fd_fathr_mob').val();
                var fd_fathr_desig = $('#fd_fathr_desig').val();
                var fd_mothr_occup = $('#fd_mothr_occup').val();
                var fd_mothr_mob = $('#fd_mothr_mob').val();
                var fd_religion = $('#fd_religion').val();
              
                
                
                
               
                  var  nextStepWizard2 = $('div.setup-panel div a[href="#step-3"]'),
                    //curInputs = curStep.find("form[id='step1form]"),
                    isValid = true;

                $(".form-group").removeClass("has-error");

                if (!fd_fathr_occup.trim() ||!fd_fathr_mob.trim() || !fd_fathr_desig.trim()|| !fd_mothr_occup.trim() ||  !fd_mothr_mob.trim() || !fd_religion.trim() ) {
                       
                        isValid=false;
                        
                    } 
               /*  for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
 
                if (isValid)
                    nextStepWizard2.removeAttr('disabled').trigger('click');
            });
            
              allNextBtn3.click(function() {
                   
                  var ed_ssc_board = $('#ed_ssc_board').val();
                var ed_ssc_name = $('#ed_ssc_name').val();
                var ed_ssc_roll = $('#ed_ssc_roll').val();
                var ed_ssc_year = $('#ed_ssc_year').val();
                var ed_ssc_percent = $('#ed_ssc_percent').val();
                var ed_hsc_board = $('#ed_hsc_board').val();
                var ed_hsc_name = $('#ed_hsc_name').val();
                var ed_hsc_roll = $('#ed_hsc_roll').val();
                var ed_hsc_year = $('#ed_hsc_year').val();
                var ed_hsc_percent = $('#ed_hsc_percent').val();
               var ed_gd_university = $('#ed_gd_university').val();
                var ed_gd_inst = $('#ed_gd_inst').val();
                var ed_gd_degree_name = $('#ed_gd_degree_name').val();
                var ed_gd_year = $('#ed_gd_year').val();
                var ed_gd_percent = $('#ed_gd_percent').val();
                var ed_gd_rank = $('#ed_gd_rank').val();
               
                
                
                
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#step-4"]'),
                    //curInputs = curStep.find("form[id='step1form]"),
                    isValid = true;

                $(".form-group").removeClass("has-error");

                if (!ed_ssc_board.trim() || !ed_ssc_name.trim() || !ed_ssc_roll.trim() || !ed_ssc_year.trim() || !ed_ssc_percent.trim() || !ed_hsc_board.trim() || !ed_hsc_name.trim() || !ed_hsc_roll.trim() || !ed_hsc_year.trim() || !ed_hsc_percent.trim()|| !ed_gd_university.trim() || !ed_gd_inst.trim() || !ed_gd_degree_name.trim() || !ed_gd_year.trim() || !ed_gd_percent.trim() ) {
                       
                        isValid=false;
                        
                    } 
               /*  for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
 
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

              allNextBtn4.click(function() {
                 
                 var checkValues = $('input[name=cd_cm_from]:checked').map(function() {
                    return $(this).val();
                }).get();
                var cd_lang = $('#cd_lang:checked').val();    
                var cd_exam_center = $('#cd_exam_center').val();
                var examtype = $('#examtype').val();
                
                
                
                
                  if(examtype=="BEAT"){ 
     nextStepWizard = $('div.setup-panel div a[href="#step-6"]');
                   }
     else{
                    
                    nextStepWizard = $('div.setup-panel div a[href="#step-5"]');
     }
                    //curInputs = curStep.find("form[id='step1form]"),
                   var isValid = true;

                $(".form-group").removeClass("has-error");

                if ( !cd_lang.trim()|| !cd_exam_center.trim() ) {
                       
                        isValid=false;
                        
                    } 
               /*  for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
 
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

              allNextBtn5.click(function() {
                  
                 var checkValues2 = $('input[name=es_select_exam]:checked').length;
                
                
                
                
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#step-6"]'),
                    //curInputs = curStep.find("form[id='step1form]"),
                    isValid = true;

                $(".form-group").removeClass("has-error");

                if (checkValues2==0) {
                       alert("Please Choose Exam");
                        isValid=false;
                        
                    } 
               /*  for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
 
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

              allNextBtn6.click(function() {
                   
                
                
                
                    nextStepWizard = $('div.setup-panel div a[href="#step-7"]'),
                    //curInputs = curStep.find("form[id='step1form]"),
                    isValid = true;

                $(".form-group").removeClass("has-error");

                
               /*  for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
 
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });

              allNextBtn7.click(function() {
            
                 var ref1_name = $('#ref1_name').val();
                var ref1_addr = $('#ref1_addr').val();
                var ref1_city = $('#ref1_city').val();
                var ref1_mob = $('#ref1_mob').val();
                var ref1_email = $('#ref1_email').val();
                var checkValues3 = $('input[name=accept]:checked').length; 
                
            
                    //curInputs = curStep.find("form[id='step1form]"),
                    var isValid = true;

                $(".form-group").removeClass("has-error");

                if (!ref1_name.trim() || !ref1_addr.trim() || !ref1_city.trim() || !ref1_mob.trim() ||  !ref1_email.trim()||checkValues3==0) {
                    
                    if(checkValues3==0)
                        {
                            alert("Please Accept Terms And Conditions");
                        }
                       
                        isValid=false;
                        
                    } 
               /*  for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }*/
 
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });


            $('div.setup-panel div a.btn-primary').trigger('click');
        });

    </script>
    <script type="text/javascript">
        // function get_check_value() {
        //        var c_value = [];
        //        $('input[name="cd_cm_from"]:checked').each(function () {
        //            c_value.push(this.value);
        //        });
        //        //return c_value.join(',');
        //    }
        $(document).ready(function() {
/*

            $('#pd_btn').click(function() {
                var pd_fname = $('#pd_fname').val();
                var pd_lname = $('#pd_lname').val();
                var pd_dob = $('#pd_dob').val();
                var pd_father_name = $('#pd_father_name').val();
                var pd_mother_name = $('#pd_mother_name').val();
                var pd_gender = $('#pd_gender').val();
                var pd_mob1 = $('#pd_mob1').val();
                var pd_mob2 = $('#pd_mob2').val();
                var pd_email = $('#pd_email').val();
                var pd_addr = $('#pd_addr').val();
                var pd_pincode = $('#pd_pincode').val();
                var pd_city = $('#pd_city').val();
                var pd_pwd = $('#pd_pwd').val();
                var pd_cnfrm_pwd = $('#pd_cnfrm_pwd').val();
                var pd_state = $('#pd_state').val();
                var pd_btn = $('#pd_btn').val();

                if (!pd_fname.trim() || !pd_lname.trim() || !pd_dob.trim() || !pd_father_name.trim() || !pd_mother_name.trim() || !pd_gender.trim() || !pd_mob1.trim() || !pd_mob2.trim() || !pd_email.trim() || !pd_addr.trim() || !pd_pincode.trim() || !pd_city.trim() || !pd_pwd.trim() || !pd_cnfrm_pwd.trim() || !pd_state.trim() || pd_pwd.trim() != pd_cnfrm_pwd.trim()) {
                    alert("All field must be filled out");
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            pd_fname: pd_fname,
                            pd_lname: pd_lname,
                            pd_dob: pd_dob,
                            pd_father_name: pd_father_name,
                            pd_mother_name: pd_mother_name,
                            pd_gender: pd_gender,
                            pd_mob1: pd_mob1,
                            pd_mob2: pd_mob2,
                            pd_email: pd_email,
                            pd_addr: pd_addr,
                            pd_pincode: pd_pincode,
                            pd_city: pd_city,
                            pd_pwd: pd_pwd,
                            pd_cnfrm_pwd: pd_cnfrm_pwd,
                            pd_state: pd_state,
                            pd_btn: pd_btn
                        },
                        success: function(data) {
                            $('#pd_result').html(data);
                        }
                    });
                }
            });

            $('#fd_btn').click(function() {
                var fd_fathr_occup = $('#fd_fathr_occup').val();
                var fd_fathr_telephone = $('#fd_fathr_telephone').val();
                var fd_fathr_mob = $('#fd_fathr_mob').val();
                var fd_fathr_desig = $('#fd_fathr_desig').val();
                var fd_fathr_income = $('#fd_fathr_income').val();
                var fd_fathr_pan = $('#fd_fathr_pan').val();
                var fd_mothr_occup = $('#fd_mothr_occup').val();
                var fd_mothr_telephone = $('#fd_mothr_telephone').val();
                var fd_mothr_mob = $('#fd_mothr_mob').val();
                var fd_religion = $('#fd_religion').val();
                var fd_btn = $('#fd_btn').val();

                if (!fd_fathr_occup.trim() || !fd_fathr_telephone.trim() || !fd_fathr_mob.trim() || !fd_fathr_desig.trim() || !fd_fathr_income.trim() || !fd_fathr_pan.trim() || !fd_mothr_occup.trim() || !fd_mothr_telephone.trim() || !fd_mothr_mob.trim() || !fd_religion.trim()) {
                    alert("All field must be filled out");
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            fd_fathr_occup: fd_fathr_occup,
                            fd_fathr_telephone: fd_fathr_telephone,
                            fd_fathr_mob: fd_fathr_mob,
                            fd_fathr_desig: fd_fathr_desig,
                            fd_fathr_income: fd_fathr_income,
                            fd_fathr_pan: fd_fathr_pan,
                            fd_mothr_occup: fd_mothr_occup,
                            fd_mothr_telephone: fd_mothr_telephone,
                            fd_mothr_mob: fd_mothr_mob,
                            fd_religion: fd_religion,
                            fd_btn: fd_btn
                        },
                        success: function(data) {
                            $('#fd_result').html(data);
                        }
                    });
                }
            });

            $('#ed_btn').click(function() {
                var ed_ssc_board = $('#ed_ssc_board').val();
                var ed_ssc_name = $('#ed_ssc_name').val();
                var ed_ssc_roll = $('#ed_ssc_roll').val();
                var ed_ssc_year = $('#ed_ssc_year').val();
                var ed_ssc_percent = $('#ed_ssc_percent').val();
                var ed_ssc_rank = $('#ed_ssc_rank').val();

                var ed_hsc_board = $('#ed_hsc_board').val();
                var ed_hsc_name = $('#ed_hsc_name').val();
                var ed_hsc_roll = $('#ed_hsc_roll').val();
                var ed_hsc_year = $('#ed_hsc_year').val();
                var ed_hsc_percent = $('#ed_hsc_percent').val();
                var ed_hsc_rank = $('#ed_hsc_rank').val();

                var ed_gd_university = $('#ed_gd_university').val();
                var ed_gd_inst = $('#ed_gd_inst').val();
                var ed_gd_degree_name = $('#ed_gd_degree_name').val();
                var ed_gd_year = $('#ed_gd_year').val();
                var ed_gd_percent = $('#ed_gd_percent').val();
                var ed_gd_rank = $('#ed_gd_rank').val();
                var ed_gd_appear_final = $('#ed_gd_appear_final:checked').val();

                var ed_pg_university = $('#ed_pg_university').val();
                var ed_pg_inst = $('#ed_pg_inst').val();
                var ed_pg_degree_name = $('#ed_pg_degree_name').val();
                var ed_pg_year = $('#ed_pg_year').val();
                var ed_pg_percent = $('#ed_pg_percent').val();
                var ed_pg_rank = $('#ed_pg_rank').val();
                var ed_pg_menu = $('#ed_pg_menu:checked').val();

                var ed_prof_cert_name = $('#ed_prof_cert_name').val();
                var ed_prof_cert_year = $('#ed_prof_cert_year').val();
                var ed_prof_cert_percent = $('#ed_prof_cert_percent').val();
                var ed_prof_cert_rank = $('#ed_prof_cert_rank').val();
                // var ed_prof_ssc_marksheet=$('#ed_prof_ssc_marksheet').val();
                // var ed_prof_hsc_marksheet=$('#ed_prof_hsc_marksheet').val();
                // var ed_prof_gd_marksheet=$('#ed_prof_gd_marksheet').val();
                // var ed_prof_pg_marksheet=$('#ed_prof_pg_marksheet').val();
                // var ed_prof_other_cert=$('#ed_prof_other_cert').val();
                // var ed_prof_scan_sign=$('#ed_prof_scan_sign').val();

                var ed_btn = $('#ed_btn').val();

                if (!ed_ssc_board.trim() || !ed_ssc_name.trim() || !ed_ssc_roll.trim() || !ed_ssc_year.trim() || !ed_ssc_percent.trim() || !ed_ssc_rank.trim() || !ed_hsc_board.trim() || !ed_hsc_name.trim() || !ed_hsc_roll.trim() || !ed_hsc_year.trim() || !ed_hsc_percent.trim() || !ed_hsc_rank.trim() || !ed_gd_university.trim() || !ed_gd_inst.trim() || !ed_gd_degree_name.trim() || !ed_gd_year.trim() || !ed_gd_percent.trim() || !ed_gd_rank.trim() || !ed_gd_appear_final.trim() || !ed_pg_university.trim() || !ed_pg_inst.trim() || !ed_pg_degree_name.trim() || !ed_pg_year.trim() || !ed_pg_percent.trim() || !ed_pg_rank.trim() || !ed_pg_menu.trim() || !ed_prof_cert_name.trim() || !ed_prof_cert_year.trim() || !ed_prof_cert_percent.trim() || !ed_prof_cert_rank.trim()) {
                    alert("All field must be filled out");
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            ed_ssc_board: ed_ssc_board,
                            ed_ssc_name: ed_ssc_name,
                            ed_ssc_roll: ed_ssc_roll,
                            ed_ssc_year: ed_ssc_year,
                            ed_ssc_percent: ed_ssc_percent,
                            ed_ssc_rank: ed_ssc_rank,
                            ed_hsc_board: ed_hsc_board,
                            ed_hsc_name: ed_hsc_name,
                            ed_hsc_roll: ed_hsc_roll,
                            ed_hsc_year: ed_hsc_year,
                            ed_hsc_percent: ed_hsc_percent,
                            ed_hsc_rank: ed_hsc_rank,
                            ed_gd_university: ed_gd_university,
                            ed_gd_inst: ed_gd_inst,
                            ed_gd_degree_name: ed_gd_degree_name,
                            ed_gd_year: ed_gd_year,
                            ed_gd_percent: ed_gd_percent,
                            ed_gd_rank: ed_gd_rank,
                            ed_gd_appear_final: ed_gd_appear_final,
                            ed_pg_university: ed_pg_university,
                            ed_pg_inst: ed_pg_inst,
                            ed_pg_degree_name: ed_pg_degree_name,
                            ed_pg_year: ed_pg_year,
                            ed_pg_percent: ed_pg_percent,
                            ed_pg_rank: ed_pg_rank,
                            ed_pg_menu: ed_pg_menu,
                            ed_prof_cert_name: ed_prof_cert_name,
                            ed_prof_cert_year: ed_prof_cert_year,
                            ed_prof_cert_percent: ed_prof_cert_percent,
                            ed_prof_cert_rank: ed_prof_cert_rank,
                            ed_btn: ed_btn
                        },
                        success: function(data) {
                            $('#ed_result').html(data);
                        }
                    });
                }
            });
*/

         /*   $('#cd_btn').click(function() {
                //var cd_get_facility=$('#cd_get_facility').val();
                var cd_get_facility = $('#cd_get_facility:checked').val();
                var checkValues = $('input[name=cd_cm_from]:checked').map(function() {
                    return $(this).val();
                }).get();
                var cd_lang = $('#cd_lang:checked').val();
                var cd_schedule = $('#cd_schedule').val();
                var cd_exam_center = $('#cd_exam_center').val();
                var cd_btn = $('#cd_btn').val();


                $.ajax({
                    url: 'do_educ_reg.php',
                    type: 'POST',
                    data: {
                        cd_get_facility: cd_get_facility,
                        checkValues: checkValues,
                        cd_lang: cd_lang,
                        cd_schedule: cd_schedule,
                        cd_exam_center: cd_exam_center,
                        cd_btn: cd_btn
                    },
                    success: function(data) {
                        $('#cd_result').html(data);
                    }
                });

            });

            $('#es_btn').click(function() {
                //var es_select_exam=$('#es_select_exam').val();

                // var es_select_exam = $('input[name=es_select_exam]:checked').map(function()
                //       {
                //           return $(this).val();
                //       }).get();
                // var es_select_exam = $('input[name=es_select_exam]:checked').map(function()
                //            {
                //                return $(this).val();
                //            }).get();

                var checkValues = $('input[name=es_select_exam]:checked').map(function() {
                    return $(this).val();
                }).get();
                var es_upsc_exam = $('#es_upsc_exam:checked').val();
                var es_upsc_prel_year = $('#es_upsc_prel_year').val();
                var es_upsc_op_sub = $('#es_upsc_op_sub').val();
                var es_upsc_coach_sub = $('#es_upsc_coach_sub').val();
                // var es_upsc_lang=$('#es_upsc_lang').val();
                var es_upsc_lang = $('#es_upsc_lang:checked').val();
                // var es_state_exam=$('#es_state_exam').val();
                var es_state_exam = $('#es_state_exam:checked').val();
                var es_state_prel_year = $('#es_state_prel_year').val();
                var es_state_prel_state = $('#es_state_prel_state').val();
                var es_state_op_sub = $('#es_state_op_sub').val();
                var es_state_coach_sub = $('#es_state_coach_sub').val();
                //var es_state_lang=$('#es_state_lang').val();
                var es_state_lang = $('#es_state_lang:checked').val();
                var es_past_attn_upsc = $('#es_past_attn_upsc').val();
                var es_btn = $('#es_btn').val();


                $.ajax({
                    url: 'do_educ_reg.php',
                    type: 'POST',
                    data: {
                        checkValues: checkValues,
                        es_upsc_exam: es_upsc_exam,
                        es_upsc_prel_year: es_upsc_prel_year,
                        es_upsc_op_sub: es_upsc_op_sub,
                        es_upsc_coach_sub: es_upsc_coach_sub,
                        es_upsc_lang: es_upsc_lang,
                        es_state_exam: es_state_exam,
                        es_state_prel_year: es_state_prel_year,
                        es_state_prel_state: es_state_prel_state,
                        es_state_op_sub: es_state_op_sub,
                        es_state_coach_sub: es_state_coach_sub,
                        es_state_lang: es_state_lang,
                        es_past_attn_upsc: es_past_attn_upsc,
                        es_btn: es_btn
                    },
                    success: function(data) {
                        //$('#es_result').html(data);
                        $('#other_result').html(data);
                    }
                });

            });*/

            $('#other_btn').click(function() {
                var other_activity = $('#other_activity').val();
                var other_national_level = $('#other_national_level').val();
                var other_year = $('#other_year').val();
                var other_pos = $('#other_pos').val();
                var other_achieve = $('#other_achieve').val();
                var other_hobbies = $('#other_hobbies').val();
                var other_btn = $('#other_btn').val();

                if (!other_activity.trim() || !other_national_level.trim() || !other_year.trim() || !other_pos.trim() || !other_achieve.trim() || !other_hobbies.trim()) {
                    
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            other_activity: other_activity,
                            other_national_level: other_national_level,
                            other_year: other_year,
                            other_pos: other_pos,
                            other_achieve: other_achieve,
                            other_hobbies: other_hobbies,
                            other_btn: other_btn
                        },
                        success: function(data) {
                            $('#other_result').html(data);
                        }
                    });
                }

            });/*
         $('#ref_btn').click(function() {
                var ref1_name = $('#ref1_name').val();
                var ref1_addr = $('#ref1_addr').val();
                var ref1_city = $('#ref1_city').val();
                var ref1_mob = $('#ref1_mob').val();
                var ref1_telephone = $('#ref1_telephone').val();
                var ref1_email = $('#ref1_email').val();
                var ref2_name = $('#ref2_name').val();
                var ref2_addr = $('#ref2_addr').val();
                var ref2_city = $('#ref2_city').val();
                var ref2_mob = $('#ref2_mob').val();
                var ref2_telephone = $('#ref2_telephone').val();
                var ref2_email = $('#ref2_email').val();
                var ref_btn = $('#ref_btn').val();

                if (!ref1_name.trim() || !ref1_addr.trim() || !ref1_city.trim() || !ref1_mob.trim() || !ref1_telephone.trim() || !ref1_email.trim() || !ref2_name.trim() || !ref2_addr.trim() || !ref2_city.trim() || !ref2_mob.trim() || !ref2_telephone.trim() || !ref2_email.trim()) {
                    alert("All Field Must Be Filled Out.");
                    return false;
                } else {
                    $.ajax({
                        url: 'do_educ_reg.php',
                        type: 'POST',
                        data: {
                            ref1_name: ref1_name,
                            ref1_addr: ref1_addr,
                            ref1_city: ref1_city,
                            ref1_mob: ref1_mob,
                            ref1_telephone: ref1_telephone,
                            ref1_email: ref1_email,
                            ref2_name: ref2_name,
                            ref2_addr: ref2_addr,
                            ref2_city: ref2_city,
                            ref2_mob: ref2_mob,
                            ref2_telephone: ref2_telephone,
                            ref2_email: ref2_email,
                            ref_btn: ref_btn
                        },
                        success: function(data) {
                            $('#ref_result').html(data);
                        }
                    });
                }

            });*/
        });

    </script>
<script>
    function getcity(val) {
    $.ajax({
    type: "POST",
    url: "get_city.php",
    data:'sid='+val,
    success: function(data){
        $("#pd_city").html(data);
    }
    });
}
</script>
    <script>
        $('#sandbox-container input').datepicker({}).on('changeDate show', function(e) {
    $('#step1form').bootstrapValidator('revalidateField', 'pd_dob');
            });
    </script>
    <script language="javascript">
        function checkEmail() {

            var email = document.getElementById('pd_email');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email.value)) {
                alert('Please provide a valid email address');
                email.focus;
                return false;
            }
        }

    </script>
