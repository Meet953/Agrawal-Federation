<?php

	include 'conn.php';
	if(isset($_POST['edu_login_btn']))
	{
		 $edu_login_email=$_POST['edu_login_email'];
		 $edu_login_pwd=$_POST['edu_login_pwd'];
		 $edu_login_exam=$_POST['edu_login_exam'];

		$query="select * from educ_persdetail_register where pd_email='$edu_login_email' or pd_mob1='$edu_login_email' and pd_pwd='$edu_login_pwd' and exam='$edu_login_exam'";
		$result=mysqli_query($conn, $query);
		$row=mysqli_num_rows($result);

		if($row==1)
		{ 
			session_start();
				echo '<script>alert("Welcome To Education Module");</script>';
				
				$_SESSION['edu-user']=$_POST['edu_login_email'];
			    $var1=($_SERVER['HTTP_REFERER']);
				echo '<script>window.location.href="'.$var1.'";</script>';
		}
		else
		{
			 echo '<script>alert("Please Check Email Id or Password");</script>';
		}
	}
?>