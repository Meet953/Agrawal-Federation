<?php

 $user_fname=$_POST['user_fname'];
include 'conn.php';
if(isset($user_fname))
{
//echo "demo";
	//echo '<script>alert("DS");</script>';
	$user_fname=$_POST['user_fname'];
     $user_lname=$_POST['user_lname'];
     $user_email=$_POST['user_email'];
     $user_phone=$_POST['user_phone'];
     $user_addr1=$_POST['user_addr1'];
     $user_addr2=$_POST['user_addr2'];
     $Country1=$_POST['Country1'];
     $State1=$_POST['State1'];
     $city1=$_POST['city1'];
     $user_gender=$_POST['user_gender'];
     $user_membertype=$_POST['user_membertype'];
     $user_pwd=$_POST['user_pwd'];
	$user_cmpwd=$_POST['user_cmpwd'];

     // CITY / COUNTRY / STATE NAME
    if (!$user_fname.trim(" ") || $user_fname=="" || strlen($user_fname)<'2' ) {
				?>
	    	    <div class="alert alert-danger">Enter First Name More Than 3 Char</div>
	        <?php
	    }
	    elseif (!$user_lname.trim(" ") || $user_lname=="" || strlen($user_lname)<'2' ) {
	    		?>
	    	    <div class="alert alert-danger">Enter last Name More Than 3 Char</div>
	        <?php
	    }
	    elseif ($user_membertype=="") {
	    		?>
	    	    <div class="alert alert-danger">Select member type</div>
	        <?php
	    }
	    elseif ($user_gender=="") {
	    		?>
	    	    <div class="alert alert-danger">Select gender</div>
	        <?php
	    }
	 elseif ($user_phone=="" || strlen($user_phone) != 10) {
	    		?>
	    	    <div class="alert alert-danger">Enter Valid Phone no.</div>
	        <?php
	    }
	 elseif ($user_addr1=="") {
	    		?>
	    	    <div class="alert alert-danger">Enter Address</div>
	        <?php
	    }
	 elseif ($user_pwd=="" || strlen($user_pwd)<'6' ) {
				?>
	    	    <div class="alert alert-danger">Enter password More Than 3 Char</div>
	        <?php
	    	   
	    }
	   elseif ($Country1=="") {
			?>
	    	    <div class="alert alert-danger">Enter Country</div>
	        <?php
}
	 elseif ($State1=="") {
			?>
	    	    <div class="alert alert-danger">Enter State</div>
	        <?php
}
	 elseif ($city1=="") {
			?>
	    	    <div class="alert alert-danger">Enter City</div>
	        <?php
}
	 elseif ($user_pwd != $user_cmpwd) {
			?>
	    	    <div class="alert alert-danger">Password does not match</div>
	        <?php
}


    
    else if ($user_email=="" || strlen($user_email)<'3' || !preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/", $user_email)) {
	?>
	<div class="alert alert-danger">Enter Valid Email ID</div>
	<?php
    }
    
	
	else {
	
	$depend_query = "SELECT * FROM countries e INNER JOIN states d ON e.cid = d.cid INNER JOIN cities c ON d.sid=c.sid WHERE e.cid='$Country1' AND d.sid='$State1' AND c.city_id='$city1'";
        $depend_result = mysqli_query($conn, $depend_query);
        $depend_row = mysqli_fetch_array($depend_result);   
             $country = $depend_row['cname'];
             $state = $depend_row['sname'];
             $city = $depend_row['city_name'];

		
		
		
		$sql = "Select * from  `user_registration` where user_email =  '$user_email'";
		
		$result = mysqli_query($conn, $sql);

		$sql2 = "Select * from  `user_registration` where user_phone =  '$user_phone'";
		
		$result2 = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result) > 0) {
		   
		        ?>
				<div class="alert alert-danger">Email Already Exists !!</div>
				<?php
				exit;
		    
		}
		else if (mysqli_num_rows($result2) > 0) {
		   
		        ?>
				<div class="alert alert-danger">Phone No. Already Exists !!</div>
				<?php
				exit;
		    
		}

		else{
			
    $query="INSERT INTO `user_registration`(`user_id`, `user_fname`, `user_lname`, `user_email`, `user_phone`, `user_addr1`, `user_addr2`, `user_country`, `user_state`, `user_city`, `user_gender`, `user_membertype`, `user_pwd`) 
    	VALUES ('','$user_fname','$user_lname','$user_email','$user_phone','$user_addr1','$user_addr2','$country','$state','$city','$user_gender','$user_membertype','$user_pwd')";
   
    if($conn->query($query))
    {
    		?>
	        	<div class="alert alert-success">  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> Success Member Registered <i class="glyphicon glyphicon-thumbs-up"></i></div>

	        	
	        <?php
	        echo '<script>window.location="index.php";</script>';
    }
    else
    {
		?>
	    	    <div class="alert alert-danger">Registration Not Done.</div>
	        <?php
    	 
    }
		}
}
}	

?>