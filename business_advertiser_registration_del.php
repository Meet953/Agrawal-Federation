<?php
	session_start();
    include 'conn.php';
    if($_GET['Ar_id'])
    {
      $id = $_GET['Ar_id'];
      $query = "DELETE FROM `advertiser_registration` WHERE Ar_id='$id'";
      if($conn->query($query))
      {
      		echo  '<script>alert("Deleted Successfully..");</script>';
          echo '<script>window.location.href="business-profile.php";</script>';
      }
      else
      {
      		echo  '<script>alert("Error in Delete");</script>';
      }
    }
?>