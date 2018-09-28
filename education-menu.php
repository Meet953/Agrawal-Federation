<?php
  include 'conn.php';
?>
<div class="header-nav">
  <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
    <div class="container">
      <nav id="menuzord" class="menuzord red bg-light">
        <a href="index.php">
          <img src="images/logo1.png" alt="" class="medical_Jito_logo" height="80" width="100">
        </a>
        <ul class="menuzord-menu jb_menu-bar">
          <li class="active"><a href="education.php">Home</a>
          <li><a href="#">Services</a>
                      <ul class="dropdown">
                        <li><a href="medical.php">Medical</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="business.php">Business</a></li>
                        <li><a href="social-refurn.php">Social Refurn</a></li>
                        <li><a href="matrimony/index.php">Matrimony</a></li>
                        </ul>
                  </li>  
         
          <li><a href="about-us.php">Download</a>
            <ul class="dropdown">
               <?php
                $query="select * from education_dwld_pdf";
                $result=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($result))
                {
              ?>
              <li><a href="pdf/<?php echo $row['pdf_path']; ?>" download><?php echo $row['pdf_name']; ?></a></li>
              <?php } ?>
            </ul> 
          </li> 
          
          <li><a href="education-scheme.php">More Scheme</a>   
          <li><a href="#">FAQ</a>
          <ul class="dropdown">
            <li><a href="education-faq-cet.php">CET FAQ</a></li>
            <li><a href="education-faq-beat.php">BEAT FAQ</a></li>
          </ul> 
          </li> 
           <li><a href="about-us.php?education">About Us</a></li>
          <li><a href="contact-us.php?education">Contact Us</a></li>
           <?php
          if(isset($_SESSION['edu-user']))
          { ?>   
          <li><a href="about-us.php">My Account</a>
          <ul class="dropdown">
            <li><a href="education-profile.php">My Profile</a></li>
            <li><a href="forgetpassword.php">Change Password</a> </li>
            <li><a href="edu-logout.php">Logout</a> </li>
          </ul> 
          </li>
          <?php }
          else
          { ?>
         <li></li>
          <?php } ?>
      </nav>
    </div>
  </div>
</div>
           


                
         
   
                  