<?php
  session_start();
  include  'conn.php'; 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
</head>
<body class="">
  <div id="wrapper">
  <?php include 'preloaders.php'; ?>
  <header id="header" class="header">
      <?php include 'header.php'; ?>
      <?php
        if(isset($_GET['medical'])){
            include 'medical-menu.php';
        }
        elseif(isset($_GET['business'])){
            include 'business-menu.php';
        }
        elseif(isset($_GET['education'])){
            include 'education-menu.php';
        }
        else{
            include 'menu.php';
        }
      ?>
  </header>
  <div class="container-fluid"> 
    <div class="row">
      <section class="contact_bg inner-header divider parallax  overlay-white-8" data-bg-img="images/Home/contact-us4.jpg" style="background-size: cover; background-attachment: fixed">
        <div class="container pt-60 pb-60">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-5">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            <form method="post" action="get-in-touch.php" id="get_tch_form" name="get_tch_form" >
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label style="color: #867a7a;">Name <small>*</small></label>
                    <input name="cont_name" id="cont_name" class="form-control" type="text" placeholder="Enter Name" required="required" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label style="color: #867a7a;">Email <small>*</small></label>
                    <input name="cont_mail" id="cont_mail" class="form-control" required="required" type="email" placeholder="Enter Email">
                     <!-- <span id="gettch_err_email" style="display: none; color:red;">Invalid Email</span> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label style="color: #867a7a;">Subject <small>*</small></label>
                    <input name="cont_subj" id="cont_subj" class="form-control" type="text" placeholder="Enter Subject" required="required">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label style="color: #867a7a;">Phone</label>
                    <input name="cont_phone" required="required" id="cont_phone" class="form-control" type="text" placeholder="Enter Phone" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                    <span id="gettch_mob_span"></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label style="color: #867a7a;">Message</label>
                <textarea name="cont_msg" id="cont_msg" class="form-control" required="required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait..." id="send_msg" name="send_msg">Send your message</button>
                <a href="contact-us.php">
                  <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                </a>
                <div id="get_in_touch_result"></div>
              </div>
            </form>
          </div>
          <?php 
            $query = "SELECT * FROM `contact_us`";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
          ?>
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-50 ml-15">Our Office</h3>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box media bg-deep p-30 mb-20"> 
                  <div class="row">
                    <div class="col-md-2">
                      <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail" style="color: #d9241c;"></i></a>
                    </div>
                    <div class="col-md-8">
                        <h5>Email Address</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="media-body">
                        <center>
                          <p style="color: #7b6c6c;"><?php echo $row['cont_email']; ?></p>
                        </center>
                      </div>
                  </div>
                </div>
              </div>
               <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-call" style="color: #d9241c;"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Contact Number</h5>
                    <p style="color: #7b6c6c;"><?php echo $row['cont_phone']; ?>0</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2" style="color: #d9241c;"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0"> Location</h5>
                    <p style="color: #7b6c6c;"><?php echo $row['cont_addr']; ?></p>
                  </div>
                </div>
              </div>
              </div>
         </div>
        </div>
      </div>
    </section>
    <div class="row">
      <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.3499981208993!2d73.85543831413825!3d18.46779898743973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eabbc6de76c7%3A0x3510d6d17191a48f!2sKK+Market!5e0!3m2!1sen!2sin!4v1487597436832" width="600" height="350" frameborder="0"  allowfullscreen >
        </iframe>
      </section>
    </div>
  </div>
  <?php include"footer.php"; ?>
  <?php include"validation.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
<!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
 -->  <script type="text/javascript">
        $(document).ready(function() {
            $('#get_tch_form').bootstrapValidator({
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        cont_name: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please Enter Your Name'
                                }
                            }
                        },
                       cont_subj: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please Enter Your Subject'
                                }
                            }
                        },
                           
                            cont_msg: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please Enter Your Message'
                                }
                            }
                        },

                        cont_phone: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 10,
                                    message: 'Please Enter valid Contact No.'

                                    
                                },
                                notEmpty: {
                                        message: 'Please Enter Your Contact No.'
                                    }
                                
                            }
                        },
                       
                          cont_mail: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter A Valid Email address'
                    },
                  
           regexp: {
                        regexp: /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/,
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
                   url: "get-in-touch.php",
                    type: "POST",
                     data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                  success:function(data)
                  {
                      $("#get_in_touch_result").html(data);
                     
                  }
              });

                 $('#get_tch_form').data('bootstrapValidator').resetForm();
                    var $form = $(e.target);
                    var bv = $form.data('bootstrapValidator');

                });
        });

    </script>
