<?php 
  include 'conn.php';
  session_start();
  if($_GET['id']){
      $prof_id=$_GET['id']; 
  }
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
    $query="select * from user_registration where user_id='$prof_id'";
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
                          <h2 class="medical_detail_head">Update Profile</h2>
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
                        </ul>
                        <div class="tab-content top_tab">
                          <div id="home" class="tab-pane fade in active">

                           <form id="upform" name="upform" method="post">

                            <div class="row">
                            <br>
                              <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                  <label>
                                    <strong>Membership Type :</strong>
                                  </label>
                                </div>
                                <div class="col-md-6">
                                  <label class="col-md-2 radio-inline">
                                  <input  type="radio" name="up_user_membertype" id="up_user_membertype" value="FCP" <?php echo $row['user_membertype'] == 'FCP' ? 'checked' : ''; ?>>FCP
                              </label>
                              <label class="col-md-4 radio-inline">
                                   &nbsp;&nbsp;<input type="radio" name="up_user_membertype" id="up_user_membertype" value='Patron' <?php echo $row['user_membertype'] == 'Patron' ? 'checked' : ''; ?>>Patron
                              </label>
                              <label class="col-md-4 radio-inline">
                                   &nbsp;&nbsp;<input type="radio" name="up_user_membertype" id="up_user_membertype" value="User" <?php echo $row['user_membertype'] == 'User' ? 'checked' : ''; ?>>User
                              </label>
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
                                   <input type="text" class="form-control" value="<?php echo $row[1]; ?>" id="up_user_fname" name="up_user_fname" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."> 
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
                                    <input class="form-control" id="up_user_lname" name="up_user_lname" type="text"  value="<?php echo $row['user_lname']; ?>" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."/> 
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
                                    <textarea class="form-control" rows="3" cols="4" id="up_user_addr1"  name="up_user_addr1" required><?php echo $row['user_addr1']; ?></textarea>
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
                                    <textarea class="form-control" rows="3" cols="4" id="up_user_addr2"  name="up_user_addr2"><?php echo $row['user_addr2']; ?></textarea>
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
                                <input class="form-control" id="up_user_country" name="up_user_country" type="text"  value="<?php echo $row['user_country']; ?>" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."/>
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
                              <input class="form-control" id="up_user_state" name="up_user_state" type="text"  value="<?php echo $row['user_state']; ?>" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."/>
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
                              <input class="form-control" id="up_user_city" name="up_user_city" type="text"  value="<?php echo $row['user_city']; ?>" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."/>
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
                                     <label class="col-md-4 radio-inline">
                                  <input type="radio" name="up_user_gender" id="up_user_gender" value="Male" <?php echo $row['user_gender'] == 'Male' ? 'checked' : ''; ?>>Male
                                </label>
                                <label class="col-md-4 radio-inline">
                                   <input type="radio" name="up_user_gender" id="up_user_gender"  value="Female" <?php echo $row['user_gender'] == 'Female' ? 'checked' : ''; ?>>Female
                                </label>
                                  </div> 
                             </div>
                            </div>
                            <br><br>
                            <div class="row">
                              <center>
                                <button class="btn btn-warning" id="user_prof_edit_btn" name="user_prof_edit_btn">Update</button>
                              </center>
                              <div id="edit_result"></div>
                            </div>
                            </form>
                </div>
                      </div>
                    </div><br>
            </div>
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
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
  <script type="text/javascript">
        $(document).ready(function() {
            $('#upform').bootstrapValidator({
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        up_user_fname: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your First Name'
                                }
                            }
                        },
                        up_user_lname: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your Last Name'
                                }
                            }
                        },
                        up_user_addr1: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please enter your Address'
                                }
                            }
                        },
                        up_user_membertype: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your Member Type'
                                }
                            }
                        },
                        up_user_country: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your Country'
                                }
                            }
                        },
                         up_user_state: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your State'
                                }
                            }
                        },
                        up_user_city: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your City'
                                }
                            }
                        },

                         up_user_gender: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your gender'
                                }
                            }
                        },
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") 
                       var user_membertype=$('#up_user_membertype:checked').val();
      var user_fname=$('#up_user_fname').val();
      var user_lname=$('#up_user_lname').val();

      var user_addr1=$('#up_user_addr1').val();
      var user_addr2=$('#up_user_addr2').val();
      var user_city=$('#up_user_city').val();
      var user_state=$('#up_user_state').val();
      var user_country=$('#up_user_country').val();
      var user_gender=$('#up_user_gender:checked').val();
      var user_prof_edit_btn=$('#up_user_prof_edit_btn').val();
      var user_edit_id="<?= $prof_id; ?>";
                $.ajax({
                   url: "do-up-edit.php",
                    type: "POST",
                     data:{user_membertype:user_membertype, user_fname:user_fname, user_lname:user_lname, user_addr1:user_addr1, user_addr2:user_addr2, user_city:user_city, user_state:user_state, user_country:user_country, user_gender:user_gender, user_prof_edit_btn:user_prof_edit_btn, user_edit_id:user_edit_id},
                  success:function(data)
                  {
                       $('#edit_result').html(data);
                     
                  }
              });
                 $('#upform').data('bootstrapValidator').resetForm();
                    var $form = $(e.target);
                    var bv = $form.data('bootstrapValidator');
                });
        });
    </script>