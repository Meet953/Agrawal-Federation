<?php
     include 'conn.php';
     extract($_POST);
      $med_address;
          $explod_addr=(explode("*", $lblresult)); // Explode Address, Latitude, Long.
          $lblresult=array_shift($explod_addr); // Remove Address
     $lat_long=(implode(" , ", $explod_addr)); 
     if(is_array($_FILES)) 
     {
          if(is_uploaded_file($_FILES['med_logo']['tmp_name'])) 
          {
               $med_logo = $_FILES['med_logo']['name'];
               $sourcePath = $_FILES['med_logo']['tmp_name'];
               $targetPath = "images/medical/".$_FILES['med_logo']['name'];  

               move_uploaded_file($sourcePath,$targetPath); //Upload img in folder
          }
          else
          {
               $med_logo = $img_val;
          }
         
               $query="UPDATE `medical` SET `med_type`='$med_type',`med_name`='$med_name', `med_land_add`='$med_address', `med_addr`='$lblresult',`lat_long`='$lat_long',`med_pincode`='$med_pincode',`med_phone`='$med_phone',`med_ciy`='$med_city',`med_state`='$med_state',`med_country`='$med_country',`med_about`='$med_about',`med_website`='$med_website',`med_educ`='$med_educ',`med_open_time`='$med_open',`med_close_time`='$med_close', `med_logo`='$med_logo', `med_cont_name`='$med_cont_name',`med_cont_phone`='$med_cont_phone',`med_cont_email`='$med_cont_email',`med_cont_desig`='$med_cont_desig',`med_cont_detail`='$med_cont_secure',`med_cont_fb`='$med_cont_fb',`med_cont_twitter`='$med_cont_twitter',`med_cont_linkedin`='$med_cont_linkin' WHERE `med_id`='$id'";

               if($conn->query($query))
               {
                    echo  '<script>alert("Posting Update Successfully");</script>';
                    echo '<script>window.location.href="medical-profile.php";</script>';
               }
               else
               {
                    echo  '<script>alert("Unsuccessfully Posting.");</script>';
               }
     }
?>
