<div class="row jb_search_box">
      
        <div class="row">
          <div class="col-md-10 jb_search_panel">
              <div class="col-md-3">
                <div class="form-group">
                 <select class="form-control jb_search_cat" name="Locale" id="Locale" style="">
                        <option value="">Select Locale</option>
                        <?php 
                        $sql = "SELECT * FROM cities WHERE sid = '22'";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                        <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
                        <?php } ?>
                  </select>  
                </div>
              </div>
              
              <div class="col-md-3">
                 <div class="form-group">
                  <select class="form-control jb_search_subcat" name="category" id="buisness_category1">
                     <option value="">Select Business Category</option>
                             <?php 
                            $sql = "SELECT * FROM buisness_category";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                          <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name']; }?></option>
                  </select>  
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="submit" value="Search" name="reg_search1" id="reg_search1" class="form-control btn btn-info jb_search_button">
                </div>
              </div>
          </div>

          <div class="col-md-2">
            <div class="form-group img_logo">
              <a href="business.php">  <img src="images/business/business-logo.png" class="jb_business_logo"></a>
            </div>
          </div>
        </div>
     </div>
     <script type="text/javascript">
  $(document).ready(function()
  {
      //Registration Using Ajax
          $('#reg_search1').click(function()
          {              
              var buisness_category1=$('#buisness_category1').val();
              var Locale=$('#Locale').val();
             
              $.ajax({
                  url:'searchlocale.php',
                  type:'POST',
                  data:{ buisness_category1:buisness_category1, Locale:Locale },
                  success:function(data)
                  {  
                      $('#txt').html(data);
                     $('.hide1').hide();
                     
                  }
              });
          });
})
//           </script>