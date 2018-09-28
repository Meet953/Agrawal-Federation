<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "link.php"; ?>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
	 <?php include "header.php"; ?>
	<?php include "business-menu.php"; ?>
	 <div class="container-fluid" >
      <div class="row jb_search_box">
      
       <?php include "searching-header.php";?>
      <br><br>
	<div class="container">
		<div class="row">
      <div class="col-md-9">
                <div id="txt"></div></div>
			<div class="col-md-9 hide1">

       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Records</th>
            </tr>
        </thead>
        <tbody >
				  <?php 
              $sql="SELECT * FROM `advertiser_registration` WHERE `city`=2707";
$result = mysqli_query($conn,$sql);
$check_user = mysqli_num_rows($result);


if( $check_user <= 0){ ?>
       <div class="col-md-12"><center><h2>No Record Found</h2></center></div>
    <?php  } 
      else{
    while($row=mysqli_fetch_array($result)){
      ?>
      <tr>
        <td>
          
    <div class="col-md-12"  style="border-right-style:groove; border-color:red; border-width:3px; width: 101%;" >
    <div class="col-md-3 col-md-offset-1" style="margin-left: -44px;">
              <img src="images/business/<?php echo $row['Logo']; ?>" class="img-thumbnail jb_img1-border" alt="Cinque Terre" width="145" height="90" >
            </div>
<div class="col-md-8 jb_info-color">
              <center style="margin-top: 10px;"><h4 class="jb_category-info"><?php echo  $row['Name'];?></h4></center>
              <i class="fa fa-phone-square" aria-hidden="true" style="margin-left: 100px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Contact No:". $row['Mobile']; ?><br>
              <i class="fa fa-envelope" aria-hidden="true" style="margin-left: 100px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Email:".$row['Email'];?><br>
              <i class="fa fa-map-marker" aria-hidden="true" style="margin-left: 100px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Address:".$row['Address1'];?><br>
           
            </div></div>
            <div class="row jb_new-line"></div><br> 
   
        </td>
      </tr>
   
    <?php }}?>
<?php  mysqli_close($conn);
?>
       </tbody></table>   
        </div>
        <?php include 'business-ad.php'; ?>
		</div>
	</div>
	
	<?php include "footer.php"; ?>
	<script>
    function getState(val) {
    $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'cid='+val,
    success: function(data){
        $("#State1").html(data);
    }
    });
}
</script>

<script>
    function getcity(val) {
    $.ajax({
    type: "POST",
    url: "get_city.php",
    data:'sid='+val,
    success: function(data){
        $("#city1").html(data);
    }
    });
}
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>