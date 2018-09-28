<?php
     include 'conn.php';
     //print_r($_POST);
     
      extract($_POST);
        if(is_array($_FILES)) 
     {
          if(is_uploaded_file($_FILES['Logo']['tmp_name'])) 
          {
               $Logo = $_FILES['Logo']['name'];
               $sourcePath = $_FILES['Logo']['tmp_name'];
               $targetPath = "images/business/".$_FILES['Logo']['name'];  

           move_uploaded_file($sourcePath,$targetPath); //Upload img in folder
            $query="INSERT INTO `advertiser_registration`(Ar_id,reg_id,`Name`,`TagLine`, `Email`, `Mobile`, `Contact_Number_Code`, `Contact_Number`, `Address1`, `Address2`, `Country`, `Secondary_Country`, `State`, `SecondaryState`, `city`,`Secondary_City`, `Description`, `Long_Description`, `Year`, `Website`, `Certification`, `Licenses`, `Payment_Method`, `Languages`, `Category`, `Subcategory`, `Locale`, `Service_Area`,`working_days`, `Hours_of_Operation`, `Logo`, `Specialities`, `BusinessType`, `AdvertiserType`) 
          
          VALUES ('','$reg_id','$pd_fname','$tag_line','$pd_email','$pd_mob1','$pd_mob2','$pd_mob3','$pd_addr','$Address2','$Country','$Secondary_Country','$State','$SecondaryState','$city','$Secondary_City','$Description','$Long_Description','$Year','$Website','$Certification','$Licenses','$Payment_Method','$Languages','$Category','$Subcategory','$Locale','$Service_Area','$working_days','$working_hours','$Logo','$Specialities','$BusinessType','$AdvertiserType')";
               if($conn->query($query))
               {
                    echo  '<script>alert("Data Inserted Successfully..");</script>';
                    echo '<script>window.location.href="business-profile.php";</script>';
               }
               else
               {
                    echo  '<script>alert("Record Should be Unique...");</script>';
               }
          }
     }      

?>