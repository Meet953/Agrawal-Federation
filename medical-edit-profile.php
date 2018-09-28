<?php 
  include 'conn.php';
  session_start();
  $user_id=$_SESSION['user_id'];  
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <!-- <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css"> -->
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
          <?php if($_GET['update'])
                {
                  $id = $_GET['update'];
                  $query = "SELECT * FROM `medical` WHERE med_id='$id'";
                  $result = mysqli_query($conn, $query); 
                  $row = mysqli_fetch_array($result); ?>
          <section>
            <div class="row jm_dash_top">
              <div class="col-md-10 col-md-offset-1">
                <div class="row">
                  <!-- Registration Module -->
                  <div class="col-md-10 col-md-offset-1" id="med_reg_post">
                    <form id="editMedicalProfile" action="do-medical-edit.php" method="post">
                      <div class="row jm_dash_profile">
                        <div class="col-md-10 col-md-offset-1"> 
                          <div class="row">
                            <div class="col-md-9">
                              <h2 class="medical_detail_head jm_dash_profile_head">Posting</h2>
                            </div>
                            <div class="col-md-3">
                              <a href="medical-profile.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
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
                                            <option value="<?php echo $row['med_type']; ?>"><?php echo $row['med_type']; ?></option>
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
                                          <input type="text" class="form-control" placeholder="Medical/Hospital/Doctor Name" id="med_name" name="med_name" value="<?php echo $row['med_name']; ?>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-4 form-group">
                                            <label for="usr">Landmark*</label>
                                          </div>
                                          <?php
                                              $add =  $row['med_addr'];
                                              $lat_long =  $row['lat_long'];
                                              $explode_lat_lon = explode(',', $lat_long);
                                              $lat_long_implode = implode('*', $explode_lat_lon);
                                          ?>
                                          <div class="col-md-8 form-group">
                                            <textarea class="form-control" id="textautocomplete" name="addrr" rows="2" id="comment"><?php echo $add; ?></textarea>
                                            <label style="display: none;" id="lblresult"  name="lblresult"><?php echo $add. '*' . $lat_long_implode ; ?></label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="col-md-4 form-group">
                                            <label for="usr">Address*</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                            <textarea class="form-control " id="med_address" rows="2" name="med_address" placeholder="Enter Address"><?php echo $row['med_land_add']; ?></textarea>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="col-md-4 form-group">
                                          <label for="usr">Pincode *</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                          <input type="text" class="form-control" placeholder="Enter Pincode" id="med_pincode" maxlength="6" minlength="6"  name="med_pincode" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $row['med_pincode']; ?>">
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="col-md-4 form-group">
                                          <label for="usr">Country *</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                          <input type="text" class="form-control" value="<?php echo $row['med_country']; ?>" id="med_country" name="med_country">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="col-md-4 form-group">
                                            <label for="usr">State : *</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                          <input type="text" class="form-control" value="<?php echo $row['med_state']; ?>" id="med_state" name="med_state">
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="col-md-4 form-group">
                                          <label for="usr">City : *</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                          <input type="text" class="form-control" value="<?php echo $row['med_ciy']; ?>" id="med_city" name="med_city">   
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="col-md-4 form-group">
                                          <label for="usr">About Us*</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                          <textarea class="form-control" rows="2" id="med_about"  name="med_about" placeholder="Enter Medical"><?php echo $row['med_about']; ?></textarea>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="col-md-4 form-group">
                                          <label for="usr">Mobile No. *</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                          <input type="text" class="form-control" value="<?php echo $row['med_phone']; ?>" placeholder="Enter Mobile No." id="med_phone"  name="med_phone"  maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
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
                                            <input type="text" class="form-control" placeholder="Enter Education" id="med_educ"  name="med_educ" value="<?php echo $row['med_educ']; ?>">
                                          </div>
                                        </div>
                                          <div class="col-md-6">
                                            <div class="col-md-4 form-group">
                                            <label for="usr">Website*</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" placeholder="Enter Website" id="med_website"  name="med_website" value="<?php echo $row['med_website']; ?>"> 
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-4 form-group">
                                            <label for="usr">Open Time: </label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                            <input type="text" value="<?php echo $row['med_open_time']; ?>" class="form-control" placeholder="Enter Opne Time" id="med_open"  name="med_open">
                                          </div>
                                        </div>
                                          <div class="col-md-6">
                                          <div class="col-md-4 form-group">
                                            <label for="usr">Close Time:</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                            <input type="text" value="<?php echo $row['med_close_time']; ?>" class="form-control" placeholder="Enter Close Time" id="med_close"  name="med_close">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="col-md-4 form-group">
                                            <label for="usr">Medical Image*</label>
                                          </div>
                                          <div class="col-md-8 form-group">
                                          <?php  $med_sess=$_SESSION['user-login'];
                                             $img_val = $row['med_logo'];
                                           ?>
                                          <img src="images/medical/<?php echo $row['med_logo']; ?>" height="150" width="200" id="targetLayer">
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
                                              <input type="text" value="<?php echo $row['med_cont_name']; ?>" class="form-control" placeholder="Contact Person Name" id="med_cont_name"  name="med_cont_name">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="col-md-4 form-group">
                                              <label for="usr">Mobile No.*</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                              <input type="text" value="<?php echo $row['med_cont_phone']; ?>" class="form-control" placeholder="Contact Person Phone"  id="med_cont_phone"  name="med_cont_phone"  maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
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
                                              <input type="text" value="<?php echo $row['med_cont_email']; ?>" class="form-control" placeholder="Contact Person Email"  id="med_cont_email"  name="med_cont_email">
                                             <!--  <span id="med_err_email" style="display: none; color: red;">Invalid Email</span> -->
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="col-md-4 form-group">
                                              <label for="usr">Designation *</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                               <input type="text" value="<?php echo $row['med_cont_desig']; ?>" class="form-control" placeholder="Contact Person Designation"  id="med_cont_desig"  name="med_cont_desig">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="col-md-4 form-group">
                                              <label for="usr">Contact Details *</label>
                                            </div>
                                            <div class="col-md-8 form-group" >
                                              <input type='radio' id='med_cont_secure'  name='med_cont_secure' value='Show' <?php echo $row['med_cont_detail'] == 'Show' ? 'checked' : ''; ?>>&nbsp; Show &nbsp;
                                              <input type='radio'  id='med_cont_secure' name='med_cont_secure' value='Hide' <?php echo $row['med_cont_detail'] == 'Hide' ? 'checked' : ''; ?>>&nbsp; Hide &nbsp;</label>
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
                                              <input type="text" value="<?php echo $row['med_cont_fb']; ?>" class="form-control" placeholder="Enter Facebook Page URL"  id="med_cont_fb"  name="med_cont_fb">
                                            </div>
                                           </div>
                                            <div class="col-md-6">
                                            <div class="col-md-4 form-group">
                                              <label for="usr">Twitter Page URL*</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                              <input type="text" value="<?php echo $row['med_cont_twitter']; ?>" class="form-control" placeholder="Enter Twitter Page URL"  id="med_cont_twitter"  name="med_cont_twitter">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="col-md-4 form-group">
                                              <label for="usr">LinkedIn Page URL*</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                              <input type="text" value="<?php echo $row['med_cont_linkedin']; ?>" class="form-control" placeholder="Enter LinkedIn Page URL"  id="med_cont_linkin"  name="med_cont_linkin">
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
                </div>
              </div>
            </div>
          </section>
          <?php } ?>
        </div>
      </div>
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
$(document).ready(function (e) {
 /* $("#editMedicalProfile").on('submit',(function(e) {
    var med_sess = "<?= $med_sess; ?>";
    var img_val = "<?= $img_val; ?>";
    var user_id = "<?= $user_id; ?>";
    var id = "<?= $id; ?>";
    var lblresult = $('#lblresult').html();
    
    e.preventDefault();
    
    var formData = new FormData(this);
    formData.append('med_sess', med_sess);
    formData.append('img_val', img_val);
    formData.append('user_id', user_id);
    formData.append('id', id);
    formData.append('lblresult', lblresult);
    
    $.ajax({
      url: "do-medical-edit.php",
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
            $('#editMedicalProfile').bootstrapValidator({
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
    var img_val = "<?= $img_val; ?>";
    var user_id = "<?= $user_id; ?>";
    var id = "<?= $id; ?>";
    var lblresult = $('#lblresult').html();
    
    e.preventDefault();
    
    var formData = new FormData(this);
    formData.append('med_sess', med_sess);
    formData.append('img_val', img_val);
    formData.append('user_id', user_id);
    formData.append('id', id);
    formData.append('lblresult', lblresult);

                $.ajax({
                     url: "do-medical-edit.php",
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

                 $('#editMedicalProfile').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);
                    
                  
                    var bv = $form.data('bootstrapValidator');

                 
                });
        });

    </script>
