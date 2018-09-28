<?php
	include 'conn.php';
	 extract($_POST);
	 if(is_array($_FILES)) 
     {
          if(is_uploaded_file($_FILES['ssc_mrkst']['tmp_name'])) 
          {
               $ssc_mrst_img = $_FILES['ssc_mrkst']['name'];
               $ssc_sourcePath = $_FILES['ssc_mrkst']['tmp_name'];
               $ssc_targetPath = "images/education/Marksheet/".$_FILES['ssc_mrkst']['name'];  

               move_uploaded_file($ssc_sourcePath,$ssc_targetPath);
          }

           // HSC
          if(is_uploaded_file($_FILES['hsc_mrkst']['tmp_name'])){
               $hsc_mrst_img = $_FILES['hsc_mrkst']['name'];
               $hsc_sourcePath = $_FILES['hsc_mrkst']['tmp_name'];
               $hsc_targetPath = "images/education/Marksheet/".$_FILES['hsc_mrkst']['name'];  

           move_uploaded_file($hsc_sourcePath,$hsc_targetPath); //Upload img in folder
          }

           // GRADUATION MARKSHEET
          if(is_uploaded_file($_FILES['gd_mrkst']['tmp_name'])){
               $gd_mrst_img = $_FILES['gd_mrkst']['name'];
               $gd_sourcePath = $_FILES['gd_mrkst']['tmp_name'];
               $gd_targetPath = "images/education/Marksheet/".$_FILES['gd_mrkst']['name'];  

               move_uploaded_file($gd_sourcePath,$gd_targetPath); //Upload img in folder
          }

           // POST GRADUATION MARKSHEET
          if(is_uploaded_file($_FILES['pg_mrkst']['tmp_name'])){
               $pg_mrst_img = $_FILES['pg_mrkst']['name'];
               $pg_sourcePath = $_FILES['pg_mrkst']['tmp_name'];
               $pg_targetPath = "images/education/Marksheet/".$_FILES['pg_mrkst']['name'];  

               move_uploaded_file($pg_sourcePath,$pg_targetPath); //Upload img in folder
          }

           // OTHER MARKSHEET
          if(is_uploaded_file($_FILES['other_mrkst']['tmp_name'])){
               $other_mrst_img = $_FILES['other_mrkst']['name'];
               $other_sourcePath = $_FILES['other_mrkst']['tmp_name'];
               $other_targetPath = "images/education/Marksheet/".$_FILES['other_mrkst']['name'];  

               move_uploaded_file($other_sourcePath,$other_targetPath); //Upload img in folder
          }

           // SCAN SIGN
          if(is_uploaded_file($_FILES['scan_mrkst']['tmp_name'])){
               $scan_mrst_img = $_FILES['scan_mrkst']['name'];
               $scan_sourcePath = $_FILES['scan_mrkst']['tmp_name'];
               $scan_targetPath = "images/education/Marksheet/".$_FILES['scan_mrkst']['name'];  
               move_uploaded_file($scan_sourcePath,$scan_targetPath); //Upload img in folder
          }

          $query="UPDATE `educ_detail_reg` SET `ed_prof_ssc_marksheet`='$ssc_mrst_img',`ed_prof_hsc_marksheet`='$hsc_mrst_img',`ed_prof_gd_marksheet`='$gd_mrst_img',`ed_prof_pg_marksheet`='$pg_mrst_img',`ed_prof_other_cert`='$other_mrst_img',`ed_prof_scan_sign`='$scan_mrst_img' WHERE `sess`='$edu_sess'";
          if($conn->query($query))
          {
               echo '<script>alert("Marksheet Inserted Successfully...");</script>';
                echo '<script>window.location.href="education-profile.php";</script>';
          }
          else
          {
               echo '<script>alert("UnSuccessfully Update Marksheet...");</script>';
          }
     }
?>