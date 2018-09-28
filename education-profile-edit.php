<?php
session_start();
$edu_sess = $_SESSION['edu-user'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
</head>

<body class="">
<div id="wrapper">
   <?php include"preloaders.php"; ?>

  <header id="header" class="header">
      <?php include 'education-header.php'; ?>
      <?php include 'education-menu.php'; ?>
  </header>
  
  <div class="container-fluid"> 
    <?php include 'education-logo.php'; ?>
     <div class="row register_header">
        <center>
          <h4 class="reg_heading">Provide Marksheet's</h4>
        </center>
     </div><br>
    <?php 
      $query="select * from educ_persdetail_register where sess='".$_SESSION['edu-user']."'";
      $result=mysqli_query($conn, $query);
      while($row=mysqli_fetch_array($result)){
    ?>
    <div class="row edu_profile_main">
            <div class="row">
              <div class="col-md-8 col-md-offset-1">
                <div class="row edu_pd_main edu_pd_main_update">
                  <h4 class="edu_update_head">User Dashboard (Please Update Your Marksheet and Signature Data First.)</h4>
                  <div class="alert alert-success edu_pd_head_alert edu_ed_head_alert">
                    <?php echo $row['pd_fname']; ?> <?php echo $row['pd_lname']; ?> <br>
                    Update Marksheets & Signature (Upload JPG/JPEG/PNG/GIF Files Only)
                    <?php } ?>
                  </div>
                  <div class="row edu_pd_detail edu_pd_detail_update">
                      <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                        <br>
                        <form id="marksheet_frm" method="post" action="edu-add-marksheet.php">
                          <div class="row">
                                <div class="col-md-6">
                                    <label><strong>SSC Marksheet &nbsp; <span>*</span></strong></label>
                                    <br>
                                    <input type="file" id="ssc_mrkst" name="ssc_mrkst">
                                    <br>
                                    <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="sscLayer">
                                    <br><br>
                                </div>
                                <div class="col-md-6">
                                    <label><strong>HSC Marksheet &nbsp; <span>*</span></strong> </label>
                                    <br>
                                    <input type="file"  id="hsc_mrkst" name="hsc_mrkst">
                                    <br>
                                    <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="hscLayer">
                                    <br><br>
                                </div>
                            </div><hr>
                              
                            <div class="row">
                                <div class="col-md-6">
                                    <label><strong>Graduation Marksheet &nbsp; <span>*</span></strong></label>
                                    <br>
                                    <input type="file"  id="gd_mrkst" name="gd_mrkst">
                                    <br>
                                    <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="gdLayer">
                                    <br><br>
                                </div>
                                <div class="col-md-6">
                                    <label><strong>Post Graduation Marksheet &nbsp; <span>*</span></strong> </label>
                                    <br>
                                    <input type="file"  id="pg_mrkst" name="pg_mrkst">
                                    <br>
                                    <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="pgLayer">
                                    <br><br>
                                </div>
                            </div><hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <label><strong>Other Certification Marksheet &nbsp; <span>*</span></strong></label>
                                    <br>
                                    <input type="file"  id="other_mrkst" name="other_mrkst">
                                    <br>
                                    <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="otherLayer">
                                    <br><br>
                                </div>
                                <div class="col-md-6">
                                    <label><strong>Scan Signature &nbsp; <span>*</span></strong> </label>
                                    <br>
                                    <input type="file"  id="scan_mrkst" name="scan_mrkst">
                                    <br>
                                    <img src="http://www.engraversnetwork.com/files/placeholder.jpg" height="150" width="200" id="scanLayer">
                                    <br><br>
                                </div>
                            </div><hr>

                            <div class="row">
                               <center>
                                 <button class="btn btn-info edu_prof_updatebtn">Update</button>
                                 <div id="marksheet_result"></div>
                               </center>
                            </div><br>
                        </form> 
                        </div>
                     </div>
                  </div><br>
                </div>
              </div>
            </div><br>
    </div>
  </div>
  </div>
    <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function (e) {
  $("#marksheet_frm").on('submit',(function(e) {
    var edu_sess = "<?= $edu_sess; ?>";
    
    e.preventDefault();

    var formData = new FormData(this);
    formData.append('edu_sess', edu_sess);
   
    $.ajax({
        url: "edu-add-marksheet.php",
      type: "POST",
      data:  formData,
      contentType: false,
          cache: false,
      processData:false,
      success: function(data)
      {
      $("#marksheet_result").html(data);
     
      },
        error: function() 
        {
        }           
     });
  }));

  // SSC
  $(function()
    {
      $('#ssc_mrkst').change(function(){
        {
          var reader=new FileReader();
          reader.onload=sscImageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function sscImageIsLoaded(e){
      $('#sscLayer').attr('src', e.target.result);
      $('#sscLayer').attr('width', '250px');
      $('#sscLayer').attr('height', '230px');
    };

    // HSC
    $(function()
    {
      $('#hsc_mrkst').change(function(){
        {
          var reader=new FileReader();
          reader.onload=hscImageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function hscImageIsLoaded(e){
      $('#hscLayer').attr('src', e.target.result);
      $('#hscLayer').attr('width', '250px');
      $('#hscLayer').attr('height', '230px');
    };

    // // GRADUATION
    $(function()
    {
      $('#gd_mrkst').change(function(){
        {
          var reader=new FileReader();
          reader.onload=gdImageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function gdImageIsLoaded(e){
      $('#gdLayer').attr('src', e.target.result);
      $('#gdLayer').attr('width', '250px');
      $('#gdLayer').attr('height', '230px');
    };

    // // POST GRADUATION
    $(function()
    {
      $('#pg_mrkst').change(function(){
        {
          var reader=new FileReader();
          reader.onload=pgImageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function pgImageIsLoaded(e){
      $('#pgLayer').attr('src', e.target.result);
      $('#pgLayer').attr('width', '250px');
      $('#pgLayer').attr('height', '230px');
    };

    // // OTHER CERTIFICATION
    $(function()
    {
      $('#other_mrkst').change(function(){
        {
          var reader=new FileReader();
          reader.onload=otherImageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function otherImageIsLoaded(e){
      $('#otherLayer').attr('src', e.target.result);
      $('#otherLayer').attr('width', '250px');
      $('#otherLayer').attr('height', '230px');
    };

    // // SCAN MARKSHEET
    $(function()
    {
      $('#scan_mrkst').change(function(){
        {
          var reader=new FileReader();
          reader.onload=scanImageIsLoaded;
          reader.readAsDataURL(this.files[0]);
        }
      });
    });

    function scanImageIsLoaded(e){
      $('#scanLayer').attr('src', e.target.result);
      $('#scanLayer').attr('width', '250px');
      $('#scanLayer').attr('height', '230px');
    };

});
</script>