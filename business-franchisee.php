<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php include"link.php"; ?>
<script type='text/javascript'>
function refreshCaptcha(){
  var img = document.images['captchaimg'];
  img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</head>
<body>
 <?php include 'header.php'; ?>
 <?php include 'business-menu.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-9 ">
      <h3>Apply For Franchisee</h3>
      <img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="860" height="7"><br><br>
      <form name="bus_form" id="bus_form" action="do-fran-reg.php" method="post">
        <div class="row">
          <div class="col-md-12 reg_sec_border">
          <br>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="col-md-3 form-group">
                  <label for="usr">First Name : *</label>
                </div>
                <div class="col-md-9 form-group">
                  <input type="text" class="form-control" placeholder="Enter First Name" name="fname" id="fname" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required.">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="col-md-3 form-group">
                  <label for="usr">Last Name : * </label>
                </div>
                <div class="col-md-9 form-group">
                   <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" id="lname" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required.">
                </div>
              </div>
            </div>
           <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-md-3 form-group">
                <label for="usr">Email : * </label>
              </div>
              <div class="col-md-9 form-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-md-3 form-group">
                <label for="usr">Mobile No: * </label>
              </div>
              <div class="col-md-9 form-group">
                <input type="text" class="form-control" placeholder="Enter Mobile No." name="mobile" id="mobile" placeholder="Enter Mobile "required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-md-3 form-group">
                <label for="usr">Address : *</label>
              </div>
              <div class="col-md-9 form-group">
                <textarea class="form-control" rows="5" id="address" name="address" placeholder="Enter Address"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-3 form-group">
                  <label for="usr">Country: *</label>
                 </div>
                <div class="col-md-9 form-group">
                  <select class="formCountry4" id="Country4" name="Country4" onChange="getState(this.value);" style="width: 385px; height: 42px;">

                  <option value="">  Select Country</option>
                     <?php
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
            <div class="col-md-8 col-md-offset-2">
              <div class="col-md-3 form-group">
                <label for="usr">State: * </label>
              </div>
              <div class="col-md-9 form-group">
                <select class="form-control" id="State4" name="State4" onChange="getcity(this.value);">
                  <option value="">Select state</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-3 form-group">
                 <label for="usr">City : *</label>
               </div>
               <div class="col-md-9 form-group">
                 <select class="form-control" id="city4" name="city4">
                   <option value="">Select City</option>
                 </select>
               </div>
             </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-md-3 form-group">
                <label for="usr">Chapter: </label>
              </div>
              <div class="col-md-9 form-group">
                <input type="text" class="form-control"  name="chapter" id="chapter" placeholder="Enter Franchisee Name ">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-md-3 form-group">
                <label for="usr">Gender : </label>
              </div>
              <div class="col-md-9 form-group">
                <input type="radio" name="gender" id="gender" value="male">&nbsp;Male</label>&nbsp;
                <input type="radio" name="gender" id="gender" value="female">&nbsp;Female</label>
              </div>
            </div>
          </div>
 <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
               <div id="profileresult">
                 </div></div></div>
          <div class="row">
            <center><input name="reg_submit4" id="reg_submit4" type="submit"  value="Save" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="business-franchisee.php"><button type="button" class="btn btn-danger">Reset</button></a></center>
          </div><br>  
        </div>
      </form>
    </div>
    <br><br>
    <div class="row">
      <div id="result"></div>
        <div class="col-md-12">
          <div class="jb_advertise_box1" >
            <center><h6 class="jb_advertise_box">YOUR ADVERTISE WILL BE PLACE HERE SIZE - 752 X 90</h6></center> 
          </div>
        </div>
      </div>
      <br>
    </div>
    <?php include 'business-ad.php'; ?>
    </div>
</div>
  <?php include "footer.php";?>
   <script>
    function getState(val) {
    $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'cid='+val,
    success: function(data){
        $("#State4").html(data);
    }
    });
}
</script>

<script>
    function getcity(val) {
    $.ajax({
    type: "POST",
    url: "get_city.php",
    data:'sid='+val,
    success: function(data){
        $("#city4").html(data);
    }
    });
}
</script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
  <script type="text/javascript">
        $(document).ready(function() {
            $('#bus_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        fname: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your First Name'
                                }
                            }
                        },
                        lname: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your Last Name'
                                }
                            }
                        },
                         chapter: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your Franchisee Name'
                                }
                            }
                        },
                           

                        mobile: {
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
                        address: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please enter your Address'
                                }
                            }
                        },
                       
                         Country4: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your Country'
                                }
                            }
                        },
                         State4: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your State'
                                }
                            }
                        },
                         city4: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your City'
                                }
                            }
                        },

                         gender: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your gender'
                                }
                            }
                        },
                          email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a valid email address'
                    },
                  
           regexp: {
                        regexp: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/,
                        message: ' Invalid Email'
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
                   url: "do-fran-reg.php",
                    type: "POST",
                     data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                  success:function(data)
                  {
                      $('#profileresult').html(data);
                     
                  }
              });

                 $('#bus_form').data('bootstrapValidator').resetForm();
                    var $form = $(e.target);
                    var bv = $form.data('bootstrapValidator');
                });
        });

    </script>
</body>
</html>


