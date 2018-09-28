    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
         <nav id="menuzord" class="menuzord red bg-light">
            <a href="index.php">
              <img src="images/logo1.png" alt="" class="medical_Jito_logo" height="80" width="100">
            </a>
            <ul class="menuzord-menu jb_menu-bar">
               <li class="active"><a href="business.php">HOME</a></li>
                  <li><a href="#">Services</a>
                      <ul class="dropdown">
                        <li><a href="medical.php">Medical</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="business.php">Business</a></li>
                        <li><a href="social-refurn.php">Social Refurn</a></li>
                        <li><a href="matrimony/index.php">Matrimony</a></li>
                        </ul>
                  </li>
              <li><a href="about-us.php">ABOUT US</a></li>
              <!-- <li><a href="#">EVENTS</a></li> -->
              <li><a href="contact-us.php">CONTACT US</a> </li>
              <?php
              if(isset($_SESSION['user-login']))
             { ?>   
              <li><a href="about-us.php">My Account</a>
              <ul class="dropdown">
                <li><a href="business-profile.php">My Profile</a></li>
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
           


                
         
   
                  