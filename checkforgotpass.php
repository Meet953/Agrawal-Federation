<?php 
require_once('conn.php');
session_start();
extract($_POST);
if (isset($useremail)) {
	if ($useremail=="" || strlen($useremail)<'3' || !preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/", $useremail)) {
		?>
		<div class="alert alert-danger">Enter Valid Email ID</div>
		<?php
	}
	else{
		$sql = "SELECT * FROM `user_registration` WHERE user_email = '$useremail'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		    	
		    	$userid = $row['user_id'];
		    	$randno = rand(111111,999999);

		    	$subject  = "Shared Information From www.trypune.com for Forgot Password";
			    $headers  = "MIME-Version: 1.0;\n";
			    $headers .= "Content-type: text/html; charset=iso-8859-1;\n";

			    $headers .= "From:info@trypune.com";

			    echo $message_from_us = "<h2>Information From Try Pune</h2>
			        <p><b>Hi &nbsp;".$useremail.",</b>&nbsp;</p>
					<p>Thank you Choose Try Pune</p>
					<p><br> Your Forgot Password OTP is: <br><br><b>".$randno."<br><br>
					</p>";

			    
				$sql = "UPDATE `user_registration` SET `userreg_otp`='$randno' WHERE user_id = '$userid'";
				if ($conn->query($sql) === TRUE) {
					$_SESSION['forgotuserid'] = $userid;
				    mail($useremail, $subject, $message_from_us, $headers);
				}
				?>
					<div class="alert alert-info">Email Send ..Please Check Your Email</div>
				<?php
				echo "<script>window.location='checkforgotpassword.php';</script>";
		    }
		}
		else{
			?>
			<div class="alert alert-info">Email Not Available Please Register First..!!</div>
			<?php
		}
	}
}
if (isset($myotp)) {
	//echo $myotp;
	$userid = $_SESSION['forgotuserid'];
	$sql = "SELECT * FROM `user_registration` WHERE userreg_otp = '$myotp' AND user_id='$userid'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		    	$_SESSION['otpsuccess'] = $userid;
		    	echo "<script>window.location='enternewpassword.php';</script>";
			}
		}
		else{
			?>
			<div class="alert alert-info">OTP is Not correct..!! Please Check Your Mail</div>
			<?php
		}
}
if (isset($newpass)) {
	if ($newpass=="" || strlen($newpass)<'6') {
		?>
		<div class="alert alert-danger">Enter new password More Than 6 Char</div>
		<?php
	}
	elseif ($newpass != $repass) {
			?>
		<div class="alert alert-danger">Password Not Same</div>
		<?php
	}else{

		$userid = $_SESSION['forgotuserid'];

		$sql = "UPDATE user_registration SET user_pwd ='$newpass', userreg_otp=' ' WHERE user_id = '$userid'";

		if ($conn->query($sql) === TRUE) {
			?>
				<div class="alert alert-info">Password Reset.. Please Login..</div>
			<?php

			session_unset($_SESSION['forgotuserid']);
			session_unset($_SESSION['otpsuccess']);

		   echo "<script>window.location='enternewpassword.php';</script>";
		}
	}
}
?>