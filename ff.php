<?php
session_start();
require("conn.php");
$Ar_id=$_POST['Ar_id'];

                if(isset($_POST['submit1']))
{  
    $Name1 = $_POST['Name'];
    $TagLine1 = $_POST['TagLine'];
    $Email1 = $_POST['Email'];
    $Mobile1 = $_POST['Mobile'];
    $Contact_Number_Code1 = $_POST['Contact_Number_Code'];
    $Contact_Number1 = $_POST['Contact_Number'];
    $Address11 = $_POST['Address1'];
    $Address21 = $_POST['Address2'];
    $Country1 = $_POST['Country'];
    $Secondary_Country1 = $_POST['Secondary_Country'];
    $State1 = $_POST['State'];
    $SecondaryState1 = $_POST['SecondaryState'];
    $city1 = $_POST['city'];
    $Secondary_City1 = $_POST['Secondary_City'];
    $Description1 = $_POST['Description'];
    $Long_Description1 = $_POST['Long_Description'];
    $Year1 = $_POST['Year'];
    $Website1 = $_POST['Website'];
    $Certification1 = $_POST['Certification'];
    $Licenses1 = $_POST['Licenses'];
    $Payment_Method1 = $_POST['Payment_Method'];
    $Languages1 = $_POST['Languages'];
    $working_days1 = $_POST['working_days'];
    $Hours_of_Operation1 = $_POST['Hours_of_Operation'];
    $Specialities1 = $_POST['Specialities'];
    
    $sql="UPDATE `advertiser_registration` SET `Name`='$Name1',`TagLine`='$TagLine1',`Email`='$Email1',`Mobile`='$Mobile1',`Contact_Number_Code`='$Contact_Number_Code1',`Contact_Number`='$Contact_Number1',`Address1`='$Address11',`Address2`='$Address21',`Country`='$Country1',`Secondary_Country`='$Secondary_Country1',`State`='$State1',`SecondaryState`='$SecondaryState1',`city`='$city1',`Secondary_City`='$Secondary_City1',`Description`='$Description1',`Long_Description`='$Long_Description1',`Year`='$Year1',`Website`='$Website1',`Certification`='$Certification1',`Licenses`='$Licenses1',`Payment_Method`='$Payment_Method1',`Languages`='$Languages1',`working_days`='$working_days1',`Hours_of_Operation`='$Hours_of_Operation1',`Specialities`='$Hours_of_Operation1' WHERE `advertiser_registration`.`Ar_id` = '$Ar_id'";
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
    echo "Saved!";
    echo "<script>alert('Saved!');</script>";    
     header("location: business-profile.php");          
}
mysqli_close($conn);

?>
