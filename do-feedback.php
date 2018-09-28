<?php
     include 'conn.php';
    // print_r($_POST);
     extract($_POST);
         
     if(is_array($_FILES)) 
     {
          // chairman
          if(is_uploaded_file($_FILES['feedback_logo']['tmp_name'])) 
          {
                $feedback_logo = $_FILES['feedback_logo']['name'];
               $sourcePath = $_FILES['feedback_logo']['tmp_name'];
               $targetPath = "images/Home/testimonials/".$_FILES['feedback_logo']['name'];  

               move_uploaded_file($sourcePath,$targetPath); //Upload img in folder

                $query="INSERT INTO `testinomial`(`test_id`, `test_img`, `test_desc`, `test_name`, `test_designation`) VALUES ('','$feedback_logo','$feedback_desc','$feedback_name','$feedback_desg')";

               if($conn->query($query))
               {
                    echo  '<script>alert("Posted Feedback Successfully..");</script>';
                    echo '<script>window.location.href="index.php";</script>';
               }
               else
               {
                    echo  '<script>alert("Error In Insert.");</script>';
               }
          }
     }
?>
