<?php 
  include 'conn.php';
  session_start();
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
	<?php include "header.php"; ?>
	<?php include "business-menu.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3 >Advertiser Registration</h3>
                 <a style="float: right; margin-top: -55px;" href="business-profile.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
				<img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="1300" height="7"><br><br>
			<div class="col-md-12 reg_sec_border"><br>
                <form class=" form-horizontal" action="bar.php" method="post" id="search_form" enctype="multipart/form-data" autocomplete="off">
				<div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Business Name : <span class="star"  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter  Name"  id="pd_fname" name="pd_fname"   />
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Tag Line</strong> : </label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter Tag Line"  id="tag_line" name="tag_line" />
                            </div>
                        </div>
                </div>  
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Email : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Email Id" id="pd_email" name="pd_email" />
                               <span id="edu_error_email" style="display: none; color:red;">Invalid Email</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Mobile : <span  class="star">*</span></strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                 <input   type="text" class="form-control" placeholder="Enter Mobile No."  id="pd_mob1" name="pd_mob1" required maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                 <span id="edu_mob_span"></span>
                            </div>
                    </div>
                </div>               
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Contact Number Code :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                             <input   type="text" class="form-control" placeholder="Enter Mobile No."  id="pd_mob2" name="pd_mob2" maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Contact Number :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                 <input   type="text" class="form-control" placeholder="Enter Mobile No."  id="pd_mob3" name="pd_mob3" maxlength="10" minlength="10" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                                 <span id="edu_mob_span"></span>
                            </div>
                    </div>
                </div>        
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Address Line 1 :<span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control"  required="required" rows="3" placeholder="Enter Address" name="pd_addr" id="pd_addr"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong> Address Line 2 :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="3" placeholder="Enter Address" name="Address2" id="Address2"></textarea>
                        </div>
                    </div>
                </div>        
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Country : <span  class="star">*</span></strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" required="required" id="Country" name="Country" onChange="getState(this.value);">
                            <option value="">Select Country</option>
                             <?php 
                            $sql = "SELECT * FROM countries";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>
                        </select>
                    	</div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary Country : </strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="Secondary_Country" name="Secondary_Country" onChange="getState1(this.value);">
                            <option value="">Select Country</option>
                             <?php 
                            $sql = "SELECT * FROM countries";
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
                            <label for="usr"><strong>State : <span  class="star">*</span></strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" required="required" id="State" name="State" onChange="getcity(this.value);">
                            <option value="">select State</option>
                        </select>
                    	</div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary State : </strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="SecondaryState" name="SecondaryState" onChange="getcity1(this.value);">
                            <option value="">select States</option>
                        </select>
                    	</div>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>City : <span  class="star">*</span></strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" required="required" id="city" name="city" >
                         ?>
                            <option value="">select City</option>
                        </select>
                    	</div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Secondary City : *</strong></label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" id="Secondary_City" name="Secondary_City">
                         ?>
                            <option value="">select City</option>
                        </select>
                    	</div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Description : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" required="required" rows="3" id="Description" name="Description" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Long Description :</strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="3" id="Long_Description" name="Long_Description" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                </div>          
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong> Year Established : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" required="required" class="form-control" placeholder="Enter Year" id="Year" name="Year" maxlength="4" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Website :</strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter Website " name="Website" id="Website">
                            </div>
                        </div>
                </div>
 				<div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Certification : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" placeholder="Enter Certificate" name="Certification" id="Certification">
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Licenses : <span  class="star">*</span></strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" class="form-control" placeholder="Enter License " name="Licenses" id="Licenses">
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Payment Method : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" required="required" class="form-control" placeholder="Enter Method" name="Payment_Method" id="Payment_Method">
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="col-md-4 form-group">
                                <label for="usr"><strong>Languages : <span  class="star">*</span></strong></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" required="required" class="form-control" placeholder="Enter Language " name="Languages" id="Languages">
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Category : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group" >
                            <select class="category" name="Category" required="required" id="Category" style="width: 231px; height: 42px;">

                            <option value="">Select Category</option>

                             <?php 
                            $sql = "SELECT * FROM buisness_category";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name']; }?></option>
							</select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Subcategory : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="category" required="required" name="Subcategory" id="Subcategory" style="width: 231px; height: 42px;">
                              <option value="">Select Subcategory</option>  
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
                            <label for="usr"> <strong>Locale : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="category" required="required" name="Locale" id="Locale" style="width: 231px; height: 42px;">
                              <option value="">Select Locale</option>  
							  <option value="Mumbai">Mumbai</option>
							  <option value="Pune">Pune</option>
							  <option value="Delhi">Delhi</option>
							</select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"> <strong>Service Area : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="category" required="required" name="Service_Area" id="Service_Area" style="width: 231px; height: 42px;">
                                <option value="">Select Service Area</option>
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
                        <select class="form-control" required="required" id="working_days" name="working_days">
                        <option value="">Select </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                             <option value="3">3</option>
                            <option value="4">4</option>
                             <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="Whole Week">Whole Week</option>                             
                            </select>
                    	</div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Hours of Operation :</strong> </label>
                        </div>
                    	<div class="col-md-8 form-group">
                        <select class="form-control" required="required" id="working_hours" name="working_hours">
                        <option value="">Select </option>
                            <option value="2 to 4 ">2 to 4 </option>
                            <option value="4 to 6 ">4 to 6  </option>
                            <option value="6 to 8 ">6 to 8  </option> 
                             <option value="8 to 10 "> 8 to 10 </option>
                            <option value="More than 10 "> More than 10 </option>
                                                       
                            </select>
                    	</div>Hrs
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Logo : <span  class="star">*</span></strong></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <label for="email">PHOTO &nbsp;&nbsp;</label>
                          <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="chairLayer">
                        <br><br>
                        <input type="file" name="Logo" required="required" id="Logo" class="btn btn-defualt btn-block">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="col-md-4 form-group">
                            <label for="usr"><strong>Specialities:</strong> </label>
                        </div>
                         <div class="col-md-8 form-group">
                            <textarea class="form-control" rows="5" id="Specialities" name="Specialities" placeholder="Enter Address"></textarea>
                        </div>
                    </div>
                </div>
   <div class="row">
              <div class="col-md-6">
                <div class="col-md-5 form-group">
                  <label for="usr"><strong>Business Type :</strong></label>
                </div>
                <div class="col-md-7 form-group">
                  <label><input type="checkbox" value="Trader" id="BusinessType" name="BusinessType">&nbsp;Trader</label>
                  <br>
                  <label><input type="checkbox" value="Manufacturer" id="BusinessType" name="BusinessType">&nbsp;Manufacturer</label>
                  <label><input type="checkbox" value="Professional" id="BusinessType" name="BusinessType">&nbsp;Professional</label>
                  <label><input type="checkbox" value="Service Provider" id="BusinessType" name="BusinessType">&nbsp;Service Provider</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-5 form-group">
                  <label for="usr"><strong>Advertiser Type :</strong></label>
                </div>
                <div class="col-md-7 form-group">
                  <label><input type="checkbox" value="Basic" name="AdvertiserType" id="AdvertiserType">&nbsp;Basic</label>
                  <br>
                  <label><input type="checkbox" value="Premium" name="AdvertiserType" id="AdvertiserType">&nbsp;Premium</label><br>
                  <label><input type="checkbox" value="Superlisting" name="AdvertiserType" id="AdvertiserType">&nbsp;Superlisting</label>
                </div>
              </div>
            </div><br>
            <div class="row">
              <center><input class="btn btn-danger" type="submit" name="reg_submit1" id="reg_submit1" value="Save" onclick="return validate();" >&nbsp;&nbsp;&nbsp;&nbsp;
              <button type="reset" class="btn btn-danger" >Reset</button></center></a>
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
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>

 <script type="text/javascript">
        $(document).ready(function() {
            $('#search_form').bootstrapValidator({
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                       mem_name: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your Name'
                                }
                            }
                        },
                         comp_name: {
                            validators: {
                                stringLength: {
                                    min: 3,
                                },
                                notEmpty: {
                                    message: 'Please enter your Company Name'
                                }
                            }
                        },
                         
                         Category1:{
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your Category'
                                }
                            }
                        },
                       
                        
                       
                        BusinessType1: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your Business'
                                }
                            }
                        },
                        Country2: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your Country'
                                }
                            }
                        },
                         State2: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your State'
                                }
                            }
                        },
                        city2: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your City'
                                }
                            }
                        },
                        Year: {
                             
                            validators: {
                                stringLength: {
                                    min: 4,
                                },
                                notEmpty: {
                                    message: 'Please enter Year'
                                }
                            }
                        },
                        pd_email: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please enter your email_id'
                                },
                               regexp: {
                        regexp: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/,
                        message: 'The email address is not valid'
                    }
                            }
                        },

                         Licenses: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please enter your value'
                                }
                            }
                        },
                   

                          Certification: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please enter your value'
                                }
                            }
                        },

                         BusinessType: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your value'
                                }
                            }
                        },

                        AdvertiserType: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please select your value'
                                }
                            }
                        },
                   pd_mob1: {
                            validators: {
                                
                                notEmpty: {
                                    message: 'Please enter your contact No'
                                }
                            }
                        },
                         
                                          
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                   

 var reg_id = "<?= $reg_id; ?>";
    var BusinessType = $('input[name=BusinessType]:checked').map(function()
            {
                return $(this).val();
            }).get();
    
    var AdvertiserType = $('input[name=AdvertiserType]:checked').map(function()
            {
                return $(this).val();
            }).get();
                
                    // Prevent form submission
                    e.preventDefault();
                     var formData = new FormData(this);
     formData.append('reg_id', reg_id);
     formData.append('BusinessType', BusinessType);
     formData.append('AdvertiserType', AdvertiserType);

                $.ajax({
                   url: "bar.php", // do-registration1.php
      type: "POST",
      data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                    $("#reg-result1").html(data); 
                        
                       
                    },
                    error: function() {}
                });

                 $('#search_form').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);
                    
                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');
                   
                });
        });

    </script>

</body>
</html>


