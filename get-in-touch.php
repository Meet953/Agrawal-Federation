<?php 
	include 'conn.php';
	extract($_POST);
	$query="INSERT INTO `get_in_touch`(`get_in_tch_id`, `get_in_tch_name`, `get_in_tch_email`, `get_in_tch_subj`, `get_in_tch_phone`, `get_in_tch_msg`)
	 VALUES ('','$cont_name','$cont_mail','$cont_subj','$cont_phone','$cont_msg')";
		if($conn->query($query))
        {
             echo '<script>alert("Will Contact With You Very Soon.");</script>';
             echo '<script>window.location.href="contact-us.php";</script>';
        }
        else
        {
             echo  '<script>alert("Error In Data");</script>';
        }
?>