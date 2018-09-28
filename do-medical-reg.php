<?php
	include 'conn.php';
     extract($_POST);
          $explod_addr=(explode("*", $lblresult)); // Explode Address, Latitude, Long.
          $remove_addr=array_shift($explod_addr); // Remove Address
      $lat_long=(implode(" , ", $explod_addr)); 

     // CITY / COUNTRY / STATE NAME
        $depend_query = "SELECT * FROM countries e INNER JOIN states d ON e.cid = d.cid INNER JOIN cities c ON d.sid=c.sid WHERE e.cid='$med_country' AND d.sid='$med_state' AND c.city_id='$med_city'";
        $depend_result = mysqli_query($conn, $depend_query);
        $depend_row = mysqli_fetch_array($depend_result);   
               $country = $depend_row['cname'];
               $state = $depend_row['sname'];
               $city = $depend_row['city_name'];
         if(is_array($_FILES)) 
     {
          if(is_uploaded_file($_FILES['med_logo']['tmp_name'])) 
          {
               $img_name = $_FILES['med_logo']['name'];
               $sourcePath = $_FILES['med_logo']['tmp_name'];
               $targetPath = "images/medical/".$_FILES['med_logo']['name'];  

               move_uploaded_file($sourcePath,$targetPath); 
                 $query="INSERT INTO `medical`(`med_id`, `user_id`, `med_sess`, `med_type`, `med_name`, `med_land_add`, `med_addr`, `lat_long`, `med_pincode`, `med_phone`, `med_ciy`, `med_state`, `med_country`, `med_about`, `med_website`, `med_educ`, `med_open_time`, `med_close_time`, `med_logo`, `med_cont_name`, `med_cont_phone`, `med_cont_email`, `med_cont_desig`, `med_cont_detail`, `med_cont_fb`, `med_cont_twitter`, `med_cont_linkedin`, `status`) 
               VALUES ('','$user_id','$med_sess','$med_type','$med_name','$remove_addr', '$med_address','$lat_long','$med_pincode','$med_phone','$city','$state','$country','$med_about','$med_website','$med_educ','$med_open','$med_close','$img_name','$med_cont_name','$med_cont_phone','$med_cont_email','$med_cont_desig','$med_cont_secure','$med_cont_fb','$med_cont_twitter','$med_cont_linkin','$status')";

               if($conn->query($query))
               {
                    echo  '<script>alert("Posting Successfully");</script>';
                    echo '<script>window.location.href="medical.php";</script>';
               }
               else
               {
                    echo  '<script>alert("Unsuccessfully Posting.");</script>';
               }
                 
          }
}
?>
