<?php

ob_clean();

include ('conn.php');
	if($_GET['apl_form'])
	{
		 $apl_form = $_GET['apl_form'];
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

<style>
.feedback-overlay-black {
	background-color: #000;
	opacity: 0.5;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	margin: 0;
}
</style>




  <style type="text/css">
  	table {
    width:100%;
}
table, th, td {
   /* border: 1px solid black; border-collapse: collapse; */
}
th, td {
    padding: 5px;
    text-align: left;
}
  </style>
</head>
<body>

<div id="invoice">
	<?php 
		$query="SELECT * FROM educ_persdetail_register A, educ_familydetail_reg B, educ_examsubdetail_reg C, educ_detail_reg D, educ_cetdetail_reg E, educ_otherdetail_reg F WHERE A.sess ='$apl_form' AND B.sess ='$apl_form' AND C.sess ='$apl_form' AND D.sess ='$apl_form' AND E.sess ='$apl_form' AND F.sess ='$apl_form'";

		$result=mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
	?>
	<table style="width:60%; margin-left: 240px; margin-top: 30px;">
	  <tr style="border: 1px solid black; border-collapse: collapse; ">
	    <th><a href="education.php">
	    	<img src="images/logo1.png"  height="120" width="140"></a>
	    </th>
	    <th colspan="2">
	    	<h3 style="margin-left: 70px; font-size: 22px;"><strong><span style="color:red; text-decoration: underline;">JITO </span><span style="text-decoration: underline;">ADMINISTRATIVE TRAINING FOUNDATATION</span></strong></h3>
			<p style="margin-left: 100px; margin-top: -20px; color:gray;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			<p style="margin-left: 120px; margin-top: -17px; color:gray;">Lorem Ipsum has been the industry's standard dummy text ever since the</p>
			<p style="margin-left: 70px; color:gray; margin-top: -10px;"><strong>Tel :</strong> +91-11-690000081,82,83  <strong>| Email :</strong> admission.jatf@gmail.com , cet@jitatf.org <strong><br> <span style="margin-left: 201px;">| Website : </strong> www.jitoatf.org</span></p>
	    </th> 
	  </tr>

	  <tr>
	  	<td colspan="3"><center><h2>CET 2017</h2></center></td>
	  </tr>

	  <tr>
	  	<td colspan="3">
	  	<strong style="margin-left: 10px; color:blue;">PERSONAL DETAIL : </strong></td>
	  </tr>
	</table>
	<table style="width: 55%; margin-left: 270px;">
		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td colspan="2" style="border: 1px solid black;"> <strong>Student Id : </strong><?php echo $row['pd_id']?>&nbsp; <strong>|  Email Id : </strong><?php echo $row['pd_email']?></td>
			<td rowspan="8" style="border: 1px solid black; width: 170px;"><img src="http://2.bp.blogspot.com/-tv9eWFOVBzk/Ud24DdO0euI/AAAAAAAAB_c/IzO2uyVoqkE/s1600/%251dolls+(2).jpg" height="200" width="170"></td>
		</tr>

		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td style="width: 40%; border: 1px solid black;"><strong>First Name : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_fname']?></span></td>
			<td style="border: 1px solid black;"><strong>Last Name : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_lname']?></span></td>
		</tr>

		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td style="border: 1px solid black;"><strong>DOB : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_dob']?></span></td>
			<td style="border: 1px solid black;"><strong>Gender : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_gender']?></span></td>
		</tr>

		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td style="border: 1px solid black;"><strong>Mobile 1 : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_mob1']?></span></td>
			<td style="border: 1px solid black;"><strong>Mobile 2 : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_mob2']?></span></td>
		</tr>


		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td rowspan="3" style="border: 1px solid black;"><strong>Address : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_addr']?></span></td>
			<td style="border: 1px solid black;"><strong>City : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_city']?></span></td>
		</tr>

		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td style="border: 1px solid black;"><strong>Pincode : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_pincode']?></span></td>
		</tr>

		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td style="border: 1px solid black;"><strong>State : </strong><span style="text-transform: uppercase;"><?php echo $row['pd_state']?></span></td>
		</tr>

		<tr style="border: 1px solid black; border-collapse: collapse;">
			<td colspan="2" style="border: 1px solid black;"><strong>Religion : </strong><span style="text-transform: uppercase;"><?php echo $row['fa_mothr_religion']?></span></td>
		</tr>
	</table>
	<br>
	<table style="width: 55%; margin-left: 270px;">
		<tr>
	  		<td colspan="3">
	  		<strong style="margin-left: -20px; color:blue;">FAMILY DETAIL : </strong></td>
	  	</tr>
		<tr>
			<td style="border: 1px solid black; border-collapse: collapse; width: 30%;"></td>
			<td style="border: 1px solid black; border-collapse: collapse; width: 30%;"><strong>Father</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>Mother</strong></td>
		</tr>
		<!-- <tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>Name</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">nitin</span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">sunit</span></td>
		</tr> -->
		<tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>Occupation</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['fd_fathr_occup']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['fa_mothr_occup']?></span></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>Mobile</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['fd_fathr_mob']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['fa_mothr_mob']?></span></td>
		</tr>
		<!-- <tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>Designation</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php //echo $row['fa_mothr_religion']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php //echo $row['fa_mothr_religion']?></span></td>
		</tr> -->
		<tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>Income</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['fd_fathr_income']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">na</span></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>PAN</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['fd_fathr_pan']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">na</span></td>
		</tr>	
		<tr>
	  		<td colspan="3">
	  		<br>
	  		<strong style="margin-left: -20px; color:blue; text-transform: uppercase;">Name Of Exam which you want to appear : </strong></td>
	  	</tr>	
	  	<tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>Name Of Exam</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>YEAR</strong></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><strong>LANGUAGE</strong></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['es_upsc_exam']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['es_upsc_prel_year']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['es_upsc_lang']?></span></td>
		</tr>
		<tr>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['es_state_exam']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['es_state_prel_year']?></span></td>
			<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['es_state_lang']?></span></td>
		</tr>
		<tr>
			<td colspan="3"><strong>Choice Of Center : </strong>Indicate your order of preference again the centres given below for which you would like to be considered for admission.</td>
		</tr>
		<tr>
			<td><strong>Choice of center for exam : <?php echo $row['exam']?></strong></td>
			<td></td>
			<td><strong>Language medium of exam : </strong><span style="text-transform: uppercase;"><?php echo $row['es_state_lang']?></span></td>
		</tr>
	</table>
	<br>
	
	<table style="width: 55%; margin-left: 270px;">
		<tr>
	  		<td colspan="6">
	  		<strong style="margin-left: -20px; color:blue;">EDUCATION QUALIFICATION : </strong></td>
	  	</tr>
	  	<tr>
	  		<th style="border: 1px solid black; border-collapse: collapse;">Examinations <br> Center</th>
	  		<th style="border: 1px solid black; border-collapse: collapse;">School/College Name (University/Board)</th>
	  		<th style="border: 1px solid black; border-collapse: collapse;">Year</th>
	  		<th style="border: 1px solid black; border-collapse: collapse;">Percent</th>
	  		<th style="border: 1px solid black; border-collapse: collapse;">Rank</th>
	  		<!-- <th style="border: 1px solid black; border-collapse: collapse;">Is Pursing</th> -->
	  	</tr>

	  	<tr>
	  		<td style="border: 1px solid black; border-collapse: collapse;">SSC</td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_ssc_name']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_ssc_year']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_ssc_percent']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_ssc_rank']?></span></td>
	  		<!-- <td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">-</span></td> -->
	  	</tr>
	  	<tr>
	  		<td style="border: 1px solid black; border-collapse: collapse;">HSC</td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_hsc_name']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_hsc_year']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_hsc_percent']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_hsc_rank']?></span></td>
	  		<!-- <td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">-</span></td> -->
	  	</tr>
	  	<tr>
	  		<td style="border: 1px solid black; border-collapse: collapse;">GRADUATION</td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_gd_inst']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_gd_year']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_gd_percent']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_gd_rank']?></span></td>
	  		<!-- <td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">-</span></td> -->
	  	</tr>
	  	<tr>
	  		<td style="border: 1px solid black; border-collapse: collapse;">POST GRADUATION</td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_pg_inst']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_pg_year']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_pg_percent']?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['ed_pg_rank']?></span></td>
	  		<!-- <td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">-</span></td> -->
	  	</tr>
	  	<tr>
	  		<td colspan="6"><br><strong style="margin-top:20px; margin-left: -20px; color:blue;">PAST EXAMS : </strong></td>
	  	</tr>
	  	<tr>
	  		<th style="border: 1px solid black; border-collapse: collapse;"><strong>Month & Year</strong></th>
	  		<th style="border: 1px solid black; border-collapse: collapse;"><strong>Exam Name</strong></th>
	  		<th style="border: 1px solid black; border-collapse: collapse;"><strong>Roll No.</strong></th>
	  		<th style="border: 1px solid black; border-collapse: collapse;"><strong>Pass/Fail</strong></th>
	  		<th style="border: 1px solid black; border-collapse: collapse;" colspan="2"><strong>Optional Subject</strong></th>
	  	</tr>
	  	<tr>
	  		<td style="border: 1px solid black; border-collapse: collapse;"></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;" colspan="2"></td>
	  	</tr>
	  	<!-- <tr>
	  		<td colspan="6"><br><strong style="margin-top:20px; margin-left: -20px; color:blue;">CET CENTRE : </strong></td>
	  	</tr>
	  	<tr>
	  		<td colspan="2" style="border: 1px solid black; border-collapse: collapse;"><strong>Know About CET : </strong><span style="text-transform: uppercase;">internet/website</span></td>
	  		<td colspan="4" style="border: 1px solid black; border-collapse: collapse;"><strong>Language Medium : </strong><span style="text-transform: uppercase;">english</span></td>
	  	</tr>
	  	<tr>
	  		<td colspan="6" style="border: 1px solid black; border-collapse: collapse;"><strong>Centre Preference : </strong><span style="text-transform: uppercase;">pune</span>&nbsp;&nbsp; <strong>Admit Card Generated :</strong><span style="text-transform: uppercase;">no</span></td>
	  	</tr> -->
	  	<tr>
	  		<td colspan="6"><br><strong style="margin-top:20px; margin-left: -20px; color:blue;">OTHER INFORMATION : </strong></td>
	  	</tr>
	  	<tr>
	  		<td  style="border: 1px solid black; border-collapse: collapse;"><strong>Activity : </strong></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><strong>Zonal/National/Int. Level</strong></td>
	  		<td colspan="2" style="border: 1px solid black; border-collapse: collapse;"><strong>Year</strong></td>
	  		<td colspan="2" style="border: 1px solid black; border-collapse: collapse;"><strong>Position</strong></td>
	  	</tr>
	  	<tr>
	  		 <td  style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['other_activity']?></span></td>
	  		 <td  style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['other_national_level']?></span></td>
	  		 <td colspan="2" style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['other_year']?></span></td>
	  		 <td colspan="2"  style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row['other_pos']?></span></td>
	  	</tr>
	</table>
	<table style="width: 55%; margin-left: 270px;">
		<tr>
	  		<td colspan="6"><BR><strong style="margin-top:20px; margin-left: -20px; color:blue;">
	  		<!-- <br><br><br><br><br><br> -->

	  		REFERENCE OF TWO PERSON (OTHER THAN FAMILY MEMBER) : </strong></td>
	  	</tr>
	  	<tr>
	  		<td style="width:5%; border: 1px solid black; border-collapse: collapse;"><strong>#</strong></td>
	  		<td style="width:40%; border: 1px solid black; border-collapse: collapse;"><strong>Name/Address</strong></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><strong>City-Pincode</strong></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><strong>Mobile & Tel.No.</strong></td>
	  		
	  	</tr>

	  	<?php
	  			$query = "SELECT * FROM `educ_refdetail_reg`";
	  			$result = mysqli_query($conn,$query);
	  			$d = mysqli_num_rows($result);
	  			while ($row1=mysqli_fetch_array($result)) {?>
	  	<tr>
	  		<td style="width:5%; border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;">1</span></td>
	  		<td style="width:40%; border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"><?php echo $row1['ref1_name']. '<br/>'. $row1['ref1_addr'] ?></span></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"></span><?php echo $row1['ref1_city']?></td>
	  		<td style="border: 1px solid black; border-collapse: collapse;"><span style="text-transform: uppercase;"></span><?php echo $row1['ref1_mobile']. '<br/>'. $row1['ref1_telephone'] ?></td>
	  		
	  	</tr>
	  		<?php }?>
	  	<tr>

	  		<td colspan="6"><br><strong style="margin-top:50px; margin-left: -20px; color:blue;">
	  		<!-- <br><br><br><br><br><br><br><br> -->
	  		MARKSHEETS AND SIGNATURE UPLOADED ARE AS SHOWN BELOW : </strong></td>
	  	</tr>
	  	<tr>
	  		<td colspan="2" style="border: 1px solid black; border-collapse: collapse;">
	  			<h3 style="color:red;">SSC Marksheet : </h3>
	  			<img src="images/education/Marksheet/<?php echo $row['ed_prof_ssc_marksheet']; ?>" width="350" height="400">
	  		</td>
	  		<td colspan="3" style="border: 1px solid black; border-collapse: collapse;">
	  			<h3 style="color:red;">HSC Marksheet : </h3>
	  			<img src="images/education/Marksheet/<?php echo $row['ed_prof_hsc_marksheet']; ?>" width="350" height="400">
	  		</td>
	  	</tr>
	  	<tr>
	  		<td colspan="2" style="border: 1px solid black; border-collapse: collapse;">
	  			<h3 style="color:red;">Graduation : </h3>
	  			<img src="images/education/Marksheet/<?php echo $row['ed_prof_gd_marksheet']; ?>" width="350" height="400">
	  		</td>
	  		<td colspan="3" style="border: 1px solid black; border-collapse: collapse;">
	  			<h3 style="color:red;">Post Graduation Marksheet : </h3>
	  			<img src="images/education/Marksheet/<?php echo $row['ed_prof_pg_marksheet']; ?>" width="350" height="400">
	  		</td>
	  	</tr>
	  	<tr>
	  		<td colspan="2" style="border: 1px solid black; border-collapse: collapse;">
	  			<h3 style="color:red;">Other Marksheet : </h3>
	  			 <img src="images/education/Marksheet/<?php echo $row['ed_prof_other_cert']; ?>" width="350" height="400">  
	  		</td>
	  		<td colspan="3" style="border: 1px solid black; border-collapse: collapse;">
	  			<h3 style="color:red;">Signature : </h3>
	  			<img src="images/education/Marksheet/<?php echo $row['ed_prof_scan_sign']; ?>" width="350" height="400">
	  		</td>
	  	</tr>
	</table>

</div>

	 <div class="row">
                    <div class="col-lg-offset-4">
                  <button onclick="javascript:demoFromHTML();">Download Invoice as PDF</button></div><br><br>
                </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
    <script src="http://html2canvas.hertzen.com/build/html2canvas.js"></script>
   <!--  <script src="//mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
    

   <script src='js/jspdf.debug.js'></script> -->
	<script src='js/html2pdf.js'></script>
   

 <!--  <script>
		var pdf = new jsPDF('p', 'pt', 'letter');
		var canvas = pdf.canvas;
		var width = 600;
		//canvas.width=8.5*72;
		document.body.style.width=width + "px";

		html2canvas(document.body, {
		    canvas:canvas,
		    onrendered: function(canvas) {
		        var iframe = document.createElement('iframe');
		        iframe.setAttribute('style', 'position:absolute;top:0;right:0;height:100%; width:100%');
		        document.body.appendChild(iframe);
		        iframe.src = pdf.output('datauristring');

		       //var div = document.createElement('pre');
		       //div.innerText=pdf.output();
		       //document.body.appendChild(div);
		    }
		});
     </script> -->
    
   <!--  <script>
        var pdf = new jsPDF('p', 'pt', 'letter');
        var canvas = pdf.canvas;
        canvas.height = 72 * 11;
        canvas.width= 72 * 8.5;;

        // can also be document.body
        //var html = '<html><body>Hello <strong> World</strong></body></html>';

        html2pdf($("#invoice"), pdf, function(pdf) {
                pdf.output('dataurlnewwindow');
        });
</script> -->


    <script>
    
  /*  
    
    function demoFromHTML() {*/
        
   /*     
          html2canvas($("#invoice"), {
              
              
            onrendered: function(canvas) {    
               
                var imgData = canvas.toDataURL(
                    'image/png');              
              
 
          var imgWidth = 210; 
          var pageHeight = 295;  
          var imgHeight = canvas.height * imgWidth / canvas.width;
          var heightLeft = imgHeight;
            
            var filename = 'invoice1';
                
          var doc = new jsPDF('p', 'mm');
          var position = 0;

          doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
          heightLeft -= pageHeight;

          while (heightLeft >= 0) {
            position = heightLeft - imgHeight;
            doc.addPage();
            doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;
          }


          var string = doc.output('datauristring');

var iframe = "<iframe width='100%' height='100%' src='" + string + "'></iframe>"

var x = window.open();
x.document.open();
x.document.write(iframe);
x.document.close();*/

           //doc.output('datauri');
         // doc.save(filename + '.pdf');
          


           /* }
        });
        */

/*}*/
    
    </script>
    
</body>




</html>
<?php
// include autoloader
$html = ob_get_contents();
ob_get_clean();


require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$html = file_get_contents("education-appl-form.php");
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

$f;
$l;
if(headers_sent($f,$l))
{
    echo $f,'<br/>',$l,'<br/>';
    die('now detect line');
}

// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream("codexworld",array("Attachment"=>0));
?>