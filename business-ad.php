<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<div class="col-md-3">
                <div class="jb_Side_img1" >
                  <div class="jb_innerSide_img1" >
                    <center><h6>YOUR ADVERTISE<br> WILL BE<br> PLACE HERE <br>SIZE - 180 X 150</h6></center>  
                  </div>
               </div><br>
              <table class="table table-bordered business_table table-responsive" style="width: 200px;">
                <tbody>
                  <tr>
                      <td>
                          <a href="business-search.php">
                          <i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp;&nbsp;Search Business
                          </a> 
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="business-search-member.php">
                          <i class="fa fa-search" aria-hidden="true"></i> &nbsp;&nbsp;Search Member
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                          <a href="business-franchisee.php">
                         <img src="images/business/img36.png" alt="Cinque Terre" height="25" width="30">&nbsp;Apply for Franchisee</a>
                    </td>
                  </tr>
                </tbody>
              </table><br>
              <form id="form1">
              <div class="business_Side_img2">
                  <img src="images/business/img27.png" class="img-circle business_email_img" alt="Cinque Terre" >
                  <center>
                    <h6 class="jb_inner_content">Subscribe to our mailing list </h6>

                    <div class="form-group">
                        <!-- <input type="email" name="subscribe_email" id="subscribe_email" placeholder="your email @ example.com" class="business_txtbox jb_galxy_respnsve jb_iphne-responsve" > -->
                        <input type="text" name="subcribe_email" id="subcribe_email" placeholder="your email @ example.com"  > </div>
                        <input type="submit" name="submitemail" id="submitemail" value="submit" class="btn btn-primary btn-xs jb_subscribe_btn" />
                        <div id="subcriberesult"></div>

                  </center>
              </div><br>  
              </form>       
              <div class="business_Side_img3">
                <div class="business_innerSide_img3">
                  <center>
                   <h6>YOUR ADVERTISE<br> WILL BE<br> PLACE HERE <br>SIZE - 180 X 150</h6>
                  </center>  
                </div>
              </div><br>
            <div class="business_Side_img4">
              <div class="business_innerSide_img4">
                 <center>
                   <h6>YOUR ADVERTISE<br> WILL BE<br> PLACE HERE <br>SIZE - 180 X 150</h6>
                 </center>  
              </div>
            </div>
            <div id="result1"></div>
        </div>


        <script>
/*function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}*/
</script>
<script type="text/javascript">
  /*$('#submit').click(function() {
    var subcribe_email = $('#subcribe_email').val();
    $.ajax({
        type: 'POST',
        url: 'do-Subscribe.php',
        data: { subcribe_email: subcribe_email },
        success: function(response) {
            $('#subcriberesult').html(response);
        }
    });
  });*/
</script>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
  <script type="text/javascript">
        $(document).ready(function() {
            $('#form1').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        
                         subcribe_email: {
                validators: {
                    notEmpty: {
                        message: 'Enter valid email '
                    },
                  
           regexp: {
                        regexp: /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/,
                        message: ' Invalid Email'
                    }
                }
            },
         
                       
                          
                        
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                   
                    var subcribe_email = $('#subcribe_email').val();
        
                    // Prevent form submission
                    e.preventDefault();

                $.ajax({
                   type: 'POST',
        url: 'do-Subscribe.php',
        data: { subcribe_email: subcribe_email },
        success: function(response) {
            $('#subcriberesult').html(response);
        }
              });

                 $('#form1').data('bootstrapValidator').resetForm();
                    // Get the form instance
                    var $form = $(e.target);
                    
                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                   /* $.post($form.attr('action'), $form.serialize(), function(result) {
                        console.log(result);
                    }, 'json');*/
                });
        });

    </script>
        