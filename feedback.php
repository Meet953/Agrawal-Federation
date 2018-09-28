<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include "link.php"; ?>
</head>

<body class="" style="padding-right: 0px !important;">
<div id="wrapper">
  <!-- preloader -->
   <div id="preloader">
    <div id="spinner">
      <img src="images/Home/11.gif" class="flaticon-charity-shelter font-60 text-theme-colored floating">
      <br>
      <h5 class="line-height-50 font-18">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <header id="header" class="header">
    <!-- Header -->
      <?php include 'header.php'; ?>
    <!-- End of Header -->

    <!-- menu -->
      <?php include 'menu.php'; ?>
    <!-- End of menu --> 
  </header>
  
  
  <!-- Start main-content -->
<div class="main-content">
  <!DOCTYPE html>
    <div class="container">
      <div class="row" style="background-color: rgba(4, 145, 220, 0.01);">
        <div class="col-md-8 col-md-offset-2">
          <article class="post clearfix mb-30 pb-30">
              <div class="panel-group-edu-stl" id="accordion"><!-- Panel Start -->
                  <div class="panel panel-info" style="margin-top: 50px;">
                    <div class="panel-heading">
                      <h4 style="font-weight: 900">FEEDBACK</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="margin-top: 10px;">
                          <form id="feedbackForm" action="do-feedback.php" method="post">
                             <div class="col-md-10 col-md-offset-1">
                              <div class="row">
                                <div class="col-md-4 form-group">
                                  <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="targetLayer">
                                  <input type="file" id="feedback_logo" name="feedback_logo" class="btn btn-defualt btn-block" required="required">
                                </div>
                                 <div class="col-md-8 form-group">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Name" id="feedback_name" name="feedback_name" required="required">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Enter Designation" id="feedback_desg" name="feedback_desg" required="required">
                                    <br>
                                    <textarea cols="30" rows="3" placeholder="Enter Feedback" id="feedback_desc" name="feedback_desc" required="required"></textarea>
                                  </div>
                                </div>
                                <center>
                                      <button class="btn btn-info" id="feedback_btn" name="feedback_btn">Feedback</button>
                                      <div id="feedback_result"></div>
                                    </center>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                  </div>
              </div><!-- Panel End -->
          </article>
        </div>
      </div>
    </div>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
    <?php include"footer.php"; ?>
        <?php include"validation.php"; ?>
  <!-- End of Footer -->

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 
</body>
</html>
<script type="text/javascript">
$(document).ready(function (e) {
  // CHAIRMAN
  $("#feedbackForm").on('submit',(function(e) { 
    e.preventDefault();

    var formData = new FormData(this);
   
    $.ajax({
      url: "do-feedback.php",
      type: "POST",
      data: formData,
      contentType: false,
          cache: false,
      processData:false,
      success: function(data)
        {
          $("#feedback_result").html(data);
        },
        error: function() 
        {
        }           
     });
  }));
  $(function()
    {
      $('#feedback_logo').change(function(){
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


