<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include "link.php"; ?>
  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">
</head>

<body style="padding-right: 0px !important;">
<div id="wrapper">
  <?php include 'preloaders.php'; ?>
  <header id="header" class="header">
      <?php include 'header.php'; ?>
      <?php include 'medical-menu.php'; ?>
  </header> 
  <div class="container-fluid"> 
  <div class="row jb_search_box">
     <div class="row">
          <div class="col-md-10 jb_search_panel">
              <div class="col-md-2"></div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" class="form-control jb_search_bus" placeholder="Search Location" id="textautocomplete" id="textautocomplete">
                  <label id="lblresult"  name="lblresult" style="display: none;"></label>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <select class="form-control jb_search_cat" id="med_srch_category" name="med_srch_category">
                        <option value="">Select Category</option>
                        <option value="Medical">Medical</option>
                        <option value="Hospital">Hospital</option>
                        <option value="Doctor">Doctor</option>
                  </select>  
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="submit" class="form-control btn btn-info jb_search_button_medical" id="med_srch_btn" name="med_srch_btn" value="Search">
                </div>
              </div>
            </div>
        </div>
    </div>
     <div class="row">
        <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row list-dashed">
                  <article class="post clearfix mb-30 pb-30" id="hidediv">
                       <ul class="nav nav-tabs top_nav_tab">
                          <li class="active"><a class="top_tab_head"  data-toggle="tab" href="#home">Top Medical</a></li>
                          <li><a  class="top_tab_head top_tab_head_left" data-toggle="tab" href="#menu1">Top Hospital</a></li>
                          <li><a class="top_tab_head top_tab_head_left"  data-toggle="tab" href="#menu2">Top Doctor</a></li>
                        </ul>
                        <div class="tab-content top_tab">
                          <div id="home" class="tab-pane fade in active">
                            <!-- Row 1 -->
                            <?php 
                             $x = 1;
                             $n = 0;
                              while($x <= 5)
                              { ?>
                                <div class="row">
                                    <?php
                                      $query="select * from medical where med_type='Medical' and status='1' limit $n, 6";
                                      $result=mysqli_query($conn, $query);
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <div class="col-sm-6 col-md-2">
                                        <a name="medical_logo" onclick="ff(<?php echo $row[0];?>)"><img class=" top_medical" src="images/medical/<?php echo $row['med_logo']; ?>" height="60" width="120" style="cursor: pointer;"></a>
                                    </div>
                                    <?php } ?>
                                </div>
                                 <br>
                             <?php $n+=6; $x++;  }
                            ?>
                          </div>
                          <div id="menu1" class="tab-pane fade">
                           <?php 
                             $x = 1;
                             $n = 0;
                              while($x <= 5)
                              { ?>
                                <div class="row" >
                                    <?php
                                      $query="select * from medical where med_type='Hospital' and status='1' limit $n, 6";
                                      $result=mysqli_query($conn, $query);
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <div class="col-sm-6 col-md-2">
                                        <a name="medical_logo" onclick="ff(<?php echo $row[0];?>)"><img class=" top_medical" src="images/medical/<?php echo $row['med_logo']; ?>" height="50" width="120" style="cursor: pointer;" ></a>
                                    </div>
                                    <?php } ?>
                                </div>
                                 <br>
                             <?php $n+=6; $x++;  }
                            ?>
                          </div>
                          <div id="menu2" class="tab-pane fade">
                             <?php 
                             $x = 1;
                             $n = 0;
                              while($x <= 10)
                              { ?>
                                <div class="row">
                                    <?php
                                      $query="select * from medical where med_type='Doctor' and status='1' limit $n, 6";
                                      $result=mysqli_query($conn, $query);
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <div class="col-sm-6 col-md-2">
                                        <a name="medical_logo" onclick="ff(<?php echo $row[0];?>)"><img class=" top_medical" src="images/medical/<?php echo $row['med_logo']; ?>" height="50" width="120"  style="cursor: pointer;"></a>
                                    </div>
                                    <?php } ?>
                                </div>
                                 <br>
                             <?php $n+=6; $x++;  }
                            ?>
                          </div>
                        </div>
                        <br><br>
                  </article>
                  <br><br>
                  <div id="med_src_result"></div>
                  <article class="post clearfix pb-30">
                    <div class="clearfix"></div>
                    <div class="entry-content">
                      <a class="sub_footer post-link text-center text-white  display-block font-20 p-30" href="http://agrawalfederation.com/">
                        Agrawal Samaj Federation Pune<br><span class="font-13">www.AgrawalFederation.com</span>
                      </a>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Archives</h5>
                <ul class="list-divider list-border list check">
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                  <li><a href="#">Archives Example</a></li>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Advertise</h5>
                <div class="widget-image-carousel">
                  <div class="item">
                    <img src="images/medical/logo.png" alt="">
                    <h4 class="title">This is a Demo Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
     </div>
  </div>
    <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<script type="text/javascript">
  $(document).ready(function(){
      $('#med_srch_btn').click(function()
      {
         var search_add=$('#lblresult').html();
         var med_srch_category=$('#med_srch_category').val();
         var med_srch_btn=$('#med_srch_btn').val();
          $.post('medical-detail.php',{search_add:search_add, med_srch_category:med_srch_category, med_srch_btn:med_srch_btn},function(data)
              {
                $("#hidediv").hide();
                $('#med_src_result').html(data);
              });
          });
      });
  function ff(str)
      {
          $.post('medical-detail.php',{medical_logo_id:str},function(data)
              {
                $("#hidediv").hide();
                $('#med_src_result').html(data);
              });
          }
</script>
</body>
</html>
 