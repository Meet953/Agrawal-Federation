<?php 

include 'conn.php';

if(isset($_POST['login_btn']))
{
		
	 $login_email=$_POST['login_email'];
	 $login_pwd=$_POST['login_pwd'];

	$query="select * from user_registration where (user_email='$login_email' or user_phone='$login_email')and (user_pwd='$login_pwd')";
	
	 $result=mysqli_query($conn,$query);
	 $rows=mysqli_num_rows($result);

	if($rows==1)
	{ 
		session_start();
		while($data=mysqli_fetch_array($result))
		{
			$_SESSION['user_id']=$data[0];
		}
			echo '<script>alert("Welcome To AF");</script>';
			
			$_SESSION['user-login']=$_POST['login_email'];
		    $var1=($_SERVER['HTTP_REFERER']);
			echo '<script>window.location.href="'.$var1.'";</script>';
	}
	else
	{
		 echo '<script>alert("Sorry!! Please Check Details");</script>';
	}
}
?>