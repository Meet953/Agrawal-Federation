  <?php 
  include 'conn.php';
  $query = "SELECT * FROM `contact_us`";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  ?>
  <footer id="footer" class="bg-black-222">
    <div class="container pt-80 pb-30">
      <div class="row border-bottom-black">
        <div class="col-md-6">
          <div class="widget dark">
            <img src="images/logo1.png" alt="" style="margin-top: -5px;" height="80" width="100"></a>
            <p class="logo_head_footer">Agarwal Federation.</p>
            <p><?php echo $row['cont_addr']; ?></p>
            <p><?php echo $row['cont_desc']; ?></p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone" style="color: #e22b22;"></i> <a class="text-gray" href="#"><?php echo $row['cont_phone']; ?></a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o" style="color: #e22b22;"></i> <a class="text-gray" href="#"><?php echo $row['cont_email']; ?></a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe" style="color: #e22b22;"></i> <a class="text-gray" href="#"><?php echo $row['cont_website']; ?></a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Latest News</h5>
            <div class="latest-posts">
              <!-- LATEST NEWS -->
              <?php
                 $query="SELECT * FROM latest_news ORDER BY news_id DESC LIMIT 3";
                 $result=mysqli_query($conn, $query);
                while($rownews=mysqli_fetch_array($result)){
               ?>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb"><img alt="" src="images/news/<?php echo $rownews['news_img']; ?>"  height="70" width="70"></a>
                <div class="post-right">
                  <h4 class="post-title mt-0 mb-5"><a><b><?php echo $rownews['news_title']; ?></b></a></h4>
                  <h6 class="post-title mt-0 mb-5"><a><?php echo $rownews['news_desc']; ?></a></h6>
                  <p class="post-date mb-0 font-12"><?php echo $rownews['news_date']; ?></p>
                </div>
              </article><!-- END OF LATEST NEWS -->
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-md-5">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <span id="Subscribe_email_err" style="color:orange; font-size: 20px; display: none;">Invalid Email</span>
              <div class="input-group">
                <input type="text" value="" name="subcribe_email" id="subcribe_email" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                <span class="input-group-btn">
                <span class="input-group-btn">
                   <button data-height="45px" class="btn  btn-xs m-0 font-14" name="submit_ft" id="submit_ft" type="submit" style="background: #e22b22;
                  border: #e22b22; color: white;">Subscribe</button>
                </span>
              </div>
              <div id="subcriberesult" style="background: #ffffff; border: #000000; color: white;"></div>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              <?php echo $row['cont_phone']; ?>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark icon-circled icon-sm">
              <li><a href="<?php echo $row['cont_fb_link']; ?>"><i class="fa fa-facebook"></i></a></li>
              <!-- <li><a href="<?php echo $row['cont_twt_link']; ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo $row['cont_utube_link']; ?>"><i class="fa fa-skype"></i></a></li>
              <li><a href="<?php echo $row['cont_skype_link']; ?>"><i class="fa fa-youtube"></i></a></li>
              <li><a href="<?php echo $row['cont_insta_link']; ?>"><i class="fa fa-instagram"></i></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-4">
            <p class="font-11 text-black-777 m-0" style="color: white;"><?php echo $row['cont_cpyright']; ?></p>
          </div>
          <div class="col-md-4">
           <p class="font-11 text-black-777 m-0" style="color: white;">Design by <a class="font-11 text-black-777 m-0" style="color: rgb(226, 43, 34);" href="http://leelatechglobal.com/index.php"  target="_blank">Leela Technologies</a> </p>
          </div>
          <!-- <div class="copy">
		      <p>| Design by <a href="http://leelatechglobal.com/index.php"  target="_blank">Leela Technologies</a> </p>
	        </div> -->
          <div class="col-md-4 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                 <li>
                  <a href="feedback.php" style="color: white;">Feedback</a>
                </li>
                <li style="color: white;">|</li>
                <li>
                  <a href="faq.php" style="color: white;">FAQ</a>
                </li>
                <li style="color: white;">|</li>
                <li>
                  <a href="#" data-toggle="modal" data-target="#myModal" style="color: white;">Help Desk</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" style="opacity: 1.2; font-size: 30px;">&times;</button>
            <h4 class="modal-title">Help Desk</h4>
          </div>
          <div class="">
           <div class="col-md-12">
              <div class="row"><br>
                <h3 class="line-bottom mt-0 mb-50 ml-15">Our Office</h3>
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-call" style="color: #d9241c;"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Contact Number</h5>
                      <p style="color: #7b6c6c;"><?php echo $row['cont_phone']; ?>0</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail" style="color: #d9241c;"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Email Address</h5>
                      <p style="color: #7b6c6c;"><?php echo $row['cont_email']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2" style="color: #d9241c;"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0"> Location</h5>
                      <p style="color: #7b6c6c;"><?php echo $row['cont_addr']; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                 <section>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.3499981208993!2d73.85543831413825!3d18.46779898743973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eabbc6de76c7%3A0x3510d6d17191a48f!2sKK+Market!5e0!3m2!1sen!2sin!4v1487597436832" width="600" height="200" frameborder="0"  allowfullscreen >
                   </iframe>
                 </section>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div><!-- FEEDBACK Modal -->
  </footer>
  <?php include 'validation.php'; ?>
  <script type="text/javascript">
  $('#submit_ft').click(function() {  
    var subcribe_email = $('#subcribe_email').val();
    
    $.ajax({
        type: 'POST',
        url: 'do-Subscribe.php',
        data: { subcribe_email: subcribe_email },
        success: function(response) {
            $('#subcriberesult').html(response);
        }
    });
  });
</script>

  