<script type="text/javascript">
	// ********************  INDEX  ********************** //
		 function header_Validate() {
	        var password = document.getElementById("user-pwd").value;
	        var confirmPassword = document.getElementById("user-cmpwd").value;
	        if (password != confirmPassword) {
	            alert("Passwords do not match.");
	            return false;
	        }
	        return true;
	    }
		//Empty All Field After Modal Dismiss
		$('.modal').on('hidden.bs.modal', function (e) {
	      $(this)
	        .find("input,textarea,select")
	           .val('')
	           .end()
	        .find("input[type=checkbox], input[type=radio]")
	           .prop("checked", "")
	           .end();
	    });
		// Email Validation For Signup
	    $('#user-email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#error_email').show();
	            document.getElementById('user-email').style.border="1px solid gray";
	        } else {
	             $('#error_email').hide();
	        }
	    });

	    // Email Validation For Login
	    $('#login-email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#login_err_email').show();
	            document.getElementById('login-email').style.border="1px solid gray";

	        } else {
	             $('#login_err_email').hide();
	        }
	      });

	    // Mobile No.
	    $('#user-phone').on('keyup', function() {
	        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
	        if(!re) {
	           document.getElementById('mob_span').innerHTML="Mobile No. Should Be 10 Digits";
	             document.getElementById('mob_span').style.color="red";
	             document.getElementById('user-phone').style.border="1px solid red";
	        } else {
	            document.getElementById('mob_span').innerHTML="";
	             document.getElementById('mob_span').style.color="cyan";
	             document.getElementById('user-phone').style.border="1px solid gray";
	        }
	    });

	    // Country, City, State
	 //    function getState(val) {
		//       $.ajax({
		//       type: "POST",
		//       url: "get_state.php",
		//       data:'cid='+val,
		//       success: function(data){
		//           $("#user-state").html(data);
		//       }
		//       });
		// }

		// function getcity(val) {
		//     $.ajax({
		//     type: "POST",
		//     url: "get_city.php",
		//     data:'sid='+val,
		//     success: function(data){
		//         $("#user-city").html(data);
		//     }
		//     });
		// }

	//*****************  MEDICAL  ********************** //
		
		// Medical Name
		$("#med_name").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});

		// Contact Person Name
		$("#med_cont_name").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});

		// Mobile No.
		$('#med_phone').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('med_mob_span').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('med_mob_span').style.color="red";
	          document.getElementById('med_phone').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('med_mob_span').innerHTML="";
	          document.getElementById('med_mob_span').style.color="cyan";
	          document.getElementById('med_phone').style.border="1px solid #cccccc";
	        }
	    });

	  	// Contact Person Mobile No.
	  	$('#med_cont_phone').on('keyup', function() {
	        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
	        if(!re) {
	          document.getElementById('med_mob_span2').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('med_mob_span2').style.color="red";
	          document.getElementById('med_cont_phone').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('med_mob_span2').innerHTML="";
	          document.getElementById('med_mob_span2').style.color="cyan";
	          document.getElementById('med_cont_phone').style.border="1px solid #cccccc";
	        }
	  	});

	   	// Email Validation For Login
	    $('#med_cont_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#med_err_email').show();
	            document.getElementById('med_cont_email').style.border="1px solid gray";
	        } else {
	             $('#med_err_email').hide();
	        }
	    });

	    // Country, State, City Of Medical
	   //  function getState(val) {
		  //   $.ajax({
		  //   type: "POST",
		  //   url: "get_state.php",
		  //   data:'cid='+val,
			 //    success: function(data){
			 //       $("#med_state").html(data);
			 //    }
		  //   });
	  	// }

	  	// function getcity(val) {
		  //  	$.ajax({
		  //   type: "POST",
		  //   url: "get_city.php",
		  //   data:'sid='+val,
			 //    success: function(data){
			 //        $("#med_city").html(data);
			 //    }
		  //   });
	  	// }
	
	    //*****************  MATRIMONY  ********************** //
	    $('#mat_login_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#mt_sign_span').show();
	            document.getElementById('mat_login_email').style.border="1px solid gray";
	        } else {
	             $('#mt_sign_span').hide();
	        }
	    });
	    $('#mat_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#ms_email_span').show();
	            document.getElementById('mat_email').style.border="1px solid gray";
	        } else {
	             $('#ms_email_span').hide();
	        }
	    });
	    // $('#mreg_email').on('keyup', function() {
	    //     var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	    //     if(!re) {
	    //          $('#mr-email').show();
	    //         document.getElementById('mreg_email').style.border="1px solid gray";
	    //     } else {
	    //          $('#mr-email').hide();
	    //     }
	    // });
	    $('#mat_phone').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('ms_phone_spn').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('ms_phone_spn').style.color="red";
	          document.getElementById('mat_phone').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('ms_phone_spn').innerHTML="";
	          document.getElementById('ms_phone_spn').style.color="cyan";
	          document.getElementById('mat_phone').style.border="1px solid #cccccc";
	        }
	    });
	    $('#mreg_phone').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('mr_mob_spn').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('mr_mob_spn').style.color="red";
	          document.getElementById('mreg_phone').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('mr_mob_spn').innerHTML="";
	          document.getElementById('mr_mob_spn').style.color="cyan";
	          document.getElementById('mreg_phone').style.border="1px solid #cccccc";
	        }
	    });
	    function ms_Validate() {
	        var password = document.getElementById("mat_pwd").value;
	        var confirmPassword = document.getElementById("Confirm_Password").value;
	        if (password != confirmPassword) {
	            alert("Passwords do not match.");
	            return false;
	        }
	        return true;
	    }
	 // ********************  CONTACT US  ********************** //
		 $("#cont_name").keypress(function (e){
			          var code =e.keyCode || e.which;
			          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
			          {
			            return false;
			          }
			});
		 $('#cont_mail').on('keyup', function() {
		        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
		        if(!re) {
		             $('#gettch_err_email').show();
		            document.getElementById('cont_mail').style.border="1px solid gray";
		        } else {
		             $('#gettch_err_email').hide();
		        }
		    });
		 $("#cont_subj").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		 $('#cont_phone').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('gettch_mob_span').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('gettch_mob_span').style.color="red";
	          document.getElementById('cont_phone').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('gettch_mob_span').innerHTML="";
	          document.getElementById('gettch_mob_span').style.color="cyan";
	          document.getElementById('cont_phone').style.border="1px solid #cccccc";
	        }
	    });
	// ********************  FOOTER  ********************** //
	// Email Validation For Subscribe
	    $('#subcribe_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#Subscribe_email_err').show();
	            document.getElementById('subcribe_email').style.border="1px solid gray";
	        } else {
	             $('#Subscribe_email_err').hide();
	        }
	    });
</script>

<!-- SHUBHAM -->
<script type="text/javascript">
   
    
    
    
	//*****************  EDUCATION  ********************** //
		$('#edu_login_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#ed_email_span').show();
	            document.getElementById('edu_login_email').style.border="1px solid gray";
	        } else {
	             $('#ed_email_span').hide();
	        }
	    });
		// Father Name
		$("#pd_father_name").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		// Mother Name
		$("#pd_mother_name").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		// Mobile No. 1
		$('#pd_mob1').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('edu_mob_span').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('edu_mob_span').style.color="red";
	          document.getElementById('pd_mob1').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('edu_mob_span').innerHTML="";
	          document.getElementById('edu_mob_span').style.color="cyan";
	          document.getElementById('pd_mob1').style.border="1px solid #cccccc";
	        }
	    });
    
   

	    // Mobile No. 2
		$('#pd_mob2').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('edu_mob_span2').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('edu_mob_span2').style.color="red";
	          document.getElementById('pd_mob2').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('edu_mob_span2').innerHTML="";
	          document.getElementById('edu_mob_span2').style.color="cyan";
	          document.getElementById('pd_mob2').style.border="1px solid #cccccc";
	        }
	    });
	    // Email Validation 
	    $('#pd_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
            
	        if(!re) {
	             $('#edu_error_email').show();
	            document.getElementById('pd_email').style.border="1px solid gray";
                
	        } else {
                check_exists(this.value);
                 $('#edu_error_email').show();
	             
	        }
	    });
    $('#pd_email').on('change', function() {
	       
                check_exists(this.value);
                 $('#edu_error_email').show();
	             
	        
	    });
        function check_exists(Email) {
            var avail=null
                $("#edu_error_email").html('Finding');
                $.post('available.php', {
                    'email': Email
                }, function(data) {
                    
                    $("#edu_error_email").html(data);
                  
                });
            }

	    function Validate() {
	        var password = document.getElementById("pd_pwd").value;
	        var confirmPassword = document.getElementById("pd_cnfrm_pwd").value;
	        if (password != confirmPassword) {
	            alert("Passwords do not match.");
	            return false;
	        }
	        return true;
	    }

	    // Father Occupation
		$("#fd_fathr_occup").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		//Father Mobile No.
		$('#fd_fathr_mob').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('fam_mob_span').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('fam_mob_span').style.color="red";
	          document.getElementById('fd_fathr_mob').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('fam_mob_span').innerHTML="";
	          document.getElementById('fam_mob_span').style.color="cyan";
	          document.getElementById('fd_fathr_mob').style.border="1px solid #cccccc";
	        }
	    });
	    // Father Designation
		$("#fd_fathr_desig").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		// Mother Occupation
		$("#fd_mothr_occup").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		//Mother Mobile No. 
		$('#fd_mothr_mob').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('moth_mob_spn').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('moth_mob_spn').style.color="red";
	          document.getElementById('fd_mothr_mob').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('moth_mob_spn').innerHTML="";
	          document.getElementById('moth_mob_spn').style.color="cyan";
	          document.getElementById('fd_mothr_mob').style.border="1px solid #cccccc";
	        }
	    });
	    // Reference Name
		$("#ref1_name").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		//Reference Mobile No.
		$('#ref1_mob').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('ref_mob_spn').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('ref_mob_spn').style.color="red";
	          document.getElementById('ref1_mob').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('ref_mob_spn').innerHTML="";
	          document.getElementById('ref_mob_spn').style.color="cyan";
	          document.getElementById('ref1_mob').style.border="1px solid #cccccc";
	        }
	    });
	    // Reference Email Validation 
	    $('#ref1_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#ref_email1_spn').show();
	            document.getElementById('ref1_email').style.border="1px solid gray";
	        } else {
	             $('#ref_email1_spn').hide();
	        }
	    });
	    // Reference Name 2
		$("#ref2_name").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		//Reference Mobile No 2.
		$('#ref2_mob').on('keyup', function() {
		        var re = /[1-9]{1}[0-9]{9}/.test(this.value);
		        if(!re) {
          document.getElementById('ref2_email_spn').innerHTML="Mobile No. Should Be 10 Digits";
	          document.getElementById('ref2_email_spn').style.color="red";
	          document.getElementById('ref2_mob').style.border="1px solid red";
	        }
	        else {
	          document.getElementById('ref2_email_spn').innerHTML="";
	          document.getElementById('ref2_email_spn').style.color="cyan";
	          document.getElementById('ref2_mob').style.border="1px solid #cccccc";
	        }
	    });
	    // Reference Email Validation  2
	    $('#ref2_email').on('keyup', function() {
	        var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(this.value);
	        if(!re) {
	             $('#ref2_email_spn2').show();
	            document.getElementById('ref2_email').style.border="1px solid gray";
	        } else {
	             $('#ref2_email_spn2').hide();
	        }
	    });
    // ************* FEEDBACK ************** //
		// Feedback Name
		$("#feedback_name").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});
		// Feedback Designation
		$("#feedback_desg").keypress(function (e){
		          var code =e.keyCode || e.which;
		          if((code<65 || code>90)&&(code<97 || code>122)&&code!=32&&code!=46)  
		          {
		            return false;
		          }
		});

</script>



<!-- END OF SSUBHAM -->