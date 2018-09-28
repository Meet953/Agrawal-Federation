<?php
	include 'conn.php';
	$user_fname=$_POST['user_fname'];
	if(isset($user_fname)){
		 $user_edit_id=$_POST['user_edit_id'];
		 $user_membertype=$_POST['user_membertype'];
		 $user_fname=$_POST['user_fname'];
		 $user_lname=$_POST['user_lname'];
		 $user_addr1=$_POST['user_addr1'];
		 $user_addr2=$_POST['user_addr2'];
		 $user_city=$_POST['user_city'];
		 $user_state=$_POST['user_state'];
		 $user_country=$_POST['user_country'];
		 $user_gender=$_POST['user_gender'];

		$query="UPDATE `user_registration` SET `user_fname`='$user_fname',`user_lname`='$user_lname',`user_addr1`='$user_addr1',`user_addr2`='$user_addr2',`user_country`='$user_country',`user_state`='$user_state',`user_city`='$user_city',`user_gender`='$user_gender',`user_membertype`='$user_membertype' WHERE user_id='$user_edit_id'";

		if($conn->query($query)){
			echo '<script>alert("User Profile Update Successfully..");</script>';
			echo '<script>window.location.href="profile.php";</script>';
		}
		else{
			echo '<script>alert("Unsccessfully For Update Profile");</script>';	
		}
	}
?>