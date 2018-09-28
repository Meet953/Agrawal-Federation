 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<?php



  session_start();
include 'conn.php';


   $Name3=$_POST['Name3'];
   $Category3=$_POST['Category3'];
   $city3=$_POST['city3'];
   $Country3=$_POST['Country3'];
   $State3=$_POST['State3'];

   if ($Name3 == "") {
            ?>
          <div class="alert alert-danger">Enter "Name" It's Mandetory</div>
          <?php

          exit;
        }
        elseif ($Category3 == "") {
            ?>
          <div class="alert alert-danger">Select "Category" It's Mandetory</div>
          <?php

          exit;
        }
        else if (($Country3 == "") && ($State3 == "") && ($city3 == "") && ($Category3 == "") ) {
            ?>
          <div class="alert alert-danger">Select "Another Atleast One More Field" It's Mandetory</div>
          <?php
          exit;
        }
        else{
 
    if(($Country3 == "") )
    {
       $query="SELECT distinct * FROM user_registration  AS a INNER JOIN advertiser_registration AS b ON b.reg_id = a.user_id  WHERE (a.user_fname LIKE '$Name3%') AND (b.Category = '$Category3')" ;

       
    }
    else if(($State3 == "") && ($city3 == ""))
    {
       $query="SELECT distinct * FROM user_registration  AS a INNER JOIN advertiser_registration AS b ON b.reg_id = a.user_id  WHERE (a.user_fname LIKE '$Name3%') AND  (b.Country= '$Country3')  AND (b.Category = '$Category3')" ;

       
    }
     else if(($city3 == "") )
    {
       $query="SELECT distinct * FROM user_registration  AS a INNER JOIN advertiser_registration AS b ON b.reg_id = a.user_id  WHERE (a.user_fname LIKE '$Name3%') AND  (b.Country= '$Country3') AND (b.State='$State3') AND (b.Category = '$Category3')"  ;

       
    }
    else
    {
      $query="SELECT distinct * FROM user_registration  AS a INNER JOIN advertiser_registration AS b ON b.reg_id = a.user_id  WHERE (a.user_fname LIKE '$Name3%') AND  (b.Country= '$Country3') AND (b.State='$State3') AND (b.city = '$city3') AND (b.Category = '$Category3')" ;

      
    }

    ?>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Records</th>
            </tr>
        </thead>
        <tbody >
    <?php

    $result=mysqli_query($conn,$query);
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
   
   
    <?php }} }?> 

<?php  mysqli_close($conn);
?>
</tbody>
</table>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
