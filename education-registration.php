<?php 
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
</head>

<body class="">
<div id="wrapper">
  <?php include 'preloaders.php'; ?>

  <header id="header" class="header">
      <?php include 'education-header.php'; ?>
      <?php include 'education-menu.php'; ?>
  </header>
  <div class="container-fluid"> 
    <?php include 'education-logo.php'; ?>
     <div class="row register_header">
        <center>
          <h2 class="reg_heading">Choose Exam For Registration[CET / BEAT]</h2>
        </center>
     </div>
    <div class="reg_module row" style="background-color: rgba(4, 145, 220, 0.02);">
      <div class="col-md-10 col-md-offset-1 reg_offset_module">
        <div class="col-md-6 reg_module1">
            <center>
            <img src="images/education/cet-exam.jpg">
            <br><br>
            <a href="education-instruction.php?exam=CET">
              <button class="btn btn-default reg_module_btn">Click here for CET-2017 (Civil Services, IAS)</button>
            </a>
            </center>
        </div>
        <div class="col-md-6 reg_module2">
            <center>
            <img src="images/education/beat-exam.jpg">
            <br><br>
            <a href="education-instruction.php?exam=BEAT">
              <button class="btn btn-default reg_module_btn">Click here for Bank PO Exam's Aptitude Training -BEAT -2017</button>
            </a>
            <br><br>
            </center>
        </div>
      </div>
    </div>
  </div>
    <?php include"footer.php"; ?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
