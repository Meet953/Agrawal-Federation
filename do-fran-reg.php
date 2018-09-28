<?php
error_reporting(0);
	session_start();
include 'conn.php';
	echo $fname=$_POST['fname'];
	echo $lname=$_POST['lname'];
	echo $email=$_POST['email'];
	echo $mobile=$_POST['mobile'];
	echo $address=$_POST['address'];
	echo $Country4=$_POST['Country4'];
	echo $State4=$_POST['State4'];
	echo $city4=$_POST['city4'];
	echo $chapter=$_POST['chapter'];
	echo $gender=$_POST['gender'];
	echo $captcha_code=$_POST['captcha_code'];
 if (!$fname.trim(" ") || $fname=="" || strlen($fname)<'2' ) {
				?>
	    	    <div class="alert alert-danger">Enter First Name More Than 3 Char</div>
	        <?php
	    }
	    elseif (!$lname.trim(" ") || $lname=="" || strlen($lname)<'2' ) {
	    		?>
	    	    <div class="alert alert-danger">Enter last Name More Than 3 Char</div>
	        <?php
	    }
	    elseif ($chapter=="") {
	    		?>
	    	    <div class="alert alert-danger">Enter Franchisee</div>
	        <?php
	    }
	    elseif ($gender=="") {
	    		?>
	    	    <div class="alert alert-danger">Select gender</div>
	        <?php
	    }
	 elseif ($mobile=="" || strlen($mobile) != 10) {
	    		?>
	    	    <div class="alert alert-danger">Enter Valid Phone no.</div>
	        <?php
	    }
	 elseif ($address=="") {
	    		?>
	    	    <div class="alert alert-danger">Enter Address</div>
	        <?php
	    }
	 
	   elseif ($Country4=="") {
			?>
	    	    <div class="alert alert-danger">Enter Country</div>
	        <?php
}
	 elseif ($State4=="") {
			?>
	    	    <div class="alert alert-danger">Enter State</div>
	        <?php
}
	 elseif ($city4=="") {
			?>
	    	    <div class="alert alert-danger">Enter City</div>
	        <?php
}
    else if ($email=="" || strlen($email)<'3' || !preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/", $email)) {
	?>
	<div class="alert alert-danger">Enter Valid Email ID</div>
	<?php
    }
	else {
	echo  $query="INSERT INTO `Franchisee`(Fran_id,`Fran_fname`,`Fran_lname`, `Fran_email`, `Fran_mobile`, `Fran_address`, `Fran_country`, `Fran_state`, `Fran_city`, `Fran_chapter`, `Fran_gender`, `Fran_captcha`) 
		VALUES ('','$fname','$lname','$email','$mobile','$address','$Country4','$State4','$city4','$chapter','$gender','$captcha_code')";
	if($conn->query($query)==true)
	{
		 echo '<script>alert("Successfully Applied for Franchisee ");</script>';
		 echo '<script>window.location="business.php";</script>';
	}
	else
	{
		?>
	    	    <div class="alert alert-danger">Un-Successfully Applied for Franchisee </div>
	        <?php
	}
	}
?>