<?php
     include 'conn.php';
    // print_r($_POST);
     extract($_POST);
         
     if(is_array($_FILES)) 
     {
          if(is_uploaded_file($_FILES['Logo']['tmp_name'])) 
          {
               $img_val1 = $_FILES['Logo']['name'];
               $sourcePath = $_FILES['Logo']['tmp_name'];
               $targetPath = "images/business/".$_FILES['Logo']['name'];  

               move_uploaded_file($sourcePath,$targetPath); //Upload img in folder
          }
          else
          {
               $img_val1 = $img_val;
          }

                $query="UPDATE `advertiser_registration` SET `Logo`='$img_val1',`Name`='$Name',`TagLine`='$TagLine',`Email`='$Email',`Mobile`='$Mobile',`Contact_Number_Code`='$Contact_Number_Code',`Contact_Number`='$Contact_Number',`Address1`='$Address1',`Address2`='$Address2',`Country`='$Country',`Secondary_Country`='$Secondary_Country',`State`='$State',`SecondaryState`='$SecondaryState',`city`='$city',`Secondary_City`='$Secondary_City',`Description`='$Description',`Long_Description`='$Long_Description',`Year`='$Year',`Website`='$Website',`Certification`='$Certification',`Licenses`='$Licenses',`Payment_Method`='$Payment_Method',`Languages`='$Languages',`Category`='$Category',`working_days`='$working_days',`Hours_of_Operation`='$Hours_of_Operation',`Specialities`='$Specialities' ,`BusinessType`='$BusinessType',`AdvertiserType`='$AdvertiserType',`Locale`='$Locale',`Service_Area`='$Service_Area' WHERE `advertiser_registration`.`Ar_id` = '$Ar_id'";

               if($conn->query($query))
               {
                    echo  '<script>alert("Business Advertiser Registration Updated Successfully..");</script>';
                    echo '<script>window.location.href="business-profile.php";</script>';
               }
               else
               {
                    echo  '<script>alert("Error in Update");</script>';
               }
          }
?>
