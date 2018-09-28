<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php include"link.php"; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>  
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</head>
	
	
<style>
b{
  color:red;
}
</style>
<body>
  <?php include 'header.php'; ?>
 <?php include 'business-menu.php'; ?>
  <div class="container-fluid" >
      <div class="row jb_search_box">
      
        <!-- searching-header start  -->
      <?php include "searching-header.php";?>
    <!-- searching-header end  -->
        <div class="row">
              <div class="col-md-8">
                <div id="txt2"></div>
              </div>
             </div>




      
    </div>
 <div class="container">
 	<div class="row">
  <div class="row">
              <div class="col-md-8">
               <div id="txt"></div></div>
              </div>
             </div>
 		<div class="col-md-9 hide1">
 	    <h3>Search Business</h3>
      <a style="float: right; margin-top: -55px;" href="business.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
 	    <img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="860" height="7">
     <br><br>
       <form class="form-horizontal" id="search_form" >
        <div class="row">
          <div class="col-md-12  reg_sec_border">
          <br>
            <div class="row">
             <div class="col-md-12">
                <div class="col-md-2 form-group">
                  <label for="usr">Company Name <b>*</b>: </label>
                </div>
                <div class="col-md-10 form-group">
                  <input type="text" class="form-control" placeholder="Enter Company Name" id="Name1" name="Name1">
                </div>
              </div>
            </div>
            
                              
            <div class="row">
               
            </div>
                              <!-- End of Row 3 -->
            
                              
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4 form-group">
                  <label for="usr">Country<b>*</b>: </label>
                </div>
                <div class="col-md-8 form-group">
                 <select class="form-control" id="Country2" name="Country2" onChange="getState(this.value);">
                 <option value="">Select Country</option>
                    <?php include 'conn.php';
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
                  <label for="usr">State<b>*</b>: </label>
                </div>
                <div class="col-md-8 form-group">
                  <select class="form-control" id="State2" name="State2" onChange="getcity(this.value);">
                   <option value="">Select state</option>
                  </select>
                </div>
              </div>
            </div>
                                <!-- Row 5 -->
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4 form-group">
                  <label for="usr">City<b>*</b> : </label>
                </div>
                <div class="col-md-8 form-group">
                    <select class="form-control" id="city2" name="city2">
                      <option value="">select City</option>
                    </select>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="col-md-4 form-group">
                   <label for="usr">Category<b>*</b>: </label>
                 </div>
                  <div class="col-md-8 form-group">
                    <select class="form-control" name="Category1" id="Category1">
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
            </div>  

            <div class="row">
              <center><button type="button" class="btn btn-primary" id="reg_submit2" name="reg_submit2" >Search</button>&nbsp;&nbsp;&nbsp;&nbsp;
              </center>
            </div><br>	
          </div>
			</div>
 	      </form>
 		  
      <br><br>

 		  <div class="row">
        <div class="row" id="txtHint">
            
          </div>
        <div class="col-md-12">
          <div class="jb_advertise_box1" >
            <center><h6 class="jb_advertise_box">YOUR ADVERTISE WILL BE PLACE HERE SIZE - 752 X 90</h6></center> 
          </div>
        </div>
      </div>
      <br>
    </div>
    <?php include 'business-ad.php'; ?>
    </div>
		</div>
	</div>
  

	<?php include "footer.php";?>

   <script>
    function getState(val) {
    $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'cid='+val,
    success: function(data){
        $("#State2").html(data);
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
        $("#city2").html(data);
    }
    });
}
</script>

 <script>
// function showUser(str) {
//     if (str == "") {
//         document.getElementById("txtHint").innerHTML = "";
//         return;
//     } else { 
//         if (window.XMLHttpRequest) {
//             // code for IE7+, Firefox, Chrome, Opera, Safari
//             xmlhttp = new XMLHttpRequest();
//         } else {
//             // code for IE6, IE5
//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         xmlhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("txtHint").innerHTML = this.responseText;
//             }
//         };
//         xmlhttp.open("GET","getuser.php?q="+str,true);
//         xmlhttp.send();
//     }
// }
// </script>

 <script type="text/javascript">
  $(document).ready(function()
  {
      //Registration Using Ajax
          $('#reg_submit2').click(function()
          {

              var Name1=$('#Name1').val();
              var Category1=$('#Category1').val();
              var city2=$('#city2').val();
                var State2=$('#State2').val();
                  var Country2=$('#Country2').val();


              $.ajax({
                  url:'searchbuisness.php',
                  type:'POST',
                  data:{Name1:Name1, Category1:Category1, city2:city2,State2:State2,Country2:Country2 },
                  success:function(data)
                  {
                      $('#txtHint').html(data);
                     
                  }
              });
            
          });
})
          </script>

	
	

 <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('#search_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
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
                   
                                          
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                   

				
                    // Prevent form submission
                    e.preventDefault();

                $.ajax({
                    url: "searchbuisness.php",
                    type: "POST",
                     data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                      $('#txtHint').html(data);
                        $("#success_message").show();
						
						
                       
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

    </script> -->
	
</body>
</html>


