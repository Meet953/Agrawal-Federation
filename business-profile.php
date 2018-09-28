<?php 
  include 'conn.php';
  session_start();
  $u_id= $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "link.php"; ?>
</head>
<body>
    <?php include "header.php"; ?>
	<?php include "business-menu.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3>CATEGORIES</h3>
				<img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="1300" height="7"><br>
				<h4>My Advertisers</h4>
					<a href="business-advertiser-registration.php"><button type="button" class="btn btn-danger btn-md">Add New Advertiser</button></a><br><br>
					 <div class="row" style="overflow-x: auto;">
						<center>
              <table class="table table-bordered" style="width: auto;" >
   							<tbody>
   								<tr>
      							  <th><strong>Advertiser Name</strong></th>
       							  <th><strong>View Dashboard</strong></th>
        						  <th><strong>Edit</strong></th>
       						    <th><strong>Delete Advertise</strong></th>
        					    <th><strong>Date</strong></th>
        						  <th><strong>Status</strong></th>
        					</tr>
                  <?php
                  $sql = "SELECT * FROM advertiser_registration WHERE reg_id='$u_id'";
                  $result = mysqli_query($conn, $sql);
                  while ($row=mysqli_fetch_array($result)) { 
                      $Ar_id=$row['Ar_id'];
                    ?>
    							<tr style="color: grey;">
    							  <td><?php echo $row['Name'];  ?></td>
    							  <td><a href="business-adv-dashboard.php?Ar_id=<?php echo $Ar_id;?>">VIEW</a></td>
    							  <td><a href ='business_advertiser_registration_edit.php?Ar_id=<?php echo $Ar_id;?>'>Edit</a></td>
    							  <td><a href ='business_advertiser_registration_del.php?Ar_id=<?php echo $Ar_id;?>'>Remove</a></td>
    							  <td><?php echo "2017-3-5"; ?></td>
    							  <td><?php echo "Active"; ?></td>
    							 </tr>
                   <?php }?>
   							</tbody>
   						</table></center>
  					</div>
             <br>
  					<div class="row" >
  						<div class="col-md-8  col-md-offset-2" style="border: 2px dotted lightgrey;">
  							<div class="row" style="background-color: rgba(238, 238, 238, 0.63);">
  								<div class="col-md-8">
  									<h4>Profile</h4>
  								</div>
                  <?php 
                            $sql="SELECT * FROM user_registration WHERE user_email='".$_SESSION['user-login']."' or  user_phone = '".$_SESSION['user-login']."' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row=mysqli_fetch_array($result))
                                 {
                               ?>
                      <div class="col-md-4">
  									     <a href ="user_registration_edit.php?user_id=<?php echo $u_id; ?>"><button type="button" class="btn btn-primary btn-sm " style="float: right;">Edit</button></a>
  								    </div>
                </div>
                        <div class="row"><br>
                            <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                     	<label>
                                        <strong>First Name :</strong>
                                      </label>
                                  </div>
                                 	<div class="col-md-6">
                                    		<label style="font-weight: 600;"><?php echo $row['user_fname'];?></label>
                                  </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                     	<label>
                                        	<strong>Last Name :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    	<label style="font-weight: 600;"><?php echo $row['user_lname'];?></label>
                                  </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                    <label>
                                        <strong>Email :</strong>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_email'];?></label>
                                </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                  <div class="col-md-6">
                                      <label>
                                        	<strong>Mobile :</strong>
                                      </label>
                                  </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_phone'];?></label>
                                  </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                    <label>
                                      <strong> Address Line 1 :</strong>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_addr1'];?></label>
                                </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                             <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                    <label>
                                        <strong> Address Line 2:</strong>
                                    </label>
                                </div>
                                  <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_addr2'];?></label>
                                  </div> 
                              </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                    <label>
                                      <strong>City :</strong>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_city'];?></label>
                                </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                    <label>
                                      <strong>State :</strong>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                  <label style="font-weight: 600;"><?php echo $row['user_state'];?></label>
                                </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                    <label>
                                        <strong>Country :</strong>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_country'];?></label>
                                </div> 
                            </div>
                        </div>
                        <hr style="margin-top: 5px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-md-6">
                                    <label>
                                        <strong>Gender  :</strong>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label style="font-weight: 600;"><?php echo $row['user_gender'];}?></label>
                                </div> 
                            </div>
                        </div>
  						</div>
  					</div><br>

				        <div class="row">
		    		      <center><h5>Your Advertise Will Be Place Here Size 752x90</h5></center>
		            </div>
      </div>
      <?php include 'business-ad.php'; ?>
    	</div>
</div>
<br><!--  end of container -->
	<?php include "footer.php"; ?>	
</body>
</html>
		

			
		