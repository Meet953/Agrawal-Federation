<?php
  session_start();
  if(isset($_GET['exam']))
  {
     $exam=$_GET['exam'];
  }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
 
</head>

<body class="">
<div id="wrapper">
  <!-- preloader -->
  <?php include 'preloaders.php'; ?>

  <header id="header" class="header">
    <!-- Header -->
      <?php include 'education-header.php'; ?>
    <!-- End of Header -->

    <!-- menu -->
      <?php include 'education-menu.php'; ?>
    <!-- End of menu --> 
  </header>
  
  
  <!-- Start main-content -->
  <div class="container-fluid"> 
    <!-- Section 1 -->
    <?php include 'education-logo.php'; ?>
    <!-- End of Section 1 -->
   
   <!-- Section 2 -->
     <div class="row register_header">
        <center>
          <h2 class="reg_heading cet_inst"> Registration Open For CET(Back)</h2>
        </center>
     </div>
     <!-- End of Section 2 -->

     <!-- Section 3 -->
     <div class="row">
       <div class="col-md-10 col-md-offset-1">
          <br><br>
         <table class="table table-bordered cet_inst_tbl">
            <tbody>
            <tr>
              <td>1. </td>
              <td></td>
              <td>
                Student should have following things, before starting the registration.
              </td>
            </tr>
            <tr>
              <td></td>
              <td>a.</td>
              <td>
                A valid e-mail address for receiving all future correspondence till the admission process is over and thereon.
              </td>
            </tr>
            <tr>
              <td></td>
              <td> b.</td>
              <td>
                A valid mobile number to receive SMS based notifications/communications related to the online application, Admit card, Entrance Test Result, Admission Counselling etc till the admission process is over and subsequently, if admitted.
              </td>
            </tr>
            <tr>
              <td></td>
              <td> c.</td>
              <td>
                A recent scanned passport size colour photograph (4.5cmx4.5cm) in "jpeg" format only (file size of scanned photograph should not be more than 100KB).
          Your signature in Blue/Black pen on white sheet; scanned (2.5 cmx5cm) "jpeg" format only. (File size of scanned photograph should not be more than 100KB).
          Also keep ready all scanned education documents/certificate/mark sheets and testimonial in the jpeg/pdf format, but shall not be exceed 300kb each.
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td></td>
              <td>
                Forms only be accepted by online mode with all the necessary documents / enclosures etc.
              </td>
            </tr>
            <tr>
              <td> 3.</td>
              <td></td>
              <td>
                Agrawal Federation Common Entrance Test (CET) will be in English & Hindi language, will be held at five centres i.e. Delhi, Jaipur, Chennai, Indore and Pune.
              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td></td>
              <td>
                No travelling allowance and stay arrangement will be provided by Agrawal Federation to student. They have to make their own arrangements for the same.
              </td>
            </tr>
            <tr>
              <td>5.</td>
              <td></td>
              <td>
                Admission process comprises of a CET and interview. Due weightage is also given to past academic performance of a student. Therefore, filling up complete details of educational qualification is necessary. Students would be called for written test based upon academic performance. Further, student will be shortlisted for interview based upon written test and academic performance jointly.
              </td>
            </tr>
            <tr>
              <td>6.</td>
              <td></td>
              <td>
                Final selection would be based upon aggregate of marks obtained in written test, interview and academic performance.
              </td>
            </tr>
            <tr>
              <td>7.</td>
              <td></td>
              <td>
                After successfully filling online form for registration, you will get USERID and PASSWORD on your e-mail for further information.
          After registration go through your Email Id InBox or Spam Folder for Your Login Credentials.
              </td>
            </tr>
            <tr>
              <td> 8. </td>
              <td></td>
              <td>
                All admissions in Agrawal Federation are strictly based upon merit. Students and their parents are advised not do any canvassing for admissions.
              </td>
            </tr>
            <tr>
              <td> 9.</td>
              <td></td>
              <td>
                Only successful candidate will get an e-mail for admission. Agrawal Federation Centre will be allotted as per All India Rank (AIR) of aspirant and subject to vacancy in the respective centre where you have applied for.
              </td>
            </tr>
            <tr>
              <td>10.</td>
              <td></td>
              <td>
                For any other queries w.r.t. Agrawal Federation CET, kindly refer our FAQ section.
              </td>
            </tr>
            <tr>
              <td> 11.</td>
              <td> </td>
              <td>
                The Academic Committee decision will be final for admission in Agrawal Federation.
              </td>
            </tr>
            <tr>
              <td>12.</td>
              <td></td>
              <td>
                Please do not press back or refresh button while filing your registration form.
              </td>
            </tr>
            <tr>
              <td>13.</td>
              <td></td>
              <td>
                In case of any problem or need any assistance please call on support number between 10:00 am to 5:00 PM except Sunday.
              </td>
            </tr>
          </tbody>
        </table> 
        <?php
           if (strcmp($exam, 'CET')==0) { ?>
              <a href="education-reg-form.php?exam=CET">
                <button class="btn btn-warning">Proceed To CET Registration Form</button>
              </a>
          <?php } 
          else
          { ?>
             <a href="education-reg-form.php?exam=BEAT">
                <button class="btn btn-warning">Proceed To BEAT Registration Form</button>
              </a>
          <?php }
        ?>
        <br><br>
       </div>
     </div>
     <!-- End of Section 3 -->
  </div>
  <!-- end main-content -->

  <!-- Footer -->
    <?php include"footer.php"; ?>
  <!-- End of Footer -->

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 
</body>
</html>
