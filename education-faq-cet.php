<?php
	include 'conn.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
</head>

<body class="">
<div id="wrapper">
 <?php include 'preloaders.php'; ?>
  <header id="header" class="header">
      <?php include 'education-header.php'; ?>
    
      <?php include 'education-menu.php'; ?>
  </header>
  
  <div class="container-fluid"> 
    <?php include 'education-logo.php'; ?>
     <div class="row register_header">
        <center>
          <h2 class="reg_heading">FAQ's</h2>
        </center>
     </div><br>
     <div class="row" style="background-color: rgba(4, 145, 220, 0.01);">
       <div class="col-md-10 col-md-offset-1">
         <article class="post clearfix mb-30 pb-30">
                       <ul class="nav nav-tabs top_nav_tab">
                          <li   class="active"><a class="faq_tab1 edu_tab_head"  data-toggle="tab" href="#home">ABOUT UPSC</a></li>
                          <li><a  class="faq_tab2 edu_tab_head  top_tab_head_left" data-toggle="tab" href="#menu1">AF& CET</a></li>
                          <li><a  class="faq_tab3 edu_tab_head  top_tab_head_left" data-toggle="tab" href="#menu2">ABOUT HOW TO PREPARATION</a></li>
                        </ul>
                        <div class="tab-content top_tab" style="margin-top: 1px;">
                          	<div id="home" class="tab-pane fade in active">
	                          	<br>
	                          	<div class="panel-group-edu-stl" id="accordion"><!-- Panel Start -->
	                          		<?php 
	                          			$query="select * from education_FAQ where cet_type='CET' and cet_tab='ABOUT UPSC' ORDER BY `cet_id` DESC";
	                          			$result=mysqli_query($conn, $query);
	                          			static $n=1;
	                          			while($row=mysqli_fetch_array($result)){
	                          		?>
									<div class="panel panel-default panel-default-edu-stl"><!-- Data Start Here -->
									    <div class="panel-heading panel-heading-edu-stl">
									      <h4 class="panel-title-edu-stl">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $n; ?>">
									        <strong>Q. <?php echo $n; ?> : </strong>&nbsp; 
									        <?php echo $row[3]; ?>
									        </a>
									      </h4>
									    </div>
									    <div id='collapse<?php echo $n; ?>' class="panel-collapse collapse">
									      <div class="panel-body">
									      <strong>&nbsp; &nbsp;&nbsp; &nbsp;Ans : </strong>&nbsp;
									      <?php echo $row[4]; ?></div>
									    </div>
								    </div><!-- Data End Here -->
								    <?php $n++; } 
								    ?>
								</div><!-- Panel End -->
                          	</div>
                          	<div id="menu1" class="tab-pane fade">
                          		<br>
	  							<div class="panel-group-edu-stl" id="accordion"><!-- Panel Start -->
	  								<?php 
	                          			$query="select * from education_FAQ where cet_type='CET' and cet_tab='AF & CET' ORDER BY `cet_id` DESC";
	                          			$result=mysqli_query($conn, $query);
	                          			static $n=1;
	                          			while($row=mysqli_fetch_array($result)){
	                          		?>
									<div class="panel panel-default panel-default-edu-stl"><!-- Data Start Here -->
									    <div class="panel-heading panel-heading-edu-stl">
									      <h4 class="panel-title-edu-stl">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $n; ?>">
									        <strong>Q. <?php echo $n; ?> : </strong>&nbsp; 
									        <?php echo $row[3]; ?>
									        </a>
									      </h4>
									    </div>
									    <div id='collapse<?php echo $n; ?>' class="panel-collapse collapse">
									      <div class="panel-body">
									      <strong>&nbsp; &nbsp;&nbsp; &nbsp;Ans : </strong>&nbsp;
									      <?php echo $row[4]; ?></div>
									    </div>
								    </div><!-- Data End Here -->
								    <?php $n++; } 
								    ?>
								</div><!-- Panel End -->
                          	</div>
                          <div id="menu2" class="tab-pane fade">
                            	<br>
                            	<div class="panel-group-edu-stl" id="accordion"><!-- Panel Start -->
									<?php 
	                          			$query="select * from education_FAQ where  cet_type='CET' and cet_tab='ABOUT HOW TO PREPARATION' ORDER BY `cet_id` DESC";
	                          			$result=mysqli_query($conn, $query);
	                          			static $n=1;
	                          			while($row=mysqli_fetch_array($result)){
	                          		?>
									<div class="panel panel-default panel-default-edu-stl"><!-- Data Start Here -->
									    <div class="panel-heading panel-heading-edu-stl">
									      <h4 class="panel-title-edu-stl">
									        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $n; ?>">
									        <strong>Q. <?php echo $n; ?> : </strong>&nbsp; 
									        <?php echo $row[3]; ?>
									        </a>
									      </h4>
									    </div>
									    <div id='collapse<?php echo $n; ?>' class="panel-collapse collapse">
									      <div class="panel-body">
									      <strong>&nbsp; &nbsp;&nbsp; &nbsp;Ans : </strong>&nbsp;
									      <?php echo $row[4]; ?></div>
									    </div>
								    </div><!-- Data End Here -->
								    <?php $n++; } 
								    ?>
								</div><!-- Panel End -->
                          </div>
                      </article>
       </div>
     </div>
  </div>
  </div>
    <?php include"footer.php"; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>
</html>
