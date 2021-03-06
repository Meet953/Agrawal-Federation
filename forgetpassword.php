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
  <?php include 'preloaders.php'; ?>
  <header id="header" class="header">
      <?php include 'header.php'; ?><!-- Header -->
      <?php include 'menu.php'; ?> <!-- menu -->
  </header>
  <div class="main-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
        <div class="panel panel-success">
          <div class="panel-heading">
            <center>
              <h5>FORGET PASSWORD</h5>
            </center>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <p style="color: red;" id="forgotresult"></p>
            </div>
            <div class="form-group">
              <label style="color: #000;">Enter Email ID</label>
              <input type="text" name="useremail" id="useremail" class="form-control" placeholder="Enter Email ID">
            </div>
            <div class="form-group">
              <input type="submit" id="submit" class="btn btn-success btn-block" value="Send">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include"footer.php"; ?><!-- Footer -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
<script type="text/javascript">
   $('#submit').click(function() { 
      var useremail = $('#useremail').val();
      $.ajax({
          type: 'POST',
          url: 'checkforgotpass.php',
          data: { useremail: useremail },
          success: function(response) {
              $('#forgotresult').html(response);
          }
      });
  });
</script>
