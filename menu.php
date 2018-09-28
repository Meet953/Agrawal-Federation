<div class="header-nav">
  <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
    <div class="container">
      <a href="index.php">
        <img src="images/logo1.png" alt="" class="medical_Jito_logo" height="80" width="100">
      </a>
      <nav id="menuzord" class="menu_stl menuzord red bg-light">
        <ul class="nav navbar-nav navbar-right  menuzord-menu">
          <li class="active"><a href="index.php">Home</a>
          <li><a href="about-us.php?main">About Us</a></li>    
          <li><a href="#">Services</a>
          <ul class="dropdown">
            <li><a href="medical.php">Medical</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="business.php">Business</a></li>
            <li><a href="social-refurn.php">Social Refurn</a></li>
            <li><a href="matrimony/index.php">Matrimony</a></li>
          </ul>
          </li>    
          <li><a href="news.php">News</a></li>
          <li><a href="photo-gallery.php">photo Gallery</a></li>
          <li><a href="contact-us.php?main">Contact Us</a></li> 
                  <?php
                    if(isset($_SESSION['user-login']))
                    { ?>   
          <li><a>My Account</a>
          <ul class="dropdown">
              <li><a href="profile.php">My Profile</a></li>
              <li><a href="forgetpassword.php">Change Password</a> </li>
              <li><a href="logout.php">Logout</a> </li>
          </ul> 
          </li>
          <?php }
          else
          { ?>
          <li></li>
          <?php } ?>
        </ul> 
      </nav>
    </div>
  </div>
</div>
  