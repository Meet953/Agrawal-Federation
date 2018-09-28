<?php session_start();?>
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
$sql="SELECT * FROM advertiser_registration WHERE Ar_id='$Ar_id'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if (!$result) 
        {
        die("Error: Data not found..");
        }

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
                $Subcategory=$row['Subcategory'];
                $Locale=$row['Locale'];
                $Service_Area=$row['Service_Area'];
                $working_days=$row['working_days'];
                $Hours_of_Operation=$row['Hours_of_Operation'];
                $Languages=$row['Languages'] ;
                $Specialities=$row['Specialities'] ;
                $pcountry=$row['Country'] ;
                $pcategory=$row['Category'] ;
                $scategory=$row['Subcategory'] ;
                $scountry=$row['Secondary_Country'] ;
                $pstate=$row['State'] ;
                $sstate=$row['SecondaryState'] ;
                $pcity=$row['city'] ;
                $scity=$row['Secondary_City'] ;
                $AdvertiserType=$row['AdvertiserType'] ;
                $BusinessType=$row['BusinessType'] ;
                ?>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h3 >Advertiser Registration</h3>
                 <a style="float: right; margin-top: -55px;" href="business-profile.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
        <img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="1300" height="7"><br><br>
      <div class="col-md-12 reg_sec_border"><br>
                <form  method="post" action="ff.php">
        <div class="row">
                    <input type="hidden" name="Ar_id" value="<?php echo $Ar_id ?>">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Name : *</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Name; ?> 
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Tag Line</strong> : </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <?php echo $TagLine; ?>
                            </div>
                        </div>
                </div>  
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Email : *</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Email; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Mobile : *</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <?php echo $Mobile; ?>
                            </div>
                    </div>
                </div>               
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Contact Number Code :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                           <?php echo $Contact_Number_Code; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Contact Number :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <?php echo $Contact_Number; ?>
                            </div>
                    </div>
                </div>        
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Address Line 1 :*</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                           <?php echo $Address1; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong> Address Line 2 :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Address2; ?>
                        </div>
                    </div>
                </div>        
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Country : *</strong></label>
                        </div>
                      <div class="col-md-8 form-group">
                        
                             <?php include 'conn.php';
                            $sql = "SELECT * FROM countries WHERE cid = '$pcountry'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <?php echo $row['cname']; }?>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary Country : *</strong></label>
                        </div>
                      <div class="col-md-8 form-group">
                             <?php 
                            $sql = "SELECT * FROM countries WHERE cid = '$scountry'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>
                             
                      </div>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>State : *</strong></label>
                        </div>
                      <div class="col-md-8 form-group">
                             <?php 
                            $sql = "SELECT * FROM states WHERE sid = '$pstate'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                           <option value="<?php echo $row['sid'] ?>"><?php echo $row['sname']; }?></option>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary State : *</strong></label>
                        </div>
                      <div class="col-md-8 form-group">
                            <?php 
                            $sql = "SELECT * FROM states WHERE sid = '$sstate'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                        
                           <option value="<?php echo $row['sid'] ?>"><?php echo $row['sname']; }?></option>
                      </div>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>City : *</strong></label>
                        </div>
                      <div class="col-md-8 form-group">
                           <?php 
                            $sql = "SELECT * FROM cities WHERE city_id = '$pcity'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                           <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name']; }?></option>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary City : *</strong></label>
                        </div>
                      <div class="col-md-8 form-group">
                           <?php 
                            $sql = "SELECT * FROM cities WHERE city_id = '$scity'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                            ?>
                        
                           <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name']; }?></option>
                      </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Description :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Description ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Long Description :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Long_Description; ?>
                        </div>
                    </div>
                </div>          


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong> Year Established :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Year; ?>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Website :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <?php echo $Website; ?>
                            </div>
                        </div>
                </div>
        

        <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Certification :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Certification; ?>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Licenses :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <?php echo $Licenses; ?>
                            </div>
                        </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Payment Method:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Payment_Method; ?>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Languages:</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <?php echo $Languages; ?>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Category:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            

                             <?php 
                            $sql = "SELECT * FROM buisness_category WHERE cat_id = '$pcategory'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        
                           <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name']; }?></option>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Subcategory:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Subcategory; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Locale:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                           <?php echo $Locale; ?> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Service Area:</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <?php echo $Service_Area; ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Number of working days :</strong> </label>
                        </div>
                      <div class="col-md-8 form-group">
                       <?php echo $working_days; ?>
                      </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Hours of Operation :</strong> </label>
                        </div>
                      <div class="col-md-8 form-group">
                        <?php echo $Hours_of_Operation; ?>
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
                        
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Specialities:</strong> </label>
                        </div>
                         <div class="col-md-8 form-group">
                            <?php echo $Specialities; ?>
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
                <div class="col-md-7 form-group">
                 <?php echo $BusinessType; ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="col-md-5 form-group">
                  <label for="usr"><strong>Advertiser Type :</strong></label>
                </div>
                <div class="col-md-7 form-group">
                  <?php echo $AdvertiserType; ?>
                </div>
              </div>
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

   



</body>
</html>


