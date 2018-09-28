<?php
session_start();
require("conn.php");
$user_id=$_SESSION['user_id'];

                if(isset($_POST['submit2']))
{  





			$fname=$_POST['user-fname'];
			$lname=$_POST['user-lname'];
			//$email=$_POST['user-email'];
			$phone=$_POST['user-phone'];
			$addr1=$_POST['user-addr1'];
			$addr2=$_POST['user-addr2'];
			$country=$_POST['user-country'];
			$state=$_POST['user-state'];
			$city=$_POST['user-city'];
			$gender=$_POST['user-gender'];
			$membertype=$_POST['user-membertype'];
			//$pwd=$_POST['user-pwd'];
			//$cmpwd=$_POST['user-cmpwd'];



			if($fname == "")
			{
				echo "<script>alert('Enter First Name');</script>";
			}
			elseif($lname == "")
			{
echo"<script>alert('Enter Last Name');</script>";
			}
			elseif($phone == "")
			{
				echo"<script>alert('Enter Phone Number');</script>";
			}
			else
			{

	$sql="UPDATE `user_registration` SET `user_fname`='$fname',`user_lname`='$lname',`user_phone`='$phone',`user_addr1`='$addr1',`user_addr2`='$addr2',`user_country`='$country',`user_state`='$state',`user_city`='$city',`user_gender`='$gender',`user_membertype`='$membertype' WHERE user_id='$user_id'";
	
	if($conn->query($sql)){
		echo '<script>alert("Profile Updated Successfully.");</script>';
		echo '<script>window.location.href="business-profile.php";</script>';
	}
	else{
		echo '<script>alert("Profile Not Updated.");</script>';		
	}       
}

}
mysqli_close($conn);

?>