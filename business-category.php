<?php
  include 'conn.php';
  session_start();
  if($_GET['category'])
  {

    $id = $_GET['category'];
    $query = "SELECT * FROM `buisness_category` WHERE cat_id='$id '";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $cat_val = $row['cat_name'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<?php include "link.php"; ?>
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
      
        <!-- searching-header start  -->
      <?php include "searching-header.php";?>
    <!-- searching-header end  --><br><br>

	<div class="container">
		<div class="row">
       <div class="col-md-9">
                <div id="txt"></div>
              </div>
			<div class="col-md-9 hide1">
				<div class="col-md-10 col-md-offset-1" style="margin-bottom: 40px; border-top: 1px solid rgba(216,195,195,0.38); border-bottom: 1px solid rgba(216,195,195,0.38); border-left: 1px rgba(216,195,195,0.38); border-right: 5px solid rgba(32, 152, 209, 0.78); border-left: 1px solid rgba(216, 195, 195, 0.38); ">
				<h3>CATEGORIES</h3>
        <a style="float: right; margin-top: -55px;" href="business.php"><i class="back_arrow fa fa-arrow-circle-o-left" aria-hidden="true" ></i></a>
				<img src="images/business/img29.png" class="jb_category-underline" alt="Cinque Terre" width="1300" height="7">
				<div>
				<ul class="jb_breadcrumb">
		            <li><a href="index.php"><button type="button" class="btn btn-info jb_btn-arrow-right">Home</button></a></li>
					<li><a href="business.php"><button type="button" class="btn btn-info jb_btn-arrow-right">Business</button></a></li>
					<li><a href="business-category.php"><a href="business-category.php"><button type="button" class="btn btn-info jb_btn-arrow-right"><?php echo $cat_val; ?></button></a>P</a></li>
					<ul class="dropdown">
					</ul>
                </ul>
                </div>
                <hr>
                <form>
					<div class="row">
						<div class=" col-sm-2 col-md-2">
							<label class="control-label jb_category-controls">Country : </label>
						</div>
						<div class="col-sm-4 col-md-4 ">
							<select class="form-control jb_input-box-height" id="Country-1" name="Country-1" onChange="getState(this.value);">
							<option value="">Country</option>
							 <?php include 'conn.php';
                            $sql = "SELECT * FROM countries";
                            $result = mysqli_query($conn, $sql);
                            while ($row=mysqli_fetch_array($result)) { 
                         ?>
                           <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname']; }?></option>                
							</select>
						</div>
					</div><br>
					<div class="row">
						<div class=" col-sm-2 col-md-2">
							<label class="control-label jb_category-controls">State : </label>
						</div>
						<div class="col-sm-4 col-md-4">
							<select class="form-control jb_input-box-height" id="State-1" name="State-1" onChange="getcity(this.value);">
								<option value="">State</option>
	
							</select>
						</div>
					</div><br>
					<div class="row">
						<div class=" col-sm-2 col-md-2">
							<label class="control-label jb_category-controls">City : </label>
						</div>
						<div class="col-sm-4 col-md-4">
							<select class="form-control jb_input-box-height" id="city-1" name="city-1" onchange="showUser(this.value)" >
								<option value="">City</option>
							</select>    
						</div>
					</div>
                	<div class="row">
						
						</div>
					</div>
                </form><br><br>

               
					<!-- <div class="row">
						
						<br><br>
						
					</div><br> -->
          <div id="resultdata"></div>
					<div class="row jb_new-line"></div><br>  
					<div class="row" id="txtHint" style="padding:15px;">
						
					</div><br>
					
					<!-- <div class="row">
		                 <ul class="pagination box-responsive">
			                  <li><a href="#">1</a></li>
			                  <li><a href="#">2</a></li>
			                  <li><a href="#">3</a></li>
			                  <li><a href="#">4</a></li>
			                  <li><a href="#">next</a></li>
		                 </ul>
	               </div>  --><input type="hidden" id="cat" value="<?php echo $id; ?>">
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
        $("#State-1").html(data);
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
        $("#city-1").html(data);
    }
    });
}
</script>
<script>
function showUser(str) {
   var cat = $('#cat').val();
 // alert(cat);
  
  $.ajax({
    url:'getBanking.php',
    type:'POST',
    data:{ str:str, cat: cat },
    success:function(data)
    {  
        $('#resultdata').html(data);
       
    }
  });
    /*var d =  "<?= $id; ?>";
   
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getBanking.php?q="+str+"&a="+d,true);
        xmlhttp.send();
    }*/
}
</script>

</body>
</html>