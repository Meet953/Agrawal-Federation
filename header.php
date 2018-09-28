<div class="header-top sm-text-center header-bg-stl">
  <div class="container">
    <div class="row">
      <div class="col-md-12 JI_header_gap">
        <div class="widget no-border m-0">
          <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
            <li class="m-0 pl-10 pr-10 header_phone"><i class="fa fa-phone text-white"></i><a class="text-white" href="#">&nbsp;000000000</a></li>
            <li class="m-0 pl-10 pr-10 header_mail"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">contact@AF.org</a> </li>
            <li>
                <?php 
                if(isset($_SESSION['user-login']))
                {
                  $var=$_SESSION['user-login'];
                  $query="SELECT * FROM `user_registration` where user_phone='$var' or user_email='$var'";
                  $result=mysqli_query($conn, $query);
                  while($row= mysqli_fetch_array($result)){
                 ?>
                <li class="m-0 pl-10 pr-10"> <a class="text-white" href="#" style="font-size: 15px;">Welcome &nbsp; <?php echo $row[3]; ?></a> </li>
                <?php 
                } }
                else { ?>
                <li class="m-0 pl-10 pr-10">
                  <button class="btn btn-flat btn-colored member_btn login_btn_stl" data-toggle="modal" data-target="#loginModal">Login</button>
            </li>
            <li>
            <li class="m-0 pl-10 pr-10"> 
                  <button class="btn btn-flat btn-colored member_btn signup_stl" data-toggle="modal" data-target="#signupModal">Signup</button>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Login Modal -->
<div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content main_modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span class="login_cross">&times;</span></button>
        <center>
            <h3 class="modal-title login_head">Login</h3>
        </center>
        <div id="login-result"></div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-md-1">
                <button class="btn btn-default user_icon_btn" disabled="disabled"><i class="fa fa-user user_icon" ></i></button>
              </div>
              <div class="col-md-11">
                <input class="form-control" id="login-email" name="login-email" type="text" placeholder="Enter Mobile No. / Email Address" required="required" />  
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-1">
                <button class="btn btn-default pwd_icon_btn" disabled="disabled"><i class="fa fa-key pwd_icon"></i></button>
              </div>
              <div class="col-md-11">
                  <input class="form-control" id="login-pwd" name="login-pwd" type="password" placeholder="Enter Password" required="required"/>  
              </div>
            </div><br>
            <div class="row"> 
              <div class="col-md-4 col-md-offset-4">
                <center>
                  <button type="submit" class="btn btn-default btn-md login_btn" id="login-btn" name="login-btn" data-dismiss="modal">Login</button>
                </center>
              </div>
            </div>
            <div class="row">
              <div class="social-wrap a soc_a_stl">
                  <center>
                    <h5 class="login_or">OR</h5>
                  </center>
                  <div class="col-md-6"> 
                    <button id="facebook" class="login_responsive">Sign in with Facebook
                    </button>
                  </div>
                  <div class="col-md-5"> 
                      <button id="google" class="login_googl_clr login_responsive" >Sign in with google</button>
                  </div>
              </div>
            </div><br>
            <div class="form-group row">
                <div class="col-sm-6 col-md-6">
                  <a href="#" class="create_ac" data-toggle="modal" data-target="#signupModal">Create Account</a>
                </div>
                <div class="col-sm-6 col-md-6">
                  <a href="forgetpassword.php" class="forget_pwd_stl">Forget Password?</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End of Login Modal -->

<!-- Modal For Registration -->
<div class="modal fade" id="signupModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content main_modal">
      <div class="modal-header">
        <button type="button" class="cross_reg close" data-dismiss="modal">&times;</button>
        <div class="alert alert-default reg_alert_info">
          <center>
                      <h3 class="reg_head modal-title">Registration</h3>
          </center>
        </div>
      <div id="reg-result"></div><!-- Result -->
    </div>
    <div class="modal-body">
      <form class=" form-horizontal" action="do-registration.php" method="post" id="user_form" enctype="multipart/form-data" autocomplete="off">
        <div class="form-group">
          <label for="cname" class="control-label col-md-4">
            <b> First Name </b>
            <span class="star-impo required">*</span>
          </label>
          <div class="col-md-7">
            <input class="form-control" id="user_fname" name="user_fname" type="text" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."/> 
          </div>
        </div>
        <div class="form-group ">
          <label for="cname" class="control-label col-md-4"><b> Last Name </b><span class=" star-impo required">*</span></label>
          <div class="col-md-7">
            <input class="form-control" id="user_lname" name="user_lname" type="text" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."/> 
          </div>
        </div>
        <div class="form-group ">
          <label for="cemail" class="control-label col-md-4"><b>E-Mail</b> <span class="star-impo required">*</span></label>
          <div class="col-md-7">
              <input class="form-control" id="user_email"  name="user_email" type="text" required />
              <span id="error_email" style="display: none; color:red;">Invalid Email</span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"><b>Mobile No</b> <span class="star-impo required">*</span>
          </label>
          <div class="col-md-7">
            <input type="text" class="form-control" id="user_phone"  name="user_phone" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
            <span id="mob_span"></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"><b>Address Line 1</b><span class="star-impo required">*</span></label>
          <div class="col-md-7">
            <textarea class="form-control" rows="3" cols="4" id="user_addr1"  name="user_addr1" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"><b>Address Line 2</b></label>
          <div class="col-md-7">
            <textarea class="form-control" rows="3" cols="4" id="user_addr2"  name="user_addr2"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"><b>Country</b><span class="star-impo required">*</span></label>
          <div class="col-md-7">
            <select class="form-control jb_input-box-height" id="Country1" name="Country1" onChange="getState(this.value);">
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
        <div class="form-group">
          <label class="col-md-4 control-label"><b>State</b></label>
          <div class="col-md-7">
            <select class="form-control jb_input-box-height" id="State1" name="State1" onChange="getcity(this.value);">
            <option value="">State</option>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"><b>City</b></label>
          <div class="col-md-7">
            <select class="form-control jb_input-box-height" id="city1" name="city1" onchange="showUser(this.value)">
              <option value="">City</option>
            </select>  
          </div>
        </div>
        <div class="form-group">
          <label for="radioGroup" class="col-md-4 control-label"><b>Gender</b></label>
          <div class="col-md-7">
            <label class="col-md-4 radio-inline">
              <input type="radio"  name="user_gender" id="user_gender" value="Male">Male
            </label>
            <label class="col-md-4 radio-inline">
                <input type="radio" name="user_gender" id="user_gender"  value="Female">Female
            </label>
          </div>  
                      </div> 
                    <div class="form-group">
                        <label for="radioGroup" class="col-md-4 control-label"><b>Membership Type</b></label>
                        <div class="col-md-7">
                          <label class="col-md-2 radio-inline">
                            <input name="user_membertype" id="user_membertype" value="FCP" type="radio">FCP
                          </label>
                          <label class="col-md-4 radio-inline">
                             <input name="user_membertype" id="user_membertype" value="Patron" type="radio">Patron
                          </label>
                          <label class="col-md-4 radio-inline">
                             <input name="user_membertype" id="user_membertype" value="User" type="radio">User
                          </label>
                        </div>  
                      </div> 
                      <div class="form-group">
                        <label class="col-md-4 control-label"><b>Password</b><span class="star-impo required">*</span>
                        </label>
                        <div class="col-md-7">
                          <input type="password" class="form-control" id="user_pwd" name="user_pwd" required>
                        </div>
                      </div>     
                      <div class="form-group">
                        <label class="col-md-4 control-label"><b>Confirm Password</b><span class="star-impo required">*</span></label>
                         <div class="col-md-7">
                             <input type="password" class="form-control" id="user_cmpwd" name="user_cmpwd" required onchange="return header_Validate();">
                         </div>
                     </div>  
        					  <div id="profileresult" class="form-group"> 
        					  </div>
                   <div class="modal-footer">
                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      <center>
                          <button class="btn btn-primary" type="submit" name="reg_submit" id="reg_submit">Save</button>
                        <a href="index.php">
                          <button class="btn btn-default" type="button">Reset</button>
                        </a>
                      </center>
                    </div>                         
                  </div>    
                  </div>
              </form>
                </div>
            </div>
          </div>
        </div>
        <?php include 'validation.php'; ?>
        <script type='text/javascript'>
          function refreshCaptcha(){
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
          }
        </script>
        <script type="text/javascript">
          function getState(val) {
                    $.ajax({
                    type: "POST",
                    url: "get_state.php",
                    data:'cid='+val,
                    success: function(data){
                        $("#State1").html(data);
                    }
                    });
                }
          function getcity(val) {
              $.ajax({
              type: "POST",
              url: "get_city.php",
              data:'sid='+val,
              success: function(data){
                  $("#city1").html(data);
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
                      // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp = new XMLHttpRequest();
                  } else {
                      // code for IE6, IE5
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
        // Login Using Ajax
            $('#login-btn').click(function()
            {
                var login_email=$('#login-email').val();
                var login_pwd=$('#login-pwd').val();
                var login_btn=$('#login-btn').val();
                if (!login_email.trim()  || !login_pwd.trim()) 
                {                    
                  alert("All field must be filled out");
                  return false;
                }
                else
                {
                  $.ajax({
                    url:'do-login.php',
                    type:'POST',
                    data:{login_email:login_email, login_pwd:login_pwd, login_btn:login_btn},
                    success:function(data)
                    {
                        $('#login-result').html(data);
                    }
                  });
                }
            });
        </script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#user_form').bootstrapValidator({
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            user_fname: {
                                validators: {
                                    stringLength: {
                                        min: 3,
                                    },
                                    notEmpty: {
                                        message: 'Please enter your First Name'
                                    }
                                }
                            },
                            user_lname: {
                                validators: {
                                    stringLength: {
                                        min: 3,
                                    },
                                    notEmpty: {
                                        message: 'Please enter your Last Name'
                                    }
                                }
                            },
                            user_addr1: {
                                validators: {
                                    stringLength: {
                                        min: 8,
                                    },
                                    notEmpty: {
                                        message: 'Please enter your Address'
                                    }
                                }
                            },
                           
                            user_membertype: {
                                validators: {
                                    
                                    notEmpty: {
                                        message: 'Please enter your Member Type'
                                    }
                                }
                            },
                            
                             user_pwd: {
                                validators: {
                                    stringLength: {
                                        min: 6,
                                    },
                                    notEmpty: {
                                        message: 'Please enter your Password'
                                    }
                                }
                            },
                            user_cmpwd: {
                                validators: {
                                    stringLength: {
                                        min: 6,
                                    },
                                    notEmpty: {
                                        message: 'Please enter your Password '
                                    }
                                }
                            },
                            
                             user_phone: {
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
    						 Country1: {
                                validators: {
                                    
                                    notEmpty: {
                                        message: 'Please select your Country'
                                    }
                                }
                            },
    						 State1: {
                                validators: {
                                    
                                    notEmpty: {
                                        message: 'Please select your State'
                                    }
                                }
                            },
    						 city1: {
                                validators: {
                                    
                                    notEmpty: {
                                        message: 'Please select your City'
                                    }
                                }
                            },
                            
                            user_gender: {
                                validators: {
                                    
                                    notEmpty: {
                                        message: 'Please select your gender'
                                    }
                                }
                            },
                            user_email: {
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
                        }
                    })
                    .on('success.form.bv', function(e) {
                        $('#success_message').slideDown({
                            opacity: "show"
                        }, "slow") 
                        e.preventDefault();

                    $.ajax({
                        url: "do-registration.php",
                        type: "POST",
                         data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                          $('#profileresult').html(data);
                            $("#success_message").show();
                           
                        },
                        error: function() {}
                    });

                     $('#user_form').data('bootstrapValidator').resetForm();
                        var $form = $(e.target);
                        var bv = $form.data('bootstrapValidator');
                    });
            });
        </script>
        