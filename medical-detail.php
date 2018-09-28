
                <!--  ************ Section 1 ************  -->
                  <article class="post clearfix mb-30 pb-30 md_page">
                    <div class="row">
                        <div class="col-md-9">
                          <h2 class="medical_detail_head">Detail's</h2>
                        </div>
                        <div class="col-md-3">
                          <a href="medical.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
                        </div>
                    </div>
                    <hr class="md_head_hr">
                    <!-- Logo Medical Detail -->
                    <?php 
                    include"conn.php";
                    extract($_POST); 
                      if(isset($_POST['medical_logo_id']) || isset($_POST['med_srch_btn']) || isset($_POST['med_record']))
                      {
                          if(isset($_POST['medical_logo_id']))
                          {
                              $medical_logo_id=$_POST['medical_logo_id'];
                              $query="select * from medical where med_id='$medical_logo_id'";
                          }
                          elseif(isset($_POST['med_srch_btn']))
                          {
                                $search_add=$_POST['search_add'];
                                $explode=(explode("*", $search_add));
                                $remove_add=array_shift($explode);
                                $addr=implode(",", $explode);
                                $med_srch_category=$_POST['med_srch_category'];

                                $query="select * from medical where med_type='$med_srch_category' and REPLACE(lat_long, ' ','')='$addr'";
                                $dd=mysqli_query( $conn,$query);
                                 
                                $d=mysqli_num_rows($dd);
                                if($d==0)
                                {
                                  echo '<span style="font-size:20px; color:red;">Result Not Found</span>';
                                  echo '<hr>';
                                  echo '<center><span style="color:green; font-size:17px;">Related Result Here...</span></center><br>';

                                   $query="select * from medical where med_type='$med_srch_category' or REPLACE(lat_long, ' ','')='$addr'";
                                }else{ echo "hi"; } 
                          }
                          // Medical, Doctor, Hospital Menu
                          elseif(isset($_POST['med_record']))
                          {
                              $med_name = $_POST['med_record'];
                              if($med_name == 'Medical'){
                                $query = "SELECT * FROM `medical` WHERE med_type='Medical' order by 'med_id' desc limit 20";
                              }
                              elseif($med_name == 'Hospital'){
                                $query = "SELECT * FROM `medical` WHERE med_type='Hospital' order by 'med_id' desc limit 20";
                              }
                              elseif($med_name == 'Doctor'){
                                $query = "SELECT * FROM `medical` WHERE med_type='Doctor' order by 'med_id' desc limit 20";
                              }
                          }
                           $result=mysqli_query($conn, $query);
                           while($row=mysqli_fetch_array($result)){ 
                                $add=(explode("*", $row[4]));
                                $lat_long_remove=array_splice($add, '1', '2');
                                $address=implode(" ", $add);
                            ?>
                               <div class="row">
                                  <div class="medical_det_section col-md-10 col-md-offset-1">
                                    <div class="col-md-9" >
                                        <h4 class="medical_name"><?php echo $row[3]; ?>&nbsp;Detail</h4>
                                        <hr class="md_name_hr">
                                        <p class="md_title">
                                          <i class="fa fa-tags md_icon"></i>
                                          &nbsp;&nbsp;
                                          <strong>Name</strong> &nbsp;:&nbsp; <?php echo $row['med_name']; ?> 
                                        </p>
                                        <p class="md_title">
                                          <i class="fa fa-tags md_icon"></i>
                                          &nbsp;&nbsp;
                                          <strong>Detail</strong> &nbsp;:&nbsp; <?php echo $row['med_about']; ?> 
                                        </p>
                                        <p class="md_title" style="width: 70%;">
                                          <i class="fa fa-map-marker "></i>
                                          &nbsp;&nbsp;
                                          <strong>Address</strong> &nbsp;:&nbsp; <?php print_r($address); ?> 
                                        </p>
                                        <p class="md_title">
                                          <i class="fa fa-clock-o"></i>
                                          &nbsp;&nbsp;
                                          <strong>Timing</strong> &nbsp;:&nbsp; <?php echo $row['med_open_time']. " - ". $row['med_close_time']; ?> 
                                        </p>
                                        <p class="md_title">
                                          <i class="fa fa-phone"></i>
                                          &nbsp;&nbsp;
                                          <strong>Phone</strong>&nbsp;:&nbsp; <?php echo $row['med_phone']; ?> 
                                        </p>
                                        <p class="md_title">
                                          <i class="fa fa-envelope"></i>
                                          &nbsp;&nbsp;
                                          <strong>Email</strong>&nbsp;:&nbsp; <?php echo $row['med_cont_email']; ?> 
                                        </p>
                                        <!-- CONTACT PERSON -->
                                        <?php 
                                          $show_hide = $row['med_cont_detail'];
                                          if($show_hide == 'Show'){ ?>
                                             <p class="md_title">
                                                <i class="fa fa-phone"></i>
                                                &nbsp;&nbsp;
                                                <strong>Contact Person Name</strong>&nbsp;:&nbsp; <?php echo $row['med_cont_name']; ?> 
                                              </p>
                                              <p class="md_title">
                                                <i class="fa fa-envelope"></i>
                                                &nbsp;&nbsp;
                                                <strong>Contact Person Phone</strong>&nbsp;:&nbsp; <?php echo $row['med_cont_phone'];?> 
                                              </p>
                                          <?php } ?>
                                        <!-- END OF CONTACT PERSON -->
                                    </div>
                                    <div class="col-md-3">
                                        <img class="medical_det_img" src="images/medical/<?php echo $row['med_logo']; ?>" height="150" width="150" style="cursor: pointer;">
                                    </div>
                                    <br>
                                  </div>
                                </div>
                                <br>
                          <?php }  }
                      /*else
                      { ?>
                        <div class="row">
                          <div class="medical_det_section col-md-10 col-md-offset-1">
                           <h4 class="medical_name">Result Not Found For This Medical.</h4>
                            <br>
                          </div>
                        </div>
                     <?php  } */
                    ?>
                  </article>
                  <!-- ************* End of Section 1 ************* -->
               