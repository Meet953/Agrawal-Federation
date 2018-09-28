<?php session_start();
  $reg_id = $_SESSION['user_id'];

  ?>
<!DOCTYPE html>
<html>
<head>
	<?php include "link.php"; ?>
    <style type="text/css">
        .image-preview-input {
    position: relative;
    overflow: hidden;
    margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
    </style>
</head>
<body>

	
	<?php include "business-menu.php"; ?>
<?php
require("conn.php");



$Ar_id=$_GET['Ar_id'];
 //echo $pcategory=$_GET['category']; ;

$sql="SELECT * FROM advertiser_registration WHERE Ar_id='$Ar_id'";

$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
 $img_val = $row['Logo'];
if (!$result) 
        {
        die("Error: Data not found..");
        }
                //echo(arg1)$Logo=$row['Logo'];
                $pcategory=$row['Category'] ;
                $Name=$row['Name'] ;
                $TagLine= $row['TagLine'] ;                 
                $Email=$row['Email'] ;
                $Mobile=$row['Mobile'] ;
                $Contact_Number_Code=$row['Contact_Number_Code'] ;
                $Contact_Number=$row['Contact_Number'] ;
                $Address1=$row['Address1'] ;
                $Address2=$row['Address2'] ;
                $Description=$row['Description'] ;
                $Long_Description=$row['Long_Description'] ;
                $Year=$row['Year'] ;
                $Website=$row['Website'] ;
                $Certification=$row['Certification'] ;
                $Licenses=$row['Licenses'] ;
                $Payment_Method=$row['Payment_Method'] ;
                $Languages=$row['Languages'] ;
                $Specialities=$row['Specialities'] ;
                $pcountry=$row['Country'] ;
                $scountry=$row['Secondary_Country'] ;
                $pstate=$row['State'] ;
                $sstate=$row['SecondaryState'] ;
                $pcity=$row['city'] ;
                $scity=$row['Secondary_City'] ;
                $pworking_days=$row['working_days'] ;
                $pHours_of_Operation=$row['Hours_of_Operation'];
                $plocal_id=$row['Locale'];
                $pAdvertiserType=$row['AdvertiserType'];
                $pBusinessType=$row['BusinessType'];
                ?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3 >Advertiser Registration</h3>
                 <a style="float: right; margin-top: -55px;" href="business-profile.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
				<img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="1300" height="7"><br><br>
               
                <!-- <div class="col-md-3">
                          <a href="business-profile.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
                        </div><br> -->

			<div class="col-md-12 reg_sec_border"><br>
                <form class="form-validate form-horizontal" action="ff1.php" method="post" name="form3" id="form3">
               
				<div class="row">
                   <!--  <input type="hidden" name="Ar_id" value="<?php// echo $Ar_id ?>"> -->
                        

                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Name : *</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Name" name="Name" value="<?php echo $Name ?>" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');">

                       </div>

                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Tag Line</strong> : </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter Tag Line " name="TagLine" value="<?php echo $TagLine ?>">
                            </div>
                        </div>
                </div>  


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Email : *</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Email" name="Email" value="<?php echo $Email ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Mobile : *</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" name="Mobile" value="<?php echo $Mobile ?>" placeholder="Enter Mobile " maxlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                    </div>
                </div>               

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Contact Number Code :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Contact Number Code" name="Contact_Number_Code" value="<?php echo $Contact_Number_Code ?>" maxlength="5" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" >
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Contact Number :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter Mobile " name="Contact_Number" value="<?php echo $Contact_Number ?>" maxlength="8" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                    </div>
                </div>        

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Address Line 1 :*</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="3" placeholder="Enter Address" name="Address1"><?php echo $Address1 ?></textarea>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong> Address Line 2 :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="3" placeholder="Enter Address" name="Address2"><?php echo $Address2 ?></textarea>
                        </div>
                    </div>
                </div>        
                    
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Country : *</strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="Country" name="Country" onChange="getState(this.value);">
                             <?php include 'conn.php';
                            $sql = "SELECT * FROM countries WHERE cid = '$pcountry'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>
                            <?php 
                            $sql = "SELECT * FROM countries WHERE NOT cid = '$pcountry'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>
                        </select>
                    	</div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary Country : *</strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                         <select class="form-control" id="Secondary_Country" name="Secondary_Country" onChange="getState1(this.value);">
                         <option value="">select country</option>
                             <?php 
                            $sql = "SELECT * FROM countries WHERE cid = '$scountry'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        
                           <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>
                             <?php 
                            $sql = "SELECT * FROM countries WHERE NOT cid = '$scountry'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        
                           <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>
                        </select>
                    	</div>
                    </div>
                </div>     


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>State : *</strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="State" name="State" onChange="getcity(this.value);">
                             <?php 
                            $sql = "SELECT * FROM states WHERE sid = '$pstate'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                        
                           <option value="<?php echo $row['sid'] ?>"><?php echo $row['sname']; }?></option>
                        </select>
                    	</div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary State : *</strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="SecondaryState" name="SecondaryState" onChange="getcity1(this.value);">
                          <option value="">select state</option>
                            <?php 
                            $sql = "SELECT * FROM states WHERE sid = '$sstate'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                        
                           <option value="<?php echo $row['sid'] ?>"><?php echo $row['sname']; }?></option>
                          
                        </select>
                        </div>
                    </div>
                </div>     
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>City : *</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                        <select class="form-control" id="city" name="city" >
                            
                           <?php 
                            $sql = "SELECT * FROM cities WHERE city_id = '$pcity'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                        
                           <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name']; }?></option>
                          
                        </select>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary City : *</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                       <select class="form-control" id="Secondary_City" name="Secondary_City">
                          <option value="">select city</option>
                         ?>
                           <?php 
                            $sql = "SELECT * FROM cities WHERE city_id = '$scity'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                        
                           <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name']; }?></option>
                           
                        </select>
                        </div>
                    </div>
                </div> 


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Description :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="3"  name="Description" placeholder="Enter Description"><?php echo $Description ?></textarea>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Long Description :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="3"  name="Long_Description" placeholder="Enter Description"><?php echo $Long_Description ?></textarea>
                        </div>
                    </div>
                </div>          


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong> Year Established :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Year" value="<?php echo $Year ?>" name="Year" maxlength="4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Website :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter Website " name="Website" value="<?php echo $Website ?>">
                            </div>
                        </div>
                </div>
 				

 				<div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Certification :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Certificate" name="Certification" value="<?php echo $Certification ?>">
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Licenses :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter License " name="Licenses" value="<?php echo $Licenses ?>">
                            </div>
                        </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Payment Method:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Method" name="Payment_Method" value="<?php echo $Payment_Method ?>">
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Languages:</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter Language " name="Languages" value="<?php echo $Languages ?>">
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Category:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="category" name="Category" id="Category" style="width: 231px; height: 42px;">

                             <?php 
                             $sql = "SELECT * FROM buisness_category WHERE cat_id = '$pcategory'";
                             $result = mysqli_query($conn, $sql);
                             while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name']; }?></option>

                         <?php 
                            $sql = "SELECT * FROM buisness_category WHERE NOT cat_id = '$pcategory'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        
                           <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name']; }?></option>
                          
                        </select>
                           
                        </div>
                    </div>


                   



                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Subcategory:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="category" style="width: 231px; height: 42px;" name="Subcategory" id="Subcategory">
							  <option value="trader">Trader</option>
							  <option value="manufacturer">Manufacturer</option>
							  <option value="professional">Professional</option>
							  <option value="Languages">Languages</option>
							</select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Locale:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="category" style="width: 231px; height: 42px;" name="Locale" id="Locale">
							  <?php 
                             $sql = "SELECT * FROM locale WHERE local_id = '$plocal_id'";
                             $result = mysqli_query($conn, $sql);
                             while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        <option value="<?php echo $row['local_id'] ?>"><?php echo $row['local_name']; }?></option>

                         <?php 
                            $sql = "SELECT * FROM locale WHERE NOT local_id = '$plocal_id'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        
                           <option value="<?php echo $row['local_id'] ?>"><?php echo $row['local_name']; }?></option>
                          
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Service Area:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="category" style="width: 231px; height: 42px;" name="Service_Area" id="Service_Area">
							  <option value="Mumbai">Mumbai</option>
							  <option value="Pune">Pune</option>
							  <option value="Delhi">Delhi</option>
							</select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Number of working days :</strong> </label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="working_days" name="working_days">
                            <?php 
                             $sql = "SELECT * FROM no_of_days WHERE nod_id = '$pworking_days'";
                             $result = mysqli_query($conn, $sql);
                             while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        <option value="<?php echo $row['nod_id'] ?>"><?php echo $row['nod_value']; }?></option>

                         <?php 
                            $sql = "SELECT * FROM no_of_days WHERE NOT nod_id = '$pworking_days'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        
                           <option value="<?php echo $row['nod_id'] ?>"><?php echo $row['nod_value']; }?></option>
                          
                        </select>
                    	</div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Hours of Operation :</strong> </label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="Hours_of_Operation" name="Hours_of_Operation">
                           <?php 
                             $sql = "SELECT * FROM no_of_days WHERE nod_id = '$pHours_of_Operation'";
                             $result = mysqli_query($conn, $sql);
                             while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        <option value="<?php echo $row['nod_id'] ?>"><?php echo $row['nod_value']; }?></option>

                         <?php 
                            $sql = "SELECT * FROM no_of_days WHERE NOT nod_id = '$pHours_of_Operation'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        
                           <option value="<?php echo $row['nod_id'] ?>"><?php echo $row['nod_value']; }?></option>
                          
                        </select>
                    	</div>
                    </div>
                </div>


                <div class="row">
                 <?php 
                            $sql = "SELECT * FROM advertiser_registration WHERE Ar_id='$Ar_id'";
                            $result = mysqli_query($conn, $sql);
                            $row=mysqli_fetch_array($result)
                         ?>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Logo: *</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <label for="email">PHOTO &nbsp;&nbsp;</label>
                           
                          <img src="images/business/<?php echo $row['Logo']; ?>" height="150" width="200" id="chairLayer">
                        <br><br>
                        <input type="file" name="Logo"  id="Logo" class="btn btn-defualt btn-block">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Specialities:</strong> </label>
                        </div>
                         <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="5" name="Specialities" placeholder="Enter Address"><?php echo $Specialities ?></textarea>
                        </div>
                    </div>
                </div>
                


                <!--  <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Address Line 1 :*</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="4" id="comment" placeholder="Enter Address"></textarea>
                        </div>
                    </div>
                </div> -->

                <div class="row">
              <div class="col-md-6">
                <div class="col-md-5 form-group">
                  <label for="usr"><strong>Business Type :</strong></label>
                </div>

                <?php
                    $myarr = Array();
                    $txt = $pBusinessType;
                    $a=explode(',',$txt);
                    foreach($a as $v)
                    {
                            array_push($myarr, $v);
    /*echo $v;
    echo "<br>";*/
                    }
                   // print_r($myarr);

                    $checkedTrader = '';
                    $checkedManufacturer = '';
                    $checkedProfessional = '';
                    $checkedService = '';

                    foreach($myarr as $lang) {
                    if (($lang == "Trader")) {
                             $checkedTrader = 'checked';
                        } else if ($lang == "Manufacturer") {
                             $checkedManufacturer = 'checked';
                        }else if ($lang == "Professional") {
                             $checkedProfessional = 'checked';
                        }else if ($lang == "Service") {
                             $checkedService = 'checked';
                        }
                    }
                ?> 

                <div class="col-md-7 form-group">
                  <label><input type="checkbox" value="Trader" <?php echo $checkedTrader; ?> name="BusinessType">&nbsp;Trader</label>
                  <br>
                  <label><input type="checkbox" value="Manufacturer" <?php echo $checkedManufacturer; ?> name="BusinessType">&nbsp;Manufacturer</label>
                  <label><input type="checkbox" value="Professional" <?php echo $checkedProfessional; ?> name="BusinessType">&nbsp;Professional</label>
                  <label><input type="checkbox" value="Service" <?php echo $checkedService; ?> name="BusinessType">&nbsp;Service Provider</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="col-md-5 form-group">
                  <label for="usr"><strong>Advertiser Type :</strong></label>
                </div>

                <?php
                    $myarr = Array();
                    $txt = $pAdvertiserType;
                    $a=explode(',',$txt);
                    foreach($a as $v)
                    {
                            array_push($myarr, $v);
    /*echo $v;
    echo "<br>";*/
                    }
                   // print_r($myarr);

                    $checkedBasic = '';
                    $checkedPremium = '';
                    $checkedSuperlisting = '';

                    foreach($myarr as $lang) {
                    if (($lang == "Basic")) {
                             $checkedBasic = 'checked';
                        } else if ($lang == "Premium") {
                             $checkedPremium = 'checked';
                        }else if ($lang == "Superlisting") {
                             $checkedSuperlisting = 'checked';
                        }
                    }
                ?> 
                <div class="col-md-7 form-group">
                  <label><input type="checkbox" value="Basic" name="AdvertiserType" <?php echo $checkedBasic; ?> >&nbsp;Basic</label>
                  <br>
                  <label><input type="checkbox" value="Premium" name="AdvertiserType" <?php echo $checkedPremium; ?>>&nbsp;Premium</label><br>
                  <label><input type="checkbox" value="Superlisting" name="AdvertiserType" <?php echo $checkedSuperlisting; ?>>&nbsp;Superlisting</label>
                </div>
              </div>
            </div><br>


            <div class="row">
              <center><input class="btn btn-danger" type="Submit" name="submit1" id="submit1" value="Save" style="width: 200px; font-size: 16px;" >
              </center>
              <div id="reg-result1"></div>
            </div><br>
            </form>
      
            </div><br><br> 
                
                <div class="row">
                    <center><h5>Your Advertise Will Be Place Here Size 752x90</h5></center>
                </div>
            </div>    


       

             
				
		
		    <?php include 'business-ad.php'; ?>
    	</div>
</div><br><!--  end of container -->
		

	<?php include "footer.php"; ?>	

    <script>
    function getState(val) {
    $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'cid='+val,
    success: function(data){
        $("#State").html(data);
    }
    });
}
</script>

    <script>
    function getcity(val) {
    $.ajax({
    type: "POST",
    url: "get_city.php",
    data:'sid='+val,
    success: function(data){
        $("#city").html(data);
    }
    });
}
</script>


<script>
    function getState1(val) {
    $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'cid='+val,
    success: function(data){
        $("#SecondaryState").html(data);
    }
    });
}
</script>

<script>
    function getcity1(val) {
    $.ajax({
    type: "POST",
    url: "get_city.php",
    data:'sid='+val,
    success: function(data){
        $("#Secondary_City").html(data);
    }
    });
}
</script>

<script type="text/javascript">
$(document).ready(function (e) {
  // CHAIRMAN
  $("#form3").on('submit',(function(e) {//form id 
    var Ar_id = "<?= $Ar_id; ?>";
    var img_val = "<?= $img_val; ?>";
    // alert(Ar_id);
    var reg_id = "<?= $reg_id; ?>";
    var BusinessType = $('input[name=BusinessType]:checked').map(function()
            {
                return $(this).val();
            }).get();
    
    var AdvertiserType = $('input[name=AdvertiserType]:checked').map(function()
            {
                return $(this).val();
            }).get();
   
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('Ar_id', Ar_id);
     formData.append('img_val', img_val);
     formData.append('reg_id', reg_id);
     formData.append('BusinessType', BusinessType);
     formData.append('AdvertiserType', AdvertiserType);
   
    $.ajax({
      url: "ff1.php", 
      type: "POST",
      data: formData,
      contentType: false,
          cache: false,
      processData:false,
      success: function(data)
        {
          $("#reg-result1").html(data); //result
        },
        error: function() 
        {
        }           
     });
  }));
  $(function()
    {
      $('#Logo').change(function(){ // input file id
        {
          var reader=new FileReader();
          reader.onload=imageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function imageIsLoaded(e){
      $('#chairLayer').attr('src', e.target.result); // id
      $('#chairLayer').attr('width', '200px'); // id
      $('#chairLayer').attr('height', '150px'); // id
    };
});
</script>



</body>
</html>


