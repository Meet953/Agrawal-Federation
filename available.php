<?php include 'conn.php';
$email=$_POST["email"];
if(isset($_POST["email"]))
{
    
   
    $sql = "SELECT `pd_email` FROM `educ_persdetail_register` WHERE `pd_email`='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <input type='hidden' name='emailcheck' id='emailcheck' value='1'>";
        echo "Email Exists Please Enter Another One";
    }
    }
 else
    {
     echo " <input type='hidden' name='emailcheck' id='emailcheck' value='0'>";
  echo "";
    }
       
    
   
}