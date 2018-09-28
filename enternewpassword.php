<?php
session_start();
if (!isset($_SESSION['forgotuserid'])) {
  echo "<script>window.location='index.php';</script>";
}
elseif (!isset($_SESSION['otpsuccess'])) {
  echo "<script>window.location='index.php';</script>";
}
require_once('conn.php');
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
  <!-- Start main-content -->
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
              <label style="color: #000;">Enter New Password</label>
              <input type="text" name="pass" id="newpass" class="form-control" placeholder="Enter New Password">
            </div>
            <div class="form-group">
              <label style="color: #000;">Enter Confirm Password</label>
              <input type="text" name="repass" id="repass" class="form-control" placeholder="Enter Confirm Password">
            </div>
            <div class="form-group">
              <input type="submit" id="submit" class="btn btn-success btn-block" value="Send">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div> 
</body>
</html>
<script type="text/javascript">
   $('#submit').click(function() {
      var newpass = $('#newpass').val();
      var repass = $('#repass').val();
      $.ajax({
          type: 'POST',
          url: 'checkforgotpass.php',
          data: { newpass: newpass, repass: repass },
          success: function(response) {
              $('#forgotresult').html(response);
          }
      });
  });
 </script>