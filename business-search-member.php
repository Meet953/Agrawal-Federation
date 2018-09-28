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
  .error_msg{
    font-size: 15px;
    font-family: Arial;
    color: Red;
  }
</style>

<body>
 <?php include 'header.php'; ?>
 <?php include 'business-menu.php'; ?>
 <!-- searching-header start  -->
      <?php include "searching-header.php";?>
    <!-- searching-header end  -->



<div class="container">
  <div class="row">
  <div id="txt"></div></div>
    <div class="col-md-9 hide1">
      <h3> Search Member</h3>
      <img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="860" height="7"><br><br>
      <form>
        <div class="row">
          <div class="col-md-12 reg_sec_border">
          <br>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-2 form-group">
                   <label for="usr">Search Name <b>*</b>: </label>
                </div>
                <div class="col-md-10 form-group">
                  <input type="text" class="form-control" placeholder="Enter Bussiness Man Name ..........." id="Name3" name="Name3" onkeyup="this.value=this.value.replace(/[^a-zA-Z]/g,'');"><span class="error_msg" id="fname_error_msg"></span>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="col-md-4 form-group">
                  <label for="usr">Last Name : </label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" placeholder="Enter Last Name">
                </div>
              </div> -->
            </div>
                             
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4 form-group">
                  <label for="usr">Country<b>*</b>: </label>
                </div>
                <div class="col-md-8 form-group">
                  <select class="form-control" id="Country3" name="Country3" onChange="getState(this.value);">
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
                  <select class="form-control" id="State3" name="State3" onChange="getcity(this.value);">
                    <option value="">Select state</option>
                  </select>
                </div>
              </div>
               

            <div class="row">
            <div class="col-md-6">
                  <div class="col-md-4 form-group">
                    <label for="usr">City <b>*</b>: </label>
                  </div>
                  <div class="col-md-8 form-group">
                    <select class="form-control" id="city3" name="city3">
                      <option value="" >Select City</option>
                      
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-4 form-group">
                  <label for="usr">Category<b>*</b>: </label>
                </div>
                <div class="col-md-8 form-group">
                  <select class="form-control" name="Category3" id="Category3">
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
              <!-- <div class="col-md-6">
                <div class="col-md-4 form-group">
                  <label for="usr">State<b>*</b>: </label>
                </div>
                <div class="col-md-8 form-group">
                  <select class="form-control" id="State3" name="State3" onChange="getcity(this.value);">
                    <option value="0">Select state</option>
                  </select>
                </div>
              </div> -->

                  
             
            </div>

            

            <!-- <div class="row">
              
            </div> -->
           
                                
            <div class="row">
              <center><button type="button" class="btn btn-primary" name="reg_submit3" id="reg_submit3">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;
              <!-- <a href="business-search-member.php"><button type="button" class="btn btn-danger">Reset</button></center></a> -->
            </div>
            <br>  
          </div>
        </form>
      </div>
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

  <?php include "footer.php";?>

   <script>
    function getState(val) {
    $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'cid='+val,
    success: function(data){
        $("#State3").html(data);
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
        $("#city3").html(data);
    }
    });
}
</script>

<script type="text/javascript">
  $(document).ready(function()
  {
      //Registration Using Ajax
          $('#reg_submit3').click(function()
          {

              var Name3=$('#Name3').val();
              var Category3=$('#Category3').val();
              var city3=$('#city3').val();
              var Country3=$('#Country3').val();
              var State3=$('#State3').val();

             
              /* if (!Country3.trim() && !city3.trim() && !State3.trim() ) {                    
                alert("Select one other field with Name. It's manadatory");
                   return false;
                 }
                 if (!Name3.trim() ) {                    
                alert("Enter Name. It's manadatory");
                   return false;
                 }
                 else
                 {*/
             
              $.ajax({
                  url:'searchmember.php',
                  type:'POST',
                  data:{Name3:Name3, Category3:Category3, city3:city3, State3:State3, Country3:Country3 },
                  success:function(data)
                  {
                      $('#txtHint').html(data);
                     
                  }
              });
            
          });
});
//           </script>



</body>
</html>


