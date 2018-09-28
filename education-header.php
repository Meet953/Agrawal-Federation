<?php
  include 'conn.php';
?>
<div class="header-top header-bg-stl sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li>
                <?php 
                if(isset($_SESSION['edu-user']))
                {
                  $var=$_SESSION['edu-user'];
                  $query="SELECT * FROM `educ_persdetail_register` where pd_email='$var' or pd_mob1='$var'";
                  $result=mysqli_query($conn, $query);
                  while($row= mysqli_fetch_array($result)){
                 ?>
                <li class="m-0 pl-10 pr-10 header_mail"> <a class="text-white" href="#" style="font-size: 15px;">Welcome &nbsp; <?php echo $row[1]; ?></a> </li>
                <?php 
                } }
                else { ?>
                <li class="m-0 pl-10 pr-10">
                  <a href="education-registration.php">
                    <button class="register_btn_header btn btn-flat btn-colored member_btn educ_btn">Registration</button>
                  </a>
                </li>
                <li class="m-0 pl-10 pr-10">
                  <button class="patient_login_header btn btn-flat btn-colored member_btn educ_btn" data-toggle="modal" data-target="#loginModal">Login</button>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <!-- <form> -->
          <div class="modal-body edu_login_body">
            <!-- Section 1 -->
            <div class="row edu_login_header">
              <center>
                  <h3  class="login_head">Login</h3>
                  <div id="edu_login_result"></div>
                  <button class="btn btn-default edu_login_cross" data-dismiss="modal"><i class="fa fa-times"></i></button>
                  <hr style="margin-top: -30px;">
              </center>
              <div class="form-group col-md-10 col-md-offset-1">
                <div class="row">
                  <div class="col-md-2">
                    <button class="btn btn-default  edu_user_btn" disabled="disabled"><i class="fa fa-user"></i></button>
                   </div>
                   <div class="col-md-10">
                      <input type="text" class="form-control edu_login_ctrl" placeholder="Enter Mobile No. / Email Id" id="edu_login_email" name="edu_login_email">
                      <span id="ed_email_span" style="display: none; color:red;">Invalid Email</span>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-2">
                    <button class="btn btn-default  edu_user_btn" disabled="disabled"><i class="fa fa-key"></i></button>
                   </div>
                   <div class="col-md-10">
                      <input type="password" class="form-control edu_login_ctrl" placeholder="Enter password" id="edu_login_pwd" name="edu_login_pwd">
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-md-2">
                    <button class="btn btn-default  edu_user_btn" disabled="disabled"><i class="fa fa-key"></i></button>
                   </div>
                   <div class="col-md-10">
                      <select class="form-control edu_login_ctrl" id="edu_login_exam" name="edu_login_exam">
                        <option value="0">Select Exam</option>
                        <option value="BEAT">BEAT-2017</option>
                        <option value="BEAT">BEAT-2016(||)</option>
                        <option value="CET">CET-2017</option>
                        <option value="BEAT">BEAT-2016</option>
                        <option value="CET">CET-2016</option>
                        <option value="CET">CET1</option>
                      </select>
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <button class="btn btn-default btn-block edu_go_btn" id="edu_login_btn" name="edu_login_btn">Go !</button>
                   </div>
                </div>

                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <center class="educ_forget_pwd">
                      <a href="forgetpassword.php">Forget Passoword?</a>
                    </center>
                   </div>
                </div> <hr style="margin-top: 10px;">

                <div class="row">
                  <div class="col-md-6">
                     <a href="education-registration.php" class="create_cet_ac">Create an CET Account</a>
                  </div>
                  <div class="col-md-6">
                     <a href="education-registration.php" class="create_beat_ac">Create an BEAT Account</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Section 1 -->
          </div>
        <!--   </form> -->
        </div>
      </div>
    </div>
    <?php include 'validation.php'; ?>

<script type="text/javascript">
  $(document).ready(function()
  {
    $('#edu_login_btn').click(function()
    {
        var edu_login_email= $('#edu_login_email').val();
        var edu_login_pwd= $('#edu_login_pwd').val();
        var edu_login_exam= $('#edu_login_exam').val();
        var edu_login_btn= $('#edu_login_btn').val();

        if(!edu_login_email.trim() || !edu_login_pwd.trim() || !edu_login_exam.trim())
        {
          alert("All Field Must Be Field Out.");
          return false;
        }
        else
        {
          $.ajax({
            url:'do_educ_login.php',
            type:'POST',
            data:{edu_login_email:edu_login_email, edu_login_pwd:edu_login_pwd, edu_login_exam:edu_login_exam, edu_login_btn:edu_login_btn},
            success:function(data)
            {
              $('#edu_login_result').html(data);
            }
          });
        }
    });
  });
</script>