<?php
   session_start();
  include 'conn.php';

  if(isset($_POST['pd_btn']))
  {
            $_SESSION['pd_fname'] = $pd_fname=$_POST['pd_fname'];
           $_SESSION['pd_lname'] = $pd_lname=$_POST['pd_lname'];
           $_SESSION['pd_dob'] = $pd_dob=$_POST['pd_dob'];
           $_SESSION['pd_father_name'] = $pd_father_name=$_POST['pd_father_name'];
           $_SESSION['pd_mother_name'] = $pd_mother_name=$_POST['pd_mother_name'];
           $_SESSION['pd_gender'] = $pd_gender=$_POST['pd_gender'];
           $_SESSION['pd_mob1'] = $pd_mob1=$_POST['pd_mob1'];
           $_SESSION['pd_mob2'] = $pd_mob2=$_POST['pd_mob2'];
           $_SESSION['pd_email'] = $pd_email=$_POST['pd_email'];
           $_SESSION['pd_addr'] = $pd_addr=$_POST['pd_addr'];
           $_SESSION['pd_pincode'] = $pd_pincode=$_POST['pd_pincode'];
           $_SESSION['pd_city'] = $pd_city=$_POST['pd_city'];
           $_SESSION['pd_pwd'] = $pd_pwd=$_POST['pd_pwd'];
           $_SESSION['pd_cnfrm_pwd'] = $pd_cnfrm_pwd=$_POST['pd_cnfrm_pwd'];
           $_SESSION['pd_state'] = $pd_state=$_POST['pd_state'];
  }
   if(isset($_POST['fd_btn']))
   {
            $_SESSION['fd_fathr_occup'] = $fd_fathr_occup=$_POST['fd_fathr_occup'];
            $_SESSION['fd_fathr_telephone'] = $fd_fathr_telephone=$_POST['fd_fathr_telephone'];
            $_SESSION['fd_fathr_mob'] = $fd_fathr_mob=$_POST['fd_fathr_mob'];
            $_SESSION['fd_fathr_desig'] = $fd_fathr_desig=$_POST['fd_fathr_desig'];
            $_SESSION['fd_fathr_income'] = $fd_fathr_income=$_POST['fd_fathr_income'];
            $_SESSION['fd_fathr_pan'] = $fd_fathr_pan=$_POST['fd_fathr_pan'];
            $_SESSION['fd_mothr_occup'] = $fd_mothr_occup=$_POST['fd_mothr_occup'];
            $_SESSION['fd_mothr_telephone'] = $fd_mothr_telephone=$_POST['fd_mothr_telephone'];
            $_SESSION['fd_mothr_mob'] = $fd_mothr_mob=$_POST['fd_mothr_mob'];
            $_SESSION['fd_religion'] = $fd_religion=$_POST['fd_religion'];

   } 
   if(isset($_POST['ed_btn']))
   {
           $_SESSION['ed_ssc_board'] = $ed_ssc_board=$_POST['ed_ssc_board'];
           $_SESSION['ed_ssc_name'] = $ed_ssc_name=$_POST['ed_ssc_name'];
           $_SESSION['ed_ssc_roll'] = $ed_ssc_roll=$_POST['ed_ssc_roll'];
           $_SESSION['ed_ssc_year'] = $ed_ssc_year=$_POST['ed_ssc_year'];
           $_SESSION['ed_ssc_percent'] = $ed_ssc_percent=$_POST['ed_ssc_percent'];
           $_SESSION['ed_ssc_rank'] = $ed_ssc_rank=$_POST['ed_ssc_rank'];

           $_SESSION['ed_hsc_board'] = $ed_hsc_board=$_POST['ed_hsc_board'];
           $_SESSION['ed_hsc_name'] = $ed_hsc_name=$_POST['ed_hsc_name'];
           $_SESSION['ed_hsc_roll'] = $ed_hsc_roll=$_POST['ed_hsc_roll'];
           $_SESSION['ed_hsc_year'] = $ed_hsc_year=$_POST['ed_hsc_year'];
           $_SESSION['ed_hsc_percent'] = $ed_hsc_percent=$_POST['ed_hsc_percent'];
           $_SESSION['ed_hsc_rank'] = $ed_hsc_rank=$_POST['ed_hsc_rank'];

           $_SESSION['ed_gd_university'] = $ed_gd_university=$_POST['ed_gd_university'];
           $_SESSION['ed_gd_inst'] = $ed_gd_inst=$_POST['ed_gd_inst'];
           $_SESSION['ed_gd_degree_name'] = $ed_gd_degree_name=$_POST['ed_gd_degree_name'];
           $_SESSION['ed_gd_year'] = $ed_gd_year=$_POST['ed_gd_year'];
           $_SESSION['ed_gd_percent'] = $ed_gd_percent=$_POST['ed_gd_percent'];
           $_SESSION['ed_gd_rank'] = $ed_gd_rank=$_POST['ed_gd_rank'];
           $_SESSION['ed_gd_appear_final'] = $ed_gd_appear_final=$_POST['ed_gd_appear_final'];

           $_SESSION['ed_pg_university'] = $ed_pg_university=$_POST['ed_pg_university'];
           $_SESSION['ed_pg_inst'] = $ed_pg_inst=$_POST['ed_pg_inst'];
           $_SESSION['ed_pg_degree_name'] = $ed_pg_degree_name=$_POST['ed_pg_degree_name'];
           $_SESSION['ed_pg_year'] = $ed_pg_year=$_POST['ed_pg_year'];
           $_SESSION['ed_pg_percent'] = $ed_pg_percent=$_POST['ed_pg_percent'];
           $_SESSION['ed_pg_rank'] = $ed_pg_rank=$_POST['ed_pg_rank'];
           $_SESSION['ed_pg_menu'] = $ed_pg_menu=$_POST['ed_pg_menu'];



           $_SESSION['ed_prof_cert_name'] = $ed_prof_cert_name=$_POST['ed_prof_cert_name'];
           $_SESSION['ed_prof_cert_year'] = $ed_prof_cert_year=$_POST['ed_prof_cert_year'];
           $_SESSION['ed_prof_cert_percent'] = $ed_prof_cert_percent=$_POST['ed_prof_cert_percent'];
           $_SESSION['ed_prof_cert_rank'] = $ed_prof_cert_rank=$_POST['ed_prof_cert_rank'];
           // $_SESSION['ed_prof_ssc_marksheet'] = $ed_prof_ssc_marksheet=$_POST['ed_prof_ssc_marksheet'];
           // $_SESSION['ed_prof_hsc_marksheet'] = $ed_prof_hsc_marksheet=$_POST['ed_prof_hsc_marksheet'];
           // $_SESSION['ed_prof_gd_marksheet'] = $ed_prof_gd_marksheet=$_POST['ed_prof_gd_marksheet'];
           // $_SESSION['ed_prof_pg_marksheet'] = $ed_prof_pg_marksheet=$_POST['ed_prof_pg_marksheet'];
           // $_SESSION['ed_prof_other_cert'] = $ed_prof_other_cert=$_POST['ed_prof_other_cert'];
           // $_SESSION['ed_prof_scan_sign'] = $ed_prof_scan_sign=$_POST['ed_prof_scan_sign'];
     
   }
    if(isset($_POST['cd_btn']))
   {  
          $_SESSION['cd_get_facility'] = $cd_get_facility=$_POST['cd_get_facility'];
                $checkValues=$_POST['checkValues'];
          $_SESSION['cd_cm_from'] = $implode=implode(",", $checkValues);
          $_SESSION['cd_lang'] = $cd_lang=$_POST['cd_lang'];
          $_SESSION['cd_schedule'] = $cd_schedule=$_POST['cd_schedule'];
          $_SESSION['cd_exam_center'] = $cd_exam_center=$_POST['cd_exam_center'];
     }
      if(isset($_POST['es_btn']))
   {

        //$_SESSION['es_select_exam'] = $es_select_exam = $_POST['es_select_exam'];
              $checkValues=$_POST['checkValues'];
        $_SESSION['es_select_exam'] = $implode=implode(",", $checkValues);
             //$es_select_state = ($_POST['es_select_state'][0]);
        //$_SESSION['es_select_state'] = $es_select_state = $es_select_state;
       // $_SESSION['es_select_state'] = $es_select_state = $_POST['es_select_state'];
        $_SESSION['es_upsc_exam'] = $es_upsc_exam = $_POST['es_upsc_exam'];
        $_SESSION['es_upsc_prel_year'] = $es_upsc_prel_year = $_POST['es_upsc_prel_year'];
        $_SESSION['es_upsc_op_sub'] = $es_upsc_op_sub = $_POST['es_upsc_op_sub'];
        $_SESSION['es_upsc_coach_sub'] = $es_upsc_coach_sub = $_POST['es_upsc_coach_sub'];
        $_SESSION['es_upsc_lang'] = $es_upsc_lang = $_POST['es_upsc_lang'];
        $_SESSION['es_state_exam'] = $es_state_exam = $_POST['es_state_exam'];
        $_SESSION['es_state_prel_year'] = $es_state_prel_year = $_POST['es_state_prel_year'];
        $_SESSION['es_state_prel_state'] = $es_state_prel_state = $_POST['es_state_prel_state'];
        $_SESSION['es_state_op_sub'] = $es_state_op_sub = $_POST['es_state_op_sub'];
        $_SESSION['es_state_coach_sub'] = $es_state_coach_sub = $_POST['es_state_coach_sub'];
        $_SESSION['es_state_lang'] = $es_state_lang = $_POST['es_state_lang'];
        $_SESSION['es_past_attn_upsc'] = $es_past_attn_upsc = $_POST['es_past_attn_upsc'];
   }

   if(isset($_POST['other_btn'])) {
        $_SESSION['other_activity'] = $other_activity = $_POST['other_activity'];
        $_SESSION['other_national_level'] = $other_national_level = $_POST['other_national_level'];
        $_SESSION['other_year'] = $other_year = $_POST['other_year'];
        $_SESSION['other_pos'] = $other_pos = $_POST['other_pos'];
        $_SESSION['other_achieve'] = $other_achieve = $_POST['other_achieve'];
        $_SESSION['other_hobbies'] = $other_hobbies = $_POST['other_hobbies'];
   }

   if(isset($_POST['ref_btn']))
   {   
        $_SESSION['ref1_name'] = $ref1_name = $_POST['ref1_name'];
        $_SESSION['ref1_addr'] = $ref1_addr = $_POST['ref1_addr'];
        $_SESSION['ref1_city'] = $ref1_city = $_POST['ref1_city'];
        $_SESSION['ref1_mob'] = $ref1_mob = $_POST['ref1_mob'];
        $_SESSION['ref1_telephone'] = $ref1_telephone = $_POST['ref1_telephone'];
        $_SESSION['ref1_email'] = $ref1_email = $_POST['ref1_email'];
        $_SESSION['ref2_name'] = $ref2_name = $_POST['ref2_name'];
        $_SESSION['ref2_addr'] = $ref2_addr = $_POST['ref2_addr'];
        $_SESSION['ref2_city'] = $ref2_city = $_POST['ref2_city'];
        $_SESSION['ref2_mob'] = $ref2_mob = $_POST['ref2_mob'];
        $_SESSION['ref2_telephone'] = $ref2_telephone = $_POST['ref2_telephone'];
        $_SESSION['ref2_email'] = $ref2_email = $_POST['ref2_email'];

   //      // ************* Personal Detail Record Insert ******************8
             $query1="INSERT INTO `educ_persdetail_register`(`pd_id`, `sess`, `exam`, `pd_fname`, `pd_lname`, `pd_dob`, `pd_father_name`, `pd_mother_name`, `pd_gender`, `pd_mob1`, `pd_mob2`, `pd_email`, `pd_addr`, `pd_pincode`, `pd_city`, `pd_state`, `pd_pwd`, `pd_cnfrm_pwd`) 
             VALUES ('','".$_SESSION['pd_email']."','".$_SESSION['exam']."','".$_SESSION['pd_fname']."','".$_SESSION['pd_lname']."','".$_SESSION['pd_dob']."','".$_SESSION['pd_father_name']."','".$_SESSION['pd_mother_name']."','".$_SESSION['pd_gender']."','".$_SESSION['pd_mob1']."','".$_SESSION['pd_mob2']."','".$_SESSION['pd_email']."','".$_SESSION['pd_addr']."','".$_SESSION['pd_pincode']."','".$_SESSION['pd_city']."','".$_SESSION['pd_state']."','".$_SESSION['pd_pwd']."','".$_SESSION['pd_cnfrm_pwd']."')";
             if($conn->query($query1))
             {
                $query_id = "SELECT `pd_id` FROM `educ_persdetail_register` ORDER BY `pd_id` DESC ";
                $result_id = mysqli_query($conn, $query_id);
                $row_id = mysqli_fetch_array($result_id);
                $pers_id = $row_id[0];  // FOREIGN KEY OF OTHER
             }
             else
             {
                  echo '<script>alert("Problem In Personal details Step Data");</script>';
             }


   //      // ************* Family Detail Record Insert ******************8
             $query2="INSERT INTO `educ_familydetail_reg`(`fd_id`, `sess`, `exam`, `fd_fathr_occup`, `fd_fathr_telephone`, `fd_fathr_mob`, `fd_fathr_desig`, `fd_fathr_income`, `fd_fathr_pan`, `fa_mothr_occup`, `fa_mothr_telephone`, `fa_mothr_mob`, `fa_mothr_religion`, `fkid`)
              VALUES ('','".$_SESSION['pd_email']."','".$_SESSION['exam']."','".$_SESSION['fd_fathr_occup']."','".$_SESSION['fd_fathr_telephone']."','".$_SESSION['fd_fathr_mob']."','".$_SESSION['fd_fathr_desig']."','".$_SESSION['fd_fathr_income']."','".$_SESSION['fd_fathr_pan']."','".$_SESSION['fd_mothr_occup']."','".$_SESSION['fd_mothr_telephone']."','".$_SESSION['fd_mothr_mob']."','".$_SESSION['fd_religion']."', $pers_id)";

             if($conn->query($query2))
             {
                 // echo '<script>alert("Insert Family");</script>';
             }
             else
             {
                  echo '<script>alert("Problem In Family details Step Data");</script>';
             }

   //     // ************* Education  Detail Record Insert ****************** 

             $query3="INSERT INTO `educ_detail_reg`(`ed_id`, `sess`, `exam`, `ed_ssc_board`, `ed_ssc_name`, `ed_ssc_roll`, `ed_ssc_year`, `ed_ssc_percent`, `ed_ssc_rank`, `ed_hsc_board`, `ed_hsc_name`, `ed_hsc_roll`, `ed_hsc_year`, `ed_hsc_percent`, `ed_hsc_rank`, `ed_gd_university`, `ed_gd_inst`, `ed_gd_degree_name`, `ed_gd_year`, `ed_gd_percent`, `ed_gd_rank`, `ed_gd_appear_final`, `ed_pg_university`, `ed_pg_inst`, `ed_pg_degree_name`, `ed_pg_year`, `ed_pg_percent`, `ed_pg_rank`, `ed_pg_menu`, `ed_prof_cert_name`, `ed_prof_year`, `ed_prof_percent`, `ed_prof_rank`, `ed_prof_ssc_marksheet`, `ed_prof_hsc_marksheet`, `ed_prof_gd_marksheet`, `ed_prof_pg_marksheet`, `ed_prof_other_cert`, `ed_prof_scan_sign`, `fkid`) 
             VALUES ('','".$_SESSION['pd_email']."','".$_SESSION['exam']."','".$_SESSION['ed_ssc_board']."','".$_SESSION['ed_ssc_name']."','".$_SESSION['ed_ssc_roll']."','".$_SESSION['ed_ssc_year']."','".$_SESSION['ed_ssc_percent']."','".$_SESSION['ed_ssc_rank']."','".$_SESSION['ed_hsc_board']."','".$_SESSION['ed_hsc_name']."','".$_SESSION['ed_hsc_roll']."','".$_SESSION['ed_hsc_year']."','".$_SESSION['ed_hsc_percent']."','".$_SESSION['ed_hsc_rank']."','".$_SESSION['ed_gd_university']."','".$_SESSION['ed_gd_inst']."','".$_SESSION['ed_gd_degree_name']."','".$_SESSION['ed_gd_year']."','".$_SESSION['ed_gd_percent']."','".$_SESSION['ed_gd_rank']."','".$_SESSION['ed_gd_appear_final']."','".$_SESSION['ed_pg_university']."','".$_SESSION['ed_pg_inst']."','".$_SESSION['ed_pg_degree_name']."','".$_SESSION['ed_pg_year']."','".$_SESSION['ed_pg_percent']."','".$_SESSION['ed_pg_rank']."','".$_SESSION['ed_pg_menu']."','".$_SESSION['ed_prof_cert_name']."','".$_SESSION['ed_prof_cert_year']."','".$_SESSION['ed_prof_cert_percent']."','".$_SESSION['ed_prof_cert_rank']."','0','0','0','0','0','0', $pers_id)";

             if($conn->query($query3))
             {
                 // echo '<script>alert("Insert Education details");</script>';
             }
             else
             {
                  echo '<script>alert("Problem In Education details Step Data");</script>';
             }

   //    // ************* CET Detail Record Insert ******************8
             $query4="INSERT INTO `educ_cetdetail_reg`(`cd_id`, `sess`, `exam`, `cet_get_facility`, `cd_cm_from`, `cd_lang`, `cd_schedule`, `cd_exam_center`, `fkid`) 
             VALUES ('','".$_SESSION['pd_email']."','".$_SESSION['exam']."','".$_SESSION['cd_get_facility']."','".$_SESSION['cd_cm_from']."','".$_SESSION['cd_lang']."','".$_SESSION['cd_schedule']."','".$_SESSION['cd_exam_center']."', $pers_id)";
             if($conn->query($query4))
             {
                 // echo '<script>alert("Insert CET Details");</script>';
             }
             else
             {
                  echo '<script>alert("Problem In CET details Step Data");</script>';
             }

   //    // ************* EXAM-SUBJECT Detail Record Insert ******************8
            if (strcmp($_SESSION['exam'], 'CET')==0) 
            {
                $query5="INSERT INTO `educ_examsubdetail_reg`(`es_id`, `sess`, `exam`, `es_select_exam`,  `es_upsc_exam`, `es_upsc_prel_year`, `es_upsc_op_sub`, `es_upsc_coach_sub`, `es_upsc_lang`, `es_state_exam`, `es_state_prel_year`, `es_state_prel_state`, `es_state_op_sub`, `es_state_coach_sub`, `es_state_lang`, `es_past_attn_upsc` , `fkid`) 
                VALUES ('','".$_SESSION['pd_email']."','".$_SESSION['exam']."','".$_SESSION['es_select_exam']."', '".$_SESSION['es_upsc_exam']."','".$_SESSION['es_upsc_prel_year']."','".$_SESSION['es_upsc_op_sub']."','".$_SESSION['es_upsc_coach_sub']."','".$_SESSION['es_upsc_lang']."','".$_SESSION['es_state_exam']."','".$_SESSION['es_state_prel_year']."','".$_SESSION['es_state_prel_state']."','".$_SESSION['es_state_op_sub']."','".$_SESSION['es_state_coach_sub']."','".$_SESSION['es_state_lang']."','".$_SESSION['es_past_attn_upsc']."', $pers_id)";
                 if($conn->query($query5))
                 {
                     // echo '<script>alert("Insert Exam-Subject Details");</script>';
                 }
                 else
                 {
                      echo '<script>alert("Problem In Exam-Subject details Step Data");</script>';
                 }
            } 

   //     // ************* OTHER Detail Record Insert ******************8
             $query6="INSERT INTO `educ_otherdetail_reg`(`other_id`, `sess`, `exam`, `other_activity`, `other_national_level`, `other_year`, `other_pos`, `other_achieve`, `other_hobbies`, `fkid`) 
             VALUES ('','".$_SESSION['pd_email']."','".$_SESSION['exam']."','".$_SESSION['other_activity']."','".$_SESSION['other_national_level']."','".$_SESSION['other_year']."','".$_SESSION['other_pos']."','".$_SESSION['other_achieve']."','".$_SESSION['other_hobbies']."', $pers_id)";
             if($conn->query($query6))
             {
                 // echo '<script>alert("Insert Other Details");</script>';
             }
             else
             {
                  echo '<script>alert("Problem In Other details Step Data");</script>';
             }

   //     // ***********Reference Record Insert *********** 
             $query7="INSERT INTO `educ_refdetail_reg`(`ref_id`, `sess`, `exam`, `ref1_name`, `ref1_addr`, `ref1_city`, `ref1_mobile`, `ref1_telephone`, `ref1_email`, `ref2_name`, `ref2_addr`, `ref2_city`, `ref2_mobile`, `ref2_telephone`, `ref2_email`,`fkid`)
              VALUES ('','".$_SESSION['pd_email']."','".$_SESSION['exam']."','".$_SESSION['ref1_name']."','".$_SESSION['ref1_addr']."','".$_SESSION['ref1_city']."','".$_SESSION['ref1_mob']."','".$_SESSION['ref1_telephone']."','".$_SESSION['ref1_email']."','".$_SESSION['ref2_name']."','".$_SESSION['ref2_addr']."','".$_SESSION['ref2_city']."','".$_SESSION['ref2_mob']."','".$_SESSION['ref2_telephone']."','".$_SESSION['ref2_email']."', $pers_id)";
       
             if($conn->query($query7))
             {
                   echo '<script>alert("Registration Successfully Done..");</script>';
                   echo '<script>window.location.href="education.php";</script>';
             }
             else
             {
                  echo '<script>alert("Not Insert.. Problem In Reference Step Data");</script>';
             }

     }
?>