<?php
	session_start();
include 'conn.php';

extract($_POST);
error_reporting(0);

if($subcribe_email=="" || strlen($subcribe_email)<'3' || !preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/", $subcribe_email))
{
	?>
		<div style="color: red;">Please Enter Valid Email ID</div>
	<?php
}
else
{
    /*mail to user*/

    $subject  = "Shared Information From www.trypune.com for Subcribe";
    $headers  = "MIME-Version: 1.0;\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1;\n";

    $headers .= "From:info@trypune.com";

    $message_from_us = "<h2>Information From Try Pune</h2>
        <p><b>Hi &nbsp;".$subcribe_email.",</b>&nbsp;</p>
		<p>Thank you for Try Pune Subcribe</p>
		<p>Contact No: +91 1122 334 555
		</p>
		
		";
    mail($subcribe_email, $subject, $message_from_us, $headers);

    /*mail to company*/

    $subject1  = "Shared Information From www.trypune.com (Interested for Subcribe)";
    $headers1  = "MIME-Version: 1.0;\n";
    $headers1 .= "Content-type: text/html; charset=iso-8859-1;\n";


    $message_from_user1 = "<h2>Information of User</h2>
        <p><b>Respected HR,</b><br/>
        &nbsp; Below are the detail of Subcriber From www.trypune.com </p>
		<p> subcribe email of User: <b>".$subcribe_email."</b> </p>
		";
    mail("sandeep.leelatech@gmail.com",$subject1, $message_from_user1, $headers1);

    //echo '<script>alert("Thank you '.$name.'");window.location="index.php";</script>';

    date_default_timezone_set("Asia/Kolkata");	
    $datetime = date('d/m/Y h:i:s');

    $sql="INSERT INTO `subscribe`(`subscribe_email`) VALUES ('$subcribe_email')";
	if($conn->query($sql)==true)
	{
		echo '<script>alert("Subscribe Successfully..");</script>';
		//echo '<script>window.location.href="index.php";</script>';
	}
	else
	{
		echo '<script>alert("Problem In Subscribe");</script>';

	}


 }




?>