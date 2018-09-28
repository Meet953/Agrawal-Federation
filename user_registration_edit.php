<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
   
    <?php include "link.php"; ?>
      
  </head>

  
<!-- <style>
b{
  color:red;
}
</style> -->
  <body>
    <?php include "header.php" ?>
    <?php include "business-menu.php"; ?>
            <?php
            $user_id =$_SESSION['user_id'];;

            $sql="SELECT * FROM user_registration WHERE user_id='".$_SESSION['user_id']."'";

            $result=mysqli_query($conn,$sql);

            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

            if (!$result) 
                    {
                    die("Error: Data not found..");
                    }

                          $user_fname=$row['user_fname'] ;
                           $user_lname= $row['user_lname'] ;                 
                            // $user_email=$row['user_email'] ;
                           $user_phone=$row['user_phone'] ;
                           $user_addr1=$row['user_addr1'] ;
                           $user_addr2=$row['user_addr2'] ;
                            // $Address1=$row['Address1'] ;
                            // $Address2=$row['Address2'] ;
                           $user_country=$row['user_country'] ;
                           $user_state=$row['user_state'] ;
                           $user_city=$row['user_city'] ;
                           $user_gender=$row['user_gender'] ;
                           $user_membertype=$row['user_membertype'] ;
                            //$user_pwd=$row['user_pwd'] ;
                            //$user_cmpwd=$row['user_cmpwd'] ;
                           ?>
             
       <div class="container">
          <div class="row">
             <div class="col-md-9 hide2">
                <h3>Registration<a style="float: right;" href="business-profile.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>  </h3>
                <img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="860" height="7"><br><br>




               <div class="col-md-12  reg_sec_border">
                   <form class="form-validate form-horizontal" action="user_registration_update.php" method="post" name="regn_form" id="regn_form">
                    <br><br>
                      <!-- Row 1 -->
                      <div class="form-group">
                        <label for="cname" class="control-label col-md-2">
                          <b> First Name </b>
                          <span class="star-impo required">*</span>
                        </label>
                        <div class="col-md-8">
                          <input class="form-control" id="user-fname" name="user-fname" type="text"  value="<?php echo $user_fname; ?>" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="First name is required."/> 
                        </div>
                      </div>

                      <!-- Row 2 -->               
                      <div class="form-group ">
                        <label for="cname" class="control-label col-md-2"><b> Last Name </b><span class=" star-impo required">*</span>
                        </label>
                        <div class="col-md-8">
                          <input class="form-control" id="user-lname" name="user-lname" type="text" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');" required data-msg-required="Last name is required." value="<?php echo $user_lname ?>"> 
                        </div>
                      </div>

                      <!-- Row 3 -->
                      

                       <!-- Row 4 -->           
                      <div class="form-group">
                          <label class="col-md-2 control-label"><b>Mobile No</b> <span class="star-impo required">*</span>
                          </label>
                          <div class="col-md-8">
                          <input type="text" class="form-control" id="user-phone"  name="user-phone" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" value="<?php echo $user_phone ?>">
                          </div>
                      </div>

                      <!-- Row 5 --> 
                      <div class="form-group">
                        <label class="col-md-2 control-label"><b>Address Line 1</b><span class="star-impo required">*</span></label>
                        <div class="col-md-8">
                          <textarea class="form-control" rows="3" cols="4" id="user-addr1"  name="user-addr1" required><?php echo $user_addr1 ?></textarea>
                        </div>
                      </div>

                      <!-- Row 6 -->                       
                      <div class="form-group">
                        <label class="col-md-2 control-label"><b>Address Line 2</b></label>
                        <div class="col-md-8">
                          <textarea class="form-control" rows="3" cols="4" id="user-addr2"  name="user-addr2" ><?php echo $user_addr2 ?></textarea>
                        </div>
                      </div>
                      
                      <!-- Row 7 -->                               
                      <div class="form-group">
                        <label class="col-md-2 control-label"><b>Country</b><span class="star-impo required">*</span></label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" id="user-country"  name="user-country" value="<?php echo $user_country; ?>">
                          <!-- <select class="form-control" id="user-country"  name="user-country"  required>
                            <option value="">Select Country</option>
                            <option value="India">India</option>
                            <option value="Africa">Africa</option>
                            <option value="Canada">Canada</option>
                            <option value="Pakistan">Pakistan</option>
                          </select> -->
                        </div>
                      </div>

                      <!-- Row 8 -->  
                      <div class="form-group">
                        <label class="col-md-2 control-label"><b>State</b></label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" id="user-state"  name="user-state" value="<?php echo $user_state; ?>">
                          <!-- <select class="form-control" id="user-state"  name="user-state" >
                              <option value="">Select State</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Gujrat">Gujrat</option>
                              <option value="Chennai">Chennai</option>
                          </select> -->
                        </div>
                      </div>

                      <!-- Row 9 --> 
                      <div class="form-group">
                        <label class="col-md-2 control-label"><b>City</b></label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" id="user-city"  name="user-city" value="<?php echo $user_city; ?>">
                         <!--  <select class="form-control" id="user-city"  name="user-city" >
                            <option value="">Select City</option>
                            <option value="Pune">Pune</option>
                            <option value="Nashik">Nashik</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Akola">Akola</option>
                          </select> -->
                        </div>
                      </div>

                      <!-- Row 10 -->                 
                      <div class="form-group">
                        <label for="radioGroup" class="col-md-2 control-label"><b>Gender</b></label>
                        <div class="col-md-8">
                          <label class="col-md-4 radio-inline">
                           <!--  <input type="radio" name="user-gender" id="user-gender" value="Male">Male -->
                           <!--  <input name="user-gender" id="user-gender" value="Male" type="radio"> -->
                           <input type="radio" name="user-gender" id="user-gender" value="Male" <?php echo $row['user_gender'] == 'Male' ? 'checked' : ''; ?>>Male
                          </label>
                          <label class="col-md-4 radio-inline">
                             <!-- <input name="user-gender" id="user-gender" value="Female" type="radio"> -->
                            <!--  <input type="radio" name="user-gender" id="user-gender"  value="Female">Female -->
                              <input type="radio" name="user-gender" id="user-gender"  value="Female" <?php echo $row['user_gender'] == 'Female' ? 'checked' : ''; ?>>Female
                          </label>
                        </div>  
                      </div> 

                    <!-- Row 11 -->   
                    <div class="form-group">
                        <label for="radioGroup" class="col-md-2 control-label"><b>Membership Type</b></label>
                        <div class="col-md-10">
                          <label class="col-md-3 radio-inline">
                            <!-- <input name="user-membertype" id="user-membertype" value="FCP" type="radio">FCP -->
                            <input type="radio" name="user-membertype" id="user-membertype"  value="FCP" <?php echo $user_membertype == 'FCP' ? 'checked' : ''; ?>>FCP
                          </label>
                          <label class="col-md-3 radio-inline">
                            <!--  <input name="user-membertype" id="user-membertype" value="Patron" type="radio">Patron -->
                             <input type="radio" name="user-membertype" id="user-membertype"  value="Patron" <?php echo $user_membertype == 'Patron' ? 'checked' : ''; ?>>Patron
                          </label>
                          <label class="col-md-3 radio-inline">
                             <!-- <input name="user-membertype" id="user-membertype" value="User" type="radio">User -->
                             <input type="radio" name="user-membertype" id="user-membertype"  value="User" <?php echo $user_membertype == 'User' ? 'checked' : ''; ?>>User
                          </label>
                        </div>  
                      </div> 
                      <!-- Row 12 -->  
                        

                      <!-- Row 13 -->  
                       

                      <!-- Row 14 -->  
                      
                       <!-- Row 15 --> 
                        <center>
                          <input class="btn btn-primary" name="submit2" id="submit2" type="submit" onclick="return validate();" value="Save">
                        
                      </center>
                  </div><br>
                  </form>
                  </div>

                  <?php include 'business-ad.php'; ?>
                <div class="modal-footer">
                  <div class="form-group">
                    <div class="col-md-2 col-md-offset-4">
                     
                    </div>                         
                  <!-- </div>                          
              </form> -->
                </div>
            </div>
          </div>
        </div>
  

     
  
</div>
  <?php include "footer.php";?>

 
  
</body>
</html>


