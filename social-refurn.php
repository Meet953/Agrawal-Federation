<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <?php include"link.php" ?>
  
</head>
<body>
<?php include 'header.php'; ?>
<div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
         <nav id="menuzord" class="menuzord red bg-light">
             <a href="index.php">
              <img src="images/logo1.png" alt="" class="medical_Jito_logo" height="80" width="100">
            </a>
            <ul class="menuzord-menu jb_menu-bar">
              <li class="active"><a href="social-refurn.php">HOME</a></li>
              <li><a href="#">Services</a>
                <ul class="dropdown">
                  <li><a href="medical.php">Medical</a></li>
                  <li><a href="education.php">Education</a></li>
                  <li><a href="business.php">Business</a></li>
                  <li><a href="social-refurn.php">Social Refurn</a></li>
                  <li><a href="matrimony/matrimony-index.php">Matrimony</a></li>
                  </ul>
             </li>  
              <li><a href="about-us.php">ABOUT US</a> </li>
              <li><a href="contact-us.php">CONTACT US</a> </li>
          </nav>
      </div>
    </div>
  </div>
           

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="col-md-4">
      <img src="images/social-refurn-img.jpg" alt="" height="200" width="250" class="img-responsive" >
    </div>
    <div class="col-md-8">
      <h1><i>Social News</i></h1>
      <p><i>Friends, Agrawal Federation off late has come of age and its ready to scale greater heights now. It has migrated from a traditional approach to a more professional management. In fact, now, a more pulsating & dynamic Agrawal Federation is emerging.</i></p>
    </div>
  </div>
</div>

<div class="row" style="background-color: rgb(238, 238, 238);">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align: left;margin-left:20px;">Social Refurn Points</h2>
        <ul class="social-refurn-square">
          <li>The most important objective at Agrawal Federation is to be the most powerful community</li>
          <li>In the next few weeks we would like to have a brain-storming session for defining next level of activities to be undertaken by Agrawal Federation</li>
          <li> I would like to call them as combination of a Machine and a Missile for their Vision, Strategy and its effective Execution</li>
          <li>First and foremost, I would like to convey my personal thanks to all of you for giving me the opportunity to once again SERVE the COMMUNITY.</li>
        </ul><br>
    </div>
</div>
<?php include"footer.php"; ?>
</body>
</html>